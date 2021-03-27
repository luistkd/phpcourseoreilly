<?php
    $title = "If Statement";
    include "includes/header.php";

    ?>
    <?php
        //An If Statement that will carry out an action based on the value of the variable

        echo '<h2> If Statement</h2>';

        $grade = 60;
        // ====, ==, >, <, <=, >=,
        if($grade >= 50){
            echo '<h3 style="color:green">YOU HAVE PASSED!!!</h3>';
        } else {
            echo '<h3 style="color:red">YOU HAVE FAILED</h3>';
        }
        $grade = 'B';
        // If-Else If Else
        if($grade == "A"){
            echo '<h2 style="color:green">YOU ARE A SUPERSTAR!!!</h3>';
        } elseif($grade == "B") {
            echo '<h3 style="color:blue">YOU DID WELL</h3>';
        } else {
            echo '<h3 style="color:red">YOU NEED TO STUDY, YOU HAVE FAILED...</h3>';
        }


    ?>

<?php require "includes/footer.php"; ?>