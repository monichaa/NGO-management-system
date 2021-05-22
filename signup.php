<?php
        include_once 'dbh.php';
        $file=$_POST['username'];
        $pass=$_POST['password1'];
        $id=$_POST['id'];

        $sql="INSERT INTO sign(username,password1,email_id) VALUES ('$file','$pass','$id');";
        mysqli_query($conn,$sql);
        header("Location: ../index.php");
?>