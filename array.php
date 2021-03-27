<?php
    $title = "Arrays and Printouts";
    include "includes/header.php";?>
    <h1>Arrays</h1>
    <?php
        //a variable
        $num = 3;

        //This is an Array
        //Only one datatype 
        $numbers = array(1,2,3,4,5,6,7,28,239,3130,123,321,1,453,8767,978,3423);
        //You can access a value in the subscript of the array using the index []
        echo $numbers[5];
        echo "<p>$numbers[9]</p>";

        echo '<p>Array numbers is size: '. count($numbers).'</p>';

        //Put the elements in a unorder list
        echo "<h3>The content of the Array is: </h3>";
        echo "<ul>";
        for($count = 0; $count < count($numbers); $count++ ){
            echo "<li>$numbers[$count] </li>";
        }

        echo "</ul>";

        //Mixed Array for Tables pourposes 
        $mixed = array(
            "Name"=>"Luis Díaz", 
            "Age"=> 36,
            "Sport"=> "Taekwondo");
            
        //Print an array for debuging pourpose
        print_r($mixed);
        echo "<br/>";
        
        //Create a table
        $headers = array_keys($mixed);
        print_r($headers);
        echo "<br/>";
        echo "<hr/>";
        echo '<table style="width:100%; border: 1px solid black; text-align: center"><tr>';
        // Imprimir encabezados o keys del arreglo $headers
        for($count = 0; $count < count($mixed); $count++){
            echo "<th>". $headers[$count]. "</th>";
        }   
        echo "</tr><tr>";
        //Imprimir Contenido del Arreglo
        for($count = 0; $count < count($mixed); $count++){
            echo "<td>". $mixed[$headers[$count]]. "</td>";
        }   

        echo "</tr></table>";
    ?>

<?php require "includes/footer.php"; ?>