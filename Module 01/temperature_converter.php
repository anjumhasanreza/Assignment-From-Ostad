<?php 

/*
Task 2: Temperature Converter


Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit. 
Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). 
Display the converted temperature.
*/

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <link href="temperature_converter.css" rel="stylesheet">
    <title>Temperatures Converts</title>
  </head>
  <body>
    <h1 style="margin-top:50px">Temperatures Converts</h1>


    <div class="container">
        <h2>Celsius and Fahrenheit</h2>
        <form method="post" action="">
            <input type="text" name="celsius" placeholder="Enter Celsius" required><br><br>
            <select name="select">
                <option value="1">Fahrenheit</option>
            </select><br>
            <button type="submit">Convert</button>
        </form>
        <div id="result">
            
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $celsius = $_POST["celsius"];
                $operation = $_POST["select"];

                switch ($operation) {
                    case "1":
                        $result = ($celsius * (9/5))+32;
                        echo "<h3>{$celsius} Celsius = {$result} Fahrenheit</h3>";
                        break;
                    
                }
            }
            ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>





    











      