<?php
/* Smarty version 3.1.30, created on 2017-11-24 11:35:56
  from "G:\wamp\blog\Application\Home\View\Article_news.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a17939cbc12a1_99705725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aea42290eb67a429b658d7fc381cc705e9bc133' => 
    array (
      0 => 'G:\\wamp\\blog\\Application\\Home\\View\\Article_news.html',
      1 => 1509612319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.html' => 1,
  ),
),false)) {
function content_5a17939cbc12a1_99705725 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
    <meta name="keywords" content="个人博客模板,博客模板,响应式"/>
    <meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。"/>
    <link href="./Public/Home/css/base.css" rel="stylesheet">
    <link href="./Public/Home/css/style.css" rel="stylesheet">
    <link href="./Public/Home/css/media.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="./Public/Home/js/modernizr.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
<div class="ibody">
    <header>
        <h1>如影随形</h1>
        <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
        <div class="logo"><a href="/"></a></div>
        <?php $_smarty_tpl->_subTemplateRender("file:nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </header>
    <article>
        <h2 class="about_h">
            您现在的位置是：
            <a href="/">首页</a>
            <a href="1/">模板分享</a>
            <a href="1/">个人博客模板</a>
        </h2>
        <div class="index_about">
            <h2 class="c_titile"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h2>
            <p class="box_c">
                <span class="d_time">发布时间：<?php echo $_smarty_tpl->tpl_vars['data']->value['ptime'];?>
</span>
                <span>分类：<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</span>
                <span>浏览（<?php echo $_smarty_tpl->tpl_vars['data']->value['hits'];?>
）</span>
                <span>评论览（14）</span>
            </p>
            <ul class="infos">
                <p><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</p>
                <p><b>效果图：</b></p>
                <p><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" width="500"></p>
            </ul>
            <div class="keybq">
                <p><span>关键字词</span>：黑色,个人博客,时间轴,响应式</p>
            </div>
            <div class="nextinfo">
                <?php if (!empty($_smarty_tpl->tpl_vars['shangxia']->value['previd'])) {?>
                <p>上一篇：<a href="?m=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['shangxia']->value['previd'];?>
"><?php echo $_smarty_tpl->tpl_vars['shangxia']->value['prevtitle'];?>
</a></p>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['shangxia']->value['nextid'])) {?>
                <p>下一篇：<a href="?m=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['shangxia']->value['nextid'];?>
"><?php echo $_smarty_tpl->tpl_vars['shangxia']->value['nexttitle'];?>
</a></p>
                <?php }?>
            </div>
            <!--评论 start-->
            <div class="pinglun">
                <h2>精彩评论</h2>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pinglun']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                    <li>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['head'];?>
">
                        <div class="parea">
                            <div class="sender"><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</div>
                            <p class="pcontent"><?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</p>
                            <div>
                                <span>2016-11-11</span>
                            </div>
                        </div>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <?php if (isset($_SESSION['user'])) {?>
                <form action="?c=Article&a=addPinglun" method="post">
                    <textarea name="content"></textarea>
                    <input type="hidden" name="article_id" value="<?php echo $_GET['id'];?>
">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user']['id'];?>
">
                    <input type="hidden" name="ctime" value="<?php echo time();?>
">
                    <input type="submit" value="发表">
                </form>
                <?php } else { ?>
                <p style="color: red;line-height: 30px;">请先<a href="?c=User&a=login">登录</a> 再进行评论</p>
                <?php }?>
            </div>
            <!--评论 end-->
            <div class="otherlink">
                <h2>相关文章</h2>
                <ul>
                    <li><a href="/news/s/2013-07-25/524.html" title="现在，我相信爱情！">现在，我相信爱情！</a></li>
                    <li><a href="/newstalk/mood/2013-07-24/518.html" title="我希望我的爱情是这样的">我希望我的爱情是这样的</a></li>
                    <li><a href="/newstalk/mood/2013-07-02/335.html" title="有种情谊，不是爱情，也算不得友情">有种情谊，不是爱情，也算不得友情</a></li>
                    <li><a href="/newstalk/mood/2013-07-01/329.html" title="世上最美好的爱情">世上最美好的爱情</a></li>
                    <li><a href="/news/read/2013-06-11/213.html" title="爱情没有永远，地老天荒也走不完">爱情没有永远，地老天荒也走不完</a></li>
                    <li><a href="/news/s/2013-06-06/24.html" title="爱情的背叛者">爱情的背叛者</a></li>
                </ul>
            </div>
        </div>
    </article>
    <aside>
        <div class="rnav">
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 3+1 - (0) : 0-(3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li class="rnav<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
 "><a href="/"><?php echo $_smarty_tpl->tpl_vars['aside']->value['name'][$_smarty_tpl->tpl_vars['i']->value];?>
</a></li>
            <?php }
}
?>

        </div>
        <div class="ph_news">
            <h2>
                <p>点击排行</p>
            </h2>
            <ul class="ph_n">
                <li><span class="num1">1</span><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
                <li><span class="num2">2</span><a href="/">励志人生-要做一个潇洒的女人</a></li>
                <li><span class="num3">3</span><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
                <li><span>4</span><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
                <li><span>5</span><a href="/">女生清新个人博客网站模板</a></li>
                <li><span>6</span><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
                <li><span>7</span><a href="/">Column 三栏布局 个人网站模板</a></li>
                <li><span>8</span><a href="/">时间煮雨-个人网站模板</a></li>
                <li><span>9</span><a href="/">花气袭人是酒香—个人网站模板</a></li>
            </ul>
            <h2>
                <p>栏目推荐</p>
            </h2>
            <ul>
                <li><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
                <li><a href="/">励志人生-要做一个潇洒的女人</a></li>
                <li><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
                <li><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
                <li><a href="/">女生清新个人博客网站模板</a></li>
                <li><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
                <li><a href="/">Column 三栏布局 个人网站模板</a></li>
                <li><a href="/">时间煮雨-个人网站模板</a></li>
                <li><a href="/">花气袭人是酒香—个人网站模板</a></li>
            </ul>
            <h2>
                <p>最新评论</p>
            </h2>
            <ul class="pl_n">
                <dl>
                    <dt><img src="./Public/Home/images/s8.jpg"></dt>
                    <dt></dt>
                    <dd>DanceSmile
                        <time>49分钟前</time>
                    </dd>
                    <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
                </dl>
                <dl>
                    <dt><img src="./Public/Home/images/s7.jpg"></dt>
                    <dt></dt>
                    <dd>yisa
                        <time>2小时前</time>
                    </dd>
                    <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
                </dl>
                <dl>
                    <dt><img src="./Public/Home/images/s6.jpg"></dt>
                    <dt></dt>
                    <dd>小林博客
                        <time>8月7日</time>
                    </dd>
                    <dd><a href="/">博客色彩丰富，很是好看</a></dd>
                </dl>
                <dl>
                    <dt><img src="./Public/Home/images/003.jpg"></dt>
                    <dt></dt>
                    <dd>DanceSmile
                        <time>49分钟前</time>
                    </dd>
                    <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
                </dl>
                <dl>
                    <dt><img src="./Public/Home/images/002.jpg"></dt>
                    <dt></dt>
                    <dd>yisa
                        <time>2小时前</time>
                    </dd>
                    <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
                </dl>
            </ul>
            <h2>
                <p>最近访客</p>
                <ul>
                    <img src="./Public/Home/images/vis.jpg"><!-- 直接使用“多说”插件的调用代码 -->
                </ul>
            </h2>
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
