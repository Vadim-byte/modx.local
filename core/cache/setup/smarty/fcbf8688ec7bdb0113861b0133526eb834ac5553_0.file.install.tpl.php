<?php
/* Smarty version 3.1.36, created on 2021-04-21 20:46:29
  from 'E:\OSP\123\OSPanel\domains\modx.local\setup\templates\install.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_608064f5d680d3_90180536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcbf8688ec7bdb0113861b0133526eb834ac5553' => 
    array (
      0 => 'E:\\OSP\\123\\OSPanel\\domains\\modx.local\\setup\\templates\\install.tpl',
      1 => 1603350160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608064f5d680d3_90180536 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="assets/js/sections/install.js"><?php echo '</script'; ?>
>
<form id="install" action="?action=install" method="post">
<h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['install_summary'];?>
</h2>
<?php if ($_smarty_tpl->tpl_vars['failed']->value) {?>
<p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['errors_occurred'];?>
</p>
<?php } else { ?>
<p>
    <?php echo $_smarty_tpl->tpl_vars['_lang']->value['install_success'];?>

    <br />(<a style="font-size: .9em" href="#continuebtn"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['skip_to_bottom'];?>
</a>)
    <br /><br />
    <a href="javascript:void(0);" class="modx-toggle-success"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['toggle_success'];?>
</a> | 
    <a href="javascript:void(0);" class="modx-toggle-warning"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['toggle_warnings'];?>
</a>
    
</p>
<?php }?>
<ul class="checklist">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
<li class="<?php echo $_smarty_tpl->tpl_vars['result']->value['class'];?>
 finalsuccess" <?php if (!$_smarty_tpl->tpl_vars['failed']->value) {?>style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result']->value['msg'];?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<br />

<a id="continuebtn"></a>

<div class="setup_navbar">
<?php if ($_smarty_tpl->tpl_vars['failed']->value) {?>
    <button type="button" id="modx-next" onclick="MODx.go('install');"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['retry'];?>
</button>
    <button type="button" id="modx-back" onclick="MODx.go('summary');"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['back'];?>
</button>
<?php } else { ?>
    <input type="submit" id="modx-next" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['next'];?>
" autofocus="autofocus" />
<?php }?>
</div>
</form><?php }
}
