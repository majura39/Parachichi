 <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
session_start();
include 'database.php';

if (!isset($_GET['id'])) { echo "Video haijulikani."; exit; }
$id = intval($_GET['id']);

// ongeza view count
//$conn->query("UPDATE videos SET views = views + 1 WHERE id = $id");

// pata video
$sql = "SELECT * FROM videos WHERE id = $id";
$res = $conn->query($sql);
if ($res->num_rows !== 1) { echo "Haipatikani."; exit; }
$vid = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="sw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars("{$vid['name']} – {$vid['ngoma']}"); ?> | Parachichi Media</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Montserrat', sans-serif; background: #0d0d0d; color: #fff; margin:0; }
    /* copy style zote za ngoma.php */
    .top-social-bar { background:#1a1a1a; padding:8px 0; text-align:center; border-bottom:1px solid #333;}
    .top-social-bar a { color:#fff; margin:0 10px; font-size:1.4rem; transition:0.3s; }
    .top-social-bar a:hover { color:#00ff00; transform:scale(1.2); }
    .navbar { background:#111; }
    .navbar-brand img { height:60px; }
    .nav-link { color:#fff !important; margin:0 6px; position:relative; }
    .nav-link::after { content:""; position:absolute; left:0; bottom:-3px; width:0%; height:2px; background:#00ff00; transition:0.3s; }
    .nav-link:hover::after { width:100%; }
    .maruan { display:flex; flex-wrap:wrap; gap:20px; justify-content:space-between; margin:30px auto; width:95%; }
    .mz, .r { flex:1; padding:20px; border-radius:12px; background:#1a1a1a; border:1px solid #333; min-width:280px; transition:transform 0.3s, box-shadow 0.3s; }
    .mz:hover, .r:hover { transform:translateY(-5px); box-shadow:0 6px 18px rgba(0,255,0,0.2); }
    .mz h2, .r h2 { font-size:1.8rem; color:#00ff00; }
    .list-group-item { background:#121212; border:1px solid #333; border-radius:8px; transition:0.3s; margin-bottom:10px; }
    .list-group-item:hover { background:#0d0d0d; box-shadow:0 6px 12px rgba(0,255,0,0.2); }
    .list-group-item div strong { color:#00ff00; }
    video { width:100%; border-radius:10px; margin-top:10px; }
    .artist-badge { display:inline-block; background:#222; color:#fff; padding:8px 18px; border-radius:20px; border:1px solid #00ff00; text-decoration:none; margin:5px; transition:0.3s; }
    .artist-badge:hover { background:#00ff00; color:#0d0d0d; }
    .footer-large { padding:50px 20px; background:#111; text-align:center; color:#ccc; }
    .footer-large h3 { color:#fff; }
    .copyright-footer { background:#000; color:#777; text-align:center; padding:15px; font-size:14px; }
    @media (max-width:992px) { .maruan { flex-direction:column; } .mz, .r { width:100%; } }
  </style>
</head>
<body>

<!-- Top Social Bar -->
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
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="home.php">Nyumbani</a></li>
        <li class="nav-item"><a class="nav-link" href="art.php">Wasanii</a></li>
        <li class="nav-item"><a class="nav-link" href="all.php">Nyimbo</a></li>
        <li class="nav-item"><a class="nav-link" href="About.php">Wasiliana</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="maruan">
  <!-- Video Info -->
  <div class="mz">
    <h2 class="fw-bold text-success mb-3">
      <i class="bi bi-camera-reels-fill me-2"></i>
      <?php echo htmlspecialchars($vid['name']." - ".$vid['ngoma']); ?>
    </h2>

    <!-- WhatsApp Group -->
    <a href="https://whatsapp.com/channel/0029VbBDZLe0VycG5mhXt234" class="btn btn-success btn-sm mb-4">
      <i class="bi bi-whatsapp me-1"></i> Jiunge na Group la WhatsApp kwa Video Mpya
    </a>

    <!-- Cover Image -->
    <div class="text-center mb-4">
      <img src="images/<?php echo $vid['img']; ?>" class="img-fluid rounded" alt="Video Cover" style="max-width: 380px; height: auto;">
    </div>

    <!-- Download Info -->
    <p class="fs-5 mb-2">
      <i class="bi bi-cloud-arrow-down-fill me-2 text-warning"></i>
      <strong>Pakua VIDEO:</strong> <?php echo htmlspecialchars($vid['name'])." – ".htmlspecialchars($vid['ngoma']); ?>
    </p>

    <!-- Description -->
    <div class="mt-4 p-3 bg-dark rounded text-light">
      <h4 class="text-success fw-bold">🎬 Video Available Now!</h4>
      <p><?php echo nl2br(htmlspecialchars($vid['maelezo'])); ?></p>
      <h5 class="mt-4 text-info"><i class="bi bi-play-circle-fill me-2"></i> Watch Video Below</h5>
    </div>

    <!-- Video Player -->
    <video controls poster="images/<?php echo $vid['img']; ?>" class="w-100 mt-3">
      <source src="videos/<?php echo $vid['video']; ?>" type="video/mp4">
      Browser yako haiwezi kuonyesha video hii.
    </video>

    <!-- Download Button -->
    <div class="text-center mt-3">
      <a href="videos/<?php echo $vid['video']; ?>" download class="btn btn-success btn-lg mt-3">
        <i class="bi bi-download me-2"></i> Pakua Video
      </a>
    </div>
  </div>

  <!-- Other Videos by Same Artist -->
  <div class="r">
    <h2 class="text-warning mb-4">Other <?php echo htmlspecialchars($vid['name']); ?> Videos</h2>
    <?php
      $name = $vid['name'];
      $tb_sel = "SELECT * FROM videos WHERE name='$name' AND id!='$id' ORDER BY RAND() LIMIT 10";
      $qr_sel = mysqli_query($conn, $tb_sel);
      if(mysqli_num_rows($qr_sel)>0){ ?>
        <div class="list-group">
        <?php while($v=mysqli_fetch_assoc($qr_sel)){ ?>
          <a href="video.php?id=<?php echo $v['id']; ?>" class="list-group-item list-group-item-action d-flex align-items-center gap-3">
            <img src="images/<?php echo $v['img']; ?>" alt="Video Thumb" style="width:60px;height:50px;object-fit:cover;border-radius:6px;">
            <div>
              <strong><?php echo htmlspecialchars($v['name']); ?></strong><br>
              <span><?php echo htmlspecialchars($v['ngoma']); ?></span>
            </div>
            <i class="bi bi-chevron-right ms-auto text-success"></i>
          </a>
        <?php } ?>
        </div>
    <?php } else { echo "<p class='text-muted'>Hakuna video nyingine kwa msanii huyu kwa sasa.</p>"; } ?>
  </div>
</div>

<!-- Trending Artists -->
<section class="container my-5">
  <h2 class="text-center text-warning mb-4 fw-bold">🔥 Trending Artists</h2>
  <div class="d-flex flex-wrap justify-content-center gap-3 p-3 rounded bg-dark">
    <?php
      $tb = "SELECT * FROM artist ORDER BY RAND() LIMIT 30";
      $qr = mysqli_query($conn, $tb);
      if(mysqli_num_rows($qr)>0){
        while($artist=mysqli_fetch_assoc($qr)){
          echo "<a href='artist.php?id=".$artist['id']."' class='artist-badge'>".htmlspecialchars($artist['name'])."</a>";
        }
      }
    ?>
  </div>
</section>

<!-- Footer -->
<footer class="footer-large">
  <h3><img src="logo1.png" style="width:150px;height:150px" alt="Logo"> Parachichi Media</h3>
  <p><strong>Kutengenezwa na Majurasamwe Deja Vu</strong></p>
  <p>Karibu Parachichi Media - jukwaa lako bora la burudani ya video na muziki. Muziki si tu kusikiliza, ni kuhisi!</p>
</footer>
<footer class="copyright-footer">
  &copy; 2025 Parachichi Media. Haki zote zimehifadhiwa.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>