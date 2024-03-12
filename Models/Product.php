<?php

declare(strict_types=1);

namespace Models;

use Core\Database;
use PDOException;

class Product
{
    public $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    public function get_all(): array
    {
        try {
            $sql = "SELECT * FROM products;";
            $products = $this->db->runSQL($sql)->fetchAll();
        } catch (PDOException $e) {
            throw $e;
        }
        return $products;
    }
    public function get($product_id)
    {
        try {
            $sql = "SELECT * FROM products WHERE product_id = :product_id;";
            $product = $this->db->runSQL($sql, [":product_id" => $product_id])->fetch();
        } catch (PDOException $e) {
            throw $e;
        }
        return $product;
    }
    public function add_to_cart($product)
    {
        try {
            $values = [
                ":user_id" => 0,
                ":product_id" => $product["product_id"],
                ":product_name" => $product["product_name"],
                ":price" => $product["price"],
                ":file_name" => $product["file_name"],
            ];

            $sql = 'INSERT INTO cart (user_id, product_id, product_name, price, file_name) 
                    VALUES (:user_id, :product_id, :product_name, :price, :file_name)';
            $result = $this->db->runSQL($sql, $values);
            return $result;
        } catch (PDOException $e) {
            throw $e;
        }
    }
}
