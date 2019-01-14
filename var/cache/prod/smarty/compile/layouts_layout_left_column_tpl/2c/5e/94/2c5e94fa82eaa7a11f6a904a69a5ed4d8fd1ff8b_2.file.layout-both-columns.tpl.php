<?php
/* Smarty version 3.1.32, created on 2019-01-11 19:21:32
  from '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c39330ce87322_11403462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c5e94fa82eaa7a11f6a904a69a5ed4d8fd1ff8b' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/layouts/layout-both-columns.tpl',
      1 => 1546999565,
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
function content_5c39330ce87322_11403462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9736897355c39330ce55083_83556470', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11488702655c39330ce592d9_63038502', 'hook_after_body_opening_tag');
?>


    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_444550825c39330ce5b057_15762753', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16167636485c39330ce5cc48_31804994', 'header');
?>

      </header>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12360953165c39330ce62ef6_26613843', 'notifications');
?>


      <section id="wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="cont-ppl">

            
      
      <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
         <style>
         .catalog-sales-bar{
           display: none;
         }
         </style>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14371209705c39330ce674b3_46432006', "custom-cat");
?>

        
        <?php }?>
          <div class="columns-cat">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
              <div class="babalu-category-helper">
                  <div class="col-md-4 col-sm-4 babalu-category-search">
                    <div class="block block-search">
                        <div class="block block-content">
                            <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="srch-bread">
                                <input type="hidden" name="controller" value="search">
                                <button type="submit" class="btn-snd-cat">
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_ps_url'], ENT_QUOTES, 'UTF-8');?>
/custom/srch-cat.svg">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4397580045c39330ce70e05_18566621', 'breadcrumb');
?>

                  </div>
                </div>
                <?php }?>
                

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19226888785c39330ce73296_71715740', "left_column");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14572079835c39330ce77186_90141496', "content_wrapper");
?>

        </div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7443681855c39330ce7b4e3_98849252', "right_column");
?>

        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16173187045c39330ce80d43_17434556', "footer");
?>

      </footer>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8773608075c39330ce82da5_73932147', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10847811565c39330ce85655_90295226', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_9736897355c39330ce55083_83556470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_9736897355c39330ce55083_83556470',
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
class Block_11488702655c39330ce592d9_63038502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_11488702655c39330ce592d9_63038502',
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
class Block_444550825c39330ce5b057_15762753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_444550825c39330ce5b057_15762753',
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
class Block_16167636485c39330ce5cc48_31804994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_16167636485c39330ce5cc48_31804994',
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
class Block_12360953165c39330ce62ef6_26613843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_12360953165c39330ce62ef6_26613843',
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
/* {block "custom-cat"} */
class Block_14371209705c39330ce674b3_46432006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'custom-cat' => 
  array (
    0 => 'Block_14371209705c39330ce674b3_46432006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
        <?php
}
}
/* {/block "custom-cat"} */
/* {block 'breadcrumb'} */
class Block_4397580045c39330ce70e05_18566621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_4397580045c39330ce70e05_18566621',
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
class Block_19226888785c39330ce73296_71715740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_19226888785c39330ce73296_71715740',
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
class Block_19067580785c39330ce78bd8_54831188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_14572079835c39330ce77186_90141496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_14572079835c39330ce77186_90141496',
  ),
  'content' => 
  array (
    0 => 'Block_19067580785c39330ce78bd8_54831188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19067580785c39330ce78bd8_54831188', "content", $this->tplIndex);
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_7443681855c39330ce7b4e3_98849252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_7443681855c39330ce7b4e3_98849252',
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
class Block_16173187045c39330ce80d43_17434556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16173187045c39330ce80d43_17434556',
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
class Block_8773608075c39330ce82da5_73932147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_8773608075c39330ce82da5_73932147',
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
class Block_10847811565c39330ce85655_90295226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_10847811565c39330ce85655_90295226',
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
