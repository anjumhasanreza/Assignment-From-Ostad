<?php 

/*
Task 4: Even or Odd Checker


Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. 
Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). 
Display the result of the chosen operation.
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



    <link href="simple_calculator.css" rel="stylesheet">
    <title>Simple Calculator</title>
  </head>
  <body>
    <h1 style="margin-top:50px">Simple Calculator</h1>


    <div class="container">
        <h2>Input your numbers</h2>
        <form method="post" action="">
            <input type="text" name="firstNumber" placeholder="Enter First Number" required><br><br>
            <input type="text" name="secondNumber" placeholder="Enter Second Number" required><br><br>
           
            <select name="operation">
                <option value="1">Addition</option>
                <option value="2">Subtraction</option>
                <option value="3">Multiplication</option>
                <option value="4">Division</option>
            </select><br><br>
            <button type="submit">Result</button>
        </form>
        
            
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $firstNumber = $_POST["firstNumber"];
                $secondNumber = $_POST["secondNumber"];

                $operation = $_POST["operation"];
                
              
                if($operation == 1){
                    
                    $result = $firstNumber + $secondNumber;
                    $output = sprintf("{$firstNumber} + {$secondNumber} = {$result}");

                }elseif($operation == 2){
                    
                    $result = $firstNumber - $secondNumber;
                    $output = sprintf("{$firstNumber} - {$secondNumber} = {$result}");
                    
                }elseif($operation == 3){
                    
                    $result = $firstNumber * $secondNumber;
                    $output = sprintf("{$firstNumber} x {$secondNumber} = {$result}");
                    
                }elseif($operation == 4){
                    
                    $result = $firstNumber / $secondNumber;
                    $output = sprintf("{$firstNumber} / {$secondNumber} = {$result}");
                    
                }
                
                else{
                    $result = "Please check your input.";
                }

                
                echo "<h3>Result: $output </h3>";
                
                

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