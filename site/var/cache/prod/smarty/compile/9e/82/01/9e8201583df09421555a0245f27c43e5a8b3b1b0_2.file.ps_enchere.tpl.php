<?php
/* Smarty version 3.1.33, created on 2020-07-13 22:21:19
  from '/var/www/clients/client0/web44/web/modules/ps_enchere/views/templates/hook/ps_enchere.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0cc23fe5acb3_97901410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e8201583df09421555a0245f27c43e5a8b3b1b0' => 
    array (
      0 => '/var/www/clients/client0/web44/web/modules/ps_enchere/views/templates/hook/ps_enchere.tpl',
      1 => 1589318998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0cc23fe5acb3_97901410 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block ps_enchere -->
<div id="ps_enchere_block_home" class="block">
  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Divers','d'=>'Modules.Ps_Enchere'),$_smarty_tpl ) );?>
</h4>
  <div class="block_content">
	<ul>
		<li>
			<a class="center" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps_page_link']->value, ENT_QUOTES, 'UTF-8');?>
">
			Enchères	
			</a>
		</li>
		
		<li>
			<a class="center" href="http://mylpsh.gabriel-cassano.be/fr/content/category/2-blog">
				Blog	
			</a>
		</li>
	</ul>
  </div>
</div>
<!-- /Block ps_enchere --><?php }
}
