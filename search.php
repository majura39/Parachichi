 <?php
include 'database.php';
$search = $_POST['search'];
$select = "SELECT * FROM music WHERE name LIKE '%$search%' OR ngoma LIKE '%$search%'";
$query = mysqli_query($conn,$select);
?>

<!DOCTYPE html>
<html lang="sw">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Parachichi Media - Search</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
body { font-family:'Montserrat', sans-serif; background:#0d0d0d; color:#fff; margin:0; padding:0; }
.top-social-bar { background:#1a1a1a; padding:8px 0; text-align:center; border-bottom:1px solid #333; }
.top-social-bar a { color:#fff; margin:0 10px; font-size:1.4rem; transition:0.3s; }
.top-social-bar a:hover { color:#00ff00; }
.navbar { background:#111; }
.navbar-brand img { height:60px; }
.nav-link { color:#fff !important; margin:0 6px; }
.nav-link:hover { color:#00ff00 !important; }
.search-bar input { border-radius:30px 0 0 30px; border:none; padding:8px 15px; }
.search-bar button { border-radius:0 30px 30px 0; background:#00c896; border:none; padding:8px 15px; color:#fff; }
.container { padding:40px 15px; }
.results-title { text-align:center; margin-bottom:30px; font-size:1.8rem; color:#00ff88; }

/* Music Result Cards */
.result-card { display:flex; align-items:center; background:#121212; padding:15px; border-radius:12px; margin-bottom:15px; box-shadow:0 4px 12px rgba(0,255,0,0.1); transition:0.3s; }
.result-card:hover { transform:translateY(-3px); box-shadow:0 6px 18px rgba(0,255,0,0.3); }
.result-card img { width:80px; height:80px; object-fit:cover; border-radius:10px; margin-right:20px; border:2px solid #00c896; }
.result-card .info { flex:1; }
.result-card .info h3 { margin:0; font-size:1.1rem; color:#fff; }
.result-card .info h3 span { color:#00ff88; font-weight:600; }
.result-card .download-btn { text-decoration:none; background:#00c896; color:#0d0d0d; padding:6px 14px; border-radius:6px; font-weight:bold; transition:0.3s; }
.result-card .download-btn:hover { background:#009a74; color:#fff; }

.no-results { text-align:center; color:#ff4d4d; font-size:1.2rem; }

/* Footer */
footer { background:#111; color:#777; text-align:center; padding:25px; font-size:14px; margin-top:30px; }
</style>
</head>
<body>

<!-- Social Bar -->
<div class="top-social-bar">
  <a href="#"><i class="bi bi-facebook"></i></a>
  <a href="#"><i class="bi bi-instagram"></i></a>
  <a href="#"><i class="bi bi-youtube"></i></a>
  <a href="#"><i class="bi bi-telegram"></i></a>
  <a href="#"><i class="bi bi-tiktok"></i></a>
  <a href="#"><i class="bi bi-snapchat"></i></a>
  <a href="#" title="X (Twitter)">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff" viewBox="0 0 24 24">
      <path d="M20.78 3H17.6L12 10.4L6.4 3H3L10.2 12L3 21H6.2L12 13.6L17.8 21H21L13.8 12L20.78 3Z"/>
    </svg>
  </a>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="home.php"><img src="logo1.png" alt="Parachichi Media"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="home.php">Nyumbani</a></li>
        <li class="nav-item"><a class="nav-link" href="art.php">Wasanii</a></li>
        <li class="nav-item"><a class="nav-link" href="all.php">Nyimbo</a></li>
        <li class="nav-item"><a class="nav-link" href="About.php">Wasiliana</a></li>
      </ul>
      <form class="d-flex search-bar" method="POST" action="search.php">
        <input type="search" name="search" placeholder="Search music...">
        <button type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </div>
</nav>

<!-- Search Results -->
<div class="container">
  <h2 class="results-title">Search Results for "<?php echo htmlspecialchars($search); ?>"</h2>
  <?php 
  if(mysqli_num_rows($query) > 0){
      while($result = mysqli_fetch_assoc($query)){ ?>
          <div class="result-card">
              <img src="images/<?php echo $result['img']; ?>" alt="music">
              <div class="info">
                  <h3><span><?php echo $result['name']; ?></span> ~ <?php echo $result['ngoma']; ?></h3>
              </div>
              <a href="ngoma.php?id=<?php echo $result['id']; ?>" class="download-btn">⬇️ Download</a>
          </div>
      <?php }
  } else {
      echo "<p class='no-results'>Hakuna matokeo kwa <strong>".htmlspecialchars($search)."</strong></p>";
  }
  ?>
</div>

<!-- Footer -->
<footer>
  &copy; <?php echo date("Y"); ?> Parachichi Media. Haki zote zimehifadhiwa.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>