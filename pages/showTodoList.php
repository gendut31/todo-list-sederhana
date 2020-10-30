<?php 
  require '../include/handler.php';
  $handler = new DbHandler();
  $example = $handler->readData("SELECT * FROM todo");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>List Todo</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">TODO LIST</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="addTodoList.php">Insert</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="showTodoList.php">Show</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="loginPage.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="form-row text-center">
        <h2 class="m-auto">Todo List</h2>
      </div>
      <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
        <?php 
        $i = 1;
        if(count($example) > 0){
          foreach ($example as $key => $value) {
        ?>
          <tr>
            <td scope="col"><?= $i; ?></td>
            <td scope="col"><?= $value['title']; ?></td>
            <td scope="col"><?= $value['description']; ?></td>
            <td scope="col"><?= $value['status'] == 0 ? "Pending" : "Done" ?></td>
          </tr>
        <?php
          }
        }
        ?>
      <tbody>
        
      </tbody>
    </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>