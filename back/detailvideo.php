<?php
include 'backend/koneksi.php';
$id = $_GET['id'];
$dvideo = mysqli_query($db, "SELECT * FROM video v JOIN kategori k ON v.kategori_id = k.id_kategori JOIN penulis p ON v.penulis_id = p.id_penulis where id='$id';");
$video = mysqli_fetch_array($dvideo);
$tgl = $video['created_at'];
$day = date('D', strtotime($tgl));
$dayList = array(
  'Sun' => 'Minggu',
  'Mon' => 'Senin',
  'Tue' => 'Selasa',
  'Wed' => 'Rabu',
  'Thu' => 'Kamis',
  'Fri' => 'Jumat',
  'Sat' => 'Sabtu'
);
$tanggal =  $dayList[$day] . ", " . $tgl;
?>


<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="htmlcss bootstrap menu, fixed, after scrolling page, navbar, menu CSS examples" />
  <meta name="description" content="Bootstrap 5 fixed navbar on scroll page examples, Bootstrap 5" />

  <title>Kota Padang</title>

  <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="owlcarausel/css/owl.carousel.min.css" rel="stylesheet">
  <link href="owlcarausel/css/owl.theme.default.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="css/style.css" rel="stylesheet">
  <script src="iconify/iconify.min.js"></script>

</head>

<body>

  <div class="pt-3">
    <div class="container">
      <nav class="navbar navbar-light">
        <img class="navbar-brand" src="image/Logo.svg" href="#"></img>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <button type="button" class="btn btn-danger"><span class="iconify" data-icon="fluent:call-16-filled"></span> Pengaduan <i class="bi bi-telephone"></i></button>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Informasi Covid 19</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- ============= COMPONENT ============== -->
  <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav" aria-controls="mainnav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainnav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link text-white" href="index.php"> Beranda </a></li>
          <li class="nav-item"><a class="nav-link text-white" href="tentangkami.php"> Tentang Kami </a></li>
          <li class="nav-item"><a class="nav-link text-white" href="pemerintahan.php"> Pemerintah </a></li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" id="navMedia" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Media
            </a>
            <div class="dropdown-menu" aria-labelledby="navMedia">
              <a class="dropdown-item" href="media.php">Berita</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="video.php">Video</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="navRegulasi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Regulasi
            </a>
            <div class="dropdown-menu" aria-labelledby="navRegulasi">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="https://ppid.padang.go.id/">PPID</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="https://elhkpn.kpk.go.id/portal/user/pengumuman_lhkpn/Ylc5WFR5OTRRWFp3TWtWRlMyODNXUzlRZW1kS2MwaEVhWGxPUjNOR1RtVmFSR3h3WVRCWk9FSnJOemhKZDFsWVMzVkZhemxtV1c1cFJtbzJlQ3RrUnc9PQ==">LHKPN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="polling.php">Polling</a>
          </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn my-2 my-sm-0" type="submit"><span class="iconify" data-icon="akar-icons:search" style="color: white; font-size: 24px;"></span></button>
        </div>
      </div> <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->
  </nav>
  <!-- ============= COMPONENT END// ============== -->
  <!-- <?php include './layout/header.php'; ?> -->

  <div style="background-color: #f2f2f2;">
    <div class="container py-4">

      <div>
        <a href="index.php" class="text-muted">Beranda</a>
        <label class="ml-2 mr-2">/</label>
        <a href="video.php" class="text-muted">Media Video</a>
        <label class="ml-2 mr-2">/</label>
        <label> <b>Detail Video</b></label>
      </div>

      <!-- <header class="py-4"> -->
      <!-- <h2>Demo page </h2> -->
      <!-- </header>  -->
      <!-- section-header.// -->

      <section class="py-4 col-md-10 mx-auto">

        <div class="card">
          <div class="row">
            <div class="mx-auto pt-4">
              <div class="alert alert-secondary" role="alert">
                <span class="iconify" data-icon="octicon:paperclip-24" style="color: black; font-size: 24px;"></span> <?= $video['nama_kategori']; ?>
              </div>
            </div>
          </div>
          <div class="container">
            <h5 class="card-title text-center" style="padding-top:32px;"> <b><?= $video['judul']; ?></b> </h5>
          </div>
          <div class="container">
            <div class="card-body">

              <hr>
              <table class="col-12 text-center">
                <tr>
                  <td class="col-4">Kategori</td>
                  <td class="col-4">Tanggal</td>
                  <td class="col-4">Diposting Oleh</td>
                </tr>
                <tr>
                  <td class="col-4"> <b><?= $video['nama_kategori']; ?></b></td>
                  <td class="col-4"> <b><?= $tanggal; ?></b></td>
                  <td class="col-4"> <b><?= $video['nama_penulis']; ?></b></td>
                </tr>
              </table>

              <div class="mx-auto my-4">

                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/<?= $video['videoId']; ?>" title="PROFIL KOTA PADANG (Bahasa Indonesia)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

              </div>

              <hr class="my-5">
              <div class="container">
                <div class="d-flex flex-row bd-highlight mb-3">
                  <div class="p-2 bd-highlight">Share</div>
                  <div class="p-2 bd-highlight"><a href="#"><img src="image/Instagram.png" alt=""></a></div>
                  <div class="p-2 bd-highlight"><a href="#"><img src="image/Twitter.png"></a></div>
                  <div class="p-2 bd-highlight"><a href="#"><img src="image/Facebook.png" alt=""></a></div>
                  <div class="p-2 bd-highlight"><a href="#"><img src="image/logos_whatsapp-icon.png" alt=""></a></div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div><!-- container //  -->
  </div>

  <!-- <?php include './layout/footer.php'; ?> -->
  <div class="footer-sec">
    <div class="container text-white">
      <div class="row py-5">
        <div class="col-md-4 mb-5">
          <img src="image/Logo.png" alt="logo padang"> <br>
          <label>Padang Kota Tercinta</label> <br>
          <a href="#"><span class="iconify" data-icon="akar-icons:facebook-fill" style="color: #969bab; font-size: 24px;"></span></a>
          <a href="#"><span class="iconify" data-icon="ant-design:twitter-circle-filled" style="color: #969bab; font-size: 30px;"></span></a>
          <a href="#"><span class="iconify" data-icon="entypo-social:instagram-with-circle" style="color: #969bab; font-size: 24px;"></span></a>
        </div>
        <div class="col-md-4 mb-5">
          <h5>Quick Links</h5>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link text-white" href="#">Tentang Kami </a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Media </a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Regulasi </a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">PPID</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">LHKPN</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-5">
          <h5>Jangkau Kami</h5>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link text-white" href="#"><span class="iconify" data-icon="eva:email-fill" style="color: #b72b2b; font-size: 24px;"></span> diskominfo@padang.go.id </a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#"><span class="iconify" data-icon="clarity:mobile-phone-solid" style="color: #b72b2b; font-size: 24px;"></span> 0751 4640800 </a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#"><span class="iconify" data-icon="fa6-solid:location-dot" style="color: #b72b2b; font-size: 24px;"></span> Jl. Bagindo Azis Chan No. 1 Aie Pacah - Kota Padang Sumatera Barat </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery/jquery.slim.min.js"></script>
  <script src="js/popper/popper.min.js"></script>
  <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="owlcarausel/js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/main-slid-walkot.js"></script>
  <!-- <script src="js/script.js"></script> -->
  <!-- <script src="js/searchbar.js"></script> -->

  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {

      window.addEventListener('scroll', function() {

        if (window.scrollY > 50) {
          document.getElementById('navbar_top').classList.add('fixed-top');
          // add padding top to show content behind navbar
          navbar_height = document.querySelector('.navbar').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
          document.getElementById('navbar_top').classList.remove('fixed-top');
          // remove padding top from body
          document.body.style.paddingTop = '0';
        }
      });
    });
    // DOMContentLoaded  end
  </script>
</body>

</html>