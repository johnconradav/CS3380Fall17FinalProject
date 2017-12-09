<?php
    include_once 'header.php';
    session_start();
?>

    <section class="mainContainer">
        <div class="mainWrapper">
            <h2>Home</h2>
            <!-- if the session is set then you can see specific pages -->

            <?php
            if (isset($_SESSION['u_id'])) {
                //echo "If you are seeing this, it means you are logged in!";





            
            }
            ?>


        </div>
    </section>

<?php
    include_once 'footer.php';
?>
