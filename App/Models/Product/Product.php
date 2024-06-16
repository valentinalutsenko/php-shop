<?php

namespace App\Models\Product;

use core\DataBase;

class Product
{

    const SHOW_BY_DEFAULT = 9;
    public function getProducts($count = self::SHOW_BY_DEFAULT, $page = 1): array
    {
        //получаем целое число
        $count = intval($count);
        $page = intval($page);
        $offset = $page * $count;

        $db = DataBase::getConnection();

        $result = $db->query('SELECT id, position, url, name, price, notice, content, visible FROM product');
;

        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['position'] = $row['position'];
            $productsList[$i]['url'] = $row['url'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['notice'] = $row['notice'];
            $productsList[$i]['content'] = $row['content'];
            $productsList[$i]['visible'] = $row['visible'];
            $i++;
        }
        return $productsList;
    }
}
