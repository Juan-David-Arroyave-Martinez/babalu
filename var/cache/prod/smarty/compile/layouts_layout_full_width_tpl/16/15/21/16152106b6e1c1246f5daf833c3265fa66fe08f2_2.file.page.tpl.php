<?php
/* Smarty version 3.1.32, created on 2018-11-28 19:53:58
  from '/home4/makemark/public_html/makemark/babalu_prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bff38a6e1ee10_92292307',
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
function content_5bff38a6e1ee10_92292307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5014998825bff38a6e10847_35025494', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_10720736045bff38a6e13763_48303135 extends Smarty_Internal_Block
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
class Block_8751711965bff38a6e12010_54329582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10720736045bff38a6e13763_48303135', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1453642985bff38a6e18329_09156468 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_4463806305bff38a6e19778_61760364 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7270759245bff38a6e17473_11957144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1453642985bff38a6e18329_09156468', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4463806305bff38a6e19778_61760364', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_2390333565bff38a6e1c726_74313576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_19141718125bff38a6e1b908_60038974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2390333565bff38a6e1c726_74313576', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_5014998825bff38a6e10847_35025494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5014998825bff38a6e10847_35025494',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8751711965bff38a6e12010_54329582',
  ),
  'page_title' => 
  array (
    0 => 'Block_10720736045bff38a6e13763_48303135',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_7270759245bff38a6e17473_11957144',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1453642985bff38a6e18329_09156468',
  ),
  'page_content' => 
  array (
    0 => 'Block_4463806305bff38a6e19778_61760364',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_19141718125bff38a6e1b908_60038974',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2390333565bff38a6e1c726_74313576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8751711965bff38a6e12010_54329582', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7270759245bff38a6e17473_11957144', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19141718125bff38a6e1b908_60038974', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
