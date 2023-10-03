<?php 

/*
Task 3: Grade Calculator


Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines 
the corresponding letter grade. 


Create a form where the user can input three test scores. 
Calculate the average and display it along with the corresponding grade (A, B, C, D, F).


Or, declare 3 variable test scores and calculate the average and display it along with the corresponding grade (A, B, C, D, F)
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



    <link href="grade_calculator.css" rel="stylesheet">
    <title>Grade Calculator</title>
  </head>
  <body>
    <h1 style="margin-top:20px">Grade Calculator</h1>


    <div class="container">
        <h2>Marks to Grade</h2>
        <form method="post" action="">
            <input type="text" name="firstMark" placeholder="Enter First Mark" required><br><br>
            <input type="text" name="secondMark" placeholder="Enter Second Mark" required><br><br>
            <input type="text" name="thirdMark" placeholder="Enter Third Mark" required><br><br>
           
            <br>
            <button type="submit">Result</button>
        </form>
        
            
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $firstMark = $_POST["firstMark"];
                $secondMark = $_POST["secondMark"];
                $thirdMark = $_POST["thirdMark"];

                $averageMarks = ($firstMark + $secondMark + $thirdMark)/3;

                $averageMarks = round($averageMarks);

                $grade = "";

                // if( $firstMark >= 33 ){
                //     if(( $secondMark ) >= 33 ){
                //         if(( $thirdMark) >= 33 ){
                //             $result = "Pass";
                //         }else{
                //             $result = sprintf(" Your Third Mark ({$thirdMark}) is lower then Pass Mark (33).<br> Your Grade is F");
                //         }
                //     }else{
                //         $result = sprintf(" Your Second Mark ({$secondMark}) is lower then Pass Mark (33).<br> Your Grade is F");
                //     }
                // }else{
                //     $result = sprintf(" Your First Mark ({$firstMark}) is lower then Pass Mark (33).<br> Your Grade is F");
                // }


                if( $firstMark <= 100 && $secondMark <= 100 && $thirdMark <= 100 && $firstMark >= 0 && $secondMark >= 0 && $thirdMark >= 0){
                    if( $averageMarks <= 100 && $averageMarks >= 80 ){
                        $grade = "A+";
                        $result = sprintf("First Mark = {$firstMark} <br>Second Mark = {$secondMark} <br>Third Mark = {$thirdMark} <br>Average Mark = {$averageMarks} <br>Your Grade = {$grade} ");
                    }elseif( $averageMarks <= 79 && $averageMarks >= 70 ){
                        $grade = "A";
                        $result = sprintf("First Mark = {$firstMark} <br>Second Mark = {$secondMark} <br>Third Mark = {$thirdMark} <br>Average Mark = {$averageMarks} <br>Your Grade = {$grade} ");
                    }elseif( $averageMarks <= 69 && $averageMarks >= 60 ){
                        $grade = "A-";
                        $result = sprintf("First Mark = {$firstMark} <br>Second Mark = {$secondMark} <br>Third Mark = {$thirdMark} <br>Average Mark = {$averageMarks} <br>Your Grade = {$grade} ");
                    }elseif( $averageMarks <= 59 && $averageMarks >= 50 ){
                        $grade = "B";
                        $result = sprintf("First Mark = {$firstMark} <br>Second Mark = {$secondMark} <br>Third Mark = {$thirdMark} <br>Average Mark = {$averageMarks} <br>Your Grade = {$grade} ");
                    }elseif( $averageMarks <= 49 && $averageMarks >= 40 ){
                        $grade = "C";
                        $result = sprintf("First Mark = {$firstMark} <br>Second Mark = {$secondMark} <br>Third Mark = {$thirdMark} <br>Average Mark = {$averageMarks} <br>Your Grade = {$grade} ");
                    }elseif( $averageMarks <= 39 && $averageMarks >= 33 ){
                        $grade = "D";
                        $result = sprintf("First Mark = {$firstMark} <br>Second Mark = {$secondMark} <br>Third Mark = {$thirdMark} <br>Average Mark = {$averageMarks} <br>Your Grade = {$grade} ");
                    }elseif( $averageMarks < 33 && $averageMarks >= 0 ){
                        $grade = "F";
                        $result = sprintf("First Mark = {$firstMark} <br>Second Mark = {$secondMark} <br>Third Mark = {$thirdMark} <br>Average Mark = {$averageMarks} <br>Your Grade = {$grade} ");
                    }
                }
                else{
                    $result = "Wrong Input<br>Please Check Your Marks and Try Again";

                }
            
                echo "<h4> $result </h4>";
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



<!-- if($averageMarks<=100 && $averageMarks>=80){
                    $grade = "A+";
                    $result = sprintf("Your Average Marks is %d and Grade is %s.",$averageMarks,$grade);
                }
                elseif($averageMarks<=79 && $averageMarks>=70){
                    $grade = "A";
                    $result = sprintf("Your Average Marks is %d and Grade is %s.",$averageMarks,$grade);
                }
                elseif($averageMarks<=69 && $averageMarks>=60){
                    $grade = "A-";
                    $result = sprintf("Your Average Marks is %d and Grade is %s.",$averageMarks,$grade);
                }
                elseif($averageMarks<=59 && $averageMarks>=50){
                    $grade = "B";
                    $result = sprintf("Your Average Marks is %d and Grade is %s.",$averageMarks,$grade);
                }
                elseif($averageMarks<=49 && $averageMarks>=40){
                    $grade = "C";
                    $result = sprintf("Your Average Marks is %d and Grade is %s.",$averageMarks,$grade);
                }
                elseif($averageMarks<=39 && $averageMarks>=33){
                    $grade = "D";
                    $result = sprintf("Your Average Marks is %d and Grade is %s.",$averageMarks,$grade);
                }
                elseif($averageMarks<=32 && $averageMarks>=0){
                    $grade = "F";
                    $result = sprintf("Your Average Marks is %d and Grade is %s.",$averageMarks,$grade);
                }
                else{
                    $result = "Please Check Your Input.";
                } -->
