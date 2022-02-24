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




    <link rel="icon" type="image/png" sizes="32x32" href="bilder2/android-chrome-192x192.png">

    <link rel="stylesheet" href="css3/navbar.css">
    <link rel="stylesheet" href="css3/handy.css">
    <link rel="stylesheet" href="css3/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>SchnellBus</title>
</head>
<body id="body">
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
                <li><a href="#buchen">Buchen</a></li>
                    <li><a href="#info">Info</a></li>
                    <li><a href="#service">Service</a></li>
                    <li><a href="#about">Über uns</a></li>

                <?php
                      if($a == "j"){
                ?>
                    <li><a href="seiten2/ticket.php">Tickets</a></li>
                    <li><a href="seiten2/settings.php">Einstellung</a></li>
                    <li><a href="php2/logout.php">Logout</a></li>
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
                
                    <a href="seiten2/login.html"><li>Login</li></a>
                    <a href="seiten2/register.html"><li class="register_btn">Registerieren</li></a>
            <?php
                }
            ?>



                </ul>
            </ul>
        </nav>
    </div>


    <div class="main start">
        <div class="links">
            <h2>Explore a new world.</h2>
            <p>No matter where in the world you want to go, we can help get there.</p>
            <p class="btn"><a href="#buchen">Jetzt eine Reise Buchen</a></p>
        </div>
        <div class="rechts">
            <img src="bilder/test2.png" alt="">
        </div>
    </div>

    <div class="main buchen" id="buchen">
        <div class="begrenzer">
            <div class="info_text">
                <h2>Buchen</h2>
                <div>
                    <p>Du möchtest gerne Deine Familie in der Heimat besuchen? Oder Du planst einen Trip in die Berge? Deine Fahrt mit dem Fernbus nur einen Klick entfernt.</p>
                </div>
                <p class="btn" id="btn_vollbild"><a href="#">Jetzt Portal öffnen</a></p>


            </div>
            
        </div>
    </div>

    <div class="main info" id="info">
        <div class="header_info">
            <h2>INFOS</h2>
        </div>
        <div class="boxen">
            <div class="box text1">
                <img src="bilder2/info.png" alt="">
                <p class="über">Reisen während COVID-19</p>
                <p class="p_padding">Alle aktuellen Infos zum Streckennetz findest Du immer hier.</p>
                <p><a href="#">Infos ansehen ></a></p>
            </div>
            <div class="box text1">
                <img src="bilder2/info.png" alt="">
                <p class="über">Unsere Sicherheitsmaßnahmen</p>
                <p class="p_padding">Alle aktuellen Infos zum Streckennetz findest Du immer hier.</p>
                <p><a href="#">Infos ansehen ></a></p>
            </div>
            <div class="box text1">
                <img src="bilder2/info.png" alt="">
                <p class="über">Von unterwegs buchen</p>
                <p class="p_padding">Alle aktuellen Infos zum Streckennetz findest Du immer hier.</p>
                <p><a href="#">Infos ansehen ></a></p>
            </div>
            <div class="box text1">
                <img src="bilder2/info.png" alt="">
                <p class="über">Komfort an Bord</p>
                <p class="p_padding">Alle aktuellen Infos zum Streckennetz findest Du immer hier.</p>
                <p><a href="#">Infos ansehen ></a></p>
            </div>
        </div>
    </div>

    <div class="main service" id="service">
        <div class="header_service">
            <h2>SERVICE</h2>
        </div>
        <div class="boxen">
            <div class="box text1">
                <img src="bilder2/buchung.png" alt="">
                <p class="über">Buchen & Buchung verwalten</p>
                <p class="p_padding">Wie du dein Ticket buchst und deine Buchung verwaltest</p>
                <p><a href="#">Infos ansehen ></a></p>
            </div>
            <div class="box text1">
                <img src="bilder2/bus.png" alt="">
                <p class="über">Deine Busfahrt</p>
                <p class="p_padding">Informationen zu deiner Fahrt und den Services im Bus</p>
                <p><a href="#">Infos ansehen ></a></p>
            </div>
            <div class="box text1">
                <img src="bilder2/hilfe.png" alt="">
                <p class="über">Hilfe & Mehr</p>
                <p class="p_padding">Funbüro, Newsletter und Antworten zu vielen weiteren Fragen</p>
                <p><a href="#">Infos ansehen ></a></p>
            </div>
           
        </div>
    </div>

    <div class="main kontakt" id="about">
        <div class="header_kontakt">
            <h2>THE TEAM</h2>
            <div>
            </div>
        </div>
        <div class="boxen">
            <div class="box">
                <div class="bild">
                    <img src="bilder2/luis-villasmil-hh3ViD0r0Rc-unsplash.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Gulan Beking</h3>
                    <div class="div_blur">
                        <p>Software Entwicklung</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="bild">
                    <img src="bilder2/luis-villasmil-hh3ViD0r0Rc-unsplash.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Alex Delic</h3>
                    <div class="div_blur">
                        <p>Datenbank</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="bild">
                    <img src="bilder2/luis-villasmil-hh3ViD0r0Rc-unsplash.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Jan Willer</h3>
                    <div class="div_blur">
                        <p>Webdesign</p>
                    </div>
                </div>
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
                    <a href="seiten2/Datenschutz.php"><li>Datenschutz</li></a>
                    <a href="seiten2/Impressum.php"><li>Impressum</li></a>
                    <a href="seiten2/Credits.php"><li>Credits</li></a>
                </ul>
            </div>
        </div>
    </div>
    

    <div class="voll_bild" id="voll_bild">
        <div class="hindergrund_grau" id="hindergrund_grau"></div>
            
        <div class="handy_v" id="handy">
            <div class="close" id="close_btn_voll">
                <img src="bilder2/close.png" alt="">
            </div>
            <div class="seite_übersicht" id="seite_übersicht">
                <div class="überschrift">
                    <h2>Ticket Buchen</h2>
                </div>
            
            </div>
        </div>
    </div>


</body>
</html>

<script>
    var angmeldet = '<?=$a?>';




    var größe = $( window ).width();
    if(größe >= 750){
        window.location.replace("index.php");
    }



    $(document).ready(function(){
        lade1();
    });
    


    $("#vollbild_icon").click(function(){
        if(angmeldet == "j"){
            $("#body").addClass("show");
            $("#voll_bild").addClass("show");
        }else{
            alert("Bitte melden Sie sich an oder erstellen Sie ein Account");
        }
    });
    $("#btn_vollbild").click(function(){
        if(angmeldet == "j"){
            $("#body").addClass("show");
            $("#voll_bild").addClass("show");
        }else{
            alert("Bitte melden Sie sich an oder erstellen Sie ein Account");
        }
    });
    $("#close_btn_voll").click(function(){
        $("#body").removeClass("show");
        $("#voll_bild").removeClass("show");
    })
    $("#hindergrund_grau").click(function(){
        $("#body").removeClass("show");
        $("#voll_bild").removeClass("show");
    });

    function lade1(){
        $("#seite_übersicht").html("");
        $.get('ajax/buchung_start.php', function(data) {
            $('#seite_übersicht').html(data);	
        })
    }

    function lade2(von, zu, date){
        $("#seite_übersicht").html("");
        $.get('ajax/buchung_zwei.php?p_von='+von+'&p_nach='+zu+'&date='+date+'', function(data) {
            $('#seite_übersicht').html(data);	
        })
    }

    $("#btn_suchen").click(function(){
        überprüfen();
    });

    function überprüfen(){
        var von = $("#von").val();
        var zu = $("#zu").val();
        var date = $("#date_hin_input").val();

        if(von == 0){
            alert("Bitte wählen sie eine stadt aus");
        }else if(zu == 0){
            alert("Bitte wählen sie eine stadt aus");
        }else if(date == ""){
            alert("Bitte wählen sie ein Reisedatum aus");
        }

        lade2(von, zu, date);
    }


    var h_id, start_ort, ende_ort, anfahrt_zeit, ankunft_zeit, start_date;
    function buchung( h_id,  start_ort,  ende_ort,  abfahrt_zeit,  ankunft_zeit, start_date){
        console.log("top");

        $("#seite_übersicht").html("");
        $.get('ajax/buchung_überischt.php?id='+h_id+'&start_ort='+start_ort+'&ende_ort='+ende_ort+'&start_zeit='+abfahrt_zeit+'&ankunf_zeit='+ankunft_zeit+'&start_date='+start_date+'', function(data) {
            $('#seite_übersicht').html(data);	
        })
    }

</script>