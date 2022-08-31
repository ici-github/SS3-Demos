<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            Output Messages
            4 ways to output messages

            1.) echo - just to display the output of a variable or a string or numbers without conditions. 
                Example:
                    echo $selectedTemperature;
        */

        $selectedTemperature = "Kelvin";
        $temperature = $selectedTemperature;
        echo $selectedTemperature;
        echo " Temperature ";
        echo "<br>";
        echo $temperature;
        echo "<br>";
        $selectedTemperature = "Fahrenheit";
        echo $selectedTemperature;

        echo "<br>The selected temperature is $temperature.";
        echo '<br>The selected temperature is ' . $temperature . '.'; //string literal

        /*
            String concatenation
            Using the dot (.) symbol to combine strings, variables, array variables and others.
        */

        /*
            2.) print - same with echo but returns a boolean value.
                        If true, then the value will be displayed
                        If false, then an error message will be displayed.
        */
        
        print "<br> Hello again. Hapit na ang time, gutom nadaw <br>";

        print ("<br> Pwede diay ni? <br>");

        /*
            3.) print_r - displays the output and the information about the variable
        */

        print_r($temperature);

        /*
            4.) var_dump - also known as variable dumping
                         - same with print_r, also displays the complete information
                         - very useful in displaying values without looping statements
        */
        echo "<br>";
        var_dump($temperature);
        echo "<br>";
        var_dump(1234567890);
        echo "<br>";
        var_dump(3.1415);
    ?>
</body>
</html>