<?php

namespace App\Controllers\Products;

use App\Models\Product\Product;

class ProductController
{
    /**
     * @return void
     */
    public function index(): void
    {
        $productsModel = new Product();
        $products = $productsModel->getProducts();

        include __DIR__.DIRECTORY_SEPARATOR.'../../Views/Products/products.php';
    }

    /**
     * @param $productId
     * @return void
     */
    public function show($productId): void
    {
        $productsModel = new Product();
        $product = $productsModel->getProductId($productId);
        include __DIR__.DIRECTORY_SEPARATOR.'../../Views/Products/product.php';
    }
}
