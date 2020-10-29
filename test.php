<!DOCTYPE html>
<html>
    <head>
        <title>Livre d'Or</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Petit mot déposé!</h1>
            <h3>Merci d'avoir participé à la rédaction d'un bout d'histoire de notre aventure! Au plaisir de vous revoir bientôt!</h3>

            <a href="./mistercuisto.html"><input  type="button" value="Retour vers le site"></a>
    </body>

</html>


<?php

$nom = $_POST["nom"];
$mail = $_POST["mail"];
$datemess = $_POST["datemess"];
$message = $_POST["message"];

$conn = new PDO("mysql:host=localhost;dbname=test_prairie;charset=utf8mb4", "root", "Thomas", []);

$sql = "INSERT INTO Livre(nom,mail,datemess,message) VALUES (:nom, :mail, :datemess, :message)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':mail', $mail);
$stmt->bindParam(':datemess', $datemess);
$stmt->bindParam(':message', $message);
$stmt->execute();

