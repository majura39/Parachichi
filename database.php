 <?php
$servername = "sql312.infinityfree.com"; // server kutoka Cpanel
$username = "if0_39801681";
$password = "ABjtmmP75vS3Fur";
$dbname = "if0_39801681_parachichi";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>