<?php
require_once('Index.html');
require_once('./connexion.php');
$id=$_GET['id'];
$req="select * from contact where (id=$id)";

$inserted=$cnx->query($req);
//En cas d'echec d'insertion
if(!$inserted){
die('<br>Erreur pour insérer'.$cnx->error);
}

$resultat=$inserted->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier Contact</title>
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/Style.css">
</head>
<body>
	<form method="POST" action="edit.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Id:</td>
                <td><input type="text" name="id" value="<?php echo ($resultat['id'])?>"></td>
            </tr>
            <tr>
                <td>Nom:</td>
                <td><input type="text" name="nom" value="<?php echo ($resultat['nom'])?>"></td>
            </tr>
            <tr>
                <td>Prenom:</td>
                <td><input type="text" name="prenom" value="<?php echo ($resultat['prenom'])?>"></td>
            </tr>
            <tr>
                <td>Numero:</td>
                <td><input type="text" name="numero" value="<?php echo ($resultat['numero'])?>"></td>
            </tr>
             <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php echo ($resultat['email'])?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Editer"></td>
            </tr>
        </table>
        
    </form>
</body>
</html>
