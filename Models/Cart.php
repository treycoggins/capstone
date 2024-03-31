<?php

namespace Models;

use Core\Database;
use PDOException;

class Cart
{
    protected $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    public function get_all($user)
    {
        try {
            $sql = 'SELECT * FROM cart WHERE user_id = :user_id';
            $items = $this->db->runSQL($sql, [":user_id" => $user["user_id"]])->fetchAll();
        } catch (PDOException $e) {
            throw $e;
        }
        return $items;
    }
    public function add($user, $product)
    {
        try {
            $values = [
                ":user_id" => $user["user_id"],
                ":product_id" => $product["product_id"],
            ];

            $sql = 'INSERT INTO cart (user_id, product_id) 
                    VALUES (:user_id, :product_id)';
            $result = $this->db->runSQL($sql, $values);
            return $result;
        } catch (PDOException $e) {
            throw $e;
        }
    }
    public function delete($id)
    {
        $sql = "SELECT * FROM cart JOIN  WHERE product_id = :id";
        $item = $this->db->runSQL($sql, [":id" => $id]);
    }
}
