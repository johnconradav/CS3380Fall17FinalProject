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
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
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
                    <a href="signup.php">Sign Up</a>';
                  }

                  ?>

                </div>


            </div>
        </nav>
    </header>
