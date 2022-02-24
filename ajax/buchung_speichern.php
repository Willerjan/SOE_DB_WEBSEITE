<?php
    session_start();
    ob_start();
    $user_id = $_POST["user_id"];
    $start_ort = $_POST["start_ort"];
    $ende_ort = $_POST["ende_ort"];
    $sitzplatz = $_POST["sitzplatz"];
    $linie_hd = $_POST["linie_hd"];
    $start_zeit = $_POST["start_zeit"];
    $ende_zeit = $_POST["ende_zeit"];
    $start_date = $_POST["start_date"];

    include "../php2/conn.php";

    $sql = "INSERT INTO `fahrt`(`bus_id`, `preis`, `sitzplatz`,`abfaht_datum`, `abfahrt_uhrzeit`, `ankunft_datum`,`ankunft_uhrzeit`, `start_ort`, `ankunf_ort`, `linie_id`) VALUES ('1', '10', '$sitzplatz', '$start_date', '$start_zeit', '$start_date', '$ende_zeit', '$start_ort', '$ende_ort', '$linie_hd')";
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        $sql2 = "INSERT INTO `ticket`(`u_id`, `f_id`) VALUES ('$user_id', '$last_id')";
        if (mysqli_query($conn, $sql2)) {
            $last_id_ticket = mysqli_insert_id($conn);
            $_SESSION["last_id_ticket"] = $last_id_ticket;
        }
        echo $sql;
    }else{
        echo "error";
    }

 
exit();
?>
