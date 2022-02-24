<?php
    include "../php2/conn.php";
    

    $start_ort = $_GET["p_von"];
    $ende_ort = $_GET["p_nach"];
    $start_date = $_GET["date"];


   $sql = "SELECT * FROM haltestelle WHERE ort = '$ende_ort'";
   $result5 = mysqli_query($conn, $sql);
   while($row5 = mysqli_fetch_array($result5)){
       $ende_ort_id = $row5["h_id"];
   }


    $sql = "SELECT * FROM `haltestelle` JOIN `linie_haltestelle` on haltestelle.h_id = linie_haltestelle.haltestelle_id WHERE haltestelle.ort = '$start_ort'";
    $result10 = mysqli_query($conn, $sql);


    //Über all der preis
    $preis = "10";
?>

<div class="oberfläche">
    <div class="überschrift">
        <h2>Ticket Buchen</h2>
    </div>
    <div class="reise">
        
        <?php

            while($row_master = mysqli_fetch_array($result10)){
                $linie_id = $row_master["linie_id"];
                $sql = "SELECT * FROM `linie_haltestelle` JOIN haltestelle on linie_haltestelle.haltestelle_id = haltestelle.h_id WHERE linie_haltestelle.linie_id = $linie_id && linie_haltestelle.haltestelle_id = '$ende_ort_id' ";
                $abfahrt_zeit = $row_master["abfahrt_zeit"];
                $result2 = mysqli_query($conn, $sql);
                while($row_master2 = mysqli_fetch_array($result2)){
                    $h_id = $row_master2["linie_id"];
                    $ankunft_zeit = $row_master2["abfahrt_zeit"];
                    
                    $sql = "SELECT * FROM `linie_haltestelle` JOIN haltestelle on linie_haltestelle.haltestelle_id = haltestelle.h_id WHERE linie_id = $linie_id && haltestelle.ort = '$start_ort'";
                    $result3 = mysqli_query($conn, $sql);


                    while($row_master3 = mysqli_fetch_array($result3)){
                        $abfahrt_zeit = $row_master3["abfahrt_zeit"];
                    }

                    $dauer = $ankunft_zeit - $abfahrt_zeit;
                        ?>

                    <div onclick="buchung('<?=$h_id?>','<?=$start_ort?>','<?=$ende_ort?>','<?=$abfahrt_zeit?>', '<?=$ankunft_zeit?>', '<?=$start_date?>')" class="a_no">
                        <div class="ticket_box">
                            <div class="zeit_ort">
                                <div class="r_zeit">
                                    <p><?=$abfahrt_zeit?></p>
                                    <p><?=$ankunft_zeit?></p>
                                </div>
                                <div class="r_ort">
                                    <p><?=$start_ort?></p>
                                    <p><?=$ende_ort?></p>
                                </div>
                            </div>
                            <div class="r_info">
                                <div class="dauer">
                                <img src="bilder/sitzplatze.png" alt="">
                                <p><?=$dauer?> St.</p>
                                </div>
                                <div class="r_preis">
                                    <p><?=$preis?>€</p>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
                    
                    
                }
                ?>

                

    <?php
            }
            ?>
       

</div>

