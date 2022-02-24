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

    <div class="imp ">
        <div class="ühberschrift">
            <h2>Impressum</h2>
        </div>
        <div class="text datenschutz">
            <h2>Angaben gem&auml;&szlig; &sect; 5 TMG</h2>
            <p>Schnellbus GmbH<br />
            Ernst-Zimmermann-Str. 26<br />
            Gummersbach Gummersbach</p>

            <p><strong>Vertreten durch:</strong><br />
            Gulan Beking</p>

            <h2>Kontakt</h2>
            <p>Telefon: 02261/9680-0<br />
            Telefax: 02261/9680-79<br />
            E-Mail: info@schnellbus.de</p>

            <h2>Redaktionell verantwortlich</h2>
            <p>Gulan Beking</p>

            <h2>Verbraucher&shy;streit&shy;beilegung/Universal&shy;schlichtungs&shy;stelle</h2>
            <p>Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>

            <p>Quelle: <a href="https://www.e-recht24.de">https://www.e-recht24.de</a></p>
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
                    <a href="Impressum.php"><li class="acitve">Impressum</li></a>
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