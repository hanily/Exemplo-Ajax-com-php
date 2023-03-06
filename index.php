<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Ajax com PHP</title>
    <meta charset="utf-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
    function chamaajax() {
        let informacoes= "";
        informacoes = "nome=" + document.getElementById('idnome').value;
        $.ajax({
            url: "script.php",
            type: "POST",
            data: informacoes,
            dataType: "html"

        }).done(function(resposta) {
            console.log(resposta);

        }).fail(function(jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);

        }).always(function() {
            console.log("completou");
        });
    }
    </script>
</head>

<!--body onload="chamaajax()"-->

<body>
    <input type="text" name="nome" id="idnome" value="Rhanily"></br>
    <input type="number" name="idade" id="ididade" value="19"></br>
    <input onclick="chamaajax()" type="button" name="chamaajax" id="idchamaajax" value="Ajax">

</body>

</html>