<body style="font-weight: bold; font-size: 15px; background: linear-gradient(120deg,lightcyan,lightcoral);">

<div class="container">
    <h1 style="font-size: 50px; margin-left: 40%; margin-top: 50px">Pokédex de <?= $nomDresseur ?></h1>
    <ul class="Pokemon">
        <?php foreach ($var1 as $pokemon) { ?>
                <?php  $couleur = new Color();  ?>
            <div style="display: flex; flex-direction: column; margin-top: 50px;">
                <li class="objets" style=" display: flex; flex-direction: row; align-items: center; margin-left: 25%; margin-right: 25%; background: linear-gradient<?=$couleur->typecolor($pokemon->getType1(),$pokemon->getType2())?>; border-radius: 5px">
                    <p style="margin-left: 20px"><?= $pokemon->getIdPokemon() ?></p>
                    <p style="margin-left: 20%"><?= $pokemon->getNomPokemon() ?></p>
                    <p style="margin-left: 20%"><?= $pokemon->getType1() ?></p>
                    <p style="margin-left: 20%"><?= $pokemon->getType2() ?></p>
                </li>
                <li style="display: flex; flex-direction: row;align-items: center; margin-left: 25%; margin-right: 25%; margin-top: 10px">
                    <img src="<?= $pokemon->getLienImg() ?>" alt="Image du pokemon" style="width: 100px; height: 100px;margin-left: 50px;">
                    <p style="margin-left: 20%"><?= $pokemon->getDescriptionPkm() ?></p>

                </li>
            </div>
        <?php } ?>
    </ul>
</div>

</body>

<?php

class Color{

    public function typecolor(string $type, ?string $type2):string
    {
        $retour= "(120deg,";
        $valeur="";
        switch ($type)
        {
            case "feu": $valeur="red 40%"; $retour=$retour.$valeur.",";  break;
            case "eau": $valeur="dodgerblue 30%";$retour=$retour.$valeur.",";break;
            case "plante": $valeur="green 40%";$retour=$retour.$valeur.",";break;
            case "spectre": $valeur="rebeccapurple 40%";$retour=$retour.$valeur.",";break;
            case "acier": $valeur="slategrey 40%";$retour=$retour.$valeur.",";break;
            case "roche": $valeur="orange 40%";$retour=$retour.$valeur.",";break;
            case "glace": $valeur="lightblue 40%";$retour=$retour.$valeur.",";break;
            case "sol": $valeur="darkgoldenrod 40%";$retour=$retour.$valeur.",";break;
            case "électrik": $valeur="yellow 40%";$retour=$retour.$valeur.",";break;
            #ajouter types manquants
        }

        if($type2!=null)
        {
            switch ($type2)
            {
                case "feu": $valeur="red"; $retour=$retour.$valeur.")";  break;
                case "eau": $valeur="dodgerblue";$retour=$retour.$valeur.")";break;
                case "plante": $valeur="green";$retour=$retour.$valeur.")";break;
                case "spectre": $valeur="rebeccapurple";$retour=$retour.$valeur.")";break;
                case "acier": $valeur="slategrey";$retour=$retour.$valeur.")";break;
                case "roche": $valeur="orange";$retour=$retour.$valeur.")";break;
                case "glace": $valeur="lightblue";$retour=$retour.$valeur.")";break;
                case "sol": $valeur="darkgoldenrod";$retour=$retour.$valeur.")";break;
                case "électrik": $valeur="yellow";$retour=$retour.$valeur.")";break;
                #ajouter types manquants
            }
        }
        else{ $retour=$retour.$valeur.")";  }

        return $retour ;

    }
}
?>

