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

input[type=submit][type=reset] {
 width:100px;
 margin-left:5px;; 
 box-shadow:1px 3px 1px #D83F3D;
 cursor:pointer;
 }
input{

	 margin-bottom:20%;
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
        </ul>
        <div id="tabs-1">
            <!--creer-->
            <form action="">
                <div style="margin: auto;width: 60%; margin-left: 30%;">

                    <div style="display: inline-block; padding-right: 20%; padding-top: 10%;"><label
                            for="nom"><strong>Nom de l'entreprise</strong></label><br />
                        <input type="text" name="nom" id="nom" style="height: 45px;" />
                    </div>

                    <div style="display: inline-block;"><label for="domaine"><strong>Secteur
                                d'activité</strong></label><br />
                        <input type="text" name="domaine" id="domaine" style="height: 45px;" />
                    </div>

                    <div class="let" style="display: inline-block;padding-right:20%;padding-top: 10%;"><label
                            for="localité"><strong>Localité</strong></label><br />
                        <input type="localité" name="localité" id="localité" style="height: 45px;" />
                    </div>
                      <div style="display: inline-block;"><label for="stagiaire"><strong> Nombre de stagiaire au CESI</strong></label><br />
                        <input type="text" name="stagiaire" id="stagiaire" style="height: 45px;" />
                    </div>

                </div>
                <div><input type="submit" value="Valider" style="margin-left: 700px;" /></div>
            </form>

        </div>
        <div id="tabs-2">
            <!--modifier-->
            <form action="">
                <div style="margin: auto;width: 60%; margin-left: 30%;">

                    <div style="display: inline-block; padding-right: 20%; padding-top: 10%;"><label
                            for="nom1"><strong>Nom de l'entreprise</strong></label><br />
                        <input type="text" name="nom" id="nom1" style="height: 45px;" />
                    </div>

                    <div style="display: inline-block;"><label for="domaine1"><strong>Secteur
                                d'activité</strong></label><br />
                        <input type="text" name="domaine" id="domaine1" style="height: 45px;" />
                    </div>

                    <div class="let" style="display: inline-block;padding-right:20%;padding-top: 10%;"><label
                            for="localité"><strong>Localité</strong></label><br />
                        <input type="localité" name="localité" id="localité1" style="height: 45px;" />
                    </div>
                    <div style="display: inline-block;"><label for="stagiaire"><strong> Nombre de stagiaire au CESI</strong></label><br />
                        <input type="text" name="stagiaire" id="stagiaire" style="height: 45px;" />
                    </div>

                </div>
                <div><input type="submit" value="Modifier" style="margin-left: 700px;" /></div>
            </form>


        </div>
        <div id="tabs-3">
            <!--suprimerr-->
            <form action="">
                <div style="margin: auto;width: 60%; margin-left: 30%;">

                    <div style="display: inline-block; padding-right: 20%; padding-top: 10%;"><label
                            for="nom1"><strong>Nom de l'entreprise</strong></label><br />
                        <input type="text" name="nom" id="nom1" style="height: 45px;" />
                    </div>

                    <div style="display: inline-block;"><label for="domaine1"><strong>Secteur
                                d'activité</strong></label><br />
                        <input type="text" name="domaine" id="domaine1" style="height: 45px;" />
                    </div>

                    <div class="let" style="display: inline-block;padding-right:20%;padding-top: 10%;"><label
                            for="localité"><strong>Localité</strong></label><br />
                        <input type="localité" name="localité" id="localité" style="height: 45px;" />
                    </div>
                   <div style="display: inline-block;"><label for="stagiaire"><strong> Nombre de stagiaire au CESI</strong></label><br />
                        <input type="text" name="stagiaire" id="stagiaire" style="height: 45px;" />
                    </div>

                </div>
                <div><input type="submit" value="Supprimer" style="margin-left: 700px;margin-top:8%"/></div>

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