<!doctype html>
    <html lang="fr">


    <head>
        <meta charset="UTF-8"/>
        <title><?= $titre ?> - Pokédex</title>
        <link rel="stylesheet" type="text/css" href="/public/css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $titre ?></title>
    </head>
    
    <body>
    <header>
        <!-- Menu -->
        <div >
            <nav >
                <a style="color: black; font-weight: bold; font-size: 25px; text-decoration: none ;margin-left: 30%; background-color: orangered; border-radius: 5px; padding:10px; " href="index.php?action=addPokemon">Ajouter pokemon</a>
                <a style="color: black; font-weight: bold; font-size: 25px; text-decoration: none ;margin-left: 5%; background-color: orangered; border-radius: 5px; padding:10px; " href="index.php?action=addType">Ajouter type</a>
                <a style="color: black; font-weight: bold; font-size: 25px; text-decoration: none ; margin-left: 5%; background-color: orangered; border-radius: 5px; padding: 10px;" href="index.php?action=search">Rechercher</a>
            </nav>
        </div>
    </header>
    <!-- #contenu -->
    <main id="contenu">
        <?= $contenu ?>
    </main>
    <footer>
    
    </footer>
    </body>
    
    </html>






