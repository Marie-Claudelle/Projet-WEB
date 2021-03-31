<?php
session_start();
if(isset($_POST['Identifiant']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password= '';
    $db_name     = 'web';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['Identifiant'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    
    if($username !== "" && $password !== "" )
    {
      $profil ="SELECT * FROM profil WHERE statut = '".$statut."'";
        $requete = "SELECT * FROM utilisateurs WHERE login = '".$username."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $exec_profil = mysqli_query($db, $profil);
        $reponse      = mysqli_fetch_array($exec_requete);
        $rep = mysqli_fetch_array($exec_profil);
        $statut = $reponse['statut'];
        
        // etudiant
        if($username!="" && $password!="" )// nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['Identifiant'] = $username;
           header('Location: etudiant.php');
        }
        elseif($username!="" && $password!="" && $statut="Administrateur" && $statut="Pilote" )
        {
           header('Location: delegue.php'); // utilisateur ou mot de passe incorrect
        }
        elseif(($username!="" && $password!="" && $statut="Administrateur")
        {
           header ('Location: pilote.php');
        }
        elseif($username!="" && $password!="" )
        {
           header ('Location: administrateur.php');
        }
    }
    else
    {
       header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: index.php');
}
mysqli_close($db); // fermer la connexion
?>