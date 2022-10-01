<?php
/* Smarty version 4.2.0, created on 2022-09-29 03:29:21
  from '/Users/macos/Desktop/Giang's documents/IT Documents/Back-end/php/smarty/views/load_config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63351111dac043_75930661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a98b61de8a420d3342a34e28ee22cc7d4a4edf34' => 
    array (
      0 => '/Users/macos/Desktop/Giang\'s documents/IT Documents/Back-end/php/smarty/views/load_config.tpl',
      1 => 1664422156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63351111dac043_75930661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "example.conf", null, 0);
?>


<html>
<title><?php echo (($tmp = $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle') ?? null)===null||$tmp==='' ? "No title" ?? null : $tmp);?>
</title>
<body bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bodyBgColor');?>
">
<table border="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBorderSize');?>
" bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBgColor');?>
">
    <tr bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rowBgColor');?>
">
        <td>First</td>
        <td>Last</td>
        <td>Address</td>
    </tr>
</table>
</body>
</html><?php }
}
