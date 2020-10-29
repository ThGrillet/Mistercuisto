<!DOCTYPE html>
<html>
    <head>
        <title>Réservation</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Demande réservation envoyée!</h1>
            <h3>Merci d'avoir réservé dans notre restaurant, votre demande a bien été prise en compte, à très vite!</h3>

            <a href="./mistercuisto.html"><input  type="button" value="Retour vers le site"></a>
    </body>

</html>

<?php

$nom = $_POST["nom"];
$dateresa = $_POST["dateresa"];
$nombre = $_POST["nombre"];
$message = $_POST["message"];

$conn = new PDO("mysql:host=localhost;dbname=test_prairie;charset=utf8mb4", "root", "Thomas", []);

$sql = "INSERT INTO reservation(nom,dateresa,nombre,message) VALUES (:nom, :dateresa, :nombre, :message)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':dateresa', $dateresa);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':message', $message);
$stmt->execute();
