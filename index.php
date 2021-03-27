<?php
    $title = "Index";
    include "includes/header.php";

    ?>

    <!-- Basic HTML --> 
    <h1>Hello World!!!</h1>
    </br>
    <?php
        //Printing to HTML using echo
        echo "Hello PHP";
        // You can echo HTML tags
        echo '</br>';
        echo 'Second Line';
        echo '</br>';
    
        // Variables need a '$'. They are not strongly typed
        $name = 'Luis Díaz';
        $age = 36;
        //echo variable
        echo $name;
        echo '<h1>My name is: '. $name . '</h1>';
        echo '<h1>My age is: '. $age . '</h1>';
        //Echo using double quotes and interpolation
        echo "<h1>My name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">Click Me!!!</button>
    <button type="button" class="btn btn-primary">Click Me!!!</button>
    <button type="button" class="btn btn-success">Click Me!!!</button>


    <?php

    //Call the Footer   
    require "includes/footer.php"; ?>

