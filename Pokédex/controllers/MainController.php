<?php

use \Model\PokemonManager;

require_once('views\View.php');
require_once ('models\PokemonManager.php');
require_once ('models\Model.php');

class MainController
{

    public function Index(int $id = 0) : void {

        $indexPkm = new PokemonManager();

        if($id==0){ $var1 = $indexPkm->getAll();}

        else{$var1 = $indexPkm->getById($id);}



        $indexView = new View('Index');
        $indexView->generer(['nomDresseur' => "Alice","var1"=>$var1]);
    }

}