<?php

class IndexController extends Controller {
//    显示前台首页的方法
    public function index()
    {
        $art = new ArticleModel();

        $this->assign('tuijian',$art->getThuijianArticleByHits());

        $this->assign('zuixin',$art->getZuixinArticleByPtime());

        $this->assign('userinfo',$art->getUserInfo());

        $this->assign('suiji',$art->getSuijiArticle());

        $this->display('index.html');
    }
}

?>