<?php
include ('def.php');
?>
<?php
if(isset($_SESSION['mail']))
{

  echo '<script type="text/javascript">alert("Already Logged In!");
window.location="home.php";
</script>';
}
else
 {
   echo '<div class="logo"></div>
<div class="login-block">
<h1 style="font-family: Montserrat;">Login</h1>
<form name="login" action="log_form.php"  method="post" >
<input type="email" value="" placeholder="E-mail" id="ema" name="ema" required />
<input type="password" value="" placeholder="Password" id="password" name="pass" required/>
<button type="submit">Submit</button>
</form>
</div>';
 }
?>


<br><br><br>
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