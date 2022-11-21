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
    <main role="main" class="container py-4">
      <div>
        <a href="index.php" class="text-muted">Beranda</a>
        <label class="ml-2 mr-2">/</label>
        <label> <b>Etalase Kulinier</b></label>
      </div>

      <div class="row">
        <div class="col-md-8 blog-main">

          <div class="card p-3 mt-3">

            <div class="row">
              <?php
              include 'backend/koneksi.php';
              $batas = 4;
              $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
              $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
              
              $previous = $halaman - 1;
              $next = $halaman + 1;
              
              $data = mysqli_query($db, "SELECT * FROM kuliner");
              $jumlah_data = mysqli_num_rows($data);
              $total_halaman = ceil($jumlah_data / $batas);
              
              $databerita = mysqli_query($db, "SELECT * FROM kuliner LIMIT $halaman_awal, $batas");
              $nomor = $halaman_awal + 1;
              while ($row = mysqli_fetch_array($databerita)) {
              ?>
              <div class="col-md-6">
                <div class="card mb-4">
                  <div class="embed-responsive embed-responsive-16by9">
                    <img src="backend/foto/<?= $row['gambar_kuliner']; ?>" alt="" class="embed-responsive-item rounded" style="object-fit: cover;">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title mt-3"><?= $row['judul_kuliner']; ?></h5>
                    <div class="form-group">
                      <label class="my-1 mr-2 text-muted"><span class="iconify" data-icon="akar-icons:location" style="color: #6c757d; font-size: 16px;"></span> Alamat</label>
                      <p class="card-text text-muted"><?= $row['alamat']; ?></p>
                    </div>
                    <a href="detailkulinier.php?id=<?= $row['id_kuliner']; ?>">Lihat Detail <span class="iconify" data-icon="bi:arrow-right" style="color: #007bff; font-size: 16px;"></span></a>
                  </div>
                </div>
              </div>
              <?php }?>
            </div>


            <nav class="pagination-box" aria-label="Page navigation">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" <?= ($halaman > 1) ? "href='?halaman=$previous'" : ""; ?> aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>

                <?php
                function isActive($a, $b)
                {
                  return ($a == $b) ? 'active' : '';
                }
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                  <li class="page-item <?= isActive($halaman, $x); ?>">
                    <a class="page-link" href="?halaman=<?= $x ?>"><?= $x ?></a>
                  </li>
                <?php
                }
                ?>

                <li class="page-item">
                  <a class="page-link" <?= ($halaman < $total_halaman) ? "href='?halaman=$next'" : ""; ?> aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>

        </div><!-- /.blog-main -->


        <aside class="col-md-4 blog-sidebar">

          <div class="card p-4 mt-3">

            <span class="text-muted">Cari</span>

            <div class="form-group">
              <span class="iconify form-control-icon p-2" data-icon="akar-icons:search" style="color: #888; font-size: 16px;"></span>
              <input type="text" class="form-control" placeholder="Cari Berita...">
            </div>

            <div>
              <hr>
              <span class="text-muted">Kategori</span>
            </div>
            <ul class="list-group list-group-flush border-0">
              <li class="list-group-item border-0"><span class="iconify" data-icon="akar-icons:circle-fill" style="color: #fff212; font-size: 14px;"></span> Pemerintahan</li>
              <li class="list-group-item border-0"><span class="iconify" data-icon="akar-icons:circle-fill" style="color: #fff212; font-size: 14px;"></span> pendidikan</li>
              <li class="list-group-item border-0"><span class="iconify" data-icon="akar-icons:circle-fill" style="color: #fff212; font-size: 14px;"></span> Investasi</li>
              <li class="list-group-item border-0"><span class="iconify" data-icon="akar-icons:circle-fill" style="color: #fff212; font-size: 14px;"></span> Hiburan</li>
              <li class="list-group-item border-0"><span class="iconify" data-icon="akar-icons:circle-fill" style="color: #fff212; font-size: 14px;"></span> Kesehatan</li>
              <li class="list-group-item border-0"><span class="iconify" data-icon="akar-icons:circle-fill" style="color: #fff212; font-size: 14px;"></span> Destinasi atau Wisata</li>
              <li class="list-group-item border-0"><span class="iconify" data-icon="akar-icons:circle-fill" style="color: #fff212; font-size: 14px;"></span> Transpor</li>
            </ul>

          </div>

        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
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