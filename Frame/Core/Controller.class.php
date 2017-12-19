<?php
class Controller {
    protected $smarty;
    //构造方法
    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(VIEW_PATH);
        $this->smarty->setCompileDir(APP_PATH . 'Runtime');

    }

    //重写display
    protected function display($template){
        $this->smarty->display(C . '_' . $template);
    }
    //重写assign
    protected function assign($tpl_var, $value){
        $this->smarty->assign($tpl_var, $value);
    }

}
?>