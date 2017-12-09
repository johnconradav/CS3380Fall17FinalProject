<?php
    //Check that the button was clicked
    if (isset($_POST['isClicked'])){ //if submit button returns true value then continue

        //echo "fuckckckckkckck";
        //Connect to the db
        include_once 'dbIncludeLogin.php';

        //security check on the input text and throw it in a variable
        $first = mysqli_real_escape_string($conn, $_POST['first']);
        $last = mysqli_real_escape_string($conn, $_POST['last']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

        //has the password for extra security
        $hashPass = password_hash($pwd, PASSWORD_DEFAULT);

        //Checks if any of the input fields are empty
        if (empty($first) || empty($last) || empty($email) || empty($username) || empty($pwd)) {
            header("Location: ../signup.php?signup=empty"); //Print an error in the url bar
            exit(); // Bail
        }

        //checks to make sure valid letters are used for the first and last name fields
        else if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) ) {
            header("Location: ../signup.php?signup=invalid"); //Print an error in the url bar
            exit(); //Bail
            }

        //check the email and make sure it is valid
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../signup.php?signup=invalidemail"); //Print an error in the url bar
            exit(); //bail
        }

        //Check to see if the email adress is already taken
        else {
            $copyEmail = "SELECT * FROM users WHERE user_email='$email'";
            $result = mysqli_query($conn, $copyEmail); // run the above query
            $checkResult = mysqli_num_rows($result); //check database for the email addresses and compare

            if ($checkResult > 0) { // Check if the email has been used and bail
                  header("Location: ../signup.php?signup=EmailAlreadyTaken");
                  exit();
            }
        }

        //Taking the input field variables and priming for database insert
        $sql="INSERT INTO users (user_first, user_last, user_email, user_username, user_pwd) VALUES ('$first', '$last', '$email', '$username', '$hashPass')";

        //Error check the query
        if (!mysqli_query($conn,$sql)) {
          die('Error: Still not fucking working' . mysqli_error($conn));
        }

        //If everything worked, redirect to google for confirmation
        header("Location: ../index.php?signup_Successfull!");
        //echo "You're all signed up!";

    }
