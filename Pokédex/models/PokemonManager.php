<?php

namespace Model;

use Model\Routes\Pokemon;

require_once "Model.php";
require_once "Routes/Pokemon.php";

class PokemonManager extends Model
{

    public function getAll():array {

    $model = new Model();
    $result = $model->execRequest("SELECT * FROM POKEMONS");
    $pokemon_Array = array();

    foreach($result->fetchAll() as $pokemon){
        $pokemon_object = new Pokemon();
        $pokemon_object->hydrate($pokemon);
        $pokemon_Array[] = $pokemon_object;
    }

    return $pokemon_Array;
    }

    public function getById(int $IdPokemon): ?Pokemon{

        $model = new Model();
        $result = $model->execRequest("SELECT * FROM POKEMONS WHERE IdPokemon = ? ",[$IdPokemon]);

        if($result!==false){
            $pokemon = new Pokemon();
            $pokemon->hydrate($result);
        }
        else{$pokemon=null;}

        return $pokemon;
    }

    public function addPokemon(array $data):void
    {
        $model = new Model();
        $pokemon = new Pokemon();

        $nom = $data[0];
        $description =  $data[1];
        $type1 = $data[2];
        $type2 = $data[3];
        $image = $data[4];
        $result = $model->execRequest("SELECT LAST_INSERT_ID() FROM POKEMONS");

        $id =  $result->fetch()+1;

        $model->execRequest("INSERT INTO POKEMONS VALUES (?,?,?,?,?,?)",$id,$nom,$image,$description,$type1,$type2);
    }

}