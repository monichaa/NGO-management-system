<?php
        include 'dbh.php';
        $file=$_POST['name1'];
        $id=$_POST['id'];
        $phno=$_POST['phone11'];
        $address1=$_POST['address1'];

        $sql="INSERT INTO contacts(names,email_id,mobileno,address1) VALUES ('$file','$id','$phno','$address1');";
        mysqli_query($conn,$sql);
        header("Location: ../admincontacts.php");
?>