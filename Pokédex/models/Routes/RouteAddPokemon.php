<?php

namespace Model\Routes;
use PokemonController;
class RouteAddPokemon extends Route
{
    private PokemonController $controller;

    public function __construct(PokemonController $controller)
    {
        parent::__construct();
        $this->controller = $controller;
    }
    protected function get(array $params = []):void
    {
        $this->controller->displayAddPokemon();
    }

    protected function post(array $params =[]):void
    {
        $error = null;

        $data= [
            "nom_pkm"=>$this->getParam($params,"nom_pkm",false),
            "description_pkm"=>$this->getParam($params,"description_pkm",false),
            "type_pkm1"=>$this->getParam($params,"type_pkm1",false),
            "type_pkm2"=>$this->getParam($params,"type_pkm2",true),
            "img_pkm"=>$this->getParam($params,"img_pkm",false)
        ];

        $this->controller->posterPokemon($data);

    }
}