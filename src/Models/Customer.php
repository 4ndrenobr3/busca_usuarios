<?php
namespace SearchApp\Models;

class Customer
{
    private $conn;
    private $table = 'customers';

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    public function find($name)
    {
        $sql =  'SELECT * FROM '. $this->table .' WHERE name = :name';

        $get = $this->conn->prepare($sql);
        $get->bindValue(':name', $name, \PDO::PARAM_INT);

        $get->execute();

        return $get->fetch(\PDO::FETCH_ASSOC);
    }
}
