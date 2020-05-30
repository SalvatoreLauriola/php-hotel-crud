<?php
//Connect dv

include_once __DIR__ . '/../database.php';


//get room to edit
if(!empty($_GET['id'])){
    $id_room = $_GET['id'];

    //query
    $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0) {
        $room = $result->fetch_assoc();
    } else {
        die('ID non esistente');
    }
} else {
    die('impossibile-ottenere la stanza da modificare');
}



//close connection
$conn->close();