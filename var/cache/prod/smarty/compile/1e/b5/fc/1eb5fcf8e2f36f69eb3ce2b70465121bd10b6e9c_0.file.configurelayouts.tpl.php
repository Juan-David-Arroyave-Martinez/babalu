<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:28
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/themes/configurelayouts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7978ed1c43_06437719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eb5fcf8e2f36f69eb3ce2b70465121bd10b6e9c' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/themes/configurelayouts.tpl',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7978ed1c43_06437719 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel" id="">

  <div class="panel-heading">
    <i class="icon-cogs"></i>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose layouts'),$_smarty_tpl ) );?>

  </div>

  <form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes');?>
" method="post">
    <div class="form-wrapper clearfix">
      <div class="form-group">

        <div class="col-lg-12">
          <table class="table table-stripped">

            <tr>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layout'),$_smarty_tpl ) );?>
</th>
            </tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
              <tr>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['page']->value['title']) {?>
                    <?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>

                  <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['page']->value['page'];?>

                  <?php }?>
                </td>
                  <td>
                    <?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>

                  </td>
                <td>
                  <?php $_smarty_tpl->_assignInScope('defaultKey', '');?>
                  <select name="layouts[<?php echo $_smarty_tpl->tpl_vars['page']->value['page'];?>
]" id="">
                    <?php if (!isset($_smarty_tpl->tpl_vars['page_layouts']->value[$_smarty_tpl->tpl_vars['page']->value['page']])) {?>
                      <?php $_smarty_tpl->_assignInScope('defaultKey', ((string)$_smarty_tpl->tpl_vars['default_layout']->value['key']));?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['default_layout']->value['key'];?>
" selected="selected">
                        <?php echo $_smarty_tpl->tpl_vars['default_layout']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['default_layout']->value['description'];?>

                      </option>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_layouts']->value, 'layout', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['layout']->value) {
?>
                      <?php ob_start();
echo $_smarty_tpl->tpl_vars['key']->value;
$_prefixVariable12 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['defaultKey']->value;
$_prefixVariable13 = ob_get_clean();
if ($_prefixVariable12 !== $_prefixVariable13) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['page_layouts']->value[$_smarty_tpl->tpl_vars['page']->value['page']]) && $_smarty_tpl->tpl_vars['page_layouts']->value[$_smarty_tpl->tpl_vars['page']->value['page']] == $_smarty_tpl->tpl_vars['key']->value) {?>selected="selected"<?php }?>>
                          <?php echo $_smarty_tpl->tpl_vars['layout']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['layout']->value['description'];?>

                        </option>
                      <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </td>
              </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          </table>
        </div>

      </div>
    </div><!-- /.form-wrapper -->

    <div class="panel-footer">
      <input type="hidden" name="action" value="submitConfigureLayouts">
      <button type="submit" class="btn btn-default pull-right" name="submitConfigureLayouts">
        <i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

      </button>
    </div>

  </form>


</div>
<?php }
}
