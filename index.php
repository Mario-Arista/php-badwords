<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-dark">

    <header class="container-fluid bg-secondary">
        <h1 class="text-warning fs-1 p-3 text-center">Gioco-aperitivo: inserisci la parolaccia!</h1>
    </header>
    <main class="container-fluid"> 
        <div class="col-6 m-auto pt-4">
            <form action="rusults.php" method="GET">
                <textarea class="w-100 p-2 border border-0 rounded-3" name="paragrafoUtente" id="paragrafoUtente" cols="30" rows="6" placeholder="Scrivi frase a caso, tipo: non ci sono più le mezze stagioni, brutto st***zo!"></textarea>
                <div>
                    <label class="text-white p-2" for="parola">Scrivi parola da censurare: </label>
                    <input class="w-100 p-2 border border-0 rounded-3" name="parola" id="paraolaDaCensurare" type="text" placeholder="st***zo!">
                </div>
                <input class="text-dark bg-warning p-2 w-100 border border-0 rounded-3 mt-3" type="submit" label="INVIA">
            </form>
        </div>
    </main>


     <!-- BOOTSTRAP -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>