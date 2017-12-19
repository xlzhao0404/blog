<?php
/* Smarty version 3.1.30, created on 2017-11-18 11:02:54
  from "G:\wamp\blog\Application\Admin\View\Article_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fa2dec0dca3_06989443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54b018488b4551d49a332d407df394d991eeea0a' => 
    array (
      0 => 'G:\\wamp\\blog\\Application\\Admin\\View\\Article_add.html',
      1 => 1509365661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:left.html' => 1,
    'file:top.html' => 1,
  ),
),false)) {
function content_5a0fa2dec0dca3_06989443 (Smarty_Internal_Template $_smarty_tpl) {
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
 src = './Public/laydate/laydate.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./Public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
</head>
<body>

<?php $_smarty_tpl->_subTemplateRender("file:left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container clearfix">

    <!--左侧菜单栏-->

    <!--左侧菜单栏 begin-->
    <?php $_smarty_tpl->_subTemplateRender("file:top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--左侧菜单栏 begin-->

    <!--右侧主操作区-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i>
                <a href="?p=back">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">博文管理</span>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">添加博文</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="?m=Admin&c=Article&a=addHandle" method="post" id="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>所属分类：</th>
                            <td>
                                <select name="cid">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                    <option style="text-indent:<?php echo $_smarty_tpl->tpl_vars['val']->value['level'];?>
em;" <?php if ($_smarty_tpl->tpl_vars['val']->value['level'] == 1) {?>disabled<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>标题：</th>
                            <td>
                                <input class="common-text required" name="title" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>seo标题：</th>
                            <td>
                                <input class="common-text required" name="seotitle" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>关键字：</th>
                            <td>
                                <input class="common-text required" name="keywords" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>描述：</th>
                            <td>
                                <input class="common-text required" name="description" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>作者：</th>
                            <td>
                                <input class="common-text required" name="author" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>发布时间：</th>
                            <td>
                                <input id= 'ptime' class="laydate-icon common-text required" name="ptime" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>配图：</th>
                            <td>
                                <input type="file" name="pic" class="common-text required"  >
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>简介：</th>
                            <td>
                                <textarea name="jianjie" class="common-textarea" cols="100" rows="7"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>内容：</th>
                            <td>
                                <textarea id="con" name="content" class="common-textarea" cols="100" rows="20"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>
<?php echo '<script'; ?>
>
    ;!function () {
        laydate.skin('dahong')
        laydate({
            elem:'#ptime'
        })
    }();
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
//    CKEDITOR.replace('con',{
//        'width':750,
//        'skin':'moono'
//    });
    CKEDITOR.replace('con', {
        customConfig:'myconfig.js', //使用自定义myconfig.js当做CKeditor的配置文件
        extraPlugins:'codesnippet',//插件名
        codeSnippet_theme:'Pojoaque'//插件皮肤
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
