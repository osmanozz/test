
<?php
 require_once 'database.php';

    $db = new database();

    $tafels = $db->select("SELECT tafel_code from tafels");

    if (empty($tafels)) {
        echo "Er is geen tafel beschikbaar";
    }

 ?>

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
                    <li class="nav-item"><a class="nav-link"> 
                    <?php 
                    session_start();
                    echo "Welkom "  . $_SESSION['username']; ?>
                </ul>
                <li class="nav-item"><a class="nav-link" href="log-uit.php">Uitloggen</a></li>
                </li>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">Excellent Taste</h1>
            <p class="lead">Overzicht medewerker</p>
        </div>
    </header>
  

    <!-- Reservering section-->
    <section class="bg-light" id="services">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                     <label>Kies een tafel nummer</label>
                                <select name="tafel_code">
                                    <?php foreach($tafels as $tafel) {
                                        foreach ($tafel as $taf) {
                                        ?>
                                        <option name="tafel_code"> <?php echo $tafel['tafel_code'];  
                                        ?> </option>
                                    <?php } } ?> 
                                
                                </select>
                        <a class="btn btn-primary"
                            href="bestellen.php?tafel_code=<?php echo $taf; ?> ">Bestelling opnemen
                        </a>
                        
                           
                            <br><br>  
                </div>
                <div class="col-lg-8">
                        <a class="btn btn-primary"
                            href="tafel-reserveren.php">Bestellingen</a> <br> <br>
                </div>
                <div class="col-lg-8">
                        <a class="btn btn-primary"
                            href="tafel-reserveren.php">Producten</a> <br> <br>
                </div>
                <div class="col-lg-8">
                        <a class="btn btn-primary"
                            href="tafel-reserveren.php">Alle Reserveringen</a> <br> <br>
                </div>
                <div class="col-lg-8">
                        <a class="btn btn-primary"
                            href="tafel-reserveren.php">Reserveringen vandaag</a> <br> <br>
                </div>
            </div>
        </div>
    </section>

    
  
    

 
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
