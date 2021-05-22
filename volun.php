<?php
        include 'dbh.php';
        $file=$_POST['name1'];
        $id=$_POST['id'];
        $age=$_POST['age'];
        $phno=$_POST['phone11'];
        $address1=$_POST['address1'];

        $sql="INSERT INTO vol(names,age,email_id,mobileno,address1) VALUES ('$file','$age','$id','$phno','$address1');";
        mysqli_query($conn,$sql);
        header("Location: ../vol.php");
?>