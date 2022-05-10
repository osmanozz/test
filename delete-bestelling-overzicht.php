<?php
include "database.php";
    $db = new database();

if (isset($_GET['bestel_code'])) {
    
    $tafel_code = $_GET['tafel_code'];
    $product_code = $_GET['product_code'];
 

    $bloem_code = $_GET['bestel_code'];
        $sql = "DELETE FROM bestelling WHERE bestel_code=:bestel_code";
            $placeholder = [
                'bestel_code'=> $bestel_code
            ];
                $db->delete($sql, $placeholder, "bestellen.php?tafel_code=$tafel_code&product_code=$product_code");
}
?>