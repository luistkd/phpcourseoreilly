<?php
    $title = "Date and Time Manip";
    include "includes/header.php";

    ?>

    <h1>Date and Time Manipulation</h1>

    <?php
    $datenow = getdate();
        echo "Today's Date <br/>"; 
        echo '<p>' . $datenow['mday'] .'</p>';
        echo '<p>' . $datenow['mon'] .'</p>';
        echo '<p>' . $datenow['year'] .'</p>';
        
        print_r($datenow);
        echo "<hr/>";
        echo "Today's Date is: " . $datenow['mday'] . "/" . $datenow['mon'] . "/" . $datenow['year'] . "<br/>"; 

        echo "<hr/>";
        echo time(). "<br/>";

        print date("d/m/y G.i:s <br/>", time()) . '<br/>';

        print "Today is";
        print date("j of F Y, \a\\t g.i a", time());

        echo "<hr/>";
        $date = new DateTime();
        $timeZone = $date->getTimezone();
        print_r($timeZone);    
    ?>

<?php require "includes/footer.php"; ?>