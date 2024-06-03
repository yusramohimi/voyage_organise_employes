<?php
session_start();
if (!isset($_SESSION['codeEmp'])) {
    header("Location: connexionEmp.php");
    exit;
}
require 'database.php';

if (isset($_GET['codeInsc'])) {
    $codeInsc = $_GET['codeInsc'];
    
    $statement = $pdo->prepare("SELECT i.dateVoy, d.villeD, d.villeA, v.heureDepart, v.heureArrivee FROM Inscription i JOIN voyage v ON i.codeVoyage = v.codeVoyage JOIN DescriptionVoyage d ON v.codeDesc = d.codeDesc WHERE i.codeInsc = :codeInsc");
    $statement->execute([':codeInsc' => $codeInsc]);
    $details = $statement->fetch(PDO::FETCH_ASSOC);
}
?>