 <?php
include('database.php');
?>
<!DOCTYPE html>
<html lang="sw">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Parachichi Media - Msanii</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<style>
body { font-family:'Montserrat', sans-serif; background:#0d0d0d; color:#fff; }
.top-social-bar { background:#1a1a1a; padding:8px 0; text-align:center; border-bottom:1px solid #333; }
.top-social-bar a { color:#fff; margin:0 10px; font-size:1.4rem; transition:0.3s; }
.top-social-bar a:hover { color:#00ff00; }
.navbar { background:#111; }
.navbar-brand img { height:60px; }
.nav-link { color:#fff !important; margin:0 6px; }
.nav-link:hover { color:#00ff00 !important; }
.search-bar input { border-radius:30px 0 0 30px; border:none; padding:8px 15px; }
.search-bar button { border-radius:0 30px 30px 0; background:#00c896; border:none; padding:8px 15px; color:#fff; }
.hero { background:url('https://images.unsplash.com/photo-1511379938547-c1f69419868d?auto=format&fit=crop&w=1950&q=80') no-repeat center center/cover; height:70vh; display:flex; align-items:center; justify-content:center; position:relative; color:white; }
.hero .overlay { background:rgba(0,0,0,0.65); padding:50px; border-radius:15px; text-align:center; backdrop-filter:blur(3px); }
.hero h1 { font-size:3rem; font-weight:bold; color:#00ff00; }
.hero p { font-size:1.2rem; }
.section-title { margin-bottom:30px; text-align:center; font-weight:bold; color:#fff; }

/* Artist & Songs */
.maruan { margin:40px auto; display:flex; flex-wrap:wrap; gap:20px; }
.artist-card { background:#121212; padding:25px; border-radius:15px; border:1px solid #222; box-shadow:0 0 20px rgba(0,255,0,0.1); text-align:center; transition:0.3s; }
.artist-card:hover { box-shadow:0 0 25px rgba(0,255,0,0.3); }
.artist-card img { width:180px; height:180px; border-radius:50%; object-fit:cover; border:3px solid #00c896; }
.artist-card h2 { font-weight:bold; color:#00ff88; }
.artist-card .genre { color:#ccc; font-style:italic; }
.artist-card .about { margin-top:10px; font-size:0.95rem; color:#aaa; }
.songs-card { background:#1a1a1a; padding:25px; border-radius:15px; border:1px solid #333; min-height:250px; }
.songs-card h3 { font-weight:bold; color:#00ff88; margin-bottom:20px; }
.song-list { list-style:none; padding:0; margin:0; }
.song-list li { display:flex; align-items:center; gap:15px; padding:12px; background:#0d0d0d; border-radius:10px; margin-bottom:12px; transition:0.3s; }
.song-list li:hover { background:#00c89622; }
.song-list .num { font-weight:bold; color:#00ff88; width:25px; text-align:center; }
.song-list img { width:60px; height:60px; border-radius:8px; object-fit:cover; }
.song-list .details { flex:1; color:#ddd; font-size:0.95rem; }
.song-list a { white-space:nowrap; }

/* Trending */
.trending-box { text-align:center; margin-top:50px; }
.trending-artist { display:inline-block; background:#222; padding:10px 20px; border-radius:20px; margin:5px; color:#fff; text-decoration:none; transition:0.3s; border:1px solid #00ff00; }
.trending-artist:hover { background:#00ff00; color:#0d0d0d; }

/* Footer */
.footer-large { padding:50px 20px; background:#111; color:#ccc; text-align:center; }
.footer-large h3 { color:#fff; }
.footer-large img { margin-bottom:20px; }
.copyright-footer { background:#000; color:#777; text-align:center; padding:15px; font-size:14px; }
.download-item:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 18px rgba(0,255,0,0.3);
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



<!-- Artist & Songs -->


    <!-- Songs -->
    

  <!-- Videos Section -->
 

  <!-- Videos Section --><section class="container mt-5">
  <h2 class="text-center text-warning mb-4 fw-bold">
    <i class="bi bi-music-note-beamed me-2"></i> Pakua ngoma kwa urahisi ndani ya Parachichi media
  </h2>

  <div class="list-group">

    <?php
    $sql = "SELECT * FROM music ORDER BY rand()";
    $resu = $conn->query($sql);
    $i = 1; // kuanzisha namba
    while ($row = $resu->fetch_assoc()) {
    ?>
      <div class="list-group-item list-group-item-dark d-flex align-items-center justify-content-between flex-wrap mb-2 rounded shadow-sm" style="background-color: #1a1a1a; border: 1px solid #333;">
        
        <!-- Namba -->
        <div class="me-3 fw-bold text-success" style="width: 30px;">
          <?php echo $i++; ?>.
        </div>

        <!-- Picha ya Wimbo -->
        <img src="images/<?php echo $row['img']; ?>" alt="Wimbo" class="me-3 rounded" style="width: 60px; height: 60px; object-fit: cover;">

        <!-- Maelezo ya Msanii na Wimbo -->
        <div class="me-auto">
          <h6 class="mb-1 text-light fw-semibold">
            <?php echo $row['name']; ?>
          </h6>
          <p class="mb-0 text-secondary"><?php echo $row['ngoma']; ?></p>
        </div>

        <!-- Kitufe -->
        <a href="ngoma.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success btn-sm">
          <i class="bi bi-play-circle me-1"></i> Sikiliza Sasa
        </a>

      </div>
    <?php } ?>

  </div>
</section>


<!-- Trending Artists -->





  <!-- Footer -->
  <footer class="footer-large">
    <div class="container">
      <h3><img src="logo1.png" style="width:150px;height:150px">Parachichi Media</h3>
      <p><strong>Kutengenezwa na Majurasamwe Deja Vu</strong></p>
      <p>Karibu Parachichi Media - jukwaa laako bora la kusikiliza na kutazama burudani halisi ya muziki. Tunaamini kuwa muziki ni nguvu ya kuunganisha, kuponya na kuhamasisha. Kupitia tovuti hii, tunakuletea nyimbo mpya, video kali na vipaji vya wasanii kutoka kila kona ya dunia.</p>
      <p>Jiunge nasi leo na uishi kwa sauti ya moyo wako. Muziki si tu kusikiliza, ni kuhisi!</p>
    </div>
  </footer>
 <!-- Copyright Footer -->
  <footer class="copyright-footer">
    &copy; 2025 Parachichi Media. Haki zote zimehifadhiwa.
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>