<?php
require_once("../header/header.php");
require_once("../functions.php");

if (!isset($_SESSION['email'])) {
    header('Location:' . BASE_URL . "/login/index.php");
}



$allRegistrations = readDatabaseFile(DB_FILE_PATH);
usort($allRegistrations, function ($a, $b) {
    return $a['id'] - $b['id'];
});


?>

<!-- <section class="vh-100" style="background-color: #eee;"> -->
<section class="vh-100 text-white parallaxss">
    <div class="container">
        <div class="row">
            <h3 class="mt-5 text-center">Home Page</h3>
        </div>
        
    </div>
</section>
<?php require_once("../header/footer.php"); ?>