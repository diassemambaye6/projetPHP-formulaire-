<?php
require 'connexion.php';
$id = $_GET['id'];
$sql = 'DELETE FROM developpeur WHERE id=:id';
$statement = $bdd->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: ");
}


?>
  <html>
            <head>
              <title></title>
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
              <link rel="stylesheet" href="style.css">
            </head>
            <body>
            <div><img src="Defar Sci - Copie.png" class="headerstyle" width=5%></div><br><br><br>


             <div class="alert alert-info">
                suppression effectuee avec succes
              </div>