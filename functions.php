<?php

    $conn = mysqli_connect("localhost", "root", "", "saturnux");

    $result = mysqli_query($conn, "SELECT * FROM kelas");
    
   
?>