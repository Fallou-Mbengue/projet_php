<?php
require_once('Index.html');
require_once('./connexion.php');
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$numero=$_POST['numero'];
$email=$_POST['email'];

$req="insert into contact(nom, prenom, numero, email) values('$nom', '$prenom', '$numero', '$email')";
$inserted=$cnx->query($req);
//En cas d'echec d'insertion
if(!$inserted){
die('<br>Erreur pour insérer'.$cnx->error);
}
?>

<<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet"  href="css/bootstrap.min.css">
</head>
<body>
	
	<table border="1">
		<tr>
			<td>Nom</td>
			<td> <?php echo "$nom" ?> </td>
		</tr>
		<tr>
			<td>Prenom</td>
			<td> <?php echo "$prenom" ?> </td>
		</tr>
		<tr>
			<td>Numero</td>
			<td> <?php echo "$numero" ?> </td>
		</tr>
		<tr>
			<td>Email</td>
			<td> <?php echo "$email" ?> </td>
		</tr>

	</table>
	<a href="AfficherContact.php">Afficher les contactes</a>
</body>
</html>