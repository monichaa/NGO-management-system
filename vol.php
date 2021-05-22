<html>
<head>
<title>Login form</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="full-page">
        <div class="navbar">
        </div>
        <a href='http://localhost:8080/Ngo/index.php'> <h3 class="header1">NGO MANAGEMENT</h3></a>
         <nav>
             <ul id='MenuItems'>
             <li><a href='http://localhost:8080/Ngo/donation.php'>Donation</a></li>
                 <li><a href='http://localhost:8080/Ngo/vol.php'>Volunteer</a></li>
                 <li><a href='http://localhost:8080/Ngo/activities.php'>Activities</a></li>
                 <li><a href='http://localhost:8080/Ngo/contact.php'>Contact</a></li>
                 <li><a href='http://localhost:8080/Ngo/login1.php'><button class='loginbtn'>Log In</button></a>
                </li>
             </ul>
         </nav>
    <div class="login-page">
        <div class="form">
        <form class="login-form" action="db/volun.php" method="POST">
                <input type="text" name="name1" placeholder="Name" required autofocus/>
                <input type="email" name="id" placeholder="Email id" required/>
                <input type="number" name="age" placeholder="Age" required/>
                         <input type="text" name="phone11" placeholder="Phone" required/><br><br>
                <textarea name="address1" placeholder="Address" required></textarea>
                <br>
                <button>Submit</button>
                </form>
        </div>
    </div>

    
</body>
</html>