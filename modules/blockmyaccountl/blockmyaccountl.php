<?php
/*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class BlockMyAccountl extends Module
{
	private $_html = '';
	public function __construct()
	{
		$this->name = 'blockmyaccountl';
		$this->tab = 'front_office_features';
		$this->version = '3.0.0';
		$this->author = 'RSI';
		$this->need_instance = 0;

		parent::__construct();
        if (_PS_VERSION_ > '1.6.0.0')
	    $this->bootstrap = true;
		$this->displayName = $this->l('My Account block with login');
		$this->description = $this->l('Displays a block with links relative to a user\'s account. - www.catalogo-onlinersi.net');
		if (_PS_VERSION_ < '1.5')
			require(_PS_MODULE_DIR_.$this->name.'/backward_compatibility/backward.php');
	}

	public function install()
	{
		if(_PS_VERSION_> "1.5.0.0"){
			if (!$this->addMyAccountBlockHookl() 
				|| !parent::install() 
				|| !$this->registerHook('displayLeftColumn') 
				|| !$this->registerHook('displayHeader')
				|| !$this->registerHook('actionModuleRegisterHookAfter')
				|| !$this->registerHook('actionModuleUnRegisterUnHookAfter'))
				return false;
			return true;
		}
		else
		{
			if (!$this->addMyAccountBlockHookl() 
				|| !parent::install() 
				|| !$this->registerHook('leftColumn') 
				|| !$this->registerHook('header')){
				return false;
			}
		    return true;
			}
	}

	public function uninstall()
	{
		return (parent::uninstall() && $this->removeMyAccountBlockHookl());
	}
	public function displayForm()
	{
		
  global $cookie;
  
   
			
  $defaultLanguage = intval(Configuration::get('PS_LANG_DEFAULT'));
		$languages = Language::getLanguages();
		$iso = Language::getIsoById($defaultLanguage);
		$divLangName = 'link_label';
    $this->_html .= '
		<fieldset>
  <form action="'.$_SERVER['REQUEST_URI'].'" method="post" enctype="multipart/form-data">
	
		
	
	
  			<center>	<a href="../modules/blockmyaccountl/moduleinstall.pdf">README</a></center><br/>	
			<center>	<a href="../modules/blockmyaccountl/termsandconditions.pdf">TERMS</center></a><br/>	
			<p>Other products</p>
  							<object type="text/html" data="http://catalogo-onlinersi.net/modules/productsanywhere/images.php?idproduct=&desc=yes&buy=yes&type=home_default&price=yes&style=false&color=10&color2=40&bg=ffffff&width=800&height=310&lc=000000&speed=5&qty=15&skip=29,14,42,44,45&sort=1" width="800" height="310" style="border:0px #066 solid;"></object>
<p>Video</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/-o396YgEYCE" frameborder="0" allowfullscreen></iframe>
  		</form>
		
    </fieldset>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<fieldset><legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Contribute').'</legend>
				<p class="clear">'.$this->l('You can contribute with a donation if our free modules and themes are usefull for you. Clic on the link and support us!').'</p>
				<p class="clear">'.$this->l('For more modules & themes visit: http://catalogo-onlinersi.ne').'</p>
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HMBZNQAHN9UMJ">
<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/scr/pixel.gif" width="1" height="1">
	</fieldset>
</form>
	';
  

  
  

	
 return $this->_html;				
	}
	
	
private function _displayInfo()
	{
		return $this->display(__FILE__, 'views/templates/hook/infos.tpl');
	}

	private function _displayAdds()
	{
		return $this->display(__FILE__, 'views/templates/hook/adds.tpl');
	}
	public function getContent()
	{
		


	if (_PS_VERSION_ < '1.6.0.0')
return $this->displayForm();
else
return $this->_displayInfo().$this->_displayAdds();
	}
	public function hookActionUnModuleRegisterHookAfter($params)
	{
		return $this->hookActionModuleRegisterHookAfter($params);
	}

	public function hookActionModuleRegisterHookAfter($params)
	{
		if ($params['hook_name'] == 'displayMyAccountBlockl')
			$this->_clearCache('blockmyaccountl.tpl');
	}

	public function hookDisplayLeftColumn($params)
	{
	

		$this->smarty->assign(array(
			'voucherAllowed' => CartRule::isFeatureActive(),
			'returnAllowed' => (int)Configuration::get('PS_ORDER_RETURN'),
				'psversion' => _PS_VERSION_,
			'logged'=>$this->context->customer->isLogged(),
			'HOOK_BLOCK_MY_ACCOUNT' => Hook::exec('displayMyAccountBlockl'),
		));
		return $this->display(__FILE__, 'views/templates/front/blockmyaccountl.tpl');
	}

	public function hookDisplayRightColumn($params)
	{
		return $this->hookDisplayLeftColumn($params);
	}
	
	public function hookDisplayFooter($params)
	{
		return $this->hookDisplayLeftColumn($params);
	}

	private function addMyAccountBlockHookl()
	{
		return Db::getInstance()->execute('INSERT IGNORE INTO `'._DB_PREFIX_.'hook` (`name`, `title`, `description`, `position`) VALUES (\'displayMyAccountBlockl\', \'My account block\', \'Display extra informations inside the "my account" block\', 1)');
	}

	private function removeMyAccountBlockHookl()
	{
		return Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'hook` WHERE `name` = \'displayMyAccountBlockl\'');
	}

	public function hookDisplayHeader($params)
	{
		$this->context->controller->addCSS(($this->_path).'blockmyaccountl.css', 'all');
	}
	public function hookLeftColumn($params)
	{
		global $smarty, $isLogged;
		
		 $back = Tools::getValue('back');
		  $this->context->smarty->assign('back', html_entity_decode($back));
		$smarty->assign(array(
			'voucherAllowed' => (int)(Configuration::get('PS_VOUCHERS')),
			'returnAllowed' => (int)(Configuration::get('PS_ORDER_RETURN')),
			
			'psversion' => _PS_VERSION_,
'isLogged'=>$params['cookie']->isLogged(),
			'HOOK_BLOCK_MY_ACCOUNT' => Module::hookExec('myAccountBlock')
		));
		return $this->display(__FILE__, 'views/templates/front/blockmyaccountl.tpl');
	}

	public function hookRightColumn($params)
	{
		return $this->hookLeftColumn($params);
	}
}


