<?php
/* Smarty version 3.1.30, created on 2017-11-08 16:21:01
  from "G:\wamp\blog\Application\Admin\View\Article_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a02be6d5307e0_40174693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f95a7a830b0b5797a1db704a33e3b6e50111554' => 
    array (
      0 => 'G:\\wamp\\blog\\Application\\Admin\\View\\Article_list.html',
      1 => 1509753937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.html' => 1,
    'file:left.html' => 1,
  ),
),false)) {
function content_5a02be6d5307e0_40174693 (Smarty_Internal_Template $_smarty_tpl) {
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
        $(function () {
            $("#nowtime").css({ color: 'red'});
            window.setInterval('ShowTime()', 1000);
        });
        function ShowTime() {
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
                <a href="?p=back">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">分类管理</span>
            </div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="" method="">
                    <input type="hidden" name="m" value="Admin">
                    <input type="hidden" name="c" value="Article">
                    <input type="hidden" name="a" value="showBlog">
                    <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
            <div class="result-title">
                <div class="result-list">
                    <a href="?m=Admin&c=Article&a=add"><i class="icon-font"></i>添加文章</a>
                    <a id="quanxuan" href="javascript:void(0)">全选</a>
                    <a id="fanxuan" href="javascript:void(0)">反选</a>
                    <a id="quxiao" href="javascript:void(0)">取消</a>
                    <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                </div>
            </div>
            <div class="result-content">

                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%">
                                <input class="allChoose" name="" type="checkbox">
                            </th>
                            <th>标题</th>
                            <th>分类</th>
                            <th>点击数</th>
                            <th>作者</th>
                            <th>发布时间</th>
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
                                <?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>

                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['hits'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['author'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['ptime'];?>
</td>
                            <td>
                                <a class="link-update" href="?p=back&c=Blog&a=Edit&id=8">修改</a>
                                <a class="link-del" href="?p=back&c=Blog&a=Delete&id=8">删除</a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </table>

                <div class="list-page"> 2 条 1/1 页</div>
            </div>
        </form>
        </div>

    </div>
    <!--/右侧主操作区-->
</div>
<?php echo '<script'; ?>
>
    var fm= document.getElementById('myform');

    /*************全选*************/
    var quanxuan = document.getElementById('quanxuan');
    quanxuan.onclick = function () {
        var inputs = fm.getElementsByTagName('input');
        for(var i= 0;i<inputs.length;i++){
            inputs[i].checked = true;
        }
    };

    var fanxuan = document.getElementById('fanxuan');
    fanxuan.onclick = function () {
        var inputs = fm.getElementsByTagName('input');
    for(var i = 0;i<inputs.length;i++){
        inputs[i].checked = !inputs[i].checked;
    }
    };

    var quxiao = document.getElementById('quxiao');
    quxiao.onclick = function () {
        var inputs = fm.getElementsByTagName('input');
        for(var i = 0;i<inputs.length;i++){
            inputs[i].checked = false;
        }
    };
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
