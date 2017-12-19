<?php
class ArticleModel extends Model {

    public function getArticle()
    {
        $where = '';
        if(!empty($_GET['keywords'])){
            $keywords = $_GET['keywords'];
            $where = "where title like '%$keywords%'";
        }
        $sql = "select a.id,cid,title,ptime,hits,author,c.name from article a JOIN category c on a.cid = c.id ".$where;
        return $this->select($sql);
    }

    public function insert()
    {
        $_POST['ctime'] = time();
        $_POST['hits'] = mt_rand(100,500);
        $sql = "insert into article(cid,title,seotitle,keywords,description,ptime,ctime,hits,jianjie,author,content,pic) 
        VALUES
        (:cid,:title,:seotitle,:keywords,:description,:ptime,:ctime,:hits,:jianjie,:author,:content,:pic)";
        return $this->add($sql,$_POST);
    }

}


?>