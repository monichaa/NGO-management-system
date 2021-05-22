<html>
<head>
<title>Login form</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="full-page">
        <div class="navbar">
        </div>
        <h3 class="header1">NGO MANAGEMENT</h3>
         <nav>
             <ul id='MenuItems'>
                 <li><a href='http://localhost:8080/Ngo/admindonation.php'>Donation</a></li>
                 <li><a href='http://localhost:8080/Ngo/adminvolunteer.php'>Volunteer</a></li>
                 <li><a href='http://localhost:8080/Ngo/admincontacts.php'>Contacts</a></li>
                 <li><a href='http://localhost:8080/Ngo/adminactivities.php'>Activities</a></li>
                 <li><a href='http://localhost:8080/Ngo/logout.php'><button class='logoutbtn'>Log Out</button></a>
                </li>
             </ul>
         </nav>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="db/cont.php" method="POST">
         <input type="text" name="name1" placeholder="Name" required autofocus/>
                <input type="email" name="id" placeholder="Email id" required/>
         <input type="text" name="phone11" placeholder="Phone Number" required/>
                <textarea name="address1" placeholder="Address" required/></textarea>
                <br>
                <button>Submit</button>
            </form>
        </div>
    </div>

    
</body>
</html>