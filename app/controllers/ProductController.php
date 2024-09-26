<?php
require_once '../models/Product.php';

class ProductController
{
    private $productModel;

    public function __construct($db)
    {
        $this->productModel = new Product($db);
    }

    // Tüm ürünleri listele
    public function index()
    {

        $products = $this->productModel->getAll();
        echo $products;
        return $this->view('../views/templates/list.php', [
            'products' => $products
        ]);
    }

    // Ürün detaylarını göster
    public function show($id)
    {
        $product = $this->productModel->getById($id);
        return $this->view('../views/templates/detail.php', [
            'product' => $product
        ]);
    }


    // View metodunu tanımla
    protected function view($view, $data = [])
    {
        // Verileri yerel değişkenler olarak çıkar
        extract($data);
        include $view;
    }
}
