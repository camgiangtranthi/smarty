<?php
/* Smarty version 4.2.0, created on 2022-10-01 10:52:05
  from '/Users/macos/Desktop/Giang's documents/IT Documents/Back-end/php/smarty/views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63381bd5cb9414_71209070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b8700056ed2bd577d76f1edb2883aa40294f301' => 
    array (
      0 => '/Users/macos/Desktop/Giang\'s documents/IT Documents/Back-end/php/smarty/views/index.tpl',
      1 => 1664621522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63381bd5cb9414_71209070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="../public/css/style.css" />
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146417979563381bd5caad13_13099270', "title");
?>
</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container wrapper">
        <div class="info">
            <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
, <?php echo $_smarty_tpl->tpl_vars['info']->value['position'];?>
</h1>
            <p><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</p>
        </div>
        <div class="details">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['details']->value, 'index', false, 'name');
$_smarty_tpl->tpl_vars['index']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['index']->value) {
$_smarty_tpl->tpl_vars['index']->do_else = false;
?>
                    <div class="details__item">
                        <h2><?php echo $_smarty_tpl->tpl_vars['index']->value['title'];?>
</h2>
                        <p><?php echo $_smarty_tpl->tpl_vars['index']->value['description'];?>
</p>
                        <a href="#"><?php echo $_smarty_tpl->tpl_vars['index']->value['icon'];
echo $_smarty_tpl->tpl_vars['index']->value['more'];?>
</a>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</body>
</html>
<?php }
/* {block "title"} */
class Block_146417979563381bd5caad13_13099270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_146417979563381bd5caad13_13099270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Title<?php
}
}
/* {/block "title"} */
}
