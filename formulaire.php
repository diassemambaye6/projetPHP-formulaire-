<?php
require 'connexion.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['email']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sql = 'INSERT INTO developpeur(name, email) VALUES(:name, :email)';
  $statement = $bdd->prepare($sql);
  if ($statement->execute([':name' => $name, ':email' => $email])) {
    $message = 'Insertion Reussie!';
  }

}
    if(!empty($name) && !empty($email)){
      header("location:index.php");
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


        <div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Ajouter un developpeur</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Nom</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div><br>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Ajouter</button>
        </div>
      </form>
    </div>
  </div>
</div>