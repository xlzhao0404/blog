<?php
/* Smarty version 3.1.30, created on 2017-11-24 11:35:21
  from "G:\wamp\blog\Application\Home\View\Index_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a179379748ef3_38725468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '686ef4d906558381529543294e83be0a48079e9f' => 
    array (
      0 => 'G:\\wamp\\blog\\Application\\Home\\View\\Index_index.html',
      1 => 1510564094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.html' => 1,
  ),
),false)) {
function content_5a179379748ef3_38725468 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
    <meta name="keywords" content="个人博客模板,博客模板,响应式"/>
    <meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。"/>
    <link href="./Public/Home/css/base.css" rel="stylesheet">
    <link href="./Public/Home/css/index.css" rel="stylesheet">
    <link href="./Public/Home/css/media.css" rel="stylesheet">
    <link href="./Public/Home/css/animate.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="./Public/Home/js/modernizr.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <style type="text/css">
        .avatar a{
            background: url('<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['head'];?>
') no-repeat;
            padding-top: 100px;
            width: 160px;
            background-size: 160px 160px;
            display: block;
        }
    </style>
</head>
<body>
<div class="ibody">
    <header>
        <!--class="animated fadeInDown"-->
        <h1><a href="?m=Admin&c=Category&a=showList">如影随形</a></h1>
        <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
        <div class="logo"><a href="/"></a></div>
        <?php $_smarty_tpl->_subTemplateRender("file:nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </header>
    <article>
        <div class="banner">
            <ul class="texts">
                <p>The best life is use of willing attitude, a happy-go-lucky life. </p>
                <p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>
            </ul>
        </div>
        <div class="bloglist">
            <h2>
                <p><span>推荐</span>文章</p>
            </h2>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tuijian']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
            <div class="blogs">
                <h3><a href="?m=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a></h3>
                <figure><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
"></figure>
                <ul>
                    <p><?php echo $_smarty_tpl->tpl_vars['val']->value['jianjie'];?>
</p>
                    <a href="/" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
                </ul>
                <p class="autor"><span>作者：<?php echo $_smarty_tpl->tpl_vars['val']->value['author'];?>
</span>
                    <span>分类：【<a href="/"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a>】</span>
                    <span>浏览（<a href="/"><?php echo $_smarty_tpl->tpl_vars['val']->value['hits'];?>
</a>）</span>
                </p>
                <div class="dateview"><?php echo $_smarty_tpl->tpl_vars['val']->value['ptime'];?>
</div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </article>
    <aside>

        <div class="avatar">
            <a href="??m=Home&c=Article&a=about"><span>关于我</span></a>
        </div>
        <div class="topspaceinfo">
            <h1>执子之手，与子偕老</h1>
            <p>于千万人之中，我遇见了我所遇见的人....</p>
        </div>
        <div class="about_c">
            <p>网名：DanceSmile | <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
</p>
            <p>职业：Web前端设计师、网页设计 </p>
            <p>籍贯：四川省—成都市</p>
            <p>电话：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['phone'];?>
</p>
            <p>邮箱：<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['email'];?>
</p>
        </div>
        <div class="bdsharebuttonbox">
            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
            <a href="#" class="bds_more" data-cmd="more"></a>
        </div>
        <div class="tj_news">
            <h2>
                <p class="tj_t1">最新文章</p>
            </h2>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zuixin']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                <li><a href="?m=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <h2>
                <p class="tj_t2">随机文章</p>
            </h2>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suiji']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                <li><a href="?m=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
        <div class="links">
            <h2>
                <p>友情链接</p>
            </h2>
            <ul>
                <li><a href="/">W3C</a></li>
                <li><a href="/">3DST技术社区</a></li>
            </ul>
        </div>
        <div class="copyright">
            <ul>
                <p> Design by <a href="/">DanceSmile</a></p>
                <p>蜀ICP备11002373号-1</p>
                </p>
            </ul>
        </div>
    </aside>
    <?php echo '<script'; ?>
 src="./Public/Home/js/silder.js"><?php echo '</script'; ?>
>
    <div class="clear"></div>
    <!-- 清除浮动 -->
</div>
</body>
</html>
<?php }
}
