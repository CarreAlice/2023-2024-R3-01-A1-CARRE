<body style="background: linear-gradient(120deg,lightcyan,lightcoral);">
    <h1 style="font-size: 50px; margin-left: 40%; margin-top: 50px">Pokédex de <?= $nomDresseur ?></h1>
    <h2 style="margin-left: 43%; font-size: 30px">Ajouter Pokémon</h2>

    <section class="addPokemon">
        <form action="index.php?action=addPokemon" method="post">
            <div>
                <ul style="list-style: none;margin-left: 42%">
                   <li> <label for="nom_pkm" style=" font-size: 20px;background-color: red;border-radius: 5px;color: white;font-weight: bold;padding: 5px">Nom du pokémon</label></li>
                   <li><textarea id="nom_pkm" name="nom_pkm" style="margin-top: 15px"></textarea></li>
                </ul>
            </div>
            <div>
                <ul style="list-style: none;margin-left: 42%">
                     <li>    <label for="description_pkm" style=" font-size: 20px;background-color: red;border-radius: 5px;color: white;font-weight: bold;padding: 5px">Description du pokémon</label></li>
                     <li>   <textarea id="description_pkm" name="description_pkm" style="margin-top: 15px"></textarea></li>
                </ul>
            </div>
            <div>
                <ul style="list-style: none;margin-left: 42%">
                    <li><label for="type_pkm1" style=" font-size: 20px;background-color: red;border-radius: 5px;color: white;font-weight: bold;padding: 5px">Type pokemon 1</label></li>
                    <li><select name="type_pkm1" id="type_pkm1" style="margin-left: 2%; margin-top: 15px">
                            <option value="feu">feu</option>
                            <option value="glace">glace</option>
                            <option value="plante">plante</option>
                            <option value="spectre">spectre</option>
                            <option value="eau">eau</option>
                            <option value="roche">roche</option>
                            <option value="acier">acier</option>
                            <option value="sol">sol</option>
                            <option value="vol">vol</option>
                            <option value="électrik">électrik</option>
                </select></li>
                </ul>
            </div>
            <div>
                <ul style="list-style: none;margin-left: 42%">
                    <li><label for="type_pkm2" style=" font-size: 20px;background-color: red;border-radius: 5px;color: white;font-weight: bold;padding: 5px">Type pokemon 2</label></li>
                    <li><select name="type_pkm2" id="type_pkm2" style="margin-left: 2%; margin-top: 15px">
                            <option value="null">aucun</option>
                            <option value="feu">feu</option>
                            <option value="glace">glace</option>
                            <option value="plante">plante</option>
                            <option value="spectre">spectre</option>
                            <option value="eau">eau</option>
                            <option value="roche">roche</option>
                            <option value="acier">acier</option>
                            <option value="sol">sol</option>
                            <option value="vol">vol</option>
                            <option value="électrik">électrik</option>
                        </select></li>
                </ul>
            </div>
            <div class="img_file">
                <div>
                    <ul style="list-style: none;margin-left: 42%">
                         <li> <label for="img_pkm" class="drop-container" style=" font-size: 20px;background-color: red;border-radius: 5px;color: white;font-weight: bold;padding: 5px">Lien de l'image</label></li>
                        <li> <textarea id="img_pkm" name="img_pkm" style="margin-top: 15px"></textarea></li>

                    </ul>
                </div>
            </div>
            <div>
                <input type="submit" id="submit" value="Envoyer" style="margin-left: 47%; color: white; background-color: red; border-radius: 5px; margin-top: 30px; font-size: 20px">
            </div>
        </form>
    </section>
</body>