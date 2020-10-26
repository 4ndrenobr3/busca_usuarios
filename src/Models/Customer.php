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
        $sql =  'SELECT * FROM customers WHERE name = :name';

        $get = $this->conn->prepare($sql);
        $get->bindValue(':name', $name, \PDO::PARAM_STR);

        $get->execute();

        return $get->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findCategory()
    {
        $sql =  'SELECT * FROM categories';

        $get = $this->conn->prepare($sql);

        $get->execute();

        return $get->fetchAll(\PDO::FETCH_ASSOC);
    }
}
