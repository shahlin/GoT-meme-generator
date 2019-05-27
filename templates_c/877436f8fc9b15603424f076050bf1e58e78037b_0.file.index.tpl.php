<?php
/* Smarty version 3.1.33, created on 2019-05-27 23:04:32
  from 'C:\WebDev\wamp64\www\got-meme-generator\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cec6d005d9682_99534412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '877436f8fc9b15603424f076050bf1e58e78037b' => 
    array (
      0 => 'C:\\WebDev\\wamp64\\www\\got-meme-generator\\templates\\index.tpl',
      1 => 1558998268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cec6d005d9682_99534412 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title>Meeemeess</title>
        <style>

            #post_container {
                width: 90%;
                height: 90%;

                position:absolute;
                left:0; right:0;
                top:0; bottom:0;
                /* margin-top: 10px;
                margin-left: 10px; */

                /*this to solve "the content will not be cut when the window is smaller than the content": */
                max-width:100%;
                max-height:100%;

                margin: 0 auto;
            }

            #post_img {
                max-width:100%;
                max-height:100%;
            }

            #post_title {
                text-align: center;
                margin-top: 10px;
                margin-bottom: 20px;
            }

            .subtitle_text {
                font-size: 14px;
                color: #fb3b3b;
            }

            .post_content {
                display: block;
                margin: 0 auto;
                background-color: #f5f5f5;
                padding: 10px;
                color: #191919;
                border-radius: 7px;
            }
        </style>
    </head>
    <body>
        <div id="post_container">
            <h2 class="post_content" id="post_title">
                <?php echo $_smarty_tpl->tpl_vars['post_title']->value;?>
<br><br>
                <span class="subtitle_text">Refresh for another one</span>
            </h2>
            <img src="<?php echo $_smarty_tpl->tpl_vars['post_url']->value;?>
" alt="Broken meme content" class="post_content" id="post_img">
        </div>
    </body>
</html><?php }
}
