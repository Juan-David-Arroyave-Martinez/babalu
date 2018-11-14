<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:28
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/stores/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7978760f54_62538298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16f77b4c8fa843f5402c2dfe3e550c4ad38467af' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/stores/helpers/form/form.tpl',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7978760f54_62538298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12502761335bec79786df260_51966609', 'script');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2418749535bec79786e3745_92354134', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15168298835bec7978724048_28925420', "other_input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_12502761335bec79786df260_51966609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_12502761335bec79786df260_51966609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		$('#latitude, #longitude').keyup(function() {
			$(this).val($(this).val().replace(/,/g, '.'));
		});
	});
<?php
}
}
/* {/block 'script'} */
/* {block "input"} */
class Block_2418749535bec79786e3745_92354134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_2418749535bec79786e3745_92354134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'latitude') {?>
	<div class="row">
		<div class="col-lg-3">
			<input type="text"
				<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
"<?php }?>
				name="latitude"
				id="latitude"
				value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" />
		</div>
		<div class="col-lg-1">
			<div class="form-control-static text-center"> / </div>
		</div>
		<div class="col-lg-3">
			<input type="text"
				<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
"<?php }?>
				name="longitude"
				id="longitude"
				value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value['longitude'],'html','UTF-8' ));?>
" />
		</div>
	</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "other_input"} */
class Block_15168298835bec7978724048_28925420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_input' => 
  array (
    0 => 'Block_15168298835bec7978724048_28925420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['key']->value == 'hours') {?>
    <div class="form-group">
      <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hours:','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</label>
      <div class="col-lg-9"><p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'e.g. 10:00AM - 9:30PM','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
</p></div>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value['days'], 'value', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
    <div class="form-group">
      <label class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</label>
      <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
          <div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
            <div class="col-lg-7">
              <input type="text" size="25"
                     name="hours[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]"
                     value="<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['hours'][$_smarty_tpl->tpl_vars['language']->value['id_lang']][$_smarty_tpl->tpl_vars['k']->value-1])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value['hours'][$_smarty_tpl->tpl_vars['language']->value['id_lang']][$_smarty_tpl->tpl_vars['k']->value-1],'html','UTF-8' ));
}?>"/>
            </div>
            <div class="col-lg-2">
              <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

                <i class="icon-caret-down"></i>
              </button>
              <ul class="dropdown-menu">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                  <li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"
                         tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            </div>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php } else { ?>
        <div class="col-lg-9"><input type="text" size="25" name="hours[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['hours'][$_smarty_tpl->tpl_vars['k']->value-1])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value['hours'][$_smarty_tpl->tpl_vars['k']->value-1],'html','UTF-8' ));
}?>"/>
        </div>
      <?php }?>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }
}
}
/* {/block "other_input"} */
}
