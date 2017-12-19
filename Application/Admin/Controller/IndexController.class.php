<?php
class IndexController extends CommonController{
    public function index()
    {
        if(!isset($_SESSION['admin'])){
            echo "<script>alert('请先登录');location.href='?m=Admin&c=Login&a=login'</script>";
        }
        //显示后台首页
        $this->display('index.html');
    }
}


/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017\10\26 0026
 * Time: 14:07
 */