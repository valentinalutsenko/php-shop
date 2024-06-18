<?php

namespace App\Models\Product;

use core\DataBase;
use PDO;

class Product
{
    /**
     *
     */
    const SHOW_BY_DEFAULT = 9;

    /**
     * @param $count
     * @param $page
     * @return array
     */
    public function getProducts($count = self::SHOW_BY_DEFAULT, $page = 1): array
    {
        //получаем целое число
        $count = intval($count);
        $page = intval($page);
        $offset = $page * $count;

        $db = DataBase::getConnection();

        $result = $db->query('SELECT id, position, url, name, price, notice, content, visible FROM product');

        $productsList = [];
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

    /**
     * @param $id
     * @return mixed|void
     */
    public function getProductId($id)
    {
        $id = intval($id);

        if ($id) {

            $db = DataBase::getConnection();

            $result = $db->query('SELECT * FROM product WHERE id ='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }
}
