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
        .binta {

            font-display: block;


        }

        .clau {
            font-display: block;
            padding-right: 50%;
            margin-left: 10%;



        }

        .flex-container {
            display: flex;

            margin-left: 30%;
        }

        label {
            padding-top: 10%;
        }
    </style>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>HELP JOB</title>
   <link rel="stylesheet" type="text/css"
       href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
</head>

<body>
    <div class="text">
        <h1 style="color: coral;padding-left: 625px;">Formulaire</h1>
    </div>
    <!--tab creer modifier supprimer-->
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Créer</a></li>
            <li><a href="#tabs-2">Modifier</a></li>
            <li><a href="#tabs-3">Supprimer</a></li>
            <li><a href="#tabs-4">Rechercher</a></li>
        </ul>
        <div id="tabs-1">
            <!--creer-->
            <form action="formulaire.php">
                <div class="flex-container">
                    <div class="binta">
                        <label for="competences"><strong>Compétences</strong></label></br>
                        <input type="text" name="Compétences" id="competences" style="height: 45px;" /></br>


                        <label for="localite"><strong>Lieu du stage</strong></label></br>
                        <input type="text" name="localité" id="localite" style="height: 45px;" /></br>


                        <label for="nom"><strong>Nom de l'entreprise</strong></label></br>
                        <input type="nom" name="nom" id="nom" style="height: 45px;" /></br>

                        <label for="nombre2"><strong>Nombre de places
                            </strong></label></br>
                        <input type="nombre" name="nombre2" id="nombre2" style="height: 45px;" /></br>

                    </div>

                    <div class="clau">
                        <label for="promo"><strong>
                                Promotions concernées</strong></label></br>
                        <input type="text" name="promo" id="promo" style="height: 45px;" /></br>

                        <label for="nombre2"><strong>Durée du
                                stage</strong></label></br>
                        <input type="nombre" name="nombre2" id="nombre2" style="height: 45px;" /></br>

                        <label for="nombre2"><strong>Base de
                                rénumération</strong></label></br>
                        <input type="nombre" name="nombre2" id="nombre2" style="height: 45px;" /></br>

                        <label for="offre"><strong>Date de
                                l'offre</strong></label></br>
                        <input type="date" name="offre" id="offre" style="height: 45px;" /></br>

                    </div>

                </div>

                <div><input type="submit" value="Valider" style="margin-left: 665px;margin-top: 35px;" /></div>
            </form>

        </div>
        <div id="tabs-2">
            <!--modifier-->
            <form action="">
                <div class="flex-container">
                    <div class="binta">
                        <label for="competences"><strong>Compétences</strong></label></br>
                        <input type="text" name="Compétences" id="competences" style="height: 45px;" /></br>


                        <label for="localite"><strong>Lieu du stage</strong></label></br>
                        <input type="text" name="localité" id="localite" style="height: 45px;" /></br>


                        <label for="nom"><strong>Nom de l'entreprise</strong></label></br>
                        <input type="nom" name="nom" id="nom" style="height: 45px;" /></br>

                        <label for="nombre2"><strong>Nombre de places
                            </strong></label></br>
                        <input type="nombre" name="nombre2" id="nombre2" style="height: 45px;" /></br>

                    </div>

                    <div class="clau">
                        <label for="promo"><strong>
                                Promotions concernées</strong></label></br>
                        <input type="text" name="promo" id="promo" style="height: 45px;" /></br>

                        <label for="nombre2"><strong>Durée du
                                stage</strong></label></br>
                        <input type="nombre" name="nombre2" id="nombre2" style="height: 45px;" /></br>

                        <label for="nombre2"><strong>Base de
                                rénumération</strong></label></br>
                        <input type="nombre" name="nombre2" id="nombre2" style="height: 45px;" /></br>

                        <label for="offre"><strong>Date de
                                l'offre</strong></label></br>
                        <input type="date" name="offre" id="offre" style="height: 45px;" /></br>

                    </div>

                </div>

                <div><input type="submit" value="Modifier" style="margin-left: 665px;margin-top: 35px;" /></div>
            </form>


        </div>
        <div id="tabs-3">
            <!--suprimerr-->
            <form action="">
                <div class="flex-container">
                    <div class="binta">
                        <label for="competences"><strong>Compétences</strong></label></br>
                        <input type="text" name="Compétences" id="competences" style="height: 45px;" /></br>


                        <label for="localite"><strong>Lieu du stage</strong></label></br>
                        <input type="text" name="localité" id="localite" style="height: 45px;" /></br>


                        <label for="nom"><strong>Nom de l'entreprise</strong></label></br>
                        <input type="nom" name="nom" id="nom" style="height: 45px;" /></br>

                        <label for="nombre2"><strong>Nombre de places
                            </strong></label></br>
                        <input type="nombre" name="nombre2" id="nombre2" style="height: 45px;" /></br>

                    </div>

                    <div class="clau">
                        <label for="promo"><strong>
                                Promotions concernées</strong></label></br>
                        <input type="text" name="promo" id="promo" style="height: 45px;" /></br>

                        <label for="nombre2"><strong>Durée du
                                stage</strong></label></br>
                        <input type="nombre" name="nombre2" id="nombre2" style="height: 45px;" /></br>

                        <label for="nombre2"><strong>Base de
                                rénumération</strong></label></br>
                        <input type="nombre" name="nombre2" id="nombre2" style="height: 45px;" /></br>

                        <label for="offre"><strong>Date de
                                l'offre</strong></label></br>
                        <input type="date" name="offre" id="offre" style="height: 45px;" /></br>

                    </div>

                </div>

                <div><input type="submit" value="Supprimer" style="margin-left: 665px;margin-top: 35px;" /></div>

            </form>
        </div>
        <div id="tabs-4">
            <!--creer-->
            <form action="formulaire.php">
                <div class="flex-container">
                    <div class="binta">
                        <label for="competences"><strong>Compétences</strong></label></br>
                        <input type="text" name="Compétences" id="competences" style="height: 45px;" /></br>


                        <label for="localite"><strong>Lieu du stage</strong></label></br>
                        <input type="text" name="localité" id="localite" style="height: 45px;" /></br>


                        <label for="nom"><strong>Nom de l'entreprise</strong></label></br>
                        <input type="nom" name="nom" id="nom" style="height: 45px;" /></br>

                        <label for="nombre2"><strong>Nombre de places
                            </strong></label></br>
                        <input type="nombre" name="nombre2" id="nombre2" style="height: 45px;" /></br>

                    </div>

                    <div class="clau">
                        <label for="promo"><strong>
                                Promotions concernées</strong></label></br>
                        <input type="text" name="promo" id="promo" style="height: 45px;" /></br>

                        <label for="nombre2"><strong>Durée du
                                stage</strong></label></br>
                        <input type="nombre" name="nombre2" id="nombre2" style="height: 45px;" /></br>

                        <label for="nombre2"><strong>Base de
                                rénumération</strong></label></br>
                        <input type="nombre" name="nombre2" id="nombre2" style="height: 45px;" /></br>

                        <label for="offre"><strong>Date de
                                l'offre</strong></label></br>
                        <input type="date" name="offre" id="offre" style="height: 45px;" /></br>

                    </div>

                </div>

                <div><input type="submit" value="Rechercher" style="margin-left: 665px;margin-top: 35px;" /></div>
            </form>

        </div>

    </div>
    <!--script-->
    <script rel="stylesheet" type="text/css"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


    <script>
        $(function () {
            $("#tabs").tabs();
        });
    </script>

</body>

</html>