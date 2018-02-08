<?php /* Smarty version 3.1.27, created on 2018-02-03 06:22:42
         compiled from "/home/g/gtlurii/test/public_html/setup/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19156109175a752b02c3dfe1_56149199%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e229b392f1d433a33c947d3852c17007c46f0cec' => 
    array (
      0 => '/home/g/gtlurii/test/public_html/setup/templates/footer.tpl',
      1 => 1517627898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19156109175a752b02c3dfe1_56149199',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a752b02c49f20_09232245',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a752b02c49f20_09232245')) {
function content_5a752b02c49f20_09232245 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/g/gtlurii/test/public_html/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '19156109175a752b02c3dfe1_56149199';
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
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
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
?>