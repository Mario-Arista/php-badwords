// Funzione per controllare che i campi di input e text area non siano vuoti

document.getElementById("invia").addEventListener("click", function(e) {

    const paragrafo = document.getElementById("paragrafoUtente").value;
    const parola = document.getElementById("parolaDaCensurare").value;

    if (paragrafo.trim() == "" || parola.trim() == "") {
        alert("Assicurati di riempire entrambi i campi.");

        // Per evitare di essere reindirizzato a results.php se c'è un campo vuoto
        e.preventDefault(); 

    }

});