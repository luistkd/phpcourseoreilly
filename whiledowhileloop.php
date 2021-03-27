<?php
    $title = "While / Do While";
    include "includes/header.php";

    ?>
    <h1>Do While Loop Statement</h1>
    <?php
        $grade = 0;
        // Infinate Loop
        //while($grade < 10){
        //    echo '<p>Im less than 10!</p>';
        //}
        //Pre-condition Loop
        while($grade < 10){
            echo '<p>I AM LESS THAN 10! </p>';
            $grade++;
        }
        echo 'EXIT LOOP!';

    ?>

    <h1>Do While Loop Statement</h1>
    <?php
        $grade = 0;
        do {
            echo '<p>I AM DO WHILE LOOP! </p>';
            $grade++;
        }
        while($grade < 10);
        echo 'EXIT LOOP!';

    ?>

<?php require "includes/footer.php"; ?>

