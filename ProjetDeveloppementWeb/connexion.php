<?php
define('SERVER','localhost');
define('USER','root');
define('PASSWD','');
define('DBNAME','gestion_contacte');

//Tentative de connexion
$cnx = new mysqli(SERVER,USER,PASSWD,DBNAME);
if($cnx->connect_error){
	die('<br>Erreur de connexion au serveur de données'.$cnx->connect_error);
}
echo "<br>";
echo "<br>";
