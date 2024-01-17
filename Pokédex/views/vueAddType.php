<body style="background: linear-gradient(120deg,lightcyan,lightcoral);">
    <h1 style="font-size: 50px; margin-left: 40%; margin-top: 50px">Pokédex de <?= $nomDresseur ?></h1>
        <H2 style="margin-left:45%; margin-top: 50px;font-size: 30px; "> Ajouter le type </H2>
        <section class="addType">
            <div>
                <label for="nom_type" id="nom_type"></label>
                <textarea id="nom_type" name="nom" placeholder="écrire le type en minuscules." style="margin-left: 45%;" ></textarea>
            </div>
            <div>
                <input type="submit" id="submit" value="Envoyer" style="margin-left: 47%; color: white; background-color: red; border-radius: 5px; margin-top: 30px; font-size: 20px">
            </div>
        </section>
</body>