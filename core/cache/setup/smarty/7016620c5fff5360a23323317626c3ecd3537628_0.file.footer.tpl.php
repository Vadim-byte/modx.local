<?php
/* Smarty version 3.1.36, created on 2021-04-21 20:46:29
  from 'E:\OSP\123\OSPanel\domains\modx.local\setup\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_608064f5e22167_52319865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7016620c5fff5360a23323317626c3ecd3537628' => 
    array (
      0 => 'E:\\OSP\\123\\OSPanel\\domains\\modx.local\\setup\\templates\\footer.tpl',
      1 => 1603350160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608064f5e22167_52319865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\OSP\\123\\OSPanel\\domains\\modx.local\\core\\model\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_prefixVariable1 = ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_prefixVariable1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
