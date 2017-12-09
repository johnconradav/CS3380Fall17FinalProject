<?php

// Connection to server / database
$conn = new mysqli("localhost", "root", "ThisIsPassword1", "Characters");

    //Check if the connection was successfull
    if ($conn->connect_error) {
        die("Connection failed: Error" . $conn->connect_error);
    }
