<?php
/* Smarty version 3.1.32, created on 2019-01-14 01:05:15
  from '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c3c269b83a6f5_95571419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16152106b6e1c1246f5daf833c3265fa66fe08f2' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/page.tpl',
      1 => 1543178431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3c269b83a6f5_95571419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10135522995c3c269b834be4_65892385', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_4533154555c3c269b835a05_06887406 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_19148527255c3c269b835246_59875423 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4533154555c3c269b835a05_06887406', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_19055113895c3c269b837eb0_99199448 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12183176785c3c269b8387d7_25373338 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17392408055c3c269b837879_96960381 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19055113895c3c269b837eb0_99199448', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12183176785c3c269b8387d7_25373338', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_17108785805c3c269b8398f5_56668553 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15331400675c3c269b8393a8_30879047 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17108785805c3c269b8398f5_56668553', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10135522995c3c269b834be4_65892385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10135522995c3c269b834be4_65892385',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_19148527255c3c269b835246_59875423',
  ),
  'page_title' => 
  array (
    0 => 'Block_4533154555c3c269b835a05_06887406',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_17392408055c3c269b837879_96960381',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19055113895c3c269b837eb0_99199448',
  ),
  'page_content' => 
  array (
    0 => 'Block_12183176785c3c269b8387d7_25373338',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15331400675c3c269b8393a8_30879047',
  ),
  'page_footer' => 
  array (
    0 => 'Block_17108785805c3c269b8398f5_56668553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19148527255c3c269b835246_59875423', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17392408055c3c269b837879_96960381', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15331400675c3c269b8393a8_30879047', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
