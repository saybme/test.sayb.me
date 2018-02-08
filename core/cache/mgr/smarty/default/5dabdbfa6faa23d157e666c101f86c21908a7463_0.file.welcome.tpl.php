<?php /* Smarty version 3.1.27, created on 2018-02-03 06:22:52
         compiled from "/home/g/gtlurii/test/public_html/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7120525845a752b0cb7c7c7_79549478%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dabdbfa6faa23d157e666c101f86c21908a7463' => 
    array (
      0 => '/home/g/gtlurii/test/public_html/manager/templates/default/welcome.tpl',
      1 => 1517627897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7120525845a752b0cb7c7c7_79549478',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a752b0cb7f7a9_78486661',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a752b0cb7f7a9_78486661')) {
function content_5a752b0cb7f7a9_78486661 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7120525845a752b0cb7c7c7_79549478';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>