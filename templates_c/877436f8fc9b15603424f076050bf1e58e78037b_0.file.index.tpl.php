<?php
/* Smarty version 3.1.33, created on 2019-05-27 21:38:16
  from 'C:\WebDev\wamp64\www\got-meme-generator\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cec58c8a11296_71605500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '877436f8fc9b15603424f076050bf1e58e78037b' => 
    array (
      0 => 'C:\\WebDev\\wamp64\\www\\got-meme-generator\\templates\\index.tpl',
      1 => 1558993081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cec58c8a11296_71605500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\WebDev\\wamp64\\www\\got-meme-generator\\lib\\smarty-3.1.33\\libs\\plugins\\function.html_image.php','function'=>'smarty_function_html_image',),));
?>
<html>
    <head>
        <title>Meeemeess</title>
    </head>
    <body>
        <p><?php echo $_smarty_tpl->tpl_vars['post_title']->value;?>
</p>
        <?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['post_url']->value),$_smarty_tpl);?>

    </body>
</html><?php }
}
