
<?php
session_start();
?>

<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion</title>
    
	
	 <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <script type="text/javascript" src="connexion.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="container">
        <div class="claude">
   <div class="navbar navbar-expand-md sticky-top fixed-top">
                        <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link" style="color: black;"> Menu</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" style="color: black; padding-left: 60px;">Modifier</a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link"
                                style="color: black; padding-left: 60px;">Aide</a></li>
                    </ul>
                </div>
            </div>
            <!-- zone de connexion -->
            <fieldset>
            <legend>Connexion</legend>

            <form action="verification.php" method="POST">
                
                <label><b>*Identifiant</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>*Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required></br>
                <input type="checkbox" id="remember" name="se souvenir de moi">
     <label for="scales">se souvenir de moi </label>
 </br>

                <input type="submit" id='submit' value='Connexion' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
            </fieldset>
        </div>
        <script rel="stylesheet" type="text/css"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </script>
    <script type="text/javascript" src="connexion.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </body>
</html>