<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:25
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/logs/employee_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79754bdfa3_10411958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c51fa1610e33436a5c5a963fe5c37f4b9e9167ce' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79754bdfa3_10411958 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>

<?php }
}
