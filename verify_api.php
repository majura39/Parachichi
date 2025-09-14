 <?php
include('database.php');
session_start();

if (!isset($_SESSION['phone'])) {
    header("Location: artist_login.php");
    exit;
}

$phone = $_SESSION['phone'];
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_token = mysqli_real_escape_string($conn, $_POST['token']);

    // Angalia token na phone
    $query = mysqli_query($conn, "SELECT * FROM artists WHERE phone = '$phone' AND api_token = '$input_token' AND verified = 0");
    if (mysqli_num_rows($query) === 1) {
        // Token sahihi, update verified status
        mysqli_query($conn, "UPDATE artists SET verified = 1, api_token = NULL WHERE phone = '$phone'");

        // Set session login
        $_SESSION['artist_logged_in'] = true;
        $_SESSION['artist_phone'] = $phone;

        // Redirect dashboard
        header("Location: artist_dashboard.php");
        exit;
    } else {
        $error = "API Token si sahihi. Jaribu tena.";
    }
}
?>

<!DOCTYPE html>
<html lang="sw">
<head>
  <meta charset="UTF-8">
  <title>Thibitisha API Token - Parachichi Media</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
  <div class="container mt-5">
    <div class="card mx-auto" style="max-width: 400px;">
      <div class="card-body bg-secondary text-white">
        <h3 class="text-center mb-4">Thibitisha API Token</h3>

        <?php if ($error): ?>
          <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
          <div class="mb-3">
            <label for="token" class="form-label">Ingiza API Token uliopewa</label>
            <input type="text" name="token" id="token" class="form-control" required pattern="[0-9]{6}" placeholder="Ingiza nambari 6 za token">
          </div>
          <button type="submit" class="btn btn-success w-100">Thibitisha</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>