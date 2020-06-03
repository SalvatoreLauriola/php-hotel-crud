<?php
// connect to db
include_once __DIR__ . '/../database.php';

// check id
if( empty($_POST['id']) ) {
    die('ID non esistente');

}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

//perform update
// $sql = "UPDATE `stanze`
// SET `room_number` = $room_number, `beds` = $beds, `floor` = $floor
// WHERE `id` = $id_room";
// $result = $conn->query($sql);

//Update with prepared statement
$sql = "UPDATE `stanze`
SET `room_number` = ?, `beds` = ?, `floor` = ?, `updated_at` = NOW()
WHERE `id` = ?";
$stmt = $conn->prepare($sql);

//sostituisce slot
$stmt->bind_param('iiii', $room_number, $beds, $floor, $id_room);

//esecuzione della richiesta
$stmt->execute();

if($stmt && $stmt->affected_rows > 0) {
    header("Location: $base_path" . "show.php?id=$id_room");
} elseif ($stmt) {
    die('Nessuna stanza trovata');
} else {
    die('Query sbagliata');
}

//close connection
$conn->close();