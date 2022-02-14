<?php

    $testo = "Lorem ipsum dolor sit amet consectetur, error , magni! Adipisicing elit, error , magni!";

    $lunghezzaTesto = strlen($testo);

    $parolaCensurata = $_GET["search"];

    var_dump($parolaCensurata); 

    $censura = "***";
    
    $Newtesto =  str_replace($parolaCensurata, $censura, $testo); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
        
    <h3>
        Lunghezza del testo : 
        <?php echo $lunghezzaTesto; ?>        
        parole
    </h3>
    <h1>
        <?php echo $Newtesto; ?>        
    </h1>

</body>
</html>