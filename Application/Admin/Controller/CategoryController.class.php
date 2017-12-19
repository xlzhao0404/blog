<?php
class  CategoryController extends CommonController {
    //显示分类列表
    public function showList()
    {
        $cate = new CategoryModel();
        $data = $cate->getCategory();
        //调用排序方法
        $data = $cate->sortCate($data);
        $this->assign('data',$data);
        $this->display('list.html');
    }
    //显示添加的方法
    public function add()
    {
        //获取所有的分类并分配到模板
        $cate = new CategoryModel();
        $data = $cate->getCategory();
        $this->assign('data',$cate->sortCate($data));
        $this->display('add.html');
    }
    public function addHandle(){
        $cate = new CategoryModel();
        $result = $cate->insert();
        if($result){
            echo "<script>alert('添加成功');location.href='?m=Admin&c=Category&a=showList'</script>";
        }else{
            echo "<script>alert('添加失败');history.go(-1)</script>";

        }
    }

    public function delete()
    {
        $cate = new CategoryModel();
        $result = $cate->drop();
        if($result){
            echo "<script>alert('删除成功');location.href='?m=Admin&c=Category&a=showList'</script>";
        }else{
            echo "<script>alert('添加失败');history.go(-1)</script>";
        }
    }


}
?>