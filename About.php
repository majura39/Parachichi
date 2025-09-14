 <?php
// About Us page (about.php)
?>
<!DOCTYPE html>
<html lang="sw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuhusu Sisi - Parachichi Media</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <title>Parachichi Media</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #0f0f0f;
      color: #fff;
    }

    /* ====== Navbar ====== */
    .navbar {
      background: #1a1a1a;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.6);
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

    /* ===== Hero Section ===== */
    .hero {
      text-align: center;
      padding: 70px 20px;
      background: linear-gradient(135deg, #00c896, #007a5e);
    }
    .hero h2 {
      font-size: 40px;
      margin: 0;
      color: #fff;
    }
    .hero p {
      font-size: 18px;
      max-width: 700px;
      margin: 15px auto 0;
      line-height: 1.6;
    }

    /* ===== About Section ===== */
    .about {
      padding: 60px 20px;
      max-width: 1100px;
      margin: auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: center;
    }
    .about img {
      width: 100%;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.6);
    }
    .about-content h3 {
      font-size: 28px;
      color: #00c896;
      margin-bottom: 15px;
    }
    .about-content p {
      line-height: 1.8;
      font-size: 16px;
    }

    /* ===== Features ===== */
    .features {
      background: #1a1a1a;
      padding: 60px 20px;
      text-align: center;
    }
    .features h2 {
      color: #00c896;
      font-size: 32px;
      margin-bottom: 40px;
    }
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
    }
    .feature-box {
      background: #2a2a2a;
      padding: 25px;
      border-radius: 12px;
      transition: transform 0.3s, background 0.3s;
    }
    .feature-box:hover {
      transform: translateY(-8px);
      background: #333;
    }
    .feature-box i {
      font-size: 40px;
      color: #00c896;
      margin-bottom: 15px;
    }
    .feature-box h4 {
      font-size: 20px;
      margin-bottom: 10px;
      color: #fff;
    }
    .feature-box p {
      font-size: 14px;
      color: #ccc;
    }

    /* ===== Team Section ===== */
    .team {
      padding: 60px 20px;
      text-align: center;
      max-width: 1100px;
      margin: auto;
    }
    .team h2 {
      color: #00c896;
      font-size: 32px;
      margin-bottom: 40px;
    }
    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 25px;
    }
    .team-member {
      background: #1f1f1f;
      padding: 20px;
      border-radius: 12px;
      transition: transform 0.3s;
    }
    .team-member:hover {
      transform: translateY(-5px);
    }
    .team-member img {
      width: 100%;
      border-radius: 50%;
      margin-bottom: 15px;
    }
    .team-member h4 {
      margin: 10px 0 5px;
      font-size: 18px;
      color: #fff;
    }
    .team-member p {
      font-size: 14px;
      color: #ccc;
    }

    /* ===== Footer ===== */
    footer {
      background: #1a1a1a;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
      font-size: 14px;
      color: #ccc;
    }
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
    /* ===== Responsive ===== */
    @media (max-width: 768px) {
      .about {
        grid-template-columns: 1fr;
        text-align: center;
      }
      .about img {
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>

<!-- ===== Navbar ===== -->

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
    <a class="navbar-brand fw-bold" href="home.php">
      <img src="logo1.png" alt="Parachichi Media">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="home.php">Nyumbani</a></li>
        <li class="nav-item"><a class="nav-link" href="art.php">Wasanii</a></li>
        <li class="nav-item"><a class="nav-link" href="all.php">Nyimbo</a></li>
        <li class="nav-item"><a class="nav-link" href="About.php">Wasiliana</a></li>
      </ul>
      <!-- Search -->
      <form class="d-flex search-bar" method="POST" action="search.php">
        <input type="search" name="search" placeholder="Search music...">
        <button type="submit"><i class="bi bi-search"></i></button>
      </form>
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



<!-- ===== About Section ===== -->
<section class="about">
  <img src="logo1.png" alt="Parachichi Media">
  <div class="about-content">
    <h3>Safari Yetu</h3>
    <p>Parachichi Media ilianzishwa kwa malengo ya kuinua muziki wa ndani na kutoa nafasi kwa kila msanii kujulikana duniani. Tunachanganya teknolojia na ubunifu ili kutoa huduma bora za burudani.</p>
  </div>
</section>

<!-- ===== Features ===== -->
<section class="features">
  <h2>Kwa Nini Utuchague</h2>
  <div class="features-grid">
    <div class="feature-box">
      <i class="fa-solid fa-music"></i>
      <h4>Nyimbo Mpya Kila Siku</h4>
      <p>Tunakuwekea nyimbo mpya na kali kila siku moja kwa moja.</p>
    </div>
    <div class="feature-box">
      <i class="fa-solid fa-users"></i>
      <h4>Kukuza Wasanii</h4>
      <p>Jukwaa letu linasaidia wasanii chipukizi kujulikana zaidi.</p>
    </div>
    <div class="feature-box">
      <i class="fa-solid fa-headphones"></i>
      <h4>Bila Mipaka</h4>
      <p>Sikiliza muziki popote ulipo bila vikwazo.</p>
    </div>
    <div class="feature-box">
      <i class="fa-solid fa-star"></i>
      <h4>Ubora wa Juu</h4>
      <p>Tunajali ubora wa sauti na muonekano bora wa tovuti yetu.</p>
    </div>
  </div>
</section>

<!-- ===== Team Section ===== -->
<section class="team">
  <h2>Timu Yetu</h2>
  <div class="team-grid">
    <div class="team-member">
      <img src="d.jpg" alt="Founder">
      <h4>Abdalah</h4>
      <p>Founder & CEO</p>
    </div>
    
    <div class="team-member">
      <img src="mj.jpg" alt="Developer">
      <h4>Majurasamwel</h4>
      <p>Lead Developer</p>
    </div>
    
  </div>
</section>

<!-- ===== Footer ===== -->
<footer>
  <p>&copy; <?php echo date("Y"); ?> Parachichi Media - All Rights Reserved.</p>
</footer>

</body>
</html>