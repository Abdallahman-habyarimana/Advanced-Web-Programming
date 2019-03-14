<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 3/13/2019
 * Time: 7:40 PM
 */

class User
{
    protected $connection = null;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=development", 'root', '');
    }

    public function load($id){
        $sql = 'SELECT * FROM users WHERE user_id = ' . (int) $id;
        $result = $this->connection->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);

        foreach($row as $column => $value ) {
            $this->$column = $value;
        }
    }
}

