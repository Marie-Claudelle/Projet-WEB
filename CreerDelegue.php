<?php

try{

$pdo=new PDO("mysql:host=localhost;dbname=web","root","");

}

catch(PDOException $e){

echo $e->getMessage();
die;
}
?>
<!DOCTYPE html>
<html>

<head>
    <style>

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HELP JOB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

</head>

<body>

    <body style="background-color: rgb(249, 251, 252);">
        <div style="width: 100%; height: 56px; background-color: rgb(242, 245, 247);">

        </div>
        <div class="contenant">
            <div class="text">
                <h1 style="color: rgb(224, 66, 66);text-align: center; margin-top: 3%;">Formulaire</h1>
            </div>

            <fieldset
                style="border: 2px solid; margin: auto; width: 50%; background-color: rgb(249, 251, 252); padding: 60px 20px 100px 40px; margin-top: 6%;">
                <legend>Délégué</legend>
                <form method="post" action="traitement.php">
                    <div style="margin: auto;width: 60%; margin-left: 30%;">

                        <div style="display: inline-block; padding-right: 20%; padding-top: 10%;"><label
                                for="nom"><strong>Nom(s):</strong></label><br />
                            <input type="text" name="nom" id="nom" style="height: 35px; width: 100%;" />
                        </div>

                        <div style="display: inline-block; padding-top: 6%;"><label
                                for="domaine"><strong>Prénom(s):</strong></label><br />
                            <input type="text" name="domaine" id="domaine" style="height: 35px;" />
                        </div>

                        <div class="let" style="display: inline-block;padding-right:20%;padding-top: 6%;"><label
                                for="localité"><strong>Centre:</strong></label><br />
                            <input type="localité" name="localité" id="localité" style="height: 35px;" />
                        </div>
                        <div class="ui-widget" style="padding-top: 6%;">
                            <label for="nombre stagiaires"><strong>Promotions assignées:</strong></label><br>
                            <input type="nombre" name="nombre" style="height: 35px;" id="search" />
                        </div>
                        <div style="margin-top: 15%;">
                            <input type="submit" value="Créer" />
                            <input type="submit" value="Modifier" />
                            <input type="submit" value="Supprimer" />
                        </div>
                    </div>
                </form>
            </fieldset>

        </div>


        <script src="./promoassignée.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </body>

</html>