<?php
/* Smarty version 3.1.32, created on 2018-12-11 00:32:17
  from '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0f4be1b48ff6_74066992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c5e94fa82eaa7a11f6a904a69a5ed4d8fd1ff8b' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/layouts/layout-both-columns.tpl',
      1 => 1544499556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5c0f4be1b48ff6_74066992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17884084475c0f4be1b31ba1_05328416', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18109458135c0f4be1b340c5_80763750', 'hook_after_body_opening_tag');
?>


    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16297523075c0f4be1b35077_12897637', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5267140945c0f4be1b36006_09742225', 'header');
?>

      </header>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4210790285c0f4be1b36f23_04338501', 'notifications');
?>


      <section id="wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="cont-ppl">
			<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
         <style>
         .catalog-sales-bar{
           display: none;
         }
         </style>
        <div class="category-image babalu-category-image" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
img/c/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['id'], ENT_QUOTES, 'UTF-8');?>
.jpg);">
          <div class="babalu-category-description">
          <h1 class="category-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
          <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
            <div id="category-description" class="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
          <?php }?>
          </div>
        </div>
        
        <?php }?>
          <div class="columns-cat">
              <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
              <div class="babalu-category-helper">
                  <div class="col-md-4 col-sm-4 babalu-category-search">
                    <div class="block block-search">
                        <div class="block block-content">
                            <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="srch-bread">
                                <input type="hidden" name="controller" value="search">
                                <button type="submit">
                                    <i class="material-icons search"></i>
                                </button>
                                <input class="babalu-search-input" type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="¿Qué Estás Buscando?" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
                            </form>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-8 col-sm-8 babalu-breadcrumbs">
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7889381565c0f4be1b3ca98_33562021', 'breadcrumb');
?>

                  </div>
                </div>
                <?php }?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1212357025c0f4be1b3def7_42496731', "left_column");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12182324035c0f4be1b402e2_91109411', "content_wrapper");
?>

        </div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5977062575c0f4be1b42881_49453559', "right_column");
?>

        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6850032305c0f4be1b45725_85321694', "footer");
?>

      </footer>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12312525815c0f4be1b46884_22409607', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1487823735c0f4be1b47fd4_31080388', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_17884084475c0f4be1b31ba1_05328416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_17884084475c0f4be1b31ba1_05328416',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_18109458135c0f4be1b340c5_80763750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_18109458135c0f4be1b340c5_80763750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_16297523075c0f4be1b35077_12897637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_16297523075c0f4be1b35077_12897637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_5267140945c0f4be1b36006_09742225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_5267140945c0f4be1b36006_09742225',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_4210790285c0f4be1b36f23_04338501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_4210790285c0f4be1b36f23_04338501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_7889381565c0f4be1b3ca98_33562021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_7889381565c0f4be1b3ca98_33562021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_1212357025c0f4be1b3def7_42496731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1212357025c0f4be1b3def7_42496731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="left-column" class="list-category-left">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <div class="babalu-category-list-fixed affix-top">
                <ul class="babalu-category-list-ul"><li><a href="https://babalufashion.com/marcas.html" data-category-id="3">Marcas</a></li><ul><li><a href="https://babalufashion.com/marcas/babalu.html" data-category-id="15">Babalú</a></li><li><a href="https://babalufashion.com/marcas/inizio.html" data-category-id="16">Inizio</a></li><li><a href="https://babalufashion.com/marcas/tarrao.html" data-category-id="17">Tarrao</a></li></ul><li><a href="https://babalufashion.com/mujeres.html" data-category-id="4">Mujeres</a></li><ul><li><a href="https://babalufashion.com/mujeres/ropa-deportiva.html" data-category-id="6">Ropa deportiva femenina</a></li><li><a href="https://babalufashion.com/mujeres/linea-ciclismo-femenina.html" data-category-id="136">Línea ciclismo femenina</a></li><li><a href="https://babalufashion.com/mujeres/vestidos-de-bano.html" data-category-id="134">Vestidos de Baño</a></li><li><a href="https://babalufashion.com/mujeres/lingerie.html" data-category-id="7">Lingerie</a></li></ul><li><a href="https://babalufashion.com/hombres.html" data-category-id="8">Hombres</a></li><ul><li><a href="https://babalufashion.com/hombres/ropa-deportiva-masculina.html" data-category-id="9">Ropa deportiva masculina</a></li><li><a href="https://babalufashion.com/hombres/linea-ciclismo-masculina.html" data-category-id="137">Linea ciclismo masculina</a></li><li><a href="https://babalufashion.com/hombres/ropa-interior-microfibra.html" data-category-id="10">Ropa interior microfibra</a></li><li><a href="https://babalufashion.com/hombres/ropa-interior-algodon.html" data-category-id="19">Ropa interior algodón</a></li></ul><li><a href="https://babalufashion.com/ropa-interior-infantil.html" data-category-id="129">Infantil</a></li><ul><li><a href="https://babalufashion.com/ropa-interior-infantil/ropa-interior-nina.html" data-category-id="138">Ropa interior Niña</a></li><li><a href="https://babalufashion.com/ropa-interior-infantil/ropa-interior-nino.html" data-category-id="139">Ropa interior Niño</a></li></ul><li><a href="https://babalufashion.com/otras-categorias.html" data-category-id="11">Otras categorías</a></li><ul><li><a href="https://babalufashion.com/otras-categorias/accesorios.html" data-category-id="12">Accesorios deportivos</a></li><li><a href="https://babalufashion.com/otras-categorias/outlet-mayorista.html" data-category-id="130">Outlet mayorista</a></li><li><a href="https://babalufashion.com/otras-categorias/ver-todos-los-productos.html" data-category-id="131">Ver todos los productos</a></li></ul><li><a href="https://babalufashion.com/nueva-coleccion.html" data-category-id="135">Nueva colección</a></li><ul></ul></ul>
              </div>
                <?php }?> 
            </div>
          <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_1278519435c0f4be1b411d1_29870874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_12182324035c0f4be1b402e2_91109411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_12182324035c0f4be1b402e2_91109411',
  ),
  'content' => 
  array (
    0 => 'Block_1278519435c0f4be1b411d1_29870874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1278519435c0f4be1b411d1_29870874', "content", $this->tplIndex);
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_5977062575c0f4be1b42881_49453559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_5977062575c0f4be1b42881_49453559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_6850032305c0f4be1b45725_85321694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6850032305c0f4be1b45725_85321694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_12312525815c0f4be1b46884_22409607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_12312525815c0f4be1b46884_22409607',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_1487823735c0f4be1b47fd4_31080388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_1487823735c0f4be1b47fd4_31080388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}