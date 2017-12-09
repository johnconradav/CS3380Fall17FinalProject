<?php
    //Check that the button was clicked
    if (isset($_GET['saveCharButton'])){ //if submit button returns true value then continue

        //echo "fuckckckckkckck";
        //Connect to the db
        include_once 'chardbInclude.php';

        $race = mysqli_real_escape_string($conn, $_GET['Race']);
        $strength = mysqli_real_escape_string($conn, $_GET['Strength']);
        $defense = mysqli_real_escape_string($conn, $_GET['Defense']);
        $agility = mysqli_real_escape_string($conn, $_GET['Agility']);
        $dexterity = mysqli_real_escape_string($conn, $_GET['Dexterity']);

        $sql="INSERT INTO data (char_race, char_strength, char_defense, char_agility, char_dexterity) VALUES ('$race', '$strength', '$defense', '$agility', '$dexterity')";

        //Error check the query
        if (!mysqli_query($conn,$sql)) {
          die('Error: Still not working' . mysqli_error($conn));
        }

        //If everything worked, redirect to google for confirmation
        header("Location: ../charSheet.php?Character_Information_Successfully_Saved!");
        //echo "You're all signed up!";
}
