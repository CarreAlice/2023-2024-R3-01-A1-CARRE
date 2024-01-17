<?php

namespace Model\Routes;


require_once ('controllers/MainController.php');
require_once ('controllers/PokemonController.php');
require_once ('RouteIndex.php');
require_once ('RouteAddPokemon.php');
require_once ('RouteAddType.php');
require_once ('RouteSearch.php');

use MainController;
use PokemonController;

class Router
{
    private array $routeList;
    private array $ctrlList;
    private string $action_key;


    public function __construct(string $name_of_action_key = "action")
    {
        $this->createControllerList();
        $this->createRouteList();
        $this->action_key = $name_of_action_key;
    }


    private function CreateControllerList(): void
    {
        $this->ctrlList = [
            "main" => new MainController(),
            "pokemonController" => new PokemonController()
        ];
    }

    private function CreateRouteList(): void
    {
        $this->routeList = [
            "index" => new RouteIndex($this->ctrlList["main"]),
            "addPokemon" => new RouteAddPokemon($this->ctrlList["pokemonController"]),
            "addType" => new RouteAddType($this->ctrlList["pokemonController"]),
            "search" => new RouteSearch($this->ctrlList["main"]),
            "editPokemon" => new RouteAddPokemon($this->ctrlList["pokemonController"]),
            "update" =>new RouteIndex($this->ctrlList["main"]),
            "deletePokemon" => new RouteIndex($this->ctrlList["main"])
        ];
    }

    public function routing(array $get = [], array $post = []): void
    {
        $action = $get[$this->action_key] ?? $post[$this->action_key] ?? "index" ?? "pokemonController";

        if (!isset($this->routeList[$action])) throw new \Exception("Action inconnue");
        if ($post === []) {
            $this->routeList[$action]->action($get);
        } else {
            $this->routeList[$action]->action($post, 'POST');
        }
    }


}