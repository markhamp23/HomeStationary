<?php
session_start();
$usuari=$_SESSION['username'];
include_once('connectar.php');
$stmt=$conn->prepare('select mail,Permissions from user where mail=:username');
$stmt->execute(array(':username'=>$usuari));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$nomComplet=$row['mail'];
$permissions=$row['Permissions'];
if(!isset($nomComplet)){
$conn=null;
header('Location: index.php');
}
?>