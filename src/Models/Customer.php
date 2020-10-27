<?php
namespace SearchApp\Models;

class Customer
{
    private $conn;

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function findCustomer($name)
    {
        //$sql =  'SELECT * FROM customers WHERE name = :name';
        $sql = 'SELECT c.*, t.id categories_id, t.name categories
				FROM customers c
				LEFT JOIN categories t ON c.categories_id = t.id WHERE c.name = :name';

        $get = $this->conn->prepare($sql);
        $get->bindValue(':name', $name, \PDO::PARAM_STR);

        $get->execute();

        return $get->fetchAll(\PDO::FETCH_ASSOC);
    }

}
