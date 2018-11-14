<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:28
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/backup/download/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79786d0a44_23143076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c86e8a0e9a61e80de49a5b0c62a50838f2faa5f4' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/backup/download/view.tpl',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79786d0a44_23143076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4619807255bec7978687651_00117987', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_4619807255bec7978687651_00117987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_4619807255bec7978687651_00117987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="panel">
		<h3>
			<i class="icon-download"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

		</h3>
		<p>
			<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['backup_url']->value;?>
">
				<i class="icon-download"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download the backup file (%s MB)','sprintf'=>array($_smarty_tpl->tpl_vars['backup_weight']->value),'d'=>'Admin.Advparameters.Feature'),$_smarty_tpl ) );?>

			</a>
		</p>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tip: You can also download this file from your FTP server. Backup files are located in the "/adminXXXX/backups" directory.','d'=>'Admin.Advparameters.Feature'),$_smarty_tpl ) );?>
</p>
	</div>

	<div class="row">
		<div class="alert alert-warning">
			<button data-dismiss="alert" class="close" type="button">×</button>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disclaimer before creating a new backup','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</p>
			<ol>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop is not responsible for your database, its backups and/or recovery.','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop is open-source software. You are using it at your own risk under the license agreement.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You should back up your data on a regular basis (both files and database).','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This function only backs up your database, not your files.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By default, your existing database tables will be dropped during the backup recovery (see "Backup options" below).','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Always verify the quality and integrity of your backup files!','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Always verify that your backup files are complete, up-to-date and valid, even if you had a success message appear during the backup process.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Always check your data.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Never restore a backup on a live site.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</li>
			</ol>
			<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&amp;add<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
" method="post" class="form-horizontal">
				<button type="submit" class="btn btn-default">
					<i class="icon-save"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I have read the disclaimer. Please create a new backup.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>

				</button>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="alert alert-info">
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to restore a database backup in 10 easy steps:','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</p>
			<ol>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set "Enable Shop" to "No" in the "Maintenance" page under the "Preferences" menu.','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download the backup from the list below or from your FTP server (in the folder "admin/backups").','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check the backup integrity: Look for errors, incomplete file, etc... Be sure to verify all of your data.','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please ask your hosting provider for "phpMyAdmin" access to your database.','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect to "phpMyAdmin" and select your current database.','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unless you enabled the "Drop existing tables" option, you must delete all tables from your current database.','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'At the top of the screen, please select the "Import" tab','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click on the "Browse" button and select the backup file from your hard drive.','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check the maximum filesize allowed (e.g. Max: 16MB)'),$_smarty_tpl ) );?>
<br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If your backup file exceeds this limit, contact your hosting provider for assistance. ','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</li>
				<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click on the "Go" button and please wait patiently for the import process to conclude. This may take several minutes.','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</li>
			</ol>
		</div>
	</div>
<?php
}
}
/* {/block "override_tpl"} */
}
