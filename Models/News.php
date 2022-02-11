<?php

namespace Models;

use Model;
use Db;

class News extends Model {

    protected const TABLE = 'News';

    public static function findLast3 () {

        $db  = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY date DESC LIMIT 3';
        return $db->query($sql, static::class,[]);
    }
}