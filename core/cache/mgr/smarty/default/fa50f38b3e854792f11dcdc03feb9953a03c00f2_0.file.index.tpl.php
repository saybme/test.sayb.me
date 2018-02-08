<?php /* Smarty version 3.1.27, created on 2018-02-08 07:21:06
         compiled from "/home/g/gtlurii/test/public_html/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4284111445a7bd032de2bd9_02042040%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa50f38b3e854792f11dcdc03feb9953a03c00f2' => 
    array (
      0 => '/home/g/gtlurii/test/public_html/manager/templates/default/workspaces/index.tpl',
      1 => 1517627897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4284111445a7bd032de2bd9_02042040',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a7bd032df0f05_21643444',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a7bd032df0f05_21643444')) {
function content_5a7bd032df0f05_21643444 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4284111445a7bd032de2bd9_02042040';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>