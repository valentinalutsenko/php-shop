<?php

use App\Controllers\Products\ProductController;

return [
    '/' => function () {
        $product = new ProductController();
        $product->show();

    },
     '/product' => function () {
        echo 'Product';
    }
];