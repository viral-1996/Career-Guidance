<?php
include 'def.php';
include 'conn.php';
?>
<br>
<div class="ex4">


<h2><b><strong>Uploaded Files For Reference: </b></strong></h2><br>
<?php
$dir="Uploads/"; // Directory where files are stored
$sql = "SELECT * FROM file_up";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        	echo "Name: ";?>
        	<a href="<?php echo $row['file']?>" target="_blank"> <?php echo $row["name"]."<br><br>";?></a>
<?php
    }
} 
?>
</div>

<footer class="footer-basic-centered">
<p class="footer-company-motto">Providing A Better Future.</p>
<p class="footer-links">
<a href="home.php" class="flink">Home</a>
-
<a href="faq.php" class="flink">Faq</a>
-
<a href="contact.php" class="flink">Contact Us</a>
</p>
<p class="footer-company-name">Career Builder &copy; 2016</p>
</footer>
</body>
</html>
