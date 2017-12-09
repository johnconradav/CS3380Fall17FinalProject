<?php
    include_once 'header.php';
?>

    <section class="mainContainer">
        <div class="mainWrapper">
            <h2>Sign up</h2>

            <!-- send information through post -->
            <form class="signupForm" action="signupInclude.php" method="post">
                <input type="text" name="first" placeholder="Firstname">
                <input type="text" name="last" placeholder="Lastname">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="isClicked">Sign Up</button>
            </form>

        </div>
    </section>

<?php
    include_once 'footer.php';
?>
