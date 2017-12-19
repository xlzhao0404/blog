<?php
class ArticleController extends CommonController {
    public function showBlog()
    {
        $article = new ArticleModel();
        $data = $article->getArticle();
        $this->assign('data',$data);
        $this->display('list.html');
    }

    //显示添加末班
    public function add()
    {
        $cate = new CategoryModel();
        $data  =$cate->getCategory();
        $data = $cate->sortCate($data);
        $this->assign('data',$data);
        $this->display('add.html');
    }
    //添加处理
    public function addHandle()
    {
        $upload = new Upload();
        $filename = $upload->up();
        $_POST['pic'] = $filename;
        $art = new ArticleModel();
        $result = $art->insert();
        if($result){
            echo "<script>alert('添加成功');location.href='?m=Admin&c=Article&a=showBlog'</script>";
        }else{
            echo "<script>alert('添加失败');history.go(-1)</script>";
        }
    }

    public function deleteAll()
    {
        $ids = implode(',',$_POST['id']);
        $sql = "delete from article where id in ($ids)";
        $m = new Model();
        if($m->delete($sql) !== false){
            echo "<script>alert('批量删除成功');location.href='?m=Admin&c=Article&a=showBlog'</script>";
        }else{
            echo "<script>alert('删除失败');history.go(-1)</script>";
        }
    }
}


?>