<?php

namespace Model\Routes;
use PokemonController;
class RouteAddType extends Route
{

    private PokemonController $controller;

    public function __construct(PokemonController $controller)
    {
        parent::__construct();
        $this->controller = $controller;
    }

        protected function get(array $params = []):void
    {
        $this->controller->displayAddType();
    }

        protected function post(array $params = []):void
    {
        // TODO: Implement post() method.
    }
}