<?php
class LoginController extends  Controller {

    public function login()
    {
        if(isset($_SESSION['admin'])){
            $this->display('index.html');
        }else{
            $this->display('login.html');
        }
    }

    public function logout()
    {
        //清除session信息
        $_SESSION['admin'] = '';
        $this->display('login.html');
    }
    //处理登陆的方法
    public function loginHandle()
    {
        //判断验证码是否正确

        if(strtolower($_POST['yzm']) != strtolower($_SESSION['code'])){
            echo "<script>alert('验证码错误');history.go(-1)</script>";
            die;
        }
        $login = new LoginModel();
        $result = $login->check();
        if($result){
            //登录成功，记录用户信息到session
            $_SESSION['admin'] = $result;
            echo "<script>alert('登录成功');location.href='?m=Admin';</script>";
        }else{
            echo "<script>alert('登录失败');history.go(-1);</script>";
            //登录失败
        }
    }

    public function yzm()
    {
        $v = new Verify();
        $v->yzm();
    }
}

?>