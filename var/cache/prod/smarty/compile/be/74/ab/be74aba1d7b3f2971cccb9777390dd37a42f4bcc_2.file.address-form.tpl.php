<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:41
  from '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/customer/_partials/address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79858d8de2_91969703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be74aba1d7b3f2971cccb9777390dd37a42f4bcc' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/customer/_partials/address-form.tpl',
      1 => 1542223694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5bec79858d8de2_91969703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19536959345bec79858a0106_82559464', "address_form");
?>

<?php }
/* {block "address_form_url"} */
class Block_20453698385bec79858a7aa5_41961643 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
      method="POST"
      action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
      data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
    >
    <?php
}
}
/* {/block "address_form_url"} */
/* {block 'form_field'} */
class Block_20221539345bec79858c1ab8_39092460 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_14447334185bec79858bb871_82116796 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20221539345bec79858c1ab8_39092460', 'form_field', $this->tplIndex);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'form_fields'} */
/* {block "address_form_fields"} */
class Block_6005390465bec79858b9082_05867871 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="form-fields">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14447334185bec79858bb871_82116796', 'form_fields', $this->tplIndex);
?>

        </section>
      <?php
}
}
/* {/block "address_form_fields"} */
/* {block 'form_buttons'} */
class Block_11175252925bec79858cf4b3_09099469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button class="btn btn-primary float-xs-right" type="submit" class="form-control-submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block "address_form_footer"} */
class Block_6302939415bec79858cccd0_88981337 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer clearfix">
        <input type="hidden" name="submitAddress" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11175252925bec79858cf4b3_09099469', 'form_buttons', $this->tplIndex);
?>

      </footer>
      <?php
}
}
/* {/block "address_form_footer"} */
/* {block "address_form"} */
class Block_19536959345bec79858a0106_82559464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_form' => 
  array (
    0 => 'Block_19536959345bec79858a0106_82559464',
  ),
  'address_form_url' => 
  array (
    0 => 'Block_20453698385bec79858a7aa5_41961643',
  ),
  'address_form_fields' => 
  array (
    0 => 'Block_6005390465bec79858b9082_05867871',
  ),
  'form_fields' => 
  array (
    0 => 'Block_14447334185bec79858bb871_82116796',
  ),
  'form_field' => 
  array (
    0 => 'Block_20221539345bec79858c1ab8_39092460',
  ),
  'address_form_footer' => 
  array (
    0 => 'Block_6302939415bec79858cccd0_88981337',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_11175252925bec79858cf4b3_09099469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="js-address-form">
    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20453698385bec79858a7aa5_41961643', "address_form_url", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6005390465bec79858b9082_05867871', "address_form_fields", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6302939415bec79858cccd0_88981337', "address_form_footer", $this->tplIndex);
?>


    </form>
  </div>
<?php
}
}
/* {/block "address_form"} */
}
