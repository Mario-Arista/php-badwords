<?php 

    $paragrafo = $_GET['paragrafoUtente'];

    $censura = $_GET['parola'];

    $paragrafo_censurato = str_replace($censura, '***', $paragrafo)

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati - Bad Words</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-dark">

    <header class="container-fluid bg-secondary">
            <h1 class="text-warning fs-1 p-3 text-center">Risultati del gioco-aperitivo!</h1>
    </header>


    <main class="container-fluid"> 
        
        <div class="col-4 m-auto pt-4">

            <!-- INFO PARAGRAFO E PAROLA UTENTE -->
            <div class="bg-secondary rounded-3 p-3">
                <div>
                    <h2 class="text-white fs-4 text-center">Il paragrafo che hai scritto è questo:</h2>
                    <p class="text-warning fs-5 text-center">
                        <?php echo $paragrafo ?>
                    </p>
                </div>
                <div class="pb-2">
                    <h2 class="text-white fs-4 text-center">Il paragrafo è lungo:</h2>
                    <div class="text-warning fs-5 text-center">
                        <?php echo strlen($paragrafo); ?> caratteri, compresi gli spazi.
                    </div>
                </div>
                <div>
                    <h2 class="text-white fs-4 text-center">La parola da censurare è questa:</h2>
                    <p class="text-warning fs-5 text-center">
                        <?php echo $censura ?>
                    </p>
                </div>

            </div>

             <!-- PARAGRAFO CENSURATO -->
            <div class="bg-warning rounded-3 p-3 mt-4">
                <div>
                    <h2 class="text-black fs-4 text-center">Il paragrafo censurato è:</h2>
                    <p class="text-secondary fs-5 text-center ">
                        <?php echo $paragrafo_censurato  ?>
                    </p>
                </div>
                <div class="pb-2">
                    <h2 class="text-black fs-4 text-center">Il paragrafo censurato è lungo:</h2>
                    <div class="text-secondary fs-5 text-center">
                    <?php echo strlen($paragrafo_censurato); ?> caratteri, compresi gli spazi.
                    </div>
                </div>

            </div>
        </div>
    </main>

     <!-- BOOTSTRAP -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>