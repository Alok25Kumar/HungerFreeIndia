<?php
session_start();
if(isset($_SESSION['login_user'])){

}else{
	header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.75">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
*{
	margin: 0;
	padding: 0;
	font-family: "montserrat", sans-serif;
}
.i1{
	width: 20%;
	height: 20vh;
}
.landing-page{
	width: 100%;
	height: 100vh;
	background: #000;
	position: relative;
	overflow: hidden;
}
.landing-page::after{
	content: "";
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background: url(moh.jpg) no-repeat;
	background-size: cover;
	opacity: .3;
	animation: anim 25s linear infinite;

}
 @keyframes anim{
 	50%{
 		transform: scale(2);
 	}
 	100%{
 		 transform: scale(1);

 	}
 }
.page-content{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	z-index: 1;
	width: 100%;
	max-width: 800px;
	text-align: center;
	padding: 0 40px;
	box-sizing: border-box;
}
.page-content h3{
	color: rgba(51,243,255);
	text-transform: uppercase;
	font-size: 30px;
	font-weight: 900;
	margin-bottom: 10px;
}
.page-content h1{
	color: rgba(51,243,255);
	text-transform: uppercase;
	font-size: 50px;
	font-weight: 900;
	margin-bottom: 20px;
}
.page-content p{
	color: #fff;
	margin-bottom: 20px;

}
.page-content img{
	width: 40%;
	height: 40vh;

}
.page-content a{
	display: inline-block;
	text-decoration: none;
	color: rgba(51,243,255);
	border: 2px solid #33F3FF;
	text-transform: uppercase;
	padding: 10px 20px;
	transition: 0.4s linear;

}
.page-content a:hover{
	color: #fff;
	background: #33F3FF;
}
.text{
	padding: 10px;
	text-align: justify;
}
.text div{
	margin-bottom: 6px;
}


/*#logout{
 float: right;
 font-size: 30px;
 color: red;
background-color: yellow;
padding-right: 10px;
margin-right: 10px;
margin-top: 10px;
}
#logout a{
	text-decoration: none;
	color: red;

}
#logout:hover{
	background-color:blue;
	color: white;
}
*/

</style>

		</head>
<body>


<div class="landing-page">
	<!--<button id="logout"><a href="logout.php" >Log Out</a></button>-->
	
	<div class="page-content">

		<h1>Hunger free india</h1>
		<br>
        <br>
        <br>
		
		<h3>Hello Volunteer</h3>
		<br>
		<br>
		
		<a href="vol1.php">donors</a>
		<a href="vol2.php">hunger spots</a>
		<a href="vol4.php">volunteers</a>
		<a href="logout.php" >Log Out</a>
</div>






	</body>
</html>