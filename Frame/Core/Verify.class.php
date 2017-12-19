<?php
class Verify {
    public function yzm()
    {
        //1.创建于一个画布
        $image = imagecreatetruecolor(200,75);
        //5.美化图像
        //背景颜色
        $bgcolor = imagecolorallocate($image,mt_rand(0,127),mt_rand(0,127),mt_rand(0,127));
        imagefill($image,0,0,$bgcolor);
        //清除ob缓存 否则可能缓存中有东西导致输出失败
        //生成验证码
        //$default_str = '0123456789abcdefghijklmnopqrstuvwsyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $default_str = '1234';
        $shuffle_str = str_shuffle($default_str);
        $str = substr($shuffle_str,0,4);
        //将验证码存放到session中
        $_SESSION['code'] = $str;
        //写字
        for($i = 0 ;$i<4;$i++){
            $ttfcolor = imagecolorallocate($image,mt_rand(128,255),mt_rand(128,255),mt_rand(128,255));
            imagettftext($image,50,mt_rand(-15,15),10+(180/4)*$i,70,$ttfcolor,FRAME_PATH.'Core/DroidSerif.ttf',$str[$i]);
        }
        ob_clean();
        //2.设置header头
        header('content-type::image/png');
        //3.输出图像
        imagepng($image);
        //4.销毁图像
        imagedestroy($image);
    }
}


?>