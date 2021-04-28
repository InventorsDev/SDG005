<!-- //connection to db -->
<?php 
$connection = mysqli_connect("localhost", "root", "", "monthlies_db");
        if(!$connection){
            die(mysqli_error($connection));
        }
?>