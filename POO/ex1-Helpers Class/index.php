<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Helpers Class</title>
</head>

<body>
    <form method="post">
        <label>Entrez votre nom : </label><input type="text" name="nom" id="nom"><br>
        <select>
            <option value="valeur1" selected>Valeur 1</option><br>
            <option value="valeur2">Valeur 2</option><br>
            <option value="valeur3">Valeur 3</option><br>
        </select><br>

        <label>Homme</label><input type="radio" name="radio" id="radio"><br>
        <label>Femme</label><input type="radio" name="radio" id="radio"><br>

        <label>aime les chapeaux</label><input type="checkbox" name="checkBox1" id="checkBox1"><br>
        <label>aime les chats</label><input type="checkbox" name="checkBox2" id="checkBox2"><br>

        <textarea name="textarea" rows="10" cols="50">Vous pouvez écrire quelque chose ici.</textarea><br>
        <button type="submit">Envoyer</button>
    </form>
<?php
    Class Form{
        public $submit;
        public $formulaire = [];



    }
?>



</body>
</html>
