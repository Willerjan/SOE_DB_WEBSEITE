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
    if($a == "j"){
        //user_id abfragen
        $sql = "SELECT * FROM user WHERE benutzername = '$autor'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            $user_id = $row["id"];
            $user_vorname = $row["vorname"];
            $user_nachname = $row["Nachname"];
        }
       
        //tickets laden
        $sql = "SELECT * FROM ticket JOIN fahrt on ticket.f_id = fahrt.id WHERE u_id = '$user_id'";
        $result2 = mysqli_query($conn , $sql);
    
    }
    
    $speicherr = "";
    if(isset($_GET["öffnen"])){
        $speicherr = $_GET["öffnen"];
        $sql = "SELECT * FROM `ticket` JOIN `fahrt` on ticket.f_id = fahrt.id WHERE ticket.t_id = $speicher_id_last_add";
        $result_last_item = mysqli_query($conn, $sql);
        while($row_infos = mysqli_fetch_array($result_last_item)){
            $t_id = $row_infos["t_id"];
            $u_id = $row_infos["u_id"];
            $f_id = $row_infos["f_id"];
            $bus_id = $row_infos["bus_id"];
            $preis = $row_infos["preis"];
            $sitzplatz = $row_infos["sitzplatz"];
            $abfahrt_datum = $row_infos["abfaht_datum"];
            $abfahrt_uhtzeit = $row_infos["abfahrt_uhrzeit"];
            $ankunft_datum = $row_infos["ankunft_datum"];
            $ankunft_uhrzeit = $row_infos["ankunft_uhrzeit"];
            $start_ort = $row_infos["start_ort"];
            $ankunf_ort = $row_infos["ankunf_ort"];
            $linie_id = $row_infos["linie_id"];
        }
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
                    <li class="active"><a href="../seiten/ticket.php">Tickets</a></li>
                    <li><a href="../seiten/settings.php">Einstellung</a></li>
                    <li><a href="../php2/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="imp ">
        <div class="ühberschrift">
            <h2>Meine Tickets</h2>
        </div>
        <div>

        <div class="header2">
    <div class="ticket" >

        <?php
            if($angemeldet == "n"){
        ?>
                <div class="nicht_angemdeldet">
                    <img src="bilder/login.png" alt="">
                    <p>Bitte melden Sie sich an.</p>
                    <p><a href="#" id="login_ticket">Zum Login</a></p>
                </div>
        <?php
            }else{
        ?>
            

                <?php
                while($row_ticket = mysqli_fetch_array($result2)){
                    $id = $row_ticket["id"];
                    $preis = $row_ticket["preis"];
                    $sitzplatz = $row_ticket["sitzplatz"];
                    $bus_id = $row_ticket["bus_ticket"];
                    $abfahrt_datum = $row_ticket["abfaht_datum"];
                    $abfahrt_uhrzeit = $row_ticket["abfahrt_uhrzeit"];
                    $ankunft_uhrzeit = $row_ticket["ankunft_uhrzeit"];
                    $start_ort = $row_ticket["start_ort"];
                    $ankunf_ort = $row_ticket["ankunf_ort"];
                
        
        ?>
            <div class="ticket_box" id="ticket_box">
                
                <div class="id_speicher_id_ticket"><?=$id?></div>
                <div class="zeit_ort">
                    <div class="zeit">
                        <p><?=$abfahrt_uhrzeit?></p>
                        <p><?=$ankunft_uhrzeit?></p>
                    </div>
                    <div class="ort">
                        <p><?=$start_ort?></p>
                        <p><?=$ankunf_ort?></p>
                    </div>
                </div>
                <div class="t_info">
                    <div class="dauer">
                       <img src="../bilder/sitzplatze.png" alt="">
                       <p><?=$sitzplatz?></p>
                    </div>
                    <div class="preis">
                        <p><?=$preis?>€</p>
                    </div>
                </div>
            </div>



        <?php
                }
            }
        ?>
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
    

    

    <div class="div_ticket_öffnen div_öffner" id="div_ticket_öffnen">

        <div class="ühberschrift1">
            <img src="../bilder/back.png" alt="" id="btn_erfolg_back">

            <h2>Ticket Übersicht</h2>
        </div>
        <div class="table_text">
            <div class="box_erfolgreich_div">
                <p id="sp_start">Start: </p>
                <p id="sp_ende">Ankunf: </p>
                <p id="start_datum_zeit">Start Datum/Uhrzeit: </p>
                <p id="ende_datum_zeit">Ankunft Datum/Uhrzeit: </p>
                <p id="sp_preis">Preis: </p>
                <p id="sp_platz">Sitzplatz: </p>
                <a href="#">Büchung Stonieren</a>


                

            </div>
            <div class="qr_code">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?=$autor?>" alt="" >
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
     var angmeldet = '<?=$a?>';
    var test = $( window ).width();
    if(test <= 750){
        window.location.replace("../seiten2/ticket.php");
            }
    var öffnen_j_n = '<?=$speicherr?>';
    var id_speicher ="";
    

    var autor = '<?=$autor?>';
    var t_id, u_id, f_id, bus_id, preis, sitzplatz, abfahrt_datum, abfahrt_uhrzeit, ankunf_datum, ankunf_uhrzeit, start_ort, ankunf_ort, linie_id;







    $(".ticket_box").click(function(){
        $("#ticket_seite_body").addClass("block");

        id_speicher = $(this).find('.id_speicher_id_ticket').text();
        console.log(id_speicher);
        
        $.ajax({
                type: "POST",
                url: "../ajax/ticket_infos.php",
                data: {
                    id: id_speicher
                },
                cache: false,
                cache: false,
                success: function(data) {
                    var tmp = data.split(",");
                    console.log(tmp[1]);        
                    $("#sp_start").text("Start: " + tmp[10]);
                    $("#sp_ende").text("Akunft: " + tmp[11]);
                    $("#start_datum_zeit").text(tmp[6] + "/" + tmp[7]);
                    $("#ende_datum_zeit").text(tmp[8] + "/" + tmp[9]);
                    $("#sp_preis").text("Preis: " + tmp[4]);
                    $("#sp_platz").text("Sitzplatz: " + tmp[5]);
                    $("#div_ticket_öffnen").addClass("show");           
                },
                error: function(xhr, status, error){
                    console.error(xhr);
                }
            });

    });



    $("#btn_erfolg_back").click(function(){
        $("#ticket_seite_body").removeClass("block");

        $("#div_ticket_öffnen").removeClass("show");
    });




    if(öffnen_j_n != ""){
        

        var sp_preis ='<?=$preis?>';
        var sp_platz = '<?=$sitzplatz?>';
        var start_datum = '<?=$abfahrt_datum?>';
        var start_zeit = '<?=$abfahrt_uhtzeit?>'; 
        var ende_datum = '<?=$ankunft_datum?>'; 
        var ende_zeit = '<?=$ankunft_uhrzeit?>';
        var start_ort = '<?=$start_ort?>';
        var ende_ort = '<?=$ankunf_ort?>';
        $("#sp_start").text("Start: " + start_ort);
        $("#sp_ende").text("Akunft: " + ende_ort);
        $("#start_datum_zeit").text(start_datum + "/" + start_zeit);
        $("#ende_datum_zeit").text(ende_datum + "/" + ende_zeit);
        $("#sp_preis").text("Preis: " + sp_preis);
        $("#sp_platz").text("Sitzplatz: " + sp_platz); 
        
        
        $("#div_ticket_öffnen").addClass("show");

    }else{

    }
</script>