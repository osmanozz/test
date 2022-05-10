<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();

    $sql = "INSERT INTO producten VALUES (:product_code, :product_naam, :prijs_per_stuk)";
        $placeholders = [
        'product_code'=> NULL,
        'product_naam'=> $_POST['product_naam'],
        'prijs_per_stuk'=> $_POST['prijs_per_stuk'],
        ];
             $db->insert($sql, $placeholders);
            header("Location:overzicht-producten.php");    
}

?>

<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Nieuw product toevoegen</title>
</head>

<body>

<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
        <h2 class="text-muted">PRODUCT TOEVOEGEN</h2>
</div>

    <form method="POST">
        <input type="text" name="product_naam" placeholder="Product naam" required> <br><br>
        <input type="text" name="prijs_per_stuk" placeholder="Prijs" > <br><br>
        <input class="btn btn-primary" type="submit" value="Toevogen">
    </form>

</div>
    </div>
        </div>

    <br>
      <br>
        <br>
</body>
</html>