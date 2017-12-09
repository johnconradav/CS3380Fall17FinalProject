<?php
    include_once 'header.php';
    session_start();
?>

<?php
if (isset($_SESSION['u_id'])) {

    echo '<section class="charContainer">
        <div class="charWrapper">
            <h2>Start editing your character stats!</h2>

            <!-- send information through post -->
            <form class="charForm" action="saveCharInclude.php" method="post">
                <input type="text" name="Race" placeholder="Race>
                <input type="text" name="Strength" placeholder="Strength>
                <input type="text" name="Defense" placeholder="Defense">
                <input type="text" name="Agility" placeholder="Agility">
                <input type="text" name="Dexterity" placeholder="Dexterity">
                <button type="submit" name="saveCharForm">Save Data</button>
            </form>

        </div>
    </section>';
}

else {
    echo '<h3>Please sign in above to create a new character sheet</h3>';
}

?>




<?php
    include_once 'footer.php';
?>
