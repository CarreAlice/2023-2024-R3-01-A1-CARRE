<?php

use Model\PokemonManager;
class PokemonController
{

    public function displayAddPokemon():void
    {
        $pokemonView = new View('AddPokemon');

        $pokemonView->generer(['nomDresseur'=>"Alice"]);
    }

    public function displayAddType():void
    {
        $typeView = new View('AddType');

        $typeView->generer(['nomDresseur'=>"Alice"]);
    }

    public function posterPokemon(array $data):void
    {
        $manager = new PokemonManager();
        $manager->addPokemon($data);
    }
}