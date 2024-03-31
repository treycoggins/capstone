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
    public function get_all()
    {
        try {
            $sql = "SELECT * FROM products;";
            $products = $this->db->runSQL($sql)->fetchAll();
            return $products;
        } catch (PDOException $e) {
            throw $e;
        }
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
}
