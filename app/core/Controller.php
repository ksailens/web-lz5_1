<?php

class Controller
{
    public $view;
    protected $className;

    function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
    }
}