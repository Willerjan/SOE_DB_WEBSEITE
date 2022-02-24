<?php
    session_start();
    ob_start();
    $autor = $_SESSION["benutzer"];

    //datenbank verbindung 
    include "conn.php";

    //Anfragen
    $benutzername = $_POST["name"];
    $pass = $_POST["Passwort"];


    //Anmelde Abfrage 
    $stmt = $mysql->prepare("SELECT * FROM user WHERE benutzername = :user"); 
    $stmt->bindParam(":user", $benutzername);
    $stmt->execute();
    $count = $stmt->rowCount();

    $idauto = "auto";
    $id = isset($idauto) && !empty($idauto) && $idauto != 'auto' ? $idauto : NULL;


    if($count == 1){
        $row = $stmt->fetch();
        if(password_verify($pass, $row["passwort"])){
            $_SESSION["benutzer"] = $row["benutzername"];
            echo("angmeldet");

            header('Location: ../');
            exit();
        }else{
            echo("Fehler");
            header('Location: ../seiten/login.html#fehler');
            exit();
        }
    }else{
        echo("Fehler");
        header('Location: ../seiten/login.html#fehler');
        exit();
    }
    
        
    ob_end_flush();
?>