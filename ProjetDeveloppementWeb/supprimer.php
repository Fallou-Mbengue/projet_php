<?php
require_once('./connexion.php');
$id=$_GET['id'];
$req="delete from contact where (id=$id)";
$inserted=$cnx->query($req);
//En cas d'echec d'insertion
if(!$inserted){
die('<br>Erreur pour insérer'.$cnx->error);
}
header("location:AfficherContact.php");
?>