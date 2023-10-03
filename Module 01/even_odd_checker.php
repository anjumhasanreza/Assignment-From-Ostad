<?php 

/*
Task 4: Even or Odd Checker


Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. 
Provide an input field where the user can enter a number. 
Display a message indicating whether the number is even or odd.
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



    <link href="even_odd_checker.css" rel="stylesheet">
    <title>even or odd</title>
  </head>
  <body>
    <h1 style="margin-top:50px">Even or Odd Calculator</h1>


    <div class="container">
        <h2>Input your number</h2>
        <form method="post" action="">
            <input type="text" name="firstNumber" placeholder="Enter First Number" required><br><br>
           
            <br>
            <button type="submit">Result</button>
        </form>
        
            
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $firstNumber = $_POST["firstNumber"];

                $result = $firstNumber % 2; 
              
                if($result != 0){
                    
                    $result = sprintf("{$firstNumber} is an Odd Number.");
                }
                
                else{
                    $result = sprintf("{$firstNumber} is an Even Number.");
                }

                
                echo "<h3> $result </h3>";
                
                

            }


            // $result = sprintf("Your Average Marks is %d and Grade is %s.",$averageMarkes,$grade);

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





    











      