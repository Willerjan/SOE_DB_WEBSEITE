<?php
    session_start();
    $angemeldet = "n";

    $linie_hd = $_GET["id"];

    include "../php2/conn.php";

    if(isset($_SESSION["benutzer"])){
        $user = $_SESSION["benutzer"];
        $angemeldet = "j";
    }

    if($angemeldet == "j"){
        $sql = "SELECT * FROM user where  benutzername = '$user'";
        $result_user = mysqli_query($conn, $sql);
        while($row_user = mysqli_fetch_array($result_user)){
            $user_id = $row_user["id"];
            $vorname = $row_user["vorname"];
            $nachname = $row_user["Nachname"];
            $email = $row_user["email"];
        }
    }

    $start_ort = $_GET["start_ort"];
    $ende_ort = $_GET["ende_ort"];

    $sp_start_zeit = $_GET["start_zeit"];
    $sp_ende_zeit = $_GET["ankunf_zeit"];
    
   $start_date = $_GET["start_date"];


    //Über all der preis
    $preis = "10";

    $s1 = "n";
    $s2 = "n";
    $s3 = "n";
    $s4 = "n";
    $s5 = "n";
    $s6 = "n";
    $s7 = "n";
    $s8 = "n";
    $s9 = "n";
    $s10 = "n";
    $s11 = "n";
    $s12 = "n";
    $s13 = "n";
    $s14 = "n";
    $s15 = "n";
    $s16 = "n";
    $s17 = "n";
    $s18 = "n";
    $s19 = "n";
    $s20 = "n";

    $sql = "SELECT * FROM fahrt where linie_id = $linie_hd AND abfaht_datum = '$start_date'";
    $reuslt_platz = mysqli_query($conn, $sql);

    while($row_platz = mysqli_fetch_array($reuslt_platz)){
        $speicher = $row_platz["sitzplatz"];
        if($speicher == 1){
            $s1 = "j";
        }
        if($speicher == 2){
            $s2 = "j";
        }
        if($speicher == 3){
            $s3 = "j";
        }
        if($speicher == 4){
            $s4 = "j";
        }
        if($speicher == 5){
            $s5 = "j";
        }
        if($speicher == 6){
            $s6 = "j";
        }
        if($speicher == 7){
            $s7 = "j";
        }
        if($speicher == 8){
            $s8 = "j";
        }
        if($speicher == 9){
            $s9 = "j";
        }
        if($speicher == 10){
            $s10 = "j";
        }

        if($speicher == 11){
            $s11 = "j";
        }
        if($speicher == 12){
            $s12 = "j";
        }
        if($speicher == 13){
            $s13 = "j";
        }
        if($speicher == 14){
            $s14 = "j";
        }

        if($speicher == 15){
            $s15 = "j";
        }
        if($speicher == 16){
            $s16 = "j";
        }
        if($speicher == 17){
            $s17 = "j";
        }
        if($speicher == 18){
            $s18 = "j";
        }
        if($speicher == 19){
            $s19 = "j";
        }
        if($speicher == 20){
            $s20 = "j";
        }
    }


    $sql = "SELECT * FROM `linie_haltestelle` JOIN `haltestelle` on linie_haltestelle.haltestelle_id = haltestelle.h_id JOIN `linie` on linie_haltestelle.linie_id = linie.l_id WHERE linie_haltestelle.linie_id = $linie_hd ORDER by abfahrt_zeit";
    $result_haltestellen = mysqli_query($conn, $sql);
    


?>

<div class="oberfläche">
    <div class="überschrift">
        <h2>Ticket Buchen</h2>
    </div>
    <div class="buchung">
        <div class="box fahrgast">
            <div class="header_info">
                <h2>Fahrgast</h2>
            </div>
            <?php
                if($angemeldet == "n"){
            ?>
          
            <?php
                }else{
            ?>
                <div class="text_box">
                    <p>Name: <?=$vorname?> <?=$nachname?> Email: <?=$email?></p>
                </div>
            
            <?php
                }
            ?>
        </div>

        <div class="box sitz" id="btn_sitz">
            <div class="header_info">
                <h2>Sitzplatzreservierung</h2>
            </div>
            <div class="text_box">
                <div class="bilder">
                    <img src="bilder/sitzplatze.png" alt="">
                </div>
                <div class="text_text">
                    <p class="normal">
                        Wunschplatz
                    </p>
                    <p id="platz_reserviert_speicher">
                        Kostenlos  
                    </p>
                </div>
                <div class="pfeil">
                    <img src="bilder/rechter-pfeil.png" alt="" srcset="">
                </div>
            </div>
        </div>

        <div class="box extras">
            <div class="header_info">
                <h2>Austattung</h2>
            </div>
            <div class="text_box1">
                <div class="austattung">
                    <img src="bilder/w-lan.png" alt="">
                    <p>W-lan</p>
                </div>
                <div class="austattung">
                    <img src="bilder/toilette.png" alt="">
                    <p>Toiletten</p>
                </div>
                <div class="austattung">
                    <img src="bilder/getrank.png" alt="">
                    <p>Getränke</p>
                </div>
                <div class="austattung">
                    <img src="bilder/im-bett-liegen.png" alt="">
                    <p>Liegesitze</p>
                </div>
                <div class="austattung">
                    <img src="bilder/bett.png" alt="">
                    <p>Schalfsitze</p>
                </div>
            </div>
        </div>

        <div class="box haltestellen" id="btn_haltestelle">
            <div class="header_info">
                <h2>Haltestellen</h2>
            </div>
            <div class="text_box">
                <div class="pfeil1">
                    <img src="bilder/rechter-pfeil.png" alt="">
                </div>
            </div>
        </div>
       
        <div class="buchen_btn" id="buchen_btn">
            <div class="btn">
                <p>Buchen</p>
            </div>
        </div>
    </div>
    





    <div class="sitz_platz_res" id="sitz_platz_res">
        <div class="header1">
            <img src="bilder/back.png" alt="" id="btn_sitz_back">
            <h2>Sitzplatzreservierung</h2>
        </div>
        <div class="table_text" id="table_text">
                <div class="Reservierung">
               
                </div>
                <div class="bus">
                    <div class="bus-fahrer">
                    </div>

                    <div class="left">
                        <div class="reihe 1">
                            <?php
                                if($s1 == "n"){
                                    echo "<div class='platz frei'>1</div>";
                                }else{
                                    echo "<div class='platz reserviert'>1</div>";
                                }
                                if($s2 == "n"){
                                    echo "<div class='platz frei'>2</div>";
                                }else{
                                    echo "<div class='platz reserviert'>2</div>";
                                }
                            ?>
                        </div>
                        <div class="reihe 2">
                            <?php
                                if($s3 == "n"){
                                    echo "<div class='platz frei'>3</div>";
                                }else{
                                    echo "<div class='platz reserviert'>3</div>";
                                }
                                if($s4 == "n"){
                                    echo "<div class='platz frei '>4</div>";
                                }else{
                                    echo "<div class='platz reserviert'>4</div>";
                                }
                            ?>
                        </div>
                        <div class="reihe 3">
                            <?php
                                if($s5 == "n"){
                                    echo "<div class='platz frei'>5</div>";
                                }else{
                                    echo "<div class='platz reserviert'>5</div>";
                                }
                                if($s6 == "n"){
                                    echo "<div class='platz frei'>6</div>";
                                }else{
                                    echo "<div class='platz reserviert'>6</div>";
                                }
                            ?>
            
                        </div>
                        <div class="reihe 4">
                            <?php
                                if($s7 == "n"){
                                    echo "<div class='platz frei'>7</div>";
                                }else{
                                    echo "<div class='platz reserviert'>7</div>";
                                }
                                if($s8 == "n"){
                                    echo "<div class='platz frei'>8</div>";
                                }else{
                                    echo "<div class='platz reserviert'>8</div>";
                                }
                            ?>
                        
                        </div>
                        <div class="reihe 5">
                            <?php
                                if($s9 == "n"){
                                    echo "<div class='platz frei'>9</div>";
                                }else{
                                    echo "<div class='platz reserviert'>9</div>";
                                }
                                if($s10 == "n"){
                                    echo "<div class='platz frei'>10</div>";
                                }else{
                                    echo "<div class='platz reserviert'>10</div>";
                                }
                            ?>
                        </div>
                    </div>

                    <div class="right">
                    <div class="reihe 1">
                            <?php
                                if($s11 == "n"){
                                    echo "<div class='platz frei'>11</div>";
                                }else{
                                    echo "<div class='platz reserviert'>11</div>";
                                }
                                if($s12 == "n"){
                                    echo "<div class='platz frei'>12</div>";
                                }else{
                                    echo "<div class='platz reserviert'>12</div>";
                                }
                            ?>
                        </div>
                        <div class="reihe 2">
                        <?php
                                if($s13 == "n"){
                                    echo "<div class='platz frei'>13</div>";
                                }else{
                                    echo "<div class='platz reserviert'>13</div>";
                                }
                                if($s14 == "n"){
                                    echo "<div class='platz frei'>14</div>";
                                }else{
                                    echo "<div class='platz reserviert'>14</div>";
                                }
                            ?>

                        </div>
                        <div class="reihe 3">
                        <?php
                                if($s15 == "n"){
                                    echo "<div class='platz frei'>15</div>";
                                }else{
                                    echo "<div class='platz reserviert'>15</div>";
                                }
                                if($s16 == "n"){
                                    echo "<div class='platz frei'>16</div>";
                                }else{
                                    echo "<div class='platz reserviert'>16</div>";
                                }
                            ?>
                        </div>
                        <div class="reihe 4">
                        <?php
                                if($s17 == "n"){
                                    echo "<div class='platz frei'>17</div>";
                                }else{
                                    echo "<div class='platz reserviert'>17</div>";
                                }
                                if($s18 == "n"){ 
                                    echo "<div class='platz frei'>18</div>";
                                }else{
                                    echo "<div class='platz reserviert'>18</div>";
                                }
                            ?>
                            
                        </div>
                        <div class="reihe 5">
                        <?php
                                if($s19 == "n"){
                                    echo "<div class='platz frei'>19</div>";
                                }else{
                                    echo "<div class='platz reserviert'>19</div>";
                                }
                                if($s20 == "n"){
                                    echo "<div class='platz frei'>20</div>";
                                }else{
                                    echo "<div class='platz reserviert' id='platz'>20</div>";
                                }
                            ?>

                        </div>
                    </div>

                </div>
          
        </div>

  
    </div>

    <div class="div_haltestellen" id="div_haltestellen">
        <div class="header1">
            <img src="bilder/back.png" alt="" id="btn_halt_back">
            <h2>Haltestellen</h2>
        </div>
        <div class="table_text">
            <?php
                while($row_haltestellen = mysqli_fetch_array($result_haltestellen)){
                    $ort = $row_haltestellen["ort"];
                    $abfahrtzeit = $row_haltestellen["abfahrt_zeit"];
                    

            ?>
                <div class="box">
                    <p>Haltestelle: <?=$ort?></p>
                    <p>Abfahrtzeit: <?=$abfahrtzeit?></p>
                </div>
            <?php
                }

            ?>
        </div>
    </div>
    <div class="div_buchung_erfolgreich" id="div_buchung_erfolgreich">
        
    <div class="überschrift">
        <h2>Ticket Buchen</h2>
    </div>
        <div class="table_text">
            <div class="box_erfolgreich">
                <img src="bilder/uberpruft.png" alt="">
                <p>Deine Ticket wurde erfolgreich gebucht</p>
                <a href="../seiten/ticket.php" id="a_link_ticket">Ticket Anzeigen</a>
            </div>
        </div>
    </div>
       

</body>
</html>


<script>




    var start_ort = '<?=$start_ort?>';
    var ende_ort = '<?=$ende_ort?>';
    var linie_hd = '<?=$linie_hd?>';
    var sp_start_zeit = '<?=$sp_start_zeit?>';
    var sp_ende_zeit = '<?=$sp_ende_zeit?>';
    var user_id = '<?=$user_id?>';
    var abfahrt_zeit = sp_start_zeit;
    var angemeldet = '<?=$angemeldet?>'; 
    var h_id = '<?=$linie_hd?>';
    var ankunft = sp_ende_zeit;
    var start_date = '<?=$start_date?>';

    var last_id_ticket = "";
    $("#btn_sitz").click(function(){
            $("#sitz_platz_res").addClass("show");
    });
    $("#btn_sitz_back").click(function(){
            $("#sitz_platz_res").removeClass("show");
    });
    $("#btn_haltestelle").click(function(){
            $("#div_haltestellen").addClass("show");
    });
    $("#btn_halt_back").click(function(){
            $("#div_haltestellen").removeClass("show");
    });
    $("#btn_erfolg_back").click(function(){
            window.location.href = "../";
    });


    var speicher = "";
    var sitzplatz = "";



    $(".platz.frei").click(function(){
            if(speicher == ""){
                $(this).addClass("active");
                speicher = $(this).text();
                $("#platz_reserviert_speicher").text(speicher);
            }else{
                $(".platz.frei").removeClass("active");
                $(this).addClass("active");
                speicher = $(this).text();
                $("#platz_reserviert_speicher").text(speicher);
            }
    });

    $("#buchen_btn").click(function(){
            if(speicher == ""){
                alert("Bitte Wählen Sie ein Sitzplatz aus");
            }else if(angemeldet == "n"){
                alert("Bitte Melden Sie sich an oder erstellen Sie sich ein neuen Account!");
            }else{
                sitzplatz = speicher;
                $.ajax({
                    type: "POST",
                    url: "../ajax/buchung_speichern.php",
                    data: {
                        start_ort: start_ort,
                        ende_ort: ende_ort,
                        sitzplatz: sitzplatz,
                        linie_hd: linie_hd,
                        start_zeit: sp_start_zeit,
                        ende_zeit: sp_ende_zeit,
                        user_id: user_id,
                        start_date: start_date
                    },
                    cache: false,
                    cache: false,
                    success: function(data) {
                        if(data != "error"){
                            $("#div_buchung_erfolgreich").addClass("show");
                           console.log(data)
                        }  
                    },
                    error: function(xhr, status, error){
                        console.error(xhr);
                    }
                });
            }
            
    });

    $("#a_link_ticket").click(function(){
        $(".menuitem").removeClass("active");  
 
        $("#karte1").addClass("active");

        var speicher1 = $("#karte1");
        var position = speicher1.position();
        var speicher = position.left + 20;
        $("#block").css('left', speicher)
        $("#block").css('top', -20);
        lade_seite_karte();
    });


    
</script>