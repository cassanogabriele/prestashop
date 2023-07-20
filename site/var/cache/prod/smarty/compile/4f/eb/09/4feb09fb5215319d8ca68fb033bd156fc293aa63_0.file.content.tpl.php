<?php
/* Smarty version 3.1.33, created on 2020-07-13 21:52:51
  from '/var/www/clients/client0/web44/web/admin324ixwpvj/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0cbb93213485_34079102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4feb09fb5215319d8ca68fb033bd156fc293aa63' => 
    array (
      0 => '/var/www/clients/client0/web44/web/admin324ixwpvj/themes/default/template/content.tpl',
      1 => 1578996103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0cbb93213485_34079102 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
