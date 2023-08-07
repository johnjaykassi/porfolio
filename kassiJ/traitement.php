<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Voici vos données du formulaire</p>
<?php  
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        echo "Nom : " .$nom. "<br>";
        echo "Prenom : " .$prenom. "<br>";
        echo "email : " .$email. "<br>";
        echo "password : " .$password. "<br>";
?>
</body>
</html>
