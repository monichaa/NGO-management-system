<html>
<head>
<title>Login form</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="full-page">
        <div class="navbar">
        </div>
        <a href='http://localhost:8080/Ngo/index.php'><h3 class="header1">NGO MANAGEMENT</h3></a>
         <nav>
             <ul id='MenuItems'>
                 <li><a href='http://localhost:8080/Ngo/donation.php'>Donation</a></li>
                 <li><a href='http://localhost:8080/Ngo/vol.php'>Volunteer</a></li>
                 <li><a href='http://localhost:8080/Ngo/activities.php'>Activities</a></li>
                 <li><a href='http://localhost:8080/Ngo/contact.php'>Contact</a></li>
                </li>
             </ul>
         </nav>>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="" method="POST">
                <input type="text" name="username" placeholder="user name" required autofocus/>
                <input type="password" name="password1" placeholder="password" required autofocus/>
                <button name="submit">login</button>
            </form>
        </div>
    </div>

    <script src='https://code.jquery.com/jquery-3.5.1.min.js'>
    </script>

    <script>
        $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>

<?php
session_start();
if(isset($_POST['submit']))
{
    include 'db/dbh.php';
    $usern=$_POST['username'];
    $pass=$_POST['password1'];
    $sql=mysqli_query($conn,"SELECT * FROM sign where username='".$usern."' and password1='".$pass."'");
    if(mysqli_num_rows($sql)==1){
        header("Location:adminvolunteer.php");
        
    }
    else
    {
        echo "<script>alert('Invalid Credential!!');</script>";
    }
    //header("Location: ../index.php");
}
?>


</body>
</html>