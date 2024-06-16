<?php

namespace App\Controllers\Products;

use App\Models\Product\Product;

class ProductController
{
    public function show (): void
    {
        $productsModel = new Product();
        $products = $productsModel->getProducts();

        include (__DIR__ . DIRECTORY_SEPARATOR . '../../Views/Products/products.php');
    }
}
