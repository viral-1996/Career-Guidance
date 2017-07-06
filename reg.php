<?php
include ('def.php');
if(isset($_SESSION['mail']))
{
  echo '<p align="center" color="red">Already Logged In</p>';
}
else
 echo '
 <div class="logo"></div>
<div class="login-block">
<h1 style="font-family: Montserrat;">Register</h1>
<form name="reg" action="reg_form.php" onsubmit="return Validateform()" method="post"autocomplete="off">
<input type="text" value="" placeholder="Name" id="nam" name="nam" required/>	

<input type="email" value="" placeholder="Email" id="ema" name="ema" required/>
<input type="password" value="" placeholder="Password" id="password" name="pass" required/>
<input type="password" value="" placeholder="Confirm Password" id="c_password" name="c_pass" required/>

<button>Submit</button>
</form>
</div>';?>

<!-- <input type="text" value="" placeholder="Mobile Number" id="num" name="num"/> -->

<br><br><br><br>
<footer class="footer-basic-centered">
<p class="footer-company-motto">Providing A Better Future.</p>
<p class="footer-links">
<a href="home.phplphp" class="flink">Home</a>
-
<a href="faq.hphp" class="flink">Faq</a>
-
<a href="contact.php" class="flink">Contact Us</a>
</p>
<p class="footer-company-name">Career Builder &copy; 2016</p>
</footer>
</body>
</html>
