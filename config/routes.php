<?php

use App\Controllers\Products\ProductController;

return [
    '/' => function () {
        $product = new ProductController();
        $product->index();

    },
    '/product/page?id=([0-9]+)' => function () {
        $product = new ProductController();
        $product->show($_GET['id']);
    },
];
