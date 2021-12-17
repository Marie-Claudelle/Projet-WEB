<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style + CDN Bootstrap -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
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
       
<div class="connexion">
<form action="verification.php" method="POST">
            <fieldset>
			<legend> Connexion </legend>

			<label>*Identifiant: </label></br>
			<input type="text" name="Identifiant" size="20" /></br>
			 <p>
         <label for="password">*Mot de passe:</label></br>
         <input type="password" name="password" value="" placeholder="Entrez votre mot de passe" id="password">
         </br>

			<input type="checkbox" id="remember" name="se souvenir de moi"
         checked>
     <label for="scales">se souvenir de moi </label>
 </br>
 <input type="submit" value="Connexion" />


                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>
