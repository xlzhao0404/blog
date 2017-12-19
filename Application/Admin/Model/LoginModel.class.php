<?php
class LoginModel extends Model {
    //检测管理员名和密码是否正确
    public function check()
    {
        $user = $_POST['user'];
        $pwd = md5($_POST['pwd']);
        $sql = "select * from admin WHERE adminname = '$user' and pwd = '$pwd'";
        return $this->find($sql);//如果查到 返回非空数组 如果没查到 返回空数组；
    }


}


?>