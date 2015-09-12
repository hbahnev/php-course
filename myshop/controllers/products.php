<?php


namespace Controllers;


class Products_Controller extends Master_Controller
{

    public function __construct(){
    parent::__construct();
}
    public function index(){
        $template_name = DX_ROOT_DIR.'/views/products/index.php';
        include_once $this->layout;
    }
}