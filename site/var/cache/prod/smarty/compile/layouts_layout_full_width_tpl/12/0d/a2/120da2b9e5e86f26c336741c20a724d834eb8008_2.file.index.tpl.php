<?php
/* Smarty version 3.1.33, created on 2020-07-13 21:56:13
  from '/var/www/clients/client0/web44/web/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0cbc5d68bf93_35287129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '120da2b9e5e86f26c336741c20a724d834eb8008' => 
    array (
      0 => '/var/www/clients/client0/web44/web/themes/classic/templates/index.tpl',
      1 => 1578996783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0cbc5d68bf93_35287129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4378838715f0cbc5d67eb91_23573014', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_21234488785f0cbc5d680af4_71067306 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_16623203645f0cbc5d685794_23153995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11631623605f0cbc5d683a57_98365349 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16623203645f0cbc5d685794_23153995', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4378838715f0cbc5d67eb91_23573014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_4378838715f0cbc5d67eb91_23573014',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_21234488785f0cbc5d680af4_71067306',
  ),
  'page_content' => 
  array (
    0 => 'Block_11631623605f0cbc5d683a57_98365349',
  ),
  'hook_home' => 
  array (
    0 => 'Block_16623203645f0cbc5d685794_23153995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21234488785f0cbc5d680af4_71067306', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11631623605f0cbc5d683a57_98365349', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
