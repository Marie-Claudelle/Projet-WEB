<?php

try{

$pdo=new PDO("mysql:host=localhost;dbname=web","root","");

}

catch(PDOException $e){

echo $e->getMessage();
die;
}
?>