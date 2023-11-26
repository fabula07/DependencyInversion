<?php

interface DataFunctions
{
    public function getData();
}

class Mysql implements DataFunctions
{
    public function getData()
    {
        return 'some data from MySQL database';
    }
}

class Controller
{
    private $adapter;

    public function __construct( DataFunctions $adapter)
    {
        $this-> adapter = $adapter;
    }
    public function getData()
    {
        return $this->adapter->getData();
    }
}
