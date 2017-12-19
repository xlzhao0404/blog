<?php
class ArticleModel extends Model {
    public function getThuijianArticleByHits()
    {
        $sql = "select a.*,c.name from article a JOIN  category c ON a.cid = c.id ORDER by hits desc limit 5";
        return $this->select($sql);
    }

    public function getZuixinArticleByPtime()
    {
        $sql = "select * from article ORDER BY ptime desc limit 8";
        return $this->select($sql);
    }

    public function getUserInfo()
    {
        if(isset($_SESSION['user'])){
            $username = $_SESSION['user']['username'];
            $sql = "select * from user where username = '$username'";
            return $this->find($sql);
        }else{
            return array(
                'username'=> '即步非烟',
                'head'=>'./Public/Home/images/photos.jpg',
                'phone'=>'13662012345',
                'email'=>'dancesmiling@qq.com',
            );
        }
    }

    public function getArticleById()
    {
        $id = $_GET['id'];
        $sql = "select a.*,name from article a JOIN category c on a.cid = c.id where a.id = ?";
        return $this->find($sql,array($id));
    }
    public function getAllArticle(){
        $id = $_GET['id'];
        $sql = "select a.*,c.name from article a JOIN category c on a.cid = c.id where cid in (SELECT id from category WHERE pid = $id)";
        return $this->select($sql);
    }
    public function getCategory(){
        $id = $_GET['id'];
        $sql = "select * from category WHERE pid = $id";
        $res = $this->select($sql);
        $name = array();
        $id = array();
        foreach ($res as $val) {
            $id[] = $val['id'];
            $name[] = $val['name'];
        }
        return array('id'=>$id,'name'=>$name);
    }

//    public function getArticleByCid()
//    {
//        $cid = $_GET['id'];
//        $sql = "select a.*,c.name from article a JOIN category c on a.cid = c.id WHERE cid = $cid";
//        return $this->select($sql);
//    }

    public function getSuijiArticle()
    {
        $sql = "select id from article";
        $id=$this->select($sql);
        $arr = array();
        foreach ($id as $val) {
            $arr[] = $val['id'];
        }
        $key = array_rand($arr,8);
        $randid = array();
        foreach($key as $k){
            $randid[] = $arr[$k];
        }
        $randid = implode(',',$randid);
        $sql = "select * from article WHERE id in ($randid)";
        $res = $this->select($sql);
        return $res;
    }

    public function getCategoryByChildId()
    {
        $id = $_GET['id'];
        $sql = "select * from category WHERE pid = (select pid from category WHERE id = (SELECT cid from article WHERE id = $id))";
        $res = $this->select($sql);
//        $arr = array();
//        foreach ($res as $val) {
//            $arr[] = $val['name'];
//        }
//        return $arr;
        $name = array();
        $id = array();
        foreach ($res as $val) {
            $id[] = $val['id'];
            $name[] = $val['name'];
        }
        return array('id'=>$id,'name'=>$name);
    }

    public function getCategoryByCategoryId()
    {
        $id = $_GET['id'];
        $sql = "select * from category WHERE pid = (select pid FROM  category WHERE id = $id)";
        $res = $this->select($sql);
        $name = array();
        $id = array();
        foreach ($res as $val) {
            $id[] = $val['id'];
            $name[] = $val['name'];
        }
        return array('id'=>$id,'name'=>$name);

    }

}




?>