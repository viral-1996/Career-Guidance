<?php
include ('def.php');
?>

<div class="ex4"><h3><strong>
Confused about which career to choose? Wondering whether to study in India or abroad? Know which course you want to do but don't
 know which college would be the best?
</strong></h3>

<br><p style="font-size:15px;">
You are at India's premier career counseling company, can help you in all the above to choose that perfect career and chart a successful 
career path for you. Take the Online Career Counseling Test  to know your aptitude, interest and personality and make an informed career choice. 
Read career profiles to know more about the career 
you are interested in. Search for colleges and ITI in India from our extensive college and ITI directory 
and get complete information on various colleges and ITI 
courses. Talk to our expert career counselors to resolve any career doubt you have. Our study abroad
 counselors can guide you to select the best university for you and 
guide you throughout the entire application process.
</p>
</div>

<br><br>

<div class="ex4">
<h3><u>Overseas Consultant - A Smooth Sailing To Study Abroad</u></h3><br>
<p style="color:black;font-size:15px;">Here we bring to you a unique experience in global education where we dispel all the myths related to Studying Abroad.We have conveyed the concept of overseas education to the doorstep of every student, by making it inexpensive & devoid of cumbersome procedures.<br> 
Our exceptional network with the Universities helps us to deliver our best services to our students. Be it financial, educational or personal our extensive reach in these areas help us to serve you better. Come, test your aptitude, discuss your fears and we will promptly guide you to choose a University that will suit your profile and financial capability.</p>
</div>
<br><br>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <a href="abroad/usa.php"><img src="ussol.jpg" alt="USA" width="600" height="400"></a>
        <div class="carousel-caption">
        <h3>USA</h3>
        
      </div>
      </div>

      <div class="item">
        <a href="abroad/australia.php"><img src="aust.jpg" alt="Australia" width="600" height="400"></a>
        <div class="carousel-caption">
        <h3>Australia</h3>
        </div>
      </div>
    
      <div class="item">
        <a href="abroad/ireland.php"><img src="ire.jpg" alt="Ireland" width="600" height="400"></a>
        <div class="carousel-caption">
        <h3>Ireland</h3>
      </div>
      </div>

      <div class="item">
        <a href="germany.php"><img src="german.jpg" alt="Germany" width="600" height="400"></a>
        <div class="carousel-caption">
        <h3>Germany</h3>
      </div>
      </div>

      <div class="item">
        <a href="uk.php"><img src="unk.jpg" alt="UK" width="600" height="400"></a>
        <div class="carousel-caption">
        <h3>Great Britain</h3> 
      </div>
      </div>
    
      <div class="item">
        <a href="canada.php"><img src="can.jpg" alt="Canada" width="600" height="400"></a>
        <div class="carousel-caption">
        <h3>Canada</h3> 
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" ></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" ></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<br><br>

<!-- File Upload -->
<?php
if(isset($_SESSION['mail']))
{
  echo 
'
<div class="ex4">
<h2 style="font-family: Montserrat;">Upload Documents For Reference Here:</h2>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Upload File</button>
<a href="disp.php"><button type="button" class="btn btn-info btn-lg" style="float:right;">View The Uploaded Files</button></a>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">File Upload</h4>
      </div>
      <div class="modal-body">
 <p>
Upload Documents Like LOR,RESUMES,SOP (Only pdf Files allowed)(Max Size:5MB)<br>
<form action="pdf.php" method="post" enctype="multipart/form-data">
<b>Document Name:</b><input type="name" name="name" required/><br><br>
<b><strong>Select File:</b></strong><input type="file" name="file" required/><br>
<button type="submit" name="btn-upload" >Upload</button>
</form>
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
';
}
?>

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