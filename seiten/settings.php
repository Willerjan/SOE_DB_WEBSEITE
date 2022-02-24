<?php
    session_start();
    if(isset($_SESSION["benutzer"])){
        $a = "j";
        $autor = $_SESSION["benutzer"];
    }else{
        header("Location ../");
        exit();
    }

    include "../php2/conn.php";
    
    $sql = "SELECT * from user where benutzername = '$autor'";
    $result_user = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result_user)){
        $email = $row["email"];
        $vorname = $row["vorname"];
        $Nachname = $row["Nachname"];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">




    <link rel="icon" type="image/png" sizes="32x32" href="../bilder2/android-chrome-192x192.png">



    <link rel="stylesheet" href="../css2/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>SchnellBus</title>
</head>
<body class="impressum ticket_seite_body" id="ticket_seite_body">
    <div id="start"  class="start_platz"></div>
    <div class="header" id="header"> 
        <div class="header_nav">
            <div class="logo">

                <a href="../">
                    <img src="../bilder2/android-chrome-192x192.png" alt="">                

                    <h2>SchnellBus</h2>
                </a>
            </div>

            
            <div class="l_r_nav">
                <ul>
                   <a href="#"><li><?=$autor?></li></a>
                </ul>
            </div>
        
            <div class="menu_nav">
                <ul>
                    <li><a href="../#buchen">Buchen</a></li>
                    <li><a href="../#info">Info</a></li>
                    <li><a href="../#service">Service</a></li>
                    <li><a href="../#about">Über uns</a></li>
                    <li><a href="../seiten/ticket.php">Tickets</a></li>
                    <li  class="active"><a href="../seiten/settings.php">Einstellung</a></li>
                    <li><a href="../php2/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="imp setting">
        <div class="ühberschrift">
            <h2>Einstellung</h2>
        </div>
        <div class="setting_inhalt">
            <div class="user_daten">
                <h2>User Daten</h2>
                <p>Name: <?=$vorname?> <?=$Nachname?></p>
                <p>Email: <?=$email?></p>
                <a href="#">Email Ändern</a>
                
                <p></p>
            </div>
            <div class="passwort">
                <h2>Passwort</h2>
                <a href="#">Passwort Ändern</a>
            </div>
        </div>
    </div>

    


    <div class="footer">
        <div class="header_nav">
            <div class="logo">
                <h2>SchnellBus</h2>
            </div>

            
            <div class="l_r_nav">
                <ul>
                    <li>© 2022 SchnellBus GmbH</li>
                </ul>
            </div>
        
            <div class="menu_nav">
                <ul>
                    <a href="Datenschutz.php"><li>Datenschutz</li></a>
                    <a href="Impressum.php"><li>Impressum</li></a>
                    <a href="Credits.php"><li>Credits</li></a>
                </ul>
            </div>
        </div>
    </div>
    


</body>
</html>

<script>
    $(window).scroll(function() {
        if(scrollY >= 150){
            $("#header").addClass("scroll");
        }else{
            $("#header").removeClass("scroll");
        }
    })
</script>

<script>
   
</script>