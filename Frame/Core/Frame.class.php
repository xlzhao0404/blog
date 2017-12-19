<?php
class Frame {
    public static function run(){
        //依次调用其他方法
        self::startSession();
        self::readConfig(); //读取配置
        self::getParams();
        self::setConst();
        self::autoLoad();
        self::dispatch();
    }

    //开启session
    public static function startSession(){
        session_start();
    }

    //读取配置
    public static function readConfig(){
        //读取配置
        $config = include_once './Frame/Config/config.php';
        //定义成GLOBAL
        $GLOBALS['conf'] = $config;
    }

    //获取地址栏参数
    public static function getParams(){
        $m = isset($_GET['m']) ? $_GET['m'] : $GLOBALS['conf']['DEFAULT_M'];
        define('M', $m);
        $c = isset($_GET['c']) ? $_GET['c'] : $GLOBALS['conf']['DEFAULT_C'];
        define('C', $c);
        $a = isset($_GET['a']) ? $_GET['a'] : $GLOBALS['conf']['DEFAULT_A'];
        define('A', $a);
    }

    //分发控制器
    public static function dispatch(){
        $controller = C . 'Controller'; //StudentController
        $obj = new $controller();
        $action = A;
        $obj->$action();
    }

    //自动加载，可以解决所有的类的加载问题
    public static function autoLoad(){
        spl_autoload_register(function($class_name){
            //CORE
            $file = FRAME_PATH . 'Core/' . $class_name . '.class.php';
            if(file_exists($file)) include_once $file;
            //Smarty
            $file = FRAME_PATH . 'Smarty/' . $class_name . '.class.php';
            if(file_exists($file)) include_once $file;
            //Controller
            $file = CONTROLLER_PATH . $class_name . '.class.php';
            if(file_exists($file)) include_once $file;
            //Model
            $file = MODEL_PATH . $class_name . '.class.php';
            if(file_exists($file)) include_once $file;
        });
    }


    //设置路径常量，方便找类的位置，也方便其他一些路径的设置
    public static function setConst(){
        //设置Frame文件夹路径为常量，设置成绝对路径，这样加载速度更快
        $frame = str_replace('Core', '', __DIR__);
        $frame = str_replace('\\', '/', $frame);
        define('FRAME_PATH', $frame);
        //设置控制器目录
        define('CONTROLLER_PATH', APP_PATH . M . '/Controller/');
        //设置模型目录
        define('MODEL_PATH', APP_PATH . M . '/Model/');
        //设置模板目录
        define('VIEW_PATH', APP_PATH . M . '/View/');
    }

}
?>





