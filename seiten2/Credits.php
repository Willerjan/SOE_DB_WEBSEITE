<?php
    session_start();
    if(isset($_SESSION["benutzer"])){
        $angemldet = $_SESSION["benutzer"];
        $a = "j";
    }else{
        $a = "n";
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">




    <link rel="icon" type="image/png" sizes="32x32" href="../bilder2/android-chrome-192x192.png">


    <link rel="stylesheet" href="../css3/navbar.css">
    <link rel="stylesheet" href="../css3/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>SchnellBus</title>
</head>
<body class="impressum">
    <div id="start"  class="start_platz"></div>
    <div class="header" id="header"> 
        <nav role="navigation">
            <div id="menuToggle">
              <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            <ul id="menu">
                <a href="#start" class="logo">
                    <img src="bilder2/android-chrome-192x192.png" alt="">                
                    <h2>SchnellBus</h2>
                </a>
                    <li><a href="../index_handy.php#buchen">Buchen</a></li>
                    <li><a href="../index_handy.php#info">Info</a></li>
                    <li><a href="../index_handy.php#service">Service</a></li>
                    <li><a href="../index_handy.php#about">Über uns</a></li>

                <?php
                      if($a == "j"){
                ?>
                    <li><a href="ticket.php">Tickets</a></li>
                    <li><a href="settings.php">Einstellung</a></li>
                    <li><a href="../php2/logout.php">Logout</a></li>
                <?php      
                    }
                ?>
                <?php
                if($a == "j"){
            ?>
                    <li><?=$angemldet?></li>
            <?php
                }else{
            ?>
                
                    <a href="login.html"><li>Login</li></a>
                    <a href="register.html"><li class="register_btn">Registerieren</li></a>
            <?php
                }
            ?>



                </ul>
            </ul>
        </nav>
    </div>

    <div class="imp header">
        <div class="ühberschrift">
            <h2>Credits</h2>
        </div>
        <div class="text">
            <p>
                <a href="https://www.flaticon.com/free-icons/info" title="info icons">Info icons created by Freepik - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/free-icons/ticket" title="ticket icons">Ticket icons created by Freepik - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/de/kostenlose-icons/suche" title="suche Icons">Suche Icons erstellt von Freepik - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/de/kostenlose-icons/stift" title="stift Icons">Stift Icons erstellt von Freepik - Flaticon</a>    
            </p>
            <p>
                <a href="https://www.flaticon.com/free-icons/login" title="login icons">Login icons created by Freepik - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/de/kostenlose-icons/karte" title="karte Icons">Karte Icons erstellt von Freepik - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/free-icons/back" title="back icons">Back icons created by Ilham Fitrotul Hayat - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/de/kostenlose-icons/sitz" title="sitz Icons">Sitz Icons erstellt von inipagistudio - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/de/kostenlose-icons/nachster" title="nächster Icons">Nächster Icons erstellt von Roundicons - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/de/kostenlose-icons/w-lan" title="w-lan Icons">W-lan Icons erstellt von Freepik - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/de/kostenlose-icons/badezimmer" title="badezimmer Icons">Badezimmer Icons erstellt von Freepik - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/de/kostenlose-icons/getrank" title="getränk Icons">Getränk Icons erstellt von alkhalifi design - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/de/kostenlose-icons/bett" title="bett Icons">Bett Icons erstellt von Cursor Creative - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/de/kostenlose-icons/legen" title="legen Icons">Legen Icons erstellt von Freepik - Flaticon</a>
            </p>
                
            <p>
                <a href="https://www.flaticon.com/de/kostenlose-icons/tick" title="tick Icons">Tick Icons erstellt von Pixel Buddha - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/de/kostenlose-icons/vollbildschirm" title="vollbildschirm Icons">Vollbildschirm Icons erstellt von Freepik - Flaticon</a>
            </p>
            <p>
                <a href="https://www.flaticon.com/free-icons/close" title="close icons">Close icons created by ariefstudio - Flaticon</a>
            </p>

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
                    <a href="Credits.php"><li class="acitve">Credits</li></a>
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