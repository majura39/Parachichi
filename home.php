 <?php
include('database.php');
?>
<!DOCTYPE html>
<html lang="sw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Parachichi Media</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* Most Downloads Section */
.downloads-list {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.download-item {
  display: flex;
  align-items: center;
  background: #0d0d0d;
  border-radius: 12px;
  padding: 15px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  transition: 0.3s ease;
}

.download-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.2);
}

.download-item .rank {
  font-size: 20px;
  font-weight: bold;
  color: #00c896;
  margin-right: 15px;
  width: 30px;
  text-align: center;
}

.download-item img {
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 10px;
  margin-right: 15px;
}

.download-item .info {
  flex: 1;
}

.download-item h4 {
  margin: 0;
  font-size: 18px;
  color: #333;
}

.download-item h4 span {
  font-weight: normal;
  color: #666;
  font-size: 16px;
}

.download-item p {
  margin: 5px 0;
  color: #555;
}

.btn-download {
  display: inline-block;
  margin-top: 5px;
  background: #00c896;
  color: #fff;
  padding: 6px 14px;
  border-radius: 6px;
  font-size: 14px;
  font-weight: bold;
  text-decoration: none;
  transition: 0.3s;
}

.btn-download:hover {
  background: #009a74;
}

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #0d0d0d;
      color: #fff;
    }
    /* Social bar */
    .top-social-bar {
      background: #1a1a1a;
      padding: 8px 0;
      text-align: center;
      border-bottom: 1px solid #333;
    }
    .top-social-bar a {
      color: #fff;
      margin: 0 10px;
      font-size: 1.4rem;
      transition: color 0.3s ease;
    }
    .top-social-bar a:hover { color: #00ff00; }

    /* Navbar */
    .navbar { background: #111; }
    .navbar-brand img { height: 60px; }
    .nav-link { color: #fff !important; margin: 0 6px; }
    .nav-link:hover { color: #00ff00 !important; }

    /* Search form */
    .search-bar input {
      border-radius: 30px 0 0 30px;
      border: none;
      padding: 8px 15px;
    }
    .search-bar button {
      border-radius: 0 30px 30px 0;
      background: #00c896;
      border: none;
      padding: 8px 15px;
      color: #fff;
    }

    /* Hero */
    .hero {
      background: url('https://images.unsplash.com/photo-1511379938547-c1f69419868d?auto=format&fit=crop&w=1950&q=80') no-repeat center center/cover;
      height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      color: white;
    }
    .hero .overlay {
      background: rgba(0,0,0,0.65);
      padding: 50px;
      border-radius: 15px;
      text-align: center;
      backdrop-filter: blur(3px);
    }
    .hero h1 { font-size: 3rem; font-weight: bold; color: #00ff00; }
    .hero p { font-size: 1.2rem; }

    /* Section titles */
    .section-title {
      margin-bottom: 30px;
      text-align: center;
      font-weight: bold;
      color: #fff;
    }

    /* Music cards */
    .music-card {
      background: #1a1a1a;
      border-radius: 15px;
      padding: 15px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .music-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 0 15px rgba(0,255,0,0.4);
    }
    .music-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
    }
    .music-card h5 { margin-top: 10px; font-size: 1rem; }

    /* Trending artists */
    .trending-artist {
      display: inline-block;
      background: #222;
      padding: 10px 20px;
      border-radius: 20px;
      margin: 5px;
      color: #fff;
      text-decoration: none;
      transition: 0.3s;
      border: 1px solid #00ff00;
    }
    .trending-artist:hover { background: #00ff00; color: #0d0d0d; }

    /* Footer */
    .footer-large {
      padding: 50px 20px;
      background: #111;
      color: #ccc;
      text-align: center;
    }
    .footer-large h3 { color: #fff; }
    .footer-large img { margin-bottom: 20px; }
    .copyright-footer {
      background: #000;
      color: #777;
      text-align: center;
      padding: 15px;
      font-size: 14px;
    }
    a{
      text-decoration: none;
    }


 /* General search bar (desktop) */
.search-bar {
  width: 50%;
  max-width: 400px;
}

/* Search form styling (input + button as before) */
.search-bar input {
  border-radius: 20px 0 0 20px;
  border: none;
  padding: 6px 12px;
  font-size: 14px;
  height: 36px;
  background-color: #fff;
  color: #000;
  box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
}

.search-bar button {
  border-radius: 0 20px 20px 0;
  background: #00c896;
  border: none;
  padding: 6px 14px;
  height: 36px;
  font-size: 14px;
  transition: background 0.3s ease;
}

.search-bar button:hover {
  background: #009a74;
}

/* MOBILE: make search smaller & centered */
@media (max-width: 768px) {
  .search-bar {
    width: 40%;
    max-width: 260px;
    margin: 5px auto;
  }

  .search-bar input {
    font-size: 13px;
    padding: 5px 10px;
    height: 32px;
  }

  .search-bar button {
    font-size: 13px;
    padding: 5px 12px;
    height: 32px;
  }
}


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
<!-- Navbar --><!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top py-2">
  <div class="container-fluid d-flex align-items-center justify-content-between px-3">

    <!-- Logo -->
    <a class="navbar-brand fw-bold me-3" href="home.php">
      <img src="logo1.png" alt="Parachichi Media" style="height: 45px;">
    </a>

    <!-- Search bar - always visible -->
    <form class="d-flex mx-2 search-bar" method="POST" action="search.php">

      <input class="form-control me-2" type="search" name="search" placeholder="Search music...">
      <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
    </form>

    <!-- Toggler for menu (right side) -->
    <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu links -->
    <div class="collapse navbar-collapse justify-content-end mt-2 mt-lg-0" id="navbarNav">
      <ul class="navbar-nav">
  <li class="nav-item"><a class="nav-link" href="home.php">Nyumbani</a></li>
  <li class="nav-item"><a class="nav-link" href="art.php">Wasanii</a></li>
  <li class="nav-item"><a class="nav-link" href="all.php">Nyimbo</a></li>
  <li class="nav-item"><a class="nav-link" href="About.php">Wasiliana</a></li>
  <li class="nav-item">
    <a class="nav-link btn btn-sm btn-success text-white px-3 ms-2" href="artist_login.php">
      Ingia
    </a>
  </li>
</ul>

    </div>

  </div>
</nav>



<!-- Hero -->
<section class="hero">
  <div class="overlay">
    <h1>Parachichi Media</h1>
    <p>Feel the Beat, Live the Rhythm 🎶</p>
  </div>
</section>

<!-- Latest Music -->
<div class="container my-5">
  <h2 class="section-title">🎵 Latest Music</h2>
  <div class="row g-4">
    <?php
      $tb_sel="SELECT * FROM music ORDER BY id DESC LIMIT 12";
      $qr_sel=mysqli_query($conn,$tb_sel);
      if (mysqli_num_rows($qr_sel)>0) {
        while($postor=mysqli_fetch_assoc($qr_sel)){ ?>
          <div class="col-md-3 col-sm-6">
            <div class="music-card">
              <a href="ngoma.php?id=<?php echo $postor['id']; ?>">
                <img src="images/<?php echo $postor['img'];?>" alt="<?php echo $postor['ngoma']; ?>">
                <h5><b>AUDIO | <?php echo $postor['name']." – ".$postor['ngoma']; ?> | mp3</b></h5>
              </a>
            </div>
          </div>
        <?php }
      }
    ?>
  </div>
</div>

<!-- Most Downloads -->
<div class="container my-5">
  <h2 class="section-title text-center mb-4">⬇️ Most Downloads</h2>
  <div class="downloads-list">
    <?php
      $rank = 1;
      $sql="SELECT * FROM music ORDER BY downloads DESC LIMIT 8";
      $resu=$conn->query($sql);
      while ($row=$resu->fetch_assoc()) { ?>
        <div class="download-item">
          <div class="rank"><?php echo $rank++; ?></div>
          <img src="images/<?php echo $row['img'];?>" alt="<?php echo $row['ngoma']; ?>">
          <div class="info">
            <h4><?php echo $row['name']; ?> <span>- <?php echo $row['ngoma']; ?></span></h4>
            <p>Downloads: <strong><?php echo $row['downloads']; ?></strong></p>
            <a href="ngoma.php?id=<?php echo $row['id']; ?>" class="btn-download">⬇️ Download</a>
          </div>
        </div>
    <?php } ?>
  </div>
</div>

<!-- Latest Videos -->
<div class="container my-5">
  <h2 class="section-title">🎬 Latest Videos</h2>
  <div class="row g-4">
    <?php
      $sql = "SELECT * FROM videos ORDER BY id DESC LIMIT 12";
      $res = $conn->query($sql);
      if ($res->num_rows > 0) {
        while ($vid = $res->fetch_assoc()) { ?>
          <div class="col-md-3 col-sm-6">
            <div class="music-card">
              <a href="video.php?id=<?php echo $vid['id']; ?>">
                <img src="images/<?php echo $vid['img']; ?>" alt="<?php echo $vid['ngoma']; ?>">
                <h5><b>VIDEO | <?php echo $vid['name']." – ".$vid['ngoma']; ?></b></h5>
              </a>
            </div>
          </div>
        <?php }
      }
    ?>
  </div>
</div>



<!-- Trending Artists -->
<section class="container my-5">
  <h2 class="section-title">🔥 Trending Artists</h2>
  <div class="text-center">
    <?php
      $tb="SELECT * FROM artist ORDER BY rand() LIMIT 15";
      $qr=mysqli_query($conn,$tb);
      if (mysqli_num_rows($qr)>0) {
        while($artist=mysqli_fetch_assoc($qr)){
          echo "<a href='artist.php?id=".$artist['id']."' class='trending-artist'>".$artist['name']."</a>";
        }
      }
    ?>
  </div>
</section>

<!-- Footer -->
<footer class="footer-large">
  <img src="logo1.png" style="width:120px;height:120px;" alt="Logo">
  <h3>Parachichi Media</h3>
  <p><strong>Kutengenezwa na Majurasamwe Deja Vu</strong></p>
  <p>Karibu Parachichi Media - jukwaa lako bora la kusikiliza na kutazama burudani halisi ya muziki.</p>
  <p>Muziki si tu kusikiliza, ni kuhisi!</p>
</footer>

<footer class="copyright-footer">
  &copy; 2025 Parachichi Media. Haki zote zimehifadhiwa.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>