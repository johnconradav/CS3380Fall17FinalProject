<?php
    include_once 'header.php';
    session_start();
?>

    <section class="mainContainer">
        <div class="mainWrapper">
            <h2>Welcome to the home page</h2>
            <!-- if the session is set then you can see specific pages -->

            <?php
            if (isset($_SESSION['u_id'])) {
                echo '<h3>Thanks for signing in! Click on Create Character sheet above to get started!</h3>';



            }
            ?>


        </div>
    </section>

<?php
    include_once 'footer.php';
?>
