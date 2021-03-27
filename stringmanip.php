<?php
    $title = "String Manipulation";
    include "includes/header.php";

    ?>

<h1>PHP String Manipulation</h1>        
    <?php
        //Concatenation of strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "luis díaz";
        echo $phrase1 . ", named Tiffany, ". $phrase2;
        echo "<br/>";
        echo "<hr/";
        //String transformation
        echo 'Uppercase First letter: ' . ucfirst($name). '<br/>';
        echo 'Uppercase First letter of each word: ' . ucwords($name). '<br/>';
        echo 'Uppercase Case: ' . strtoupper($name). '<br/>';
        echo 'Lower Case: ' .  strtolower("THIS WAS ALL UPPER CASE") . '<br/>';
        echo "<hr/>";
        echo 'Repeat string: ' . str_repeat($name,10) . '<br/>'; 
        echo 'Repeat string: ' . strtoupper(str_repeat($name,10)) . '<br/>'; 
        echo 'Get a substring: ' . substr($name, 5, 4) . '<br/>';
        
        echo 'Get position of string: ' . strpos($name,'d') . '<br/>';
        // Returns NULL
        //echo 'Get position of string: ' . strpos($name,'x') . '<br/>';
        echo 'Find Character "D": ' . strchr($name, 'D') . '<br/>'; 
        echo 'Find Character "d": ' . strchr($name, 'd') . '<br/>'; 
        echo 'Find Character "z": ' . strchr($name, 'z') . '<br/>'; 
        echo 'Find Character "i": ' . strchr($name, 'i') . '<br/>'; 
        
        echo 'Find lenght of the string: ' . strlen($name) . '<br/>';

        echo 'Without Trim '. "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the righr '. "A" . rtrim(" B C D ") . "E" . '<br/>';
    
        echo 'Replace string with another: ' . str_replace("stand", "sit", $phrase2 ) . '<br/>';
    
    ?>
    <?php require "includes/footer.php"; ?>
