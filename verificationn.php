<?php 
    session_start();
    require_once 'conectbd.php';

    if(isset($_POST['Identifiant']) && isset($_POST['password']))
    {
        $login = htmlspecialchars($_POST['Identifiant']);
        $password = htmlspecialchars($_POST['password']);

        $check = $pdo->prepare('SELECT  login, password FROM utilisateurs WHERE login = ? && password =?');
        $check->execute(array($login));
        $data = $check->fetch();
        $row = $check->rowCount();

     /*   if($row == 1)
        {*/
            if(filter_var($login, FILTER_VALIDATE_EMAIL))
            {
               $password = hash('sha256',$password );
                
                if($data['password'] === $password)
                {
                    $_SESSION['user'] = $data['Identifiant'];
                    header('Location: Creerpilote.php');
                    die();
                }
                else{ header('Location: index.php?login_err=password'); die();
               
               }
            }
            else{ header('Location: index.php?login_err=email'); die();
             }
        }
        else{ header('Location: index.php?login_err=already'); die();
        }
     //  else header ('Location: index.php');
      
      
    
?>
