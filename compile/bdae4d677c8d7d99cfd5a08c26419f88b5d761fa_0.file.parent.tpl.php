<?php
/* Smarty version 4.2.0, created on 2022-10-01 07:11:45
  from '/Users/macos/Desktop/Giang's documents/IT Documents/Back-end/php/smarty/views/parent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6337e831517090_52102893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdae4d677c8d7d99cfd5a08c26419f88b5d761fa' => 
    array (
      0 => '/Users/macos/Desktop/Giang\'s documents/IT Documents/Back-end/php/smarty/views/parent.tpl',
      1 => 1664608302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:load_config.tpl' => 1,
  ),
),false)) {
function content_6337e831517090_52102893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4308367006337e831513fb9_13970325', "title");
?>
</title>
</head>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="info">
        <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
, <?php echo $_smarty_tpl->tpl_vars['info']->value['position'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</p>
    </div>
    <div class="details">
        <div class="details__content">
            <?php echo var_dump($_smarty_tpl->tpl_vars['details']->value);?>

        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:load_config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</html>
<?php }
/* {block "title"} */
class Block_4308367006337e831513fb9_13970325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4308367006337e831513fb9_13970325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Title - <?php
}
}
/* {/block "title"} */
}
