<?php

abstract class Model
{

    protected const TABLE = '';

    public int $id;

    public static function findAll(): array
    {
        $db = new Db();
        $sql = 'SELECT * FROM'. ' ' . static::TABLE;
        return $db->query($sql, static::class, []);

    }
    public static function findById () {
        $data[] = $_GET['id'];
        $db = new Db();
        $sql = 'SELECT * FROM'. ' ' . static::TABLE . ' WHERE id = ?';
        $result = $db->query($sql, static::class, $data);
        if (!$result){
            return FALSE;
        } else {
            return $result;
        }

    }
}
