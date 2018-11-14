<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:32
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/statuses/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec797ce01d93_88210471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b16cbb3b8771328a13c3dbb0040091fb2408b71' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/statuses/helpers/form/form.tpl',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec797ce01d93_88210471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20102544685bec797cd5a385_90646072', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16516052585bec797cd6a066_84634951', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13678172555bec797cdf71e2_71941693', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4467992055bec797cdfeed3_56891136', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "label"} */
class Block_20102544685bec797cd5a385_90646072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_20102544685bec797cd5a385_90646072',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == "select_template") {?>
		<div id="tpl" style="display:<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['send_email']) && $_smarty_tpl->tpl_vars['fields_value']->value['send_email']) {?>block<?php } else { ?>none<?php }?>">
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "label"} */
/* {block "input"} */
class Block_16516052585bec797cd6a066_84634951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_16516052585bec797cd6a066_84634951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == "select_template") {?>
	<div class="col-lg-9">
		<div class="row">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
			<?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]);?>
			<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
				<div class="col-lg-8">
					<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
							id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_select_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
							<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>multiple="multiple" <?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?>size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])) {?>onchange="<?php echo $_smarty_tpl->tpl_vars['input']->value['onchange'];?>
"<?php }?>>
						<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['query'][$_smarty_tpl->tpl_vars['language']->value['iso_code']]) && $_smarty_tpl->tpl_vars['input']->value['options']['query'][$_smarty_tpl->tpl_vars['language']->value['iso_code']]) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'][$_smarty_tpl->tpl_vars['language']->value['iso_code']], 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'field_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
?>
											<?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>selected="selected"<?php }?>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php } else { ?>
										<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]) && ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']])) {?>selected="selected"<?php }?>
									<?php }?>
									data-preview="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['folder']];?>
"
								><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']],'html','UTF-8' ));?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</select>
				</div>
				<div class="col-lg-4">
					<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
						<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language_flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language_flag']->value) {
?>
						<li>
							<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language_flag']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language_flag']->value['name'];?>
</a>
						</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
					<button type="button" class="btn btn-default" onclick="viewTemplates('#template_select_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
/', '.html');">
						<i class="icon-eye-open"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

					</button>
				</div>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
			<div class="clearfix">&nbsp;</div>
			<div class="col-lg-9">
				<div class="alert alert-info">
				<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['hint'], 'hint');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
?>
						<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
<br/>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['input']->value['hint'];?>

				<?php }?>
				</div>
			</div>
		<?php }?>
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
/* {block "field"} */
class Block_13678172555bec797cdf71e2_71941693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_13678172555bec797cdf71e2_71941693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == "select_template") {?>
		</div>
	<?php }
}
}
/* {/block "field"} */
/* {block "script"} */
class Block_4467992055bec797cdfeed3_56891136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_4467992055bec797cdfeed3_56891136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		$('#send_email_on').click(function() {
			$('#tpl').slideToggle();
		});
	});
<?php
}
}
/* {/block "script"} */
}
