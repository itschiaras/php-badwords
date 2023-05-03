<?php 
$userText = trim($_GET['userText']);
$badWord = trim($_GET['badWord']);
if((isset($userText) && isset($badWord)) && (!empty($userText) && !empty($badWord))){
    $userText = " $userText ";
    $badWord = " $badWord ";
    $censuredText= str_replace($badWord, ' *** ', $userText);
} else {
$paragraph = 'Non hai inserito niente';
$censuredText = 'Scrivi parola da censurare';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Censured</title>
</head>
<body class="bg-primary-subtle">
    <div class="text-center mt-5">
        <h3 class="text-success">Frase inserita: </h3>
        <p class="fs-4">
            <?php echo $userText. '<br> Numero di caratteri nel paragrafo: '.strlen($userText); ?>
        </p>
            
        

        <h3 class="text-danger">Frase censurata: </h3>
        <p class="fs-4">
            <?php echo $censuredText. '<br> Numero di caratteri nel paragrafo: '.strlen($censuredText); ?>
        </p>   
        
    </div>
</body>
</html>