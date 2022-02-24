<?php
    session_start();
    ob_start();
    include "../php2/conn.php";

    $sp_vorname = $_POST["vorname"];
    $sp_nachname = $_POST["nachname"];
    $sp_benutzername = $_POST["benutzername"];
    $sp_email = $_POST["email"];
    $passwort = $_POST["passwort"];

    $sp_email = $_POST["email"];
    $sp_benutzername = $_POST["benutzername"];

    $sp_email_j = "";
    
    $sql = "SELECT * FROM user WHERE email = '$sp_email'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
        $sp_email_j = "j";
    }
    
    
    $sp_benutzername_j = "";
    $sql = "SELECT * FROM user WHERE benutzername = '$sp_benutzername'";
    $result20 = mysqli_query($conn, $sql);

    
    
    while($row2 = mysqli_fetch_array($result20)){
        $sp_benutzername_j = "j";
    }

    if($sp_email_j == "j"){
        echo "Email adresse ist schon vergeben";
        header("Location: ../seiten/register.html#fehler");
    }else if ($sp_benutzername_j == "j"){
        echo "Benutzername ist schon vergeben";
        header("Location: ../seiten/register.html#fehler");

    }else{
        echo "keine Fehler";
    

    $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `user`(`benutzername`, `passwort`, `rechte`, `email`, `vorname`, `Nachname`) VALUES ('$sp_benutzername', '$passwort_hash', '1', '$sp_email' , '$sp_vorname' , '$sp_nachname')";
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM user WHERE benutzername = '$sp_benutzername'";
    $result2 = mysqli_query($conn, $sql);
    $ja_nein = "n";
    while($row = mysqli_fetch_array($result2)){
        $ja_nein = $row["email"];
    }

    if($ja_nein != "n"){
        $_SESSION["benutzer"] =$sp_benutzername;
        echo "hinzugefüt";
        header("Location: ../");
        exit();
    }else{
        echo "nicht hinzugefügt";
        header("Location: ../php2/register.php");
        exit();
    }
}