<?php

// Connection to server / database
$conn = new mysqli("localhost", "root", "ThisIsPassword1", "loginsystem");

    //Check if the connection was successfull
    if ($conn->connect_error) {
        die("Connection failed: fuccckkk" . $conn->connect_error);
    }
