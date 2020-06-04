<?php
//Include db
include __DIR__ . '/../database.php';

//utilities
include __DIR__ . '/../functions/functions.php';

//Query prenotazioni
$bookings =  getAll($conn, 'prenotazioni');