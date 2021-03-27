<?php
    $title = "Functions";
    include "includes/header.php";

    ?>

    <h1>Simple Functions </h1>

    <?php
    //Defining a Function
    function writeMessage(){
        echo "You ara really a nice person, Have a nice tine! <br/>";
    }


    /*Calling a Function*/
    writeMessage();

    echo "<hr/>";

    writeMessage();
    
    /* Function with parameters */

    function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        $num2 = $num2 +1;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
    }

    //Change a varible value that its outside the function
    //You add the & to indicate that the function modifies the external Variable
    function changeNum(&$num){
        $num = $num +10;
        // $num+= 10;
    }

    //Function Returning a Value
    function rerturnProduct($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;

    }


    $num = 500;
    addFunction(10,20);

    addFunction(10, $num);
    echo $num."<br/>";
    addFunction('10', "50");

    changeNum($num);
    echo $num."<br/>";

    changeNum($num);
    echo $num."<br/>";
    
    echo "<hr/>";

    $return_value = rerturnProduct(10,200);
    echo $return_value . "<br/>";
    


    ?>

<?php require "includes/footer.php"; ?>