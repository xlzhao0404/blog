<?php
/* Smarty version 3.1.30, created on 2017-11-08 16:20:53
  from "G:\wamp\blog\Application\Admin\View\Index_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a02be6500e220_46768693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ba01cb9553c79a8e61582a2e9d6fe03023ab5e9' => 
    array (
      0 => 'G:\\wamp\\blog\\Application\\Admin\\View\\Index_index.html',
      1 => 1509159740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.html' => 1,
    'file:left.html' => 1,
  ),
),false)) {
function content_5a02be6500e220_46768693 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="./Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="./Public/Admin/css/main.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="./Public/Admin/js/libs/modernizr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./Public/Admin/js/libs/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 >
        $(function(){
            $("#nowtime").css({ color:'red'});
            $("#host").html(location.host);
            //alert(location.host);
            window.setInterval('ShowTime()',1000);
        });
        function ShowTime(){
            var t = new Date();
            var str = t.getFullYear() + '年';
            str += t.getMonth() + '月';
            str += t.getDate() + '日 ';
            str += t.getHours() + ':';
            str += t.getMinutes() + ':';
            str += t.getSeconds() + '';
            $("#nowtime").html(str);
        }
    <?php echo '</script'; ?>
>
</head>
<body>

    <?php $_smarty_tpl->_subTemplateRender("file:top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container clearfix">
    
    <!--左侧菜单栏-->
    
    <!--左侧菜单栏 begin-->
    <?php $_smarty_tpl->_subTemplateRender("file:left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--左侧菜单栏 begin-->
    
    <!--右侧主操作区-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list">
                <i class="icon-font">&#xe06b;</i>
                <span>欢迎使用博客后台管理系统。</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info">WINNT</span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info">Apache/2.2.21 (Win64) PHP/5.3.10</span>
                    </li>
                    <li>
                        <label class="res-lab">PHP运行方式</label><span class="res-info">apache2handler</span>
                    </li>
                    <li>
                        <label class="res-lab">模板版本</label><span class="res-info">v-0.1</span>
                    </li>
                    <li>
                        <label class="res-lab">上传附件限制</label><span class="res-info">2M</span>
                    </li>
                    <li>
                        <label class="res-lab">北京时间</label>
                        <span class="res-info" id='nowtime'>2015年9月4日 11:01:07</span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名</label><span class="res-info"><span id="host">localhost</span></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>

</body>
</html><?php }
}
