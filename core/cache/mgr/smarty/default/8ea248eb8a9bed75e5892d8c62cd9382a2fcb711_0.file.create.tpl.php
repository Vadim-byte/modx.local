<?php
/* Smarty version 3.1.36, created on 2021-04-30 20:52:22
  from 'E:\OSP\123\OSPanel\domains\modx.local\manager\templates\default\resource\weblink\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_608c43d6bef907_63719384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ea248eb8a9bed75e5892d8c62cd9382a2fcb711' => 
    array (
      0 => 'E:\\OSP\\123\\OSPanel\\domains\\modx.local\\manager\\templates\\default\\resource\\weblink\\create.tpl',
      1 => 1603350160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608c43d6bef907_63719384 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modx-panel-weblink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }
}
}
