<?php
        include 'dbh.php';
        $file=$_POST['name1'];
        $donation=$_POST['donation'];

        $sql="INSERT INTO activities(name1,descrip) VALUES ('$file','$donation');";
        mysqli_query($conn,$sql);
        header("Location: ../adminactivities.php");
?>