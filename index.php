<?php
 require 'getWeather.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What's The Weather?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="images/sample-logo-design-png-3-2.png" id="logo">
    <div class="container">
        <h1 class="color">What's The Weather?</h1>
        <h2 class="color">Enter the name of the city</h2>
        <form action="index.php">
            <div class="mb-3">
                <input  class="form-control" id="city" name="city" value="<?=$city?>" placeholder="Eg. London"
                    style="background-color: rgba(255, 255, 255, 0.6)">           
            </div>
            <button type="submit" class="btn btn-primary">Take a see</button>
        
   
     <?php
     //Chiede usando la funzione '?' se c'è un valore dentro alla variabile(se è si verrà stampato success altrimenti danger)
     $class = $weather? 'secondary' : 'danger'
     ?>
     <div id='result'class="alert alert-<?=$class?>"  > 
     <!-- Se c'è un valore dentro alla variabile wheather stampa weather altrimenti stampa il messagio di error  -->
     <?= $weather?$weather:$error?>
     </div>
     </div>
     </form>
    </div>
</body>
</html>