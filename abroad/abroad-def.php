<?php
session_start();
?>
<html>

<head>
<title>Career Builder</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
  <link rel="stylesheet" href="12.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>
<body>
<p style="align:left;"><h1 style="font-family:Pacifico;">Career   Builder</h1></p>
<ul class="topnav" id="myTopnav">
  <li><a class="active" href="../home.php">Home</a></li>
  <li><a href="../careercouns.php">Career Counselling</a></li>
  <li class="dropdown1">
    <a href="#" class="dropbtn">Colleges</a>
    <div class="dropdown1-content">
      <a href="../science.php">Science</a>
      <a href="../arts.php">Arts</a>
      <a href="../commerce.php">Commerce</a>
      <a href="../engg.php">Engineering</a>
      <a href="../medical.php">Medical</a>
    </div>
  </li>
  <li class="dropdown1">
    <a href="#" class="dropbtn">Study Abroad</a>
    <div class="dropdown1-content">
      <a href="../prep.php?pa=1">Test Preparations</a>
      <a href="usa.php">USA</a>
      <a href="uk.php">UK</a>
      <a href="australia.php">Australia</a>
      <a href="canada.php">Canada</a>
      <a href="ireland.php">Ireland</a>
      <a href="germany.php">Germany</a>
    </div>
  </li>
<li class="dropdown1">
    <a href="#" class="dropbtn">Entrance Exams in India</a>
    <div class="dropdown1-content">
      <a href="../aft.php?pa=1">After 12th</a>
      <a href="../oth.php?pa=1">Others</a>
     </div>
  </li>


<?php
if(isset($_SESSION['mail']))
{
  echo 
'
<li><a class="active" href="../counsellor.php">Ask the Counsellor!</a></li>
<li class="log"><a href="../logout.php" ><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
<li class="log"><a>'.$_SESSION['mail'].'</a></li>';
}
else
 echo 
'<li class="log"><a href="../reg.php" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
 <li class="log"><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
?>
 
<li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">=</a>
</li>
</ul>
<!-- Responsive Code Function -->
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<br><br>