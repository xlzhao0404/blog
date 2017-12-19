<?php
class Db {
    public $pdo;
    private static $ins = null;
    private function __construct(){
        $this->conn();
    }
    private function __clone(){}
    public static function getIns(){
        if(self::$ins === null){
            self::$ins = new self;
        }
        return self::$ins;
    }
    //连接数据库
    private function conn(){
        $dsn = "mysql:host={$GLOBALS['conf']['DB_HOST']}; dbname={$GLOBALS['conf']['DB_NAME']}; charset={$GLOBALS['conf']['DB_CHARSET']}";
        $this->pdo = new PDO($dsn, $GLOBALS['conf']['DB_USER'], $GLOBALS['conf']['DB_PWD'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
}
?>