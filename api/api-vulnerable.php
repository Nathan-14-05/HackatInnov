<?php
include_once __DIR__ . "/../util/bdd.php";
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$pdo = connexionBdd();

// 🚨 VULNÉRABILITÉ : Aucune désinfection ni requête préparée
$critere = $_GET['recherche'];

$sql = "SELECT id, dateHeureDebut, ville, theme
        FROM HACKATHON
        WHERE ville = '" . $critere . "' OR theme = '" . $critere . "'";

$resultat = $pdo->query($sql);
echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
?>