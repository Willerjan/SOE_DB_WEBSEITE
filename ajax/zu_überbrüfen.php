<?php
include "../php2/conn.php";

$speicher_von = $_POST["von"];
$sql = "SELECT * FROM `haltestelle` JOIN `linie_haltestelle` on haltestelle.h_id = linie_haltestelle.haltestelle_id JOIN linie ON linie_haltestelle.linie_id = linie.l_id WHERE haltestelle.ort = '$speicher_von'";
$result = mysqli_query($conn, $sql);

$users_arr = array();
$count = 0;
while($row = mysqli_fetch_array($result)){
    $speicher_l_id = $row["l_id"];

    $sql = "SELECT * FROM `linie_haltestelle` JOIN haltestelle on linie_haltestelle.haltestelle_id = haltestelle.h_id where linie_id = $speicher_l_id";
    $result2 = mysqli_query($conn, $sql);
    while($row2 = mysqli_fetch_array($result2)){
        $zw_ort = $row2["ort"];
        
        if($zw_ort == $speicher_von){


        }else if(!in_array($zw_ort, $users_arr)){
            $users_arr[] = array($zw_ort);
        }
        
    }
}



$test = array_unique($users_arr); 
echo json_encode($users_arr);