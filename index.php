<?php

    // Testo paragrafo
    $text = "
        Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa 
        usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite 
        de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun 
        paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca 
        va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact, it va esser Occidental. A un Angleso it 
        va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es.Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. 
        Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al 
        desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles.
    ";

    // Lunghezza text
    $text_length = strlen($text);

    // Parola utente
    $word_user = $_GET['parola'];
    
    // Parola utente censurata
    $word_user_censored = str_replace($word_user, '***', $word_user);
    
    // Testo paragrafo con parola utente censurata
    $text_censored = str_replace($word_user, $word_user_censored, $text);

    // Lunghezza testo censurato
    $text_censored_length = strlen($text_censored);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php badwords</title>
</head>
<body>
    
    <!-- Container -->
    <div class="container">
        
        <!-- Riga 1 -->
        <div class="row_1">
            <!-- Titolo -->
            <h3>Paragrafo:</h3>
            <!-- Paragrafo -->
            <p><?php echo $text; ?></p>
            <!-- Titolo -->
            <h3>Lunghezza paragrafo:</h3>
            <!-- Lunghezza paragrafo -->
            <p><?php echo $text_length;?></p>
        </div>

        <!-- Riga 2 -->
        <div class="row_2">
            <!-- Titolo -->
            <h3>Parola utente:</h3>
            <!-- Parola utente-->
            <p><?php echo $word_user; ?></p>
            <!-- Titolo -->
            <h3>Parola utente censurata:</h3>
            <!-- Parola utente censurata -->
            <p><?php echo $word_user_censored ?></p>
            <!-- Titolo -->
            <h3>Paragrafo con parola utente censurata:</h3>
            <!-- Paragrafo con parola utente censurata -->
            <p><?php echo $text_censored; ?></p>
            <!-- Titolo -->
            <h1>Lunghezza paragrafo censurato:</h1>
            <!-- Lunghezza paragrafo censurato -->
            <p><?php echo $text_censored_length; ?></p>
        </div>

    </div>


</body>
</html>