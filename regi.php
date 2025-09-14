 <?php
include 'database.php';
session_start();

if (isset($_POST['submit'])) {
    $n = $_POST['name'];
    $nn = $_POST['aina'];
    $maelezo = $_POST['maelezo'];
    $pic = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];
    $dest = "images/" . $pic;

    $tb_ins = "INSERT INTO artist VALUES('', '$n', '$nn', '$maelezo', '$pic')";
    $qr_ins = mysqli_query($conn, $tb_ins);

    if ($qr_ins) {
        move_uploaded_file($temp, $dest);
        $error = "<div class='alert success'>✅ Artist uploaded successfully</div>";
    } else {
        $error = "<div class='alert error'>❌ Failed to upload artist</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin - Artist Upload</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    /* General Body */
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #0f0f0f, #1e1e1e);
        color: #fff;
    }

    /* Navbar */
    .navbar {
        background: #1f1f1f;
        padding: 15px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.7);
        position: sticky;
        top: 0;
        z-index: 1000;
    }
    .navbar h1 {
        margin: 0;
        color: #00c896;
        font-size: 22px;
    }
    .nav-links a {
        color: #fff;
        margin-left: 18px;
        text-decoration: none;
        font-weight: 500;
        transition: 0.3s;
    }
    .nav-links a:hover {
        color: #00c896;
    }

    /* Hero Section */
    .hero {
        text-align: center;
        padding: 50px 20px;
        background: url('images/music-bg.jpg') no-repeat center/cover;
        color: #fff;
        position: relative;
    }
    .hero::after {
        content: "";
        position: absolute;
        top:0; left:0; right:0; bottom:0;
        background: rgba(0,0,0,0.6);
    }
    .hero h2 {
        position: relative;
        font-size: 32px;
        margin: 0;
        z-index: 2;
    }

    /* Container */
    .container {
        max-width: 600px;
        margin: -40px auto 30px;
        background: #1e1e1e;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.6);
    }

    /* Alerts */
    .alert {
        padding: 12px;
        margin: 15px 0;
        border-radius: 8px;
        text-align: center;
        font-weight: bold;
        animation: fadeIn 0.5s ease-in-out;
    }
    .alert.success {
        background: #00c896;
        color: #000;
    }
    .alert.error {
        background: #ff4d4d;
        color: #fff;
    }

    /* Form */
    .form-group {
        margin-bottom: 18px;
    }
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }
    input[type="text"], input[type="file"] {
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        border: none;
        background: #2a2a2a;
        color: #fff;
        font-size: 15px;
        transition: 0.3s;
    }
    input[type="text"]:focus, input[type="file"]:focus {
        outline: none;
        background: #333;
        border: 1px solid #00c896;
    }

    /* Submit Button */
    input[type="submit"] {
        background: #00c896;
        color: #000;
        padding: 14px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-weight: bold;
        width: 100%;
        font-size: 16px;
        transition: 0.3s;
    }
    input[type="submit"]:hover {
        background: #00a67d;
        transform: scale(1.02);
    }

    /* Logout */
    .logout {
        text-align: center;
        margin-top: 20px;
    }
    .logout a {
        color: #ff4d4d;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }
    .logout a:hover {
        text-decoration: underline;
    }

    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .navbar h1 { font-size: 18px; }
        .hero h2 { font-size: 24px; }
        .container { margin: 20px; padding: 20px; }
    }
</style>
</head>
<body>

<div class="navbar">
    <h1>🎤 Admin Panel</h1>
    <div class="nav-links">
        <a href="admin.php">Upload</a>
        <a href="manage.php">Manage</a>
        <a href="regi.php">Register</a>
    </div>
</div>

<div class="hero">
    <h2>Upload Artist</h2>
</div>

<div class="container">
    <?php if (isset($error)) echo $error; ?>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Jina la Msanii</label>
            <input type="text" name="name" required>
        </div>
        <div class="form-group">
            <label>Aina ya Muziki</label>
            <input type="text" name="aina" required>
        </div>
        <div class="form-group">
            <label>Maelezo Kidogo</label>
            <input type="text" name="maelezo">
        </div>
        <div class="form-group">
            <label>Picha ya Msanii</label>
            <input type="file" name="img" required>
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<div class="logout">
    <a href="logout.php">Log Out</a>
</div>

</body>
</html>