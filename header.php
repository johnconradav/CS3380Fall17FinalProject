<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title?></title?>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="navWrapper">

                    <!-- <li><a href="index.php">Home</a></li> -->
                    <!-- Nav bar buttons top left -->
                    <form action="index.php">
                        <button type="submit" value="Go back to the homepage">Home</button>
                    </form>
                    <form action="charSheet.php">
                        <button class="long" type="submit" value="character sheet">Create a Character Sheet</button>
                    </form>


                <div class="navLogin">

                  <?php
                  //Check and see if the session is set - the user is logged in
                  if (isset($_SESSION['u_id'])) {
                      //Display a log out button if they are logged in
                      echo '<form action="logoutInclude.php" method="post">
                                <button type="submit" name="logoutClick">Logout</button>
                            </form>';
                  }

                  //Display the login information if they are logged out
                  else {
                    echo '<form action="loginInclude.php" method="post">
                            <input type="text" name="username" placeholder="Username/e-mail">
                            <input type="password" name="pwd" placeholder="password">
                            <button type="submit" name="loggingIn">Login</button>
                          </form>
                    <!-- <a href="signup.php">Sign Up</a> -->
                    <form action="signup.php">
                        <button type="submit" value="Click here to sign up!">Sign Up</button>
                    </form>';

                  }

                  ?>

                </div>


            </div>
        </nav>
    </header>
