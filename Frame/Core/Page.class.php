<?php
class Page{
    public $p = 1;
    public $pageSize = 5;
    public $start;
    public $maxPage;
    public $link = 5;
    public $config = array(
        'first'=>'<<',
        'prev'=>'<',
        'next'=>'>',
        'last'=>'>>',
        'theme'=>'prev link next'
    );

    public function __construct($count,$pageSize = 5)
    {
        $this->p = isset($_GET['p'])?$_GET['p']:1;
        $this->pageSize = $pageSize;
        $this->start = ($this->p - 1) * $this->pageSize;
        $this->maxPage = ceil($count/$this->pageSize);
    }

    public function fenye()
    {
        $param = $_GET;
        if(isset($param['p'])){
            unset($param['p']);
        }
        $default_params = '';
        foreach ($param as $key=>$value) {
            $default_params .= $key.'='.$value.'&';
        }

        $s = $this->p - floor($this->link/2);
        $e = $this->p + floor($this->link/2);

        if($this->p <= floor($this->link/2)){
            if($this->maxPage<$this->link){

                $s = 1;
                $e = $this->maxPage;
            }else{
                $s = 1;
                $e = $this->link;
            }
        }
        if($this->p + floor($this->link/2) > $this->maxPage){
            $s = $this->maxPage - $this->link + 1;
            $e = $this->maxPage;
        }
        if($this->link > $this->maxPage){
            $s = 1;
            $e = $this->maxPage;
        }

        $first = "<a href='?{$default_params}p=1'>{$this->config['first']}</a>";
        if($this->p <= 1){
            $prev = "<a href='javascript:void(0);'>{$this->config['prev']}</a>";
        }else{
            $prev = "<a href='?{$default_params}p=".($this->p-1)."'>{$this->config['prev']}</a>";
        }
        $link = '';
        for($i = $s ;$i<= $e;$i++){
            if($this->p == $i){
                $link .= "<b>$i</b>";
            }else{
                $link .= "<a href='?{$default_params}p=$i'>$i</a>";
            }
        }
        if($this->p >= $this->maxPage){
            $next = "<a href='javascript:void(0);'>{$this->config['next']}</a>";
        }else{
            $next = "<a href='?{$default_params}p=".($this->p+1)."'>{$this->config['next']}</a>";
        }
        $last = "<a href='?{$default_params}p={$this->maxPage}'>{$this->config['last']}</a>";
        $str = '';
        $arr = explode(' ',$this->config['theme']);
        foreach($arr as $val){
            $str .= $$val;
        }
        return $str;
    }
}




?>