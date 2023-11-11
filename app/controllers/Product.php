<?php
class Product {

    public $model;
    public function __construct()
    {
        require_once '/models/Product.php';
//        $this->model = new Product();
    }

    public function index() {
        echo 'Danh sách sản phẩm';
    }
}
