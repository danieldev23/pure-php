<?php
//namespace controllers;

class Home extends Controller {

    public $home_model;
//public $model;
    public function __construct()
    {
//        $this->model = "HomeModel";
//        echo '\models\\'.$this->model;
//        require_once (_DIR_ROOT_.'/app/models/HomeModel.php');
        $this->home_model = new \models\HomeModel();
        $this->home_model = $this->model('HomeModel');
        var_dump($this->home_model);
//        echo $this->home_model->getPr
    }

    public function index() {
        $data = $this->home_model->getProduct();
        print_r($data);
        print_r('</pre>');
        echo "Trang chủ";
    }

    public function detail($id, $slug) {
         echo 'Id sản phầm: '.$id.'</br>';
         echo 'Slug: ' .$slug;
    }
}
