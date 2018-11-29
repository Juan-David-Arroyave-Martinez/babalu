<?php
/* Smarty version 3.1.32, created on 2018-11-28 19:53:58
  from '/home4/makemark/public_html/makemark/babalu_prestashop/modules/pspagebuilder/views/templates/hook/builderlayout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bff38a6d923e6_71330785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f51cb253347e7c84b3ca852ba12d682f4c61fa3' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/modules/pspagebuilder/views/templates/hook/builderlayout.tpl',
      1 => 1542658072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bff38a6d923e6_71330785 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row', false, NULL, 'row', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>

    <?php if ($_smarty_tpl->tpl_vars['row']->value->level == 1) {?> 
        <div class="pts-container-wrap <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->cls,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['row']->value->parallax) && $_smarty_tpl->tpl_vars['row']->value->parallax) {?> pts-parallax<?php }?>" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->attrs, ENT_QUOTES, 'UTF-8');?>
>        
            <div class="pts-inner container<?php if ($_smarty_tpl->tpl_vars['row']->value->fullwidth == 1) {?>-fluid<?php }
if ($_smarty_tpl->tpl_vars['row']->value->fullwidth == 2) {?>-custom<?php }?>">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['row']->value->level == 2) {?>
        <div class="pts-row-wrap" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->attrs, ENT_QUOTES, 'UTF-8');?>
>
    <?php }?>    
        <div class="row-inner row-level-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->level,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <div class="row <?php if (isset($_smarty_tpl->tpl_vars['row']->value->sfxcls) && $_smarty_tpl->tpl_vars['row']->value->sfxcls) {?>row-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->sfxcls,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['row']->value->level >= 2) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value->cls,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> clearfix" >
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value->cols, 'col');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
?>
                    <div class="col-lg-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['col']->value->lgcol,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['col']->value->mdcol,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['col']->value->smcol,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['col']->value->xscol,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['row']->value->level == 2) {?> 
                           <?php if (isset($_smarty_tpl->tpl_vars['row']->value->parallax) && $_smarty_tpl->tpl_vars['row']->value->parallax) {?>
                             <div class="<?php if (isset($_smarty_tpl->tpl_vars['row']->value->parallax) && $_smarty_tpl->tpl_vars['row']->value->parallax) {?> pts-parallax<?php }?>" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->attrs, ENT_QUOTES, 'UTF-8');?>
> 
                            <?php }?>
                        <?php }?>
                            <div class="col-inner <?php if (isset($_smarty_tpl->tpl_vars['col']->value->sfxcls) && $_smarty_tpl->tpl_vars['col']->value->sfxcls) {?>col-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['col']->value->sfxcls,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['col']->value->cls,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value->attrs, ENT_QUOTES, 'UTF-8');?>
>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['col']->value->widgets, 'widget');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
?>
                                <?php if (isset($_smarty_tpl->tpl_vars['widget']->value->content)) {?>
                                <div class="widget-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widget']->value->wtype,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value->content, ENT_QUOTES, 'UTF-8');?>
                                </div>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if (isset($_smarty_tpl->tpl_vars['col']->value->rows) && $_smarty_tpl->tpl_vars['col']->value->rows) {?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layout_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rows'=>$_smarty_tpl->tpl_vars['col']->value->rows), 0, true);
?>
                            <?php }?>
                            </div>

                        <?php if ($_smarty_tpl->tpl_vars['row']->value->level == 2) {?> 
                            <?php if (isset($_smarty_tpl->tpl_vars['row']->value->parallax) && $_smarty_tpl->tpl_vars['row']->value->parallax) {?>

                             </div>
                            <?php }?>
                        <?php }?>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php if ($_smarty_tpl->tpl_vars['row']->value->level == 2) {?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['row']->value->level == 1) {?>
            </div>
        </div>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    <?php }
}
