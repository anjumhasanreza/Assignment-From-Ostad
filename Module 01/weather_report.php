<?php

/*
Task 5: Weather Report


Create a PHP script named weather_report.php that provides weather information based on temperature. 
Use a variable to store the temperature. 
Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."
*/

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <link href="weather_report.css" rel="stylesheet">
    <title>Weather Report</title>
</head>

<body>
    <h1 style="margin-top:50px">Weather Report</h1>


    <div class="container">
        <h2>Input Weather</h2>
        <form method="post" action="">
            <input type="text" name="firstNumber" placeholder="Enter Weather" required><br><br>

            <br>
            <button type="submit">Result</button>
        </form>


        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $weather = $_POST["firstNumber"];



                if ($weather <= 0) {

                    $result = "It's freezing!";
                } else if ($weather > 0 && $weather <= 28) {
                    $result = "It's cool.";
                } else {
                    $result = "It's warm.";
                }


                echo "<h3> $result </h3>";



            }


            ?>
        </div>




    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>

