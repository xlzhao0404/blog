<?php

class Upload {

    private $info = array();
    public $size = 5;
    public $ext = array('jpg', 'gif', 'png');

    public function __construct()
    {
        $arr = array_values($_FILES);
        $this->info = $arr[0];
    }

    public function error()
    {
        $err = array(
            1 => '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。',
            2 => '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。',
            3 => '文件只有部分被上传。',
            4 => '没有文件被上传。',
            6 => '找不到临时文件夹。PHP 4.3.10 和 PHP 5.0.3 引进。 ',
            7 => '文件写入失败。'
        );
        if (array_key_exists($this->info['error'], $err)) {
            exit($this->info['error']);
        }
    }

    private function checkSize()
    {
        if ($this->info['size'] > $this->size * 1024 * 1024) {
            die('文件过大');
        }
    }

    private function getExt()
    {
        $s = strrchr($this->info['name'], '.');
        return ltrim($s, '.');
    }

    private function checkExt()
    {
        $ext = strtolower($this->getExt());
        if (!in_array($ext, $this->ext)) {
            exit('后缀不对');
        }
    }

    private function makeDir()
    {
        $dir = date('Y-m-d');
        if (!file_exists('./Public/Upload/' . $dir)) {
            mkdir('./Public/Upload/' . $dir, 0777, true);
        }
        return $dir;
    }

    private function makeName()
    {
        return uniqid();
    }

    public function up()
    {
        $this->error();
        $this->checkSize();
        $this->checkExt();
        $dir = $this->makeDir();
        $name = $this->makeName();
        $ext = $this->getExt();

        $filename = './Public/Upload/'.$dir.'/'.$name.'.'.$ext;
        if (is_uploaded_file($_FILES['pic']['tmp_name'])) {
            if (move_uploaded_file($_FILES['pic']['tmp_name'], $filename)) {

                return $filename;
            }
        }
    }


}


?>