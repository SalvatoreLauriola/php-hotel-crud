<?php
include __DIR__ . '/../database.php';

// Ottieni lista stanze home

$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);
// var_dump($result);

if ($result && $result->num_rows > 0) {
    $rooms = [];
    while($row = $result->fetch_assoc()) {
        // var_dump($row);
        // echo "ID  {$row['id']} -floor: {$row['floor']} <br>";

        //popolo array rooms con singole room
        $rooms[] = $row;
    }
} elseif ($result) {
    echo 'No results';
}else {
    echo 'Query error';
}


//close db connection
$conn->close();