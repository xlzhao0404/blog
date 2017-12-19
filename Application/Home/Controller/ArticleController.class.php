<?php

class ArticleController extends Controller {
    public function show()
    {
        $art = new ArticleModel();
        $res = $art->getArticleById();
        $this->assign('data',$res);

        $sql = "select p.*,u.username,u.head from pinglun p JOIN user u on p.user_id = u.id 
where article_id = ".$_GET['id'];
        $this->assign('pinglun',$art->select($sql));

        $sql = "select * from article where cid = ".$res['cid'];
        $res = $art->select($sql);
        $count = count($res);
        for($i = 0;$i < $count;$i++){
            if($res[$i]['id'] == $_GET['id']){
                $shangxia['previd'] = isset($res[$i-1]['id'])?$res[$i-1]['id']:'';
                $shangxia['prevtitle'] = isset($res[$i-1]['title'])?$res[$i-1]['title']:'';
                $shangxia['nextid'] = isset($res[$i+1]['id'])?$res[$i+1]['id']:'';
                $shangxia['nexttitle'] = isset($res[$i+1]['title'])?$res[$i+1]['title']:'';
            }
        }
        $this->assign('shangxia',$shangxia);

        $this->assign('aside',$art->getCategoryByChildId());

        $this->display('news.html');


    }

    public function showlist()
    {
        $art = new ArticleModel();
        $id = $_GET['id'];
        $sql = "select count(*) from article a JOIN category c on a.cid = c.id 
where cid in (SELECT id from category WHERE pid = $id)";
        $count = $art->count($sql,array($id));

        $page = new Page($count,2);
        $page->config = array(
            'first'=>'<<',
            'prev'=>'上页',
            'next'=>'>',
            'last'=>'>>',
            'theme'=>'prev link next'
        );

        $sql = "select a.*,c.name from article a JOIN category c on a.cid = c.id 
where cid in (SELECT id from category WHERE pid = $id) limit ".$page->start.','.$page->pageSize;
        $this->assign('asidename',$art->getCategory()['name']);
        $this->assign('asideid',$art->getCategory()['id']);
        $this->assign('data',$art->select($sql));


        $fenye = $page->fenye();
        $this->assign('fenye',$fenye);
        $this->display('newslist.html');
    }

    public function showlist2()
    {
        $art = new ArticleModel();
        $cid = $_GET['id'];
        $sql = "select count(*) from article a JOIN category c on a.cid = c.id WHERE cid = $cid";
        $count = $art->count($sql);

        $page = new Page($count,2);
        $page->config = array(
            'first'=>'<<',
            'prev'=>'上页',
            'next'=>'>',
            'last'=>'>>',
            'theme'=>'prev link next'
        );

        $sql = "select a.*,c.name from article a JOIN category c on a.cid = c.id WHERE cid = $cid limit ".$page->start.','.$page->pageSize;

        $fenye = $page->fenye();
        $this->assign('asidename',$art->getCategoryByCategoryId()['name']);
        $this->assign('asideid',$art->getCategoryByCategoryId()['id']);
        $this->assign('fenye',$fenye);
        $this->assign('data',$art->select($sql));

        $this->display('newslist2.html');
    }

    public function addPinglun()
    {
        $sql = "insert into pinglun(article_id,user_id,ctime,content)
VALUES 
(:article_id,:user_id,:ctime,:content)";
        $id = $_POST['article_id'];
        $m = new Model();
        if($m->add($sql,$_POST)){
            echo "<script>alert('发布评论成功');location.href='?c=Article&a=show&id=$id'</script>";
        }else{
            echo "<script>alert('评论失败');history.go(-1)</script>";
        }
    }

    public function about()
    {
        $art = new ArticleModel();
        $this->assign('userinfo',$art->getUserInfo());
        $this->display('about.html');
    }

}

?>