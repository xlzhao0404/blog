<?php
/* Smarty version 3.1.30, created on 2017-11-08 16:20:24
  from "G:\wamp\blog\Application\Home\View\nav.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a02be48c5c154_12638506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1864b30d4ab81a4c574ae494dedd383bf5ad2ac4' => 
    array (
      0 => 'G:\\wamp\\blog\\Application\\Home\\View\\nav.html',
      1 => 1509460588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a02be48c5c154_12638506 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    #login1,#register1,#logout1,#user1{
        float: right;
    }

</style>
<nav id="topnav">
    <a href="/">首页</a>
    <a href="about.html">关于我</a>
    <a href="?m=Home&c=Article&a=showlist&id=2">慢生活</a>
    <a href="?m=Home&c=Article&a=showlist&id=3">学无止境</a>
    <a href="?m=Home&c=Article&a=showlist&id=4">南京趣事</a>

    <?php if (!isset($_SESSION['user'])) {?>
    <a href="?c=User&a=register" id="register1">注册</a>
    <a href="?c=User&a=login" id="login1">登录</a>
    <?php } else { ?>
    <a href="?c=User&a=logout" id="logout1">退出</a>
    <a href="?c=User&a=register" id="user1"><?php echo $_SESSION['user']['username'];?>
</a>
    <?php }?>
</nav>
<?php }
}
