 <?php
  include 'database.php';   
$tb="DELETE FROM music where id='".$_GET['id']."'";
$qr=mysqli_query($conn,$tb);
if ($qr) {
	header("location:manage.php");
}
?