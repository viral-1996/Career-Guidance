<?php
include ('nav.php');
?>
<style>
.header{
	background:url(../images/.jpg) no-repeat 0px 0px;
}
.f1{
	padding-left: 10px;
	padding-right: 200px;
}
</style>
<div class="f1">
	<p>Upload Question:</p><br>
	<form   method="post" name="qup" action="qup.php">
		Category:  <input type="text" name ="cat" required/><br><br>
		<!-- Image:<br>  <input type="file" name="file"/><br><br> -->
		Question:<br>  <textarea cols="50" rows="10" name="ques" required placeholder="Enter the Question"></textarea><br><br>
		Option 1:<br>  <input type="text" name="op1" required/><br><br>
		Option 2:<br>  <input type="text" name="op2" required/><br><br>
		Option 3:<br>  <input type="text" name="op3" required/><br><br>
		Option 4:<br>  <input type="text" name="op4" required/><br><br>
		Correct Option:<br>  <input type="text"  name="corop" required/><br><br>
		Explanation:<br>  <textarea cols="50" rows="10" name="exp" required placeholder="Enter Explanation"></textarea><br><br>
		Difficulty(Easy(1)-Hard(3)):<br><input type="number" max="3" min="1" name="dif"/><br><br>
		<input type="submit" value="Submit" name="mysubmit">
	</form>
</div>
<br><br>
<!--start-footer-->
		<div class="footer">
			<div class="container">
				<div class="footer-left">
					<a href="#"><img src="images/footer-logo.png" title="mabur"/></a>
				</div>
				<script type="text/javascript">
				$(document).ready(function() {
					/*
					var defaults = {
			  			containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
			 		};
					*/
					
					$().UItoTop({ easingType: 'easeOutQuart' });
					
				});
			</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>
		<!--//End-footer-->
		<!--//End-container-->
	</body>
	</html>