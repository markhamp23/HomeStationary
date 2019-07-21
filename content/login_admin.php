<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if(isset($_POST['login'])) {
    include_once('./admin/lib/connectar.php');
	  
    if (empty($_POST['username']) && empty($_POST['password'])) {
        $error = 'U1';
    }
    else if (empty($_POST['username'])) {
        $error = 'U2';
    }
    else if (empty($_POST['password'])) {
        $error = 'U3';
    }
    else {
        // Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
        // Establir la connexió
        // Protegir MySQL Injection
        // Comprovar el nom usuari
        $username = stripslashes($username);
        $stmt=$conn->prepare('SELECT * FROM user WHERE Mail=:username');
        $stmt->bindParam(':username',$username,PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->fetch(PDO::FETCH_ASSOC)) {
            // Comprovar password
            $password = stripslashes($password);
            $stmt2=$conn->prepare('SELECT * FROM user WHERE Pass=:password');
            $stmt2->bindParam(':password',$password,PDO::PARAM_STR);
            $stmt2->execute();	
					
            if ($stmt2->fetch(PDO::FETCH_ASSOC)) {
                $_SESSION['username'] = $username; // Inici de sessió
                header("location: ../admin/home.php"); // Redireccio a la pàgina home
                }
            else{
                $error = 'U4';
            }
        }
        else {
            $error = 'U5';
        }
    }
$conn=null;
}
?>