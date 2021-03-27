<?php
    $title = "For Loop";
    include "includes/header.php";

    ?>
    <h1>For Loop Statement</h1>
    <?php
        // For Loops
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD</p>';
        }

        for($count = 0; $count < 10; $count++){
            $countdisplayed = $count +1;
            echo "<p>The Count  is: $countdisplayed </p>";
        }


    ?>

<?php require "includes/footer.php"; ?>