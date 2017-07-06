<?php
include ('def.php');
?>
<br><br><br>
<div class="prep">
<ul class="c1" >
<li><a href="oth.php?pa=1">CLAT</a>
<li><a href="oth.php?pa=2">CAT</a>
<li><a href="oth.php?pa=3">AIIMS BSc Nursing</a>
<li><a href="oth.php?pa=4">Civil Services</a>
</ul>
</div>

<?php
$conn= mysqli_connect("localhost","root","87654321", "career");  
if(!$conn)
{
	die('Could not connect: ' . mysql_error());
}
$p=$_GET['pa'];
$sql="SELECT * FROM oth where $p=id";
$res=$conn->query($sql);
if($res->num_rows>0)
while($row = $res->fetch_assoc()){
	echo $row["dat"]."<br>";
	}
	else
		echo "0 Results";
$conn->close();
?>
<!-- Footer -->
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