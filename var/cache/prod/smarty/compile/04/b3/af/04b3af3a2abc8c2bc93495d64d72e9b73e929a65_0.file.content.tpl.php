<?php
/* Smarty version 3.1.32, created on 2018-08-02 22:12:18
  from 'C:\xampp\htdocs\GuraMie\admin14219\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b631f527ef997_18358253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04b3af3a2abc8c2bc93495d64d72e9b73e929a65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\GuraMie\\admin14219\\themes\\default\\template\\content.tpl',
      1 => 1533216066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b631f527ef997_18358253 (Smarty_Internal_Template $_smarty_tpl) {
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
