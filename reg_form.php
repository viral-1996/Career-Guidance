<?php
session_start();
include 'conn.php';

$name=$_POST['nam'];
// $num=$_POST['num'];
$mail=$_POST['ema'];
$pass=$_POST['pass'];
$sql = "SELECT * FROM user WHERE mail='$mail'";
$result=mysqli_query($conn, $sql);
if($row = $result->fetch_assoc()){
echo '<script type="text/javascript">alert("Email Already Exists");
window.location="reg.php";
</script>';
}
else{

 $sql1 = "INSERT INTO user(name,mail,pass) VALUES ('$name','$mail','$pass')";
 // mysqli_autocommit($sql1, FALSE);
mysqli_query($conn, $sql1);
echo '<script type="text/javascript">alert("Registered Successfully");
window.location="login.php";
</script>';
}
?>