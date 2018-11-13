<?php

require 'Model/Manager.php';

class ManagerController
{
    private $manager;

    function __construct()
    {
        $this->manager = new Manager();
    }

    function invoke()
    {
        if (!isset($_GET['id'])) {
            $persons = $this->manager->getManagerList();
            include 'Views/persons_list.php';
        } else {
            $person = $this->manager->getManager($_GET['id']);
            include 'Views/person.php';
        }
    }
}