<?php
class UserController extends Controller {


    public function register()
    {
        $this->display('register.html');
    }

    public function code()
    {
        $verify = new Verify();
        $verify->yzm();
    }

    public function registerHandle()
    {
        if(strtolower($_POST['yzm'])!=strtolower($_SESSION['code'])){
            echo "<script>alert('验证码错误');history.back();</script>";
            exit();
        }
        if($_POST['pwd']!== $_POST['repwd']){
            echo "<script>alert('密码不一致');history.back();</script>";
            exit();
        }

        $upload = new Upload();
        $file = $upload->up();
        $_POST['head'] = $file;
        $_POST['ctime'] = time();
        $_POST['client_ip'] = $_SERVER['REMOTE_ADDR'];
        $_POST['pwd'] = md5($_POST['pwd']);
        unset($_POST['repwd']);
        unset($_POST['yzm']);
        $sql = "insert into USER (username,pwd,phone,email,head,ctime,client_ip)VALUES 
(:username,:pwd,:phone,:email,:head,:ctime,:client_ip)";
        $m = new  Model();
        if($m->add($sql,$_POST)){
            echo "<script>alert('注册成功');location.href='index.php?c=User&a=login';</script>";
        }else {
            echo "<script>alert('注册失败');history.back();</script>";
        }

    }

    public function login()
    {
        $this->display('login.html');
    }

    public function loginHandle()
    {
        if(strtolower($_POST['yzm'])!=strtolower($_SESSION['code'])) {
            echo "<script>alert('验证码错误');history.back();</script>";
            exit();
        }
        $username = $_POST['username'];
        $pwd = md5($_POST['pwd']);
        $sql = "select * from user WHERE username=? and pwd=?";
        $m = new Model();
        if($row = $m->find($sql,array($username,$pwd))){
            $_SESSION['user'] = $row;
            echo "<script>alert('登陆成功');location.href='index.php';</script>";
        }else{
            echo "<script>alert('登录失败');history.back();</script>";
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        echo "<script>alert('退出成功');location.href='index.php';</script>";
    }
}




?>