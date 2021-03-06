<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Excellent Taste</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">Excellent Taste</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">Excellent Taste</h1>
            <p class="lead">Log in</p>
        </div>
    </header>
  

<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
    <h2 class="text-muted">LOGIN MEDEWERKER</h2>
</div>
            <div class="card-body">
              <form method="POST">
                <label for="username">Gebruikersnaam:</label>
                <input class="rounded" type="text" name="username" required>
              <br> <br>
                    <label for="password">Wachtwoord:</label>
                    <input class="rounded" type="password" name="password" required>
              <br> <br>
                      <input class="btn btn-primary" type="submit" name="submit" value="LOGIN">
        </form>

      </div>
    </div>
  </div>
 </body>
<?php

include "database.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $username = $_POST['username'];
    $password = $_POST['password'];

      // USERNAME AND PASSWORD WORDT GEHASHED
      $username = stripcslashes($username);  
        $password = stripcslashes($password);  

            $db = new database();
              $db->login($username, $password);      
  }


?>
    

 
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>