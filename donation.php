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
            <form class="login-form" action="db/donation.php" method="POST">
                <input type="text" name="name1" placeholder="Name" required autofocus/>
                <input type="email" name="id" placeholder="Email id" required autofocus/>
         <input type="text"  name="phone11" placeholder="Phone" required/>
                <textarea name="donation1" placeholder="Doantion" required autofocus/></textarea>
                <br>
                <p class="parag"> Enter the Names of things you want to donate!!</p>
                <button>Submit</button>
                </form>
                

                 
        </div>
    </div>

    
</body>
</html>