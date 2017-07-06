<?php
include 'def.php';
?>
<br><br>


<div class="ex4">
  <p style="font-size:30px;align:center;">Ask A Counsellor</p><br>
<form action="mail1.php" name="counsellor" method="POST" autocomplete="off">
Name<b style="color:red;">*</b>:<br> <input type="text" name="uname" value="<?php echo $_SESSION['name']?>" required><br>
<br>
E-Mail ID<b style="color:red;">*</b>:<br> <input type="email" name="mail" id="email" value="<?php echo $_SESSION['mail']?>" required><br><br>
Question:<br><br><textarea cols="80" rows="10" name="question" id="question" required placeholder="Enter Your Query"></textarea>
<b><strong><p style="color:red;"> Fields marked '*' are Compulsory Fields</p></strong></b>
<input type="submit" value="Submit">
</form>
</div>

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