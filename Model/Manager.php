<?php

class Manager
{
    public $id;
    public $products;
    public $price;
    public $description;
    public $factory;

    public function __construct($id = null, $products = null, $price = null, $description = null, $factory = null)
    {
        $this->id = $id;
        $this->products = $products;
        $this->price = $price;
        $this->description = $description;
        $this->factory = $factory;
    }

    function getManagerList()
    {
        return [
            new Manager(1, 'giày', 200, 'đi', 'VN'),
            new Manager(2, 'áo', 100, 'mặc', 'VN')
        ];
    }

    function getManager($id)
    {
        $managerList = $this->getManagerList();
        foreach ($managerList as $manager) {
            if ($manager->id == $id) {
                return $manager;
            }
        }
    }

}