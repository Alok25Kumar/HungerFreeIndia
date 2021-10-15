 <?php
include('login1.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: moh.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Admin Login Form in PHP with Session</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>


<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      
      <h1><a href="index.php">Hunger Free India</a></h1>
     
    </div>
    <nav id="mainav" class="fl_right"> 
      
      <ul class="clear">
        <li ><a href="index.php">Home</a></li>
       <li><a href="Volunteer.php">Volunteer</a></li>
       <li><a href="Donate.php">Donate Food</a></li>
        <li><a href="Hungerspot.php">Hunger Spots</a></li>
         <li><a href="About.php">About Us</a></li>
         <li class="active"><a href="adminlogin.php">Admin Login</a></li>

        
      </ul>
     
    </nav>
  </header>
</div>

<div class="wrapper bgded overlay" style="background-image:url('images/backgrounds/admin1.jpg');">
  <div id="pageintro" class="hoc clear"> 
    
    <article>
      <p>NO FOOD WASTE IS A MISSION TO END FOOD WASTE AND HUNGER TO MAKE THE “WORLD HUNGER FREE”. WE RECOVER SURPLUS FOOD FROM WEDDINGS, PARTIES AND FUNCTIONS AND DONATE IT TO NEEDY AND HUNGRY PEOPLE.</p>
      
      <footer>
        <ul class="nospace inline pushright">
         
        </ul>
      </footer>
    </article>
    
  </div>
</div>



<br>
<br>


<div id="login">
<h2> Admin Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="email" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>

<br>
<br>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    
    <div>
      <h6 class="heading">About us</h6>
      <p>About Us
No Food Waste is a mission to end food waste and hunger to make the “World Hunger Free”. We recover surplus food from weddings, parties and functions and donate it to needy and hungry people.
.</p>
      <p class="btmspace-30">
Dedicated Food Recovery Units including Helpline Number, Food Recovery Vehicles and Volunteers are involved for effective process execution[<a href="#"><i class="fas fa-arrow-right"></i></a>]</p>
      
    </div>
    <div >
     
        <li>
          
        </li>
      </ul>
    </div>
     </div>
    
    </div>
    
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved <a href="#"></a></p>
    <p class="fl_right"></a></p>
   
  </div>
</div>
</body>
</html>