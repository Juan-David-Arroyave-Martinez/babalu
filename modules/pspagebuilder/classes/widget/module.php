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

class PsWidgetModule extends PsWidgetPageBuilder {

	public $name = 'alert';
	public $group = 'typo';
	public $is_footer = 1;

	public static function getWidgetInfo()
	{
		return array('label' => ('Load Prestashop Module'), 'explain' => 'Load Prestashop Module as Widget', 'group' => 'prestashop');
	}

	public function renderForm($data)
	{
		$helper = $this->getFormHelper();
		$id_shop = Context::getContext()->shop->id;

		if (isset($data['params']['hookmodule']))
		{
			$hid = Hook::getIdByName($data['params']['hookmodule']);

			if ($hid)
			{
				$hms = Hook::getModulesFromHook($hid);

				foreach ($hms as $hm)
				{
					if ($data['params']['loadmodule'] == $hm['name'])
					{
						$id_module = $hm['id_module'];
						$module = Module::getInstanceById($id_module);
						if (Validate::isLoadedObject($module))
							!$module->unregisterHook((int)$hid, array($id_shop));
					}
				}
			}
		}

		$modules = Module::getModulesInstalled(0);

		$output = array();
		foreach( $modules as $mods ){
			$mod = Module::getInstanceByName( $mods['name'] );

			if( $mod && method_exists( $mod, 'renderWidget') ){
				$output[] = $mods;
			}
		}

 		$modules = $output;

		$output = array();

		$hooks = array(
			'displayHome',
			'displayLeftColumn',
			'displayRightColumn',
			'displayTop',
			'displayHeaderRight',
			'displaySlideshow',
			'topNavigation',
			'displayMainmenu',
			'displayPromoteTop',
			'displayRightColumn',
			'displayLeftColumn',
			'displayHome',
			'displayFooter',
			'displayBottom',
			'displayContentBottom',
			'displayFootNav',
			'displayFooterTop',
			'displayFooterBefore',
			'displayMapLocal',
			'displayFooterBottom',
		);


		//echo '<Pre>' . print_r( $modules ,1 );die;
		foreach ($hooks as $hook)
			$output[] = array('name' => $hook, 'id' => $hook);

		$this->fields_form[1]['form'] = array(
			'legend' => array(
				'title' => $this->l('Widget Form.'),
			),
			'input' => array(
				array(
					'type' => 'select',
					'label' => $this->l('Select A Module Widget'),
					'name' => 'loadmodule',
					'options' => array('query' => $modules,
						'id' => 'name',
						'name' => 'name'),
					'default' => '1',
					'desc' => $this->l('Select A Module is used as widget. the hook of this module was unhooked.')
				)
			),
			'submit' => array(
				'title' => $this->l('Save'),
				'class' => 'button'
			)
		);

		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
		$a = $this->getConfigFieldsValues($data);

		$helper->tpl_vars = array(
			'fields_value' => $a,
			'languages' => Context::getContext()->controller->getLanguages(),
			'id_language' => $default_lang
		);

		return $helper->generateForm($this->fields_form);
	}

	public function renderContent($setting)
	{ 


		$t = array(
			'name' => '',
			'loadmodule' => '',
			'hookmodule' => ''
		);

		$setting = array_merge($t, $setting);

		$data = $this->l( 'Could not render content of widget: ' ).$setting['loadmodule'];

	//	$data = PsPagebuilderHelper::moduleExec($setting['hookmodule'], $setting['loadmodule']);
		
		$mod = Module::getInstanceByName( $setting['loadmodule'] );
 
		if( $mod && method_exists($mod, 'renderWidget' ) ){
			$data = $mod->renderWidget( null, array() );
		}
 
		$setting['content'] = $data;
		$setting['tabname'] = 'blogs'.time();

		$output = array('type' => 'module', 'data' => $setting);

		return $output;
	}

}
