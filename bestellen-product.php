<?php
require_once 'database.php';
    $db = new database();
    
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tafel_code = $_GET['tafel_code'];
    $product_code = $_GET['product_code'];
    $aantal = $_POST['aantal'];

    $db = new database();
    $prijs_per_stuk = $db->select("SELECT prijs_per_stuk FROM producten WHERE product_code=$product_code");

    foreach($prijs_per_stuk as $prijs) {
        foreach($prijs as $pri) {

        }

    }
    

    $prijs_totaal = $db->select("SELECT producten.prijs_per_stuk * bestelling.aantal as totaal_prijs FROM producten
    INNER JOIN bestelling ON producten.product_code = bestelling.product_code
    WHERE producten.product_code=$product_code AND bestelling.tafel_code=$tafel_code");

   
   

    $sql = "INSERT INTO bestelling VALUES (:bestel_code, :product_code, :prijs_per_stuk, :tafel_code, :aantal)";
        $placeholders = [
        'bestel_code'=>NULL,
        'product_code'=> $product_code,
        'prijs_per_stuk'=> $pri,
        'tafel_code'=> $tafel_code,
        'aantal'=> $aantal,
        ];
             $db->insert($sql, $placeholders);
             ?>
             <a name="zie" href="bon.php">Zie de bon</a>
             <?php
           
             
            header("Location:bestellen.php?tafel_code=$tafel_code");    
             
}



?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">

<form method="POST">
        Aantal: <input type="text" name="aantal" required> <br><br>
        <input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
        <button type="submit">Zie de bon</button>
</form>
    </div>
    </div>
    </div>