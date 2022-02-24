<?php

    include "../php2/conn.php";

    $speicher_id = $_POST["id"];

    $sql = "SELECT * FROM `ticket` JOIN `fahrt` on ticket.f_id = fahrt.id WHERE ticket.t_id =  $speicher_id";
    $result = mysqli_query($conn, $sql);
    while($row_infos = mysqli_fetch_array($result)){
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

    $array = array($t_id, $u_id, $f_id, $bus_id, $preis, $sitzplatz, $abfahrt_datum, $abfahrt_uhtzeit,$ankunft_datum, $ankunft_uhrzeit, $start_ort, $ankunf_ort, $linie_id);


    foreach($array as $a)
    echo $a.",";

 
    exit();
?>
    