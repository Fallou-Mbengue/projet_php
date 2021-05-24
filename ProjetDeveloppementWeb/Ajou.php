<?php
require_once('Index.html');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link rel="stylesheet"  href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/ajouter.css">
	<title>Nouveau Conctacte</title>
	
</head>
<body>

<div class="form">
  <form id="contact_form" class="contact_form" action="ajouterContact.php" method="POST" name="contact_form" enctype="multipart/form-data">
    <table>
      <tr>
        <td style="color:white"><label for="nom"><strong>NOM</strong> </label></td>
        <td><input type="text" name="nom" id="nom" required placeholder="Nom" class="required nom"></td>
      </tr>
      <tr>
        <td style="color:white"><label for="nom"><strong>PRENOM</strong> </label></td>
        <td><input type="text" name="prenom" id="prenom" required placeholder="prenom" class="prenom"></td>
      </tr>
      <tr>
        <td style="color:white"><label for="nom"><strong>NUMERO</strong> </label></td>
        <td><input type="number" name="numero" id="numero" required placeholder="Numero" class="required numero"></td>
      </tr>
      <tr>
        <td style="color:white"><label for="nom"><strong>Email</strong> </label></td>
        <td><input type="text" name="email" id="email" required placeholder="Email" class="required email"></td>
      </tr>
      <tr>
        <td></td>
        <td><input class="btn btn-primary" type="submit" value="Ajouter" /><br /><br /></td>
      </tr>
    </table>
    
  </form>
</div>
</body>
</html>