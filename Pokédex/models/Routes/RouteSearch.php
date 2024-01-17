<?php

namespace Model\Routes;
use MainController;
class RouteSearch extends Route
{
    private MainController $controller;

    public function __construct(MainController $controller)
    {
        parent::__construct();
        $this->controller = $controller;
    }
    protected function get(array $params = []):void
    {
        $this->controller->Index();
    }

    protected function post(array $params = []):void
    {
        // TODO: Implement post() method.
    }
}