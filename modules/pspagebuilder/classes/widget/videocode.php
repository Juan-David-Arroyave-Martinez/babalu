<?php
/**
 * Pts Prestashop Theme Framework for Prestashop 1.6.x
 *
 * @package   pspagebuilder
 * @version   5.0
 * @author    http://www.prestabrain.com
 * @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
 *               <info@prestabrain.com>.All rights reserved.
 * @license   GNU General Public License version 2
 */

class PsWidgetVideocode extends PsWidgetPageBuilder {

	public $name = 'videocode';
	public $group = 'social';
	public $is_menu = 1;

	public static function getWidgetInfo()
	{
		return array('label' => 'Video Code', 'explain' => 'Make Video widget via putting Youtube Code, Vimeo Code', 'group' => 'others');
	}

	public function renderForm($data)
	{
		$helper = $this->getFormHelper();

		$this->fields_form[1]['form'] = array(
			'legend' => array(
				'title' => $this->l('Widget Form.'),
			),
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Video Link'),
					'name' => 'video_link',
					'default' => 'https://www.youtube.com/watch?v=fCr44sj95bo',
					'autoload_rte' => false,
					'desc' => $this->l('Copy Youtube link or vimeo link and put here')
				),
				array(
					'type' => 'text',
					'label' => $this->l('Sub Info'),
					'name' => 'subinfo',
					'default' => '300',
					'lang' => true,
				),
			),
			'submit' => array(
				'title' => $this->l('Save'),
				'class' => 'button'
			)
		);
		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

		$helper->tpl_vars = array(
			'fields_value' => $this->getConfigFieldsValues($data),
			'languages' => Context::getContext()->controller->getLanguages(),
			'id_language' => $default_lang
		);

		return $helper->generateForm($this->fields_form);
	}

	public function getYoubetuID($url)
	{
		$pattern = '%^# Match any youtube URL
		        (?:https?://)?  # Optional scheme. Either http or https
		        (?:www\.)?      # Optional www subdomain
		        (?:             # Group host alternatives
		          youtu\.be/    # Either youtu.be,
		        | youtube\.com  # or youtube.com
		          (?:           # Group path alternatives
		            /embed/     # Either /embed/
		          | /v/         # or /v/
		          | /watch\?v=  # or /watch\?v=
		         )             # End path alternatives.
		       )               # End host alternatives.
		        ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
		        $%x';
		$result = preg_match($pattern, $url, $matches);
		if (false !== $result)
			return $matches[1];
		return false;
	}

	public function getHostInfo($vid_link)
	{
		// youtube get video id
		if (preg_match('#youtu#', $vid_link))
			return array('host_name' => 'youtube', 'original_key' => $this->getYoubetuID($vid_link));
		elseif (preg_match('#vimeo#', $vid_link))
			if (preg_match('#(?<=/)([\d]+)#', $vid_link, $matches))
				return array('host_name' => 'vimeo', 'original_key' => $matches[0]);
		return false;
	}

	public function renderContent($setting)
	{
		$t = array(
			'name' => '',
			'video_link' => '',
			'subinfo' => ''
		);

		$setting = array_merge($t, $setting);

		$video = $this->getHostInfo($setting['video_link']);

		$setting['video_link'] = '';

		if (isset($video['host_name']))
		{
			$setting['video_link'] = $video['host_name'] == 'youtube' ? '//www.youtube.com/embed/' : '//player.vimeo.com/video/';
			$setting['video_link'] .= $video['original_key'];
		}
		$setting['subinfo'] = $this->getValueByLang($setting, 'subinfo');

		$output = array('type' => 'video', 'data' => $setting);
		return $output;
	}

}
