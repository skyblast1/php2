<?php

namespace Models;

use Db;
use Model;

class Product extends Model
{

    protected const TABLE = 'products';

    public string $title;
    public int $price;

    public static function findByLowPrice () {
        $data[] = $_GET['price'];
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE price = ? ';
        return $db->query($sql, static::class, $data);
    }

}
