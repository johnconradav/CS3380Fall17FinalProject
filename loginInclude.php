<?php

//start up the session
session_start();

if (isset($_POST['loggingIn'])){

    //echo "fuckckckckkckck";

    //Connect to the db
    include_once 'dbIncludeLogin.php';



    //security check on the input text to escape variables and throw user input into a new variable
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Checks if the login fields are empty
    if (empty($username) || empty($pwd)) {
        //Redirect and print an error in the url bar
        header("Location: ../index.php?Login_Fields_Are_Empty");
        // Bail
        exit();
    }

    //Query to check for matching names and emails used to login
    $copyUser = "SELECT * FROM users WHERE user_username='$username' OR user_email='$username'";
    // run the above query in the database and store findings in $result
    $result = mysqli_query($conn, $copyUser);
    //grab the additional info where the username was found
    $checkResult = mysqli_num_rows($result);

    // Check if the username exists
    if ($checkResult < 1) {
          //Redirect and print that the username was not found
          header("Location: ../index.php?Error_UnableToFindUsername");
          exit();
    }

    //Grab the username and store it in an array
    $row = mysqli_fetch_assoc($result);
    //header("Location: ../index.php?sign_inSuccessfull!");
    //echo $row["user_email"]; //Test Print successfully works with username and hashed password array

    //Check if the passwords matched
    if (password_verify($pwd, $row["user_pwd"])) {
        //echo "It worked!"; This test print works and passwords will match

        //Create session variables for column
        $_SESSION['u_id'] = $row['user_id'];
        $_SESSION['u_first'] = $row['user_first'];
        $_SESSION['u_last'] = $row['user_last'];
        $_SESSION['u_email'] = $row['user_email'];
        $_SESSION['u_username'] = $row['user_username'];

        //Redirect for confirmation
        header("Location: ../index.php?login=success!");
        exit();
    }
}
