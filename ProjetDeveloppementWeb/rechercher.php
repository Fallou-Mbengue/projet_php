<?php
require_once('Index.html');
require_once('./connexion.php');
$mc="NULL";
if(isset($_POST['motCle'])){
  $mc=$_POST['motCle'];
}
$req="select * from contact where nom like '%$mc%'";
$inserted=$cnx->query($req);
//En cas d'echec d'insertion
if(!$inserted){
die('<br>Erreur pour insérer'.$cnx->error);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Liste Des Contactes</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/style.css">
  <meta charset="utf-8">
</head>
<body>
  <form method="POST" action="rechercher.php">
    Mot clé : <input type="text" name="motCle">
    <input type="submit" name="chercher">
    <?php echo "<br>";?>
  </form>
	<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Numero</th>
    </tr>
  </thead>

  	<?php while ($resultat=$inserted->fetch_assoc()) {?>

  <tbody>
    <tr>
      <td><?php echo ($resultat['id'])?></td>
      <td><?php echo ($resultat['nom'])?></td>
      <td><?php echo ($resultat['prenom'])?></td>
      <td><?php echo ($resultat['numero'])?></td>
      <td><a href="details.php?id=<?php echo ($resultat['id'])?>"><button type="button" class="btn btn-info">Details</button></a></td>
      <td><a href="modifier.php?id=<?php echo ($resultat['id'])?>"><button type="button" class="btn btn-primary">Modifier</button></a></td>
      <td><a href="supprimer.php?id=<?php echo ($resultat['id'])?>"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
    </tr>
  </tbody>

  	<?php } ?>
</table>
</body>
</html>