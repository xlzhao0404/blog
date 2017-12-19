<?php

class CommonController extends Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['admin'])){
            echo "<script>alert('请先登录');location.href='?m=Admin&c=Login&a=login'</script>";
        }
    }




}




?>