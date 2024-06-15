<?php

namespace App\Controllers\Products;

use App\Models\Product\Product;

class ProductController
{
    public function show ()
    {
        $name = new Product();
        $name->index();

        include __DIR__.DIRECTORY_SEPARATOR.'../../Views/Products/product.php';
    }
}
