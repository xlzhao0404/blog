<?php
/* Smarty version 3.1.30, created on 2017-11-08 16:20:30
  from "G:\wamp\blog\Application\Admin\View\Category_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a02be4e41fed4_23958194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4194b50b3019f52ec8b5bd25bb46c61e40fa986' => 
    array (
      0 => 'G:\\wamp\\blog\\Application\\Admin\\View\\Category_list.html',
      1 => 1509171553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.html' => 1,
    'file:left.html' => 1,
  ),
),false)) {
function content_5a02be4e41fed4_23958194 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="../../../web/home/js/jquery1.42.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 >
        $(function(){
            $("#nowtime").css({ color:'red'});
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
            <div class="crumb-list"><i class="icon-font"></i>
                <a href="?m=Admin&c=Index&a=index">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">分类管理</span>
            </div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="?m=Admin&c=Category&a=add"><i class="icon-font"></i>添加分类</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%">
                                <input class="allChoose" name="" type="checkbox">
                            </th>
                            <th>ID</th>
                            <th>标题</th>
                            <th>评论</th>
                            <th>操作</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                        <tr>
                            <td class="tc">
                                <input name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" type="checkbox">
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
                            <td style="padding-left:<?php echo $_smarty_tpl->tpl_vars['val']->value['level']*30;?>
px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
                            <td></td>
                            <td>
                                <a class="link-update" href="#">修改</a>
                                <a class="link-del" href="?m=Admin&c=Category&a=delete$id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">删除</a>
                            </td>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tr>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
</html><?php }
}
