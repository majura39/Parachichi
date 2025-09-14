 <?php
include 'database.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $name       = trim($_POST['name']);
    $ngoma      = trim($_POST['ngoma']);
    $aina       = trim($_POST['aina']);
    $kipengele  = trim($_POST['kipengele']);
    $maelezo    = trim($_POST['maelezo']);
    $muda       = date("Y");

    // File uploads
    $pic        = $_FILES['img']['name'];
    $temp       = $_FILES['img']['tmp_name'];
    $audio      = $_FILES['audio']['name'];
    $tempo      = $_FILES['audio']['tmp_name'];

    $dest       = "images/" . basename($pic);
    $desti      = "audio/" . basename($audio);

    // Validate file types
    $allowed_img   = ['jpg','jpeg','png','gif'];
    $allowed_audio = ['mp3','wav','ogg'];

    $img_ext   = strtolower(pathinfo($pic, PATHINFO_EXTENSION));
    $audio_ext = strtolower(pathinfo($audio, PATHINFO_EXTENSION));

    if (!in_array($img_ext, $allowed_img)) {
        $error = "<div class='alert error'>⚠️ Image type not allowed</div>";
    } elseif (!in_array($audio_ext, $allowed_audio)) {
        $error = "<div class='alert error'>⚠️ Audio type not allowed</div>";
    } else {
        // DB connection
        

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepared statement
        $stmt = $conn->prepare("INSERT INTO music 
            (name, ngoma, aina, kipengele, img, audio, maelezo, mwaka) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("ssssssss", $name, $ngoma, $aina, $kipengele, $pic, $audio, $maelezo, $muda);

        if ($stmt->execute()) {
            move_uploaded_file($temp, $dest);
            move_uploaded_file($tempo, $desti);
            $error = "<div class='alert success'>✅ Song uploaded Successfully!</div>";
        } else {
            $error = "<div class='alert error'>❌ Song Failed to upload</div>";
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Upload Song</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #121212, #1a1a1a);
            color: #fff;
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        .navbar {
            background: #1f1f1f;
            padding: 15px 30px;
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
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .nav-links a:hover {
            color: #00c896;
        }

        /* Container */
        .container {
            display: flex;
            justify-content: center;
            margin-top: 40px;
            padding: 20px;
        }

        /* Form */
        form {
            background: #1f1f1f;
            padding: 25px;
            border-radius: 15px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.8);
            animation: fadeIn 0.8s ease-in-out;
        }
        form h2 {
            text-align: center;
            color: #00c896;
            margin-bottom: 20px;
        }
        input, select, textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0 15px 0;
            border: none;
            border-radius: 8px;
            background: #2c2c2c;
            color: #fff;
            font-size: 14px;
            transition: all 0.3s ease-in-out;
        }
        input:focus, textarea:focus {
            outline: none;
            background: #333;
            box-shadow: 0 0 8px #00c896;
        }
        label {
            font-size: 14px;
            font-weight: bold;
            color: #bbb;
            margin-top: 10px;
            display: block;
        }
        input[type=submit] {
            background: #00c896;
            color: #000;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        input[type=submit]:hover {
            background: #00a67d;
        }

        /* Alerts */
        .alert {
            text-align: center;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
            font-weight: bold;
            animation: fadeIn 0.5s ease-in-out;
        }
        .success {
            background: #00c896;
            color: #000;
        }
        .error {
            background: #ff4d4d;
            color: #fff;
        }

        /* Animation */
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-10px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>🎵 Admin Panel</h1>
        <div class="nav-links">
            <a href="admin.php">Upload</a>
            <a href="manage.php">Manage</a>
            <a href="regi.php">Register</a>
        </div>
    </div>

    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <h2>Upload New Song</h2>
            <?php if(!empty($error)) echo $error; ?>
            
            <input type="text" name="name" placeholder="Jina la Msanii" required>
            <input type="text" name="ngoma" placeholder="Jina la Ngoma" required>
            <input type="text" name="aina" placeholder="Aina ya Muziki" required>
            <input type="text" name="kipengele" placeholder="Kipengele" required>
            <textarea name="maelezo" placeholder="Maelezo kuhusu ngoma"></textarea>
            
            <label>Picha ya Msanii:</label>
            <input type="file" name="img" accept="image/*" required>
            
            <label>Audio ya Ngoma:</label>
            <input type="file" name="audio" accept="audio/*" required>
            
            <input type="submit" name="submit" value="🚀 Upload">
        </form>
    </div>
</body>
</html>