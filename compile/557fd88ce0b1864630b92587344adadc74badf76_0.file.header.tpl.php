<?php
/* Smarty version 4.2.0, created on 2022-09-28 12:22:14
  from '/Users/macos/Desktop/Giang's documents/IT Documents/Back-end/php/smarty/views/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63343c76156405_66276682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '557fd88ce0b1864630b92587344adadc74badf76' => 
    array (
      0 => '/Users/macos/Desktop/Giang\'s documents/IT Documents/Back-end/php/smarty/views/header.tpl',
      1 => 1664263939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343c76156405_66276682 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="../public/css/style.css" />
    <title>Header</title>
</head>
<body>
    <div class="nav__bar container">
        <div class="nav__bar-logo">
            <a href="#"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
        </div>
        <div class="nav__bar-menu">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'url', false, 'name');
$_smarty_tpl->tpl_vars['url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->do_else = false;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</body>
</html><?php }
}
