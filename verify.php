 <?php
require 'database.php';

if (isset($_GET['code'])) {
    $code = mysqli_real_escape_string($conn, $_GET['code']);
    $query = mysqli_query($conn, "SELECT * FROM artists WHERE verification_code = '$code' AND verified = 0");

    if (mysqli_num_rows($query) > 0) {
        mysqli_query($conn, "UPDATE artists SET verified = 1, verification_code = NULL WHERE verification_code = '$code'");
        echo "<h2>Akaunti yako imethibitishwa kikamilifu ✅</h2>";
    } else {
        echo "<h2>Link haifanyi kazi au tayari imetumika.</h2>";
    }
} else {
    echo "<h2>Hakuna code iliyotumwa.</h2>";
}
?>