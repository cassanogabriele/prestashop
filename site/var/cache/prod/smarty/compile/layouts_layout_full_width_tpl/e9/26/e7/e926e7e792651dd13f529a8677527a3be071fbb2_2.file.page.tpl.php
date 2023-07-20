<?php
/* Smarty version 3.1.33, created on 2020-07-13 21:56:13
  from '/var/www/clients/client0/web44/web/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0cbc5d6bfc79_28774977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e926e7e792651dd13f529a8677527a3be071fbb2' => 
    array (
      0 => '/var/www/clients/client0/web44/web/themes/classic/templates/page.tpl',
      1 => 1578996783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0cbc5d6bfc79_28774977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9104535895f0cbc5d6a3956_86881908', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_7242786605f0cbc5d6a7bc8_53463840 extends Smarty_Internal_Block
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
class Block_16275472655f0cbc5d6a5765_49132188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7242786605f0cbc5d6a7bc8_53463840', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_3243137505f0cbc5d6b3131_31722136 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_14091688595f0cbc5d6b5b10_10364257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7672678645f0cbc5d6b1124_30566473 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3243137505f0cbc5d6b3131_31722136', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14091688595f0cbc5d6b5b10_10364257', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11006274855f0cbc5d6bb6c3_30099672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_5766865715f0cbc5d6b99f7_83092214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11006274855f0cbc5d6bb6c3_30099672', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9104535895f0cbc5d6a3956_86881908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9104535895f0cbc5d6a3956_86881908',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16275472655f0cbc5d6a5765_49132188',
  ),
  'page_title' => 
  array (
    0 => 'Block_7242786605f0cbc5d6a7bc8_53463840',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_7672678645f0cbc5d6b1124_30566473',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3243137505f0cbc5d6b3131_31722136',
  ),
  'page_content' => 
  array (
    0 => 'Block_14091688595f0cbc5d6b5b10_10364257',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_5766865715f0cbc5d6b99f7_83092214',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11006274855f0cbc5d6bb6c3_30099672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16275472655f0cbc5d6a5765_49132188', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7672678645f0cbc5d6b1124_30566473', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5766865715f0cbc5d6b99f7_83092214', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
