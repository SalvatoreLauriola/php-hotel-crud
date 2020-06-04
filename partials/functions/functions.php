<?php

// GET ALL RECORDS FROM A DB TABLE : passerò la tabella su cui voglio printare i dati
function getAll($conn, $table) {
    $sql = "SELECT * FROM `$table`";
    $result = $conn->query($sql);
    // var_dump($result);

    if ($result && $result->num_rows > 0) {
        $records = [];
        while($row = $result->fetch_assoc()) {
            // var_dump($row);
            // echo "ID  {$row['id']} -floor: {$row['floor']} <br>";

            //popolo array rooms con singole room
            $records[] = $row;
        }
    } elseif ($result) {
        $records = [];
    }else {
        $records = false;
    }


    //close db connection
    $conn->close();

    return $records;
}


// Get a single record by ID
function getById($conn, $table, $id) {
    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);
    // var_dump($result);

    if($conn && $result->num_rows > 0) {
        $record = $result->fetch_assoc();
        // var_dump($room);

    }elseif($result) {
        $record = [];
    } else {
        $record = false;
    }

    //Close connection

    $conn->close();

    return $record;

}


// Delete a record by ID
function removeById($conn, $table, $id, $url) {
    $sql = "DELETE FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);

    var_dump($result);

    if($result && $conn ->affected_rows > 0){
        header("Location: $url");
    } elseif($result) {
        die('Nessuna stanza trovata');
    } else {
        die('Si è verificato un errore');
    }

    $conn->close();
}