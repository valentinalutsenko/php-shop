<?php

use App\Controllers\Products\ProductController;

return [
    '/' => function () {
        $product = new ProductController();
        $product->index();

    },
    '/product/4' => function () {
        $product = new ProductController();
        $product->show(4);
    },
];
