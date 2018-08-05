<?php
/* Smarty version 3.1.32, created on 2018-08-02 23:03:04
  from 'C:\xampp\htdocs\GuraMie\themes\zTechcam\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b632b38af55d1_55539932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c2df99025d7b9d1622362ab69a17507a4254afb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GuraMie\\themes\\zTechcam\\templates\\_partials\\footer.tpl',
      1 => 1533218365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b632b38af55d1_55539932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
    <div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9965913555b632b38aecc15_10964587', 'hook_footer_before');
?>

    </div>
</div>

<div class="footer-container">
	<div class="container">
		<div class="row">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6861786865b632b38aedca1_29252334', 'hook_footer');
?>

		</div>
		<div class="row">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12991758315b632b38aeead1_90195696', 'hook_footer_after');
?>

		</div>
	</div>
</div>
<div class="bottom-footer">
	<div class="container">
		<div class="row">
		  <div class="col-md-12">
			<p class="text-sm-center">
			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19334537875b632b38aefa09_48342901', 'copyright_link');
?>

			</p>
		  </div>
		</div>
	</div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_9965913555b632b38aecc15_10964587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_9965913555b632b38aecc15_10964587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_6861786865b632b38aedca1_29252334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_6861786865b632b38aedca1_29252334',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_12991758315b632b38aeead1_90195696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_12991758315b632b38aeead1_90195696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_19334537875b632b38aefa09_48342901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_19334537875b632b38aefa09_48342901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <a class="_blank" href="http://www.prestashop.com" target="_blank">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

				  </a> - Designed by <a href="https://www.zerocarts.com">ZEROCARTS</a>
			  <?php
}
}
/* {/block 'copyright_link'} */
}
