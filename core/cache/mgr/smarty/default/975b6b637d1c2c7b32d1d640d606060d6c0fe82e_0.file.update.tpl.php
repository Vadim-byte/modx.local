<?php
/* Smarty version 3.1.36, created on 2021-04-30 20:58:11
  from 'E:\OSP\123\OSPanel\domains\modx.local\manager\templates\default\resource\staticresource\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_608c453372ee63_18766036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '975b6b637d1c2c7b32d1d640d606060d6c0fe82e' => 
    array (
      0 => 'E:\\OSP\\123\\OSPanel\\domains\\modx.local\\manager\\templates\\default\\resource\\staticresource\\update.tpl',
      1 => 1603350160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608c453372ee63_18766036 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }
}
}
