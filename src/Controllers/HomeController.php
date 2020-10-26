<?php
namespace SearchApp\Controllers;

use SearchApp\Models\Connection;
use SearchApp\Models\Customer;

class HomeController
{
    protected function view($view, $params = [])
    {
        $loader = new \Twig\Loader\FilesystemLoader('../resources/views/');

        $twig = new \Twig\Environment($loader, []);

        echo $twig->render($view . '.php.twig', $params);
    }

    public function index()
    {
        //return $this->view('index');
        $cliente = new Customer(Connection::getInstance());
        var_dump($cliente->find());
    }

    public function search()
    {
        $customer = filter_input(INPUT_POST, 'customer_name', FILTER_SANITIZE_STRING);
        return  $customer . 'Este esta vindo pelo controller';
    }
}
