<?php
/* Smarty version 3.1.32, created on 2018-12-10 23:55:09
  from '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0f432db5cfc8_59796295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81fbfca9ad548363f32a03bed9d63181589fb211' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/_partials/header.tpl',
      1 => 1543590564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0f432db5cfc8_59796295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13609003275c0f432db57395_60662277', 'header_banner');
?>





<?php }
/* {block 'header_banner'} */
class Block_13609003275c0f432db57395_60662277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_13609003275c0f432db57395_60662277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="babalu-header">
    <div class="col-sm-2 col-md-2 babalu-logo">
        <h1>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            </a>
        </h1>
    </div>
    <div class="col-sm-10 col-md-10 pad-0">
        <div class="col-md-12 babalu-top-nav">
            <div id="search_widget" class="search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="hidden" name="controller" value="search">
                    <input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
                    <button type="submit">
                        <i class="material-icons search">&#xE8B6;</i>
                        <span class="hidden-xl-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                    </button>
                </form>
            </div>
            <ul class="slct-lang">
                <li>ESPAÑOL <span class="cont-dwn"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/down-arrow.svg" class="icc-dwn"></span>
                    <ul class="lst-sublang">
                        <li><a href="#">ESPAÑOL</a></li>
                        <li><a href="#">ENGLISH</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="slct-lang slct-currt">
                <li><span class="txt-ext">PESOS COLOMBIANOS</span><span class="txt-short">COP</span> <span class="cont-dwn"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/down-arrow.svg" class="icc-dwn"></span>
                    <ul class="lst-sublang">
                        <li><a href="#"><span class="txt-ext">PESOS COLOMBIANOS</span><span class="txt-short">COP</span></a></li>
                        <li><a href="#">VALORES EN DÓLARES</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="lst-log">
                <li>
                    <a href="#">INICIAR SESIÓN</a>
                </li>
            </ul>
            <ul class="lst-regs">
                <li><a href="#">REGISTRARME</a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-12 babalu-top-menu">
            <ul class="left-menu">
                <li><a href="#">INICIO</a></li>
                <li><a href="#">VENTAS MAYORISTAS</a></li>
                <li><a href="#">OUTLET MAYORISTA</a></li>
                <li><a href="#">VENTAS MAYORISTAS INTERNACIONALES</a></li>
                <li><a href="#">VENTAS POR UNIDAD</a></li>
            </ul>
            <div class="minicart-wrapper">
                <a href="#" class="shw-crt"><i class="material-icons shopping-cart cust-icart">shopping_cart</i> <span class="txt-ext">VER CARRITO</span></a>
                <span class="cart-products-count cust-spin">0</span>
            </div>
            <a href="#" class="search-mobl"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/msc-searcher.svg"></a>
            <button type="button" class="toggle-main-menu pull-left navbar-toggle collapsed srch-nav-mob"><div class="h-icon"><div></div><div></div><div></div></div><span>Menú</span></button>
        </div>
        <div class="white-buttons">
            <ul>
                <li>
                    <a href="#">Ventas por mayor</a>
                </li>
                <li>
                    <a href="#">Ventas Internacionales</a>
                </li>
                <li>
                    <a href="#">Ventas por unidad</a>
                </li>
                <li>
                    <a href="#">Outlet Mayorista</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="top-container"> 
    <div class="widget block block-static-block">
        <div class="hidden-xs hidden-sm">
            <div class="catalog-sales-bar center">
                <div class="cont catalog-sales">
                    <div class="center text">Novedosa Venta por Catálogo</div>
                    <div class="center cont-button">
                        <div class="center button">¡Clic aquí!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
}
/* {/block 'header_banner'} */
}
