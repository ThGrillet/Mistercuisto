<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Commentaire déposé!</h1>
            <h3>Votre demande a bien été envoyée, nous allons la traiter dans les meilleurs délais.</h3>

            <a href="./mistercuisto.html"><input  type="button" value="Retour vers le site"></a>
    </body>

</html>

<?php

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$telephone = $_POST["telephone"];
$sujet = $_POST["sujet"];
$message = $_POST["message"];

$conn = new PDO("mysql:host=localhost;dbname=test_prairie;charset=utf8mb4", "root", "Thomas", []);

$sql = "INSERT INTO contact(nom,prenom,mail,telephone,sujet,message) VALUES (:nom, :prenom, :mail, :telephone, :sujet, :message)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':mail', $mail);
$stmt->bindParam(':telephone', $telephone);
$stmt->bindParam(':sujet', $sujet);
$stmt->bindParam(':message', $message);
$stmt->execute();
