<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();
    session_start();

    $sql = "INSERT INTO reservering VALUES (:reserverings_code, :klant_naam, :email, :telefoonnummer, :aantal_personen, :tijdstip, :datum)";

    $klant_naam = $_POST['klant_naam'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $aantal_personen = $_POST['aantal_personen'];
    $datum = $_POST['datum'];
    $tijdstip = $_POST['tijdstip'];
    
    $placeholders = [
        'reserverings_code' => NULL,
        'klant_naam'=> $klant_naam,
        'email'=> $email,
        'telefoonnummer'=> $telefoonnummer,
        'aantal_personen'=> $aantal_personen,
        'tijdstip'=> $tijdstip,
        'datum'=> $datum
        ];
            $db->insert($sql, $placeholders);
            header("Location: overzicht-reservering.php?klant_naam=$klant_naam&email=$email");

    }
?>

<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Gegevens</title>
</head>

<body>

    <div class="card text-center">
        <div class="card-header">
            <div class="card-body">
                <h2 class="text-muted">Tafel reserveren</h2>
            </div>
            <form method="POST">
                Naam : <input type="text" name="klant_naam"  required> <br><br>
                Email : <input type="text" name="email"  required> <br><br>
                Telefoonnummer : <input type="text" name="telefoonnummer"  required> <br><br>
                Aantal personen : <input type="int" name="aantal_personen"  required> <br><br>
                
                Tijdstip : <input type="time" name="tijdstip" step="1" required> <br><br>
                Datum : <input type="DATE" name="datum" required> <br><br>
                <input class="btn btn-primary" type="submit" value="Reserveeer">
            </form>
        </div>
    </div>
    </div>

    <br>
    <br>
    <br>

</body>

</html>