<?php
class CategoryModel extends Model {

    //获取分类数据的方法
    public function getCategory()
    {
        $sql = "select * from category ORDER by id";
        return $this->select($sql);
    }

    //创建一个排序方法
    public function sortCate($data,$pid = 0,$level = 1)
    {
        static $arr = array();
        //排序操作
        foreach ($data as $value) {
            if($value['pid'] == $pid){
                $value['level'] = $level;//给数组添加一个单元 用来控制缩进
                $arr[] = $value;
                $this->sortCate($data,$value['id'],$level+1);
            }
        }
        //返回排好序的数组
        return $arr;
    }
    public function insert(){
        $sql = "insert into category (name,pid) VALUES (:category_name,:pid)";
        return $this->add($sql,$_POST);
    }
//    public function drop($id = array($_GET['id'])){
//        static $pid = array() ;
//        $sqlpid = "select * from category WHERE pid = ?";
//        $row = $this->find($sqlpid,$id);
//        $pid[] = $row['id'];
//
//        $sql = "delete from category WHERE id = ?";
//        $this->delete($sql,$id);
//    }
//
//    public function getnext($pid)
//    {
//        static $arr = array();
//        $arr[] = $pid;
//        $sql = "select * from category WHERE pid = ?";
//        $row = $this->find($sql,$id = array($pid));
//        if($row){
//            $pid = $row['id'];
//            $this->getnext($pid);
//        }
//        return $arr;
//    }

}


?>