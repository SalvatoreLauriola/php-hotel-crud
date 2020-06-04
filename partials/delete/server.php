<?php
// Aprire connessione al db
include_once __DIR__ . '/../database.php';

//utilities
include __DIR__ . '/../functions/functions.php';

//Get room Id
if (empty($_POST['id'])) {
    die('ID errato');
}

$id_room = $_POST['id'];
$url = "$base_path?del=room";

//QUery
removeById($conn, 'stanze', $id_room, $url);

// $sql = "DELETE FROM `stanze` WHERE `id` = $id_room";
// $result = $conn->query($sql);

// var_dump($result);

// if($result && $conn ->affected_rows > 0){
//     header("Location: $base_path?del=1");
// } elseif($result) {
//     echo 'Nessuna stanza trovata';
// } else {
//     echo 'Si è verificato un errore';
// }