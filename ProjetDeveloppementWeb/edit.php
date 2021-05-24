<?php
require_once('Index.html');
require_once('./connexion.php');
$ID=$_POST['id'];
$NOM=$_POST['nom'];
$PRENOM=$_POST['prenom'];
$NUMERO=$_POST['numero'];
$EMAIL=$_POST['email'];

$req="update contact set id='$ID',nom='$NOM',prenom='$PRENOM',numero='$NUMERO',email='$EMAIL' where id=$ID";
//execution de la requet
$inserted=$cnx->query($req);
//En cas d'echec d'insertion
if(!$inserted){
die('<br>Erreur pour insérer'.$cnx->error);
}

header("location:AfficherContact.php");
