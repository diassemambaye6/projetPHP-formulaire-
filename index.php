

   <?php
    require "connexion.php";
    $sql = 'SELECT * FROM developpeur';
    $statement = $bdd->prepare($sql);
    $statement->execute();
    $dev = $statement->fetchAll(PDO::FETCH_OBJ);
  

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
                  <h2>les developpeurs de DEFARsci</h2>
                </div>
                <div class="card-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>

                    <?php foreach($dev as $person): ?>
                      <tr>
                        <td><?= $person->id; ?></td>
                        <td><?= $person->name; ?></td>
                        <td><?= $person->email; ?></td>
                        <td>
                          <a href="modifier.php?id=<?= $person->id ?>" class="btn btn-info">Modifier</a>
                          <a onclick="return confirm('Voulez-vous vraiment supprimer ?')" href="supprimer.php?id=<?= $person->id ?>" class='btn btn-danger'>Supprimer</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </table>
                </div>
              </div>
            </div>