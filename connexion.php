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
body{
 background-image: url("image8.png");
 font-family:"trebuchet ms",sans-serif;
 font-size:90%;
 padding:none;
 background-color:none;
 }
    
.claude{
	background-color: white;
            width: 100%;
            height: 45px;
}
input{

	 margin-bottom:20%;
}
input[type=submit] {
 width:100px;
 margin-left:5px;; 
 box-shadow:1px 3px 1px #D83F3D;
 cursor:pointer;
 }
 legend {
 color:black;
 font-weight:bold
 }
 
 .connexion fieldset {
 padding:20px 20px 200px 50px;
 margin: auto;
 margin-top: 10%;
 height: 290px;
 border:2px solid ;
 background-color: white;
width: 25%;
 }
.password + .unmask {
  position:absolute;
  right: 68px; top: 7px;
  width: 25px;
  height: 25px;
  text-indent: -9999px;
  background: #aaa;
  border-radius: 50%;
}
.password + .unmask:before {
  content: "";
  position:absolute;
  top:4px; left:4px;
  z-index:1;
  width: 17px;
  height: 17px;
  background: #e3e3e3;
  border-radius: 50%;
}
.password[type="text"] + .unmask:after {
  content: "";
  position:absolute;
  top:6px; left:6px
  z-index:2;
  width: 13px;
  height: 13px;
  background: #aaa;
  border-radius: 50%;
}
</style>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion</title>
    
	
	 <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <script type="text/javascript" src="connexion.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

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
            <form method="POST">
            <fieldset>
			<legend> Connexion </legend>

			<label>*Identifiant: </label></br>
			<input type="text" size="20" /></br>
			 <p>
         <label for="password">*Mot de passe:</label></br>
         <input type="password" value="" placeholder="Entrez votre mot de passe" id="password">
         </br>

			<input type="checkbox" id="remember" name="se souvenir de moi"
         checked>
     <label for="scales">se souvenir de moi </label>
 </br>

			<input type="submit" value="Connexion" />
</div>
			</select>
		</form>
		</fieldset>
<footer>
</footer>
<script rel="stylesheet" type="text/css"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </script>
    <script type="text/javascript" src="connexion.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>




</body>

</html>