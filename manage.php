 <?php
include 'database.php';


if (isset($_POST['submit'])) {
    $n = $_POST['name'];
    $nn = $_POST['ngoma'];
    $nnn = $_POST['feat'];
    $maelezo = $_POST['maelezo'];
    $vipengele = $_POST['vipengele'];

    $pic = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];
    $audio = $_FILES['audio']['name'];
    $tempo = $_FILES['audio']['tmp_name'];

    $dest = "images/" . $pic;
    $desti = "audio/" . $audio;
    $muda = date("Y-m-d H:i:s");

    $tb_ins = "INSERT INTO music VALUES('', '$n', '$nn', '$nnn', '$vipengele', '$pic', '$audio', '$maelezo', '$muda')";
    $qr_ins = mysqli_query($conn, $tb_ins);

    if ($qr_ins) {
        move_uploaded_file($temp, $dest);
        move_uploaded_file($tempo, $desti);
        $error = "<div class='alert success'>✅ Song uploaded Successfully</div>";
    } else {
        $error = "<div class='alert error'>❌ Song Failed to upload</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body {
        font-family: "Segoe UI", Arial, sans-serif;
        background: #0d1117;
        color: #e6edf3;
        margin: 0;
    }
    .navbar {
        background: #161b22;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        border-bottom: 1px solid #30363d;
    }
    .navbar h1 {
        color: #00c896;
        margin: 0;
        font-size: 22px;
    }
    .nav-links {
        display: flex;
        flex-wrap: wrap;
        margin-top: 10px;
    }
    .nav-links a {
        color: #e6edf3;
        margin: 5px 10px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
    }
    .nav-links a:hover {
        color: #00c896;
    }
    .container {
        padding: 20px;
        max-width: 1200px;
        margin: auto;
    }
    .actions {
        margin-bottom: 20px;
    }
    .actions a {
        background: #00c896;
        color: #000;
        padding: 10px 16px;
        border-radius: 8px;
        margin: 5px 5px 5px 0;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
        display: inline-block;
    }
    .actions a:hover {
        background: #00a67d;
    }
    .alert {
        padding: 12px;
        margin: 15px 0;
        border-radius: 8px;
        text-align: center;
        font-weight: bold;
    }
    .alert.success {
        background: #00c896;
        color: #000;
    }
    .alert.error {
        background: #ff4d4d;
        color: #fff;
    }
    .table-wrapper {
        overflow-x: auto;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.5);
    }
    table {
        width: 100%;
        min-width: 600px;
        border-collapse: collapse;
        background: #161b22;
    }
    th, td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #30363d;
        font-size: 14px;
    }
    th {
        background: #00c896;
        color: #000;
    }
    tr:hover {
        background: #1e2630;
    }
    img {
        border-radius: 6px;
        width: 100px;
        height: 70px;
        object-fit: cover;
    }
    .delete-btn {
        color: #ff4d4d;
        font-weight: bold;
        text-decoration: none;
        padding: 6px 12px;
        border-radius: 6px;
        transition: 0.3s;
        border: 1px solid #ff4d4d;
        font-size: 13px;
    }
    .delete-btn:hover {
        background: #ff4d4d;
        color: #fff;
    }
    .search-box {
        margin: 15px 0;
        text-align: right;
    }
    .search-box input {
        padding: 10px 12px;
        border-radius: 8px;
        border: 1px solid #30363d;
        background: #0d1117;
        color: #e6edf3;
        width: 100%;
        max-width: 280px;
    }
    .search-box input:focus {
        outline: none;
        border-color: #00c896;
    }

    /* 📱 Responsive design for mobile */
    @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            align-items: flex-start;
        }
        .navbar h1 {
            margin-bottom: 10px;
        }
        .search-box {
            text-align: left;
        }
        table th, table td {
            font-size: 13px;
            padding: 10px;
        }
        img {
            width: 80px;
            height: 60px;
        }
    }
    @media (max-width: 480px) {
        .navbar h1 {
            font-size: 18px;
        }
        .nav-links a {
            font-size: 14px;
            margin: 4px 6px;
        }
        table th, table td {
            font-size: 12px;
            padding: 8px;
        }
        .delete-btn {
            padding: 4px 8px;
            font-size: 12px;
        }
    }
</style>
<script>
function searchTable() {
    let input = document.getElementById("searchInput").value.toLowerCase();
    let rows = document.querySelectorAll("table tbody tr");
    rows.forEach(row => {
        let text = row.innerText.toLowerCase();
        row.style.display = text.includes(input) ? "" : "none";
    });
}
</script>
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
    <h2>Manage Songs</h2>
    <?php if (isset($error)) echo $error; ?>

    <div class="search-box">
        <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="🔍 Search songs...">
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
            <tr>
                <th>Image</th>
                <th>Artist</th>
                <th>Song</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $tb_sel = "SELECT * FROM music ORDER BY id desc";
            $qr_sel = mysqli_query($conn, $tb_sel);
            if (mysqli_num_rows($qr_sel) > 0) {
                while ($postor = mysqli_fetch_assoc($qr_sel)) {
                    echo "<tr>
                            <td><img src='images/{$postor['img']}'></td>
                            <td>{$postor['name']}</td>
                            <td>{$postor['ngoma']}</td>
                            <td><a href='delete.php?id={$postor['id']}' class='delete-btn'>Delete</a></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No songs found</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>