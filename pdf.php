<?php
session_start();
include 'conn.php';
$uploadOk = 1;
if(isset($_POST['btn-upload']))
{       
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $name=$_POST['name'];
 $folder="uploads/";
 $target_file = $folder . basename($_FILES["file"]["name"]);
 $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
 if($FileType != "pdf" && $FileType != "PDF") {
    echo '<script type="text/javascript">alert("Only pdf files are allowed");
	window.location="home.php";
</script>';
    $uploadOk = 0;
}

 if ($_FILES["file"]["size"] > 5000000) {
    echo '<script type="text/javascript">alert("File Size too Large");
	window.location="home.php";
</script>';
    $uploadOk = 0;
}

 
if($uploadOk==1)
{
 move_uploaded_file($file_loc,$folder.$file);
 $filepath ="uploads/".$file ;
// echo $filepath;
// echo $file_size;
// echo $file_type; 
$sql="INSERT INTO file_up(file,name,type,size) VALUES ('$filepath','$name','$file_type','$file_size')";
if(!mysqli_query($conn, $sql))
	echo "problem hai";
else{
	echo '<script type="text/javascript">alert("Uploaded Sucessfully");
window.location="home.php";
</script>';
}
}
else 
{
	echo '<script type="text/javascript">alert("Internal Error.Cant Be Uploaded");
	window.location="home.php";
</script>';
}
}
?>