<?php include 'backend/koneksi.php'; ?>
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

  <div class="ftco-section">
    <div class="featured-carousel owl-carousel">

      <?php
      $dberita = mysqli_query($db, "SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori JOIN penulis p ON b.id_penulis = p.id_penulis ORDER BY created_at DESC limit 3;");
      while ($row = mysqli_fetch_array($dberita)) {
        $tgl = $row['created_at'];
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
        <div class="item">
          <div class="work-wrap d-md-flex">
            <div class="img order-md-last" style="background-image: url(backend/foto/<?= $row['gambar']; ?>);"></div>
            <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
              <div class="desc w-100">
                <h2 class="mb-2"><?= $row['judul_berita']; ?></h2>
                <p class="h5 mb-2"><a href="#" class="btn btn-outline-berita mb-2"><?= $row['nama_kategori']; ?></a> <?= $tanggal; ?></p>
                <div class="row justify-content-end">
                  <div class="col-xl-8 line-clamp">
                    <?= $row['isi_berita']; ?>
                  </div>
                </div>
                <p>
                  <a href="detailberita.php?id=<?= $row['id_berita']; ?>" class="btn btn-polling mb-2 px-4">Lihat Detail</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>


    </div>
  </div>


  <section class="walkot-quot">
    <div class="">

      <div class="slider-92911">
        <div class="owl-carousel slide-one-item">

          <div class="d-md-flex testimony-29101 align-items-stretch">
            <div class="image" style="background-image: url('image/wk.png');"></div>
            <div class="text">
              <blockquote>
                <p>"Hendri Septa, B.Bus.(Acc), M.I.B, Lahir di Kota Padang, Sumatra Barat, 6 September 1976. Mnghabiskan masa kecilnya di
                  Kota Padang. Ia menamatkan pendidikan menengah di SMP Negeri 2 Padang dan SMA Negeri 2 Padang. Setelah tamat SMA, Hendri
                  melanjutkan pendidikan di Universitas Swinburne, Melbourne, setara Diploma III dengan gelar Advanced Diploma Business in
                  Accounting. Hendri melanjutkan pendidikan ke Universitas Monash di Melbourne selama tiga tahun, kemudian pindah ke
                  Universitas Central Queensland. Di sini, Hendri menamatkan pendidikan setara Strata 1 dengan gelar Bachelor of Business
                  (Accounting) atau disingkat BBus (Acc). Setelah itu, untuk mematangkan lagi ilmunya di bidang bisnis, Hendri kuliah Strata
                  2 di Universitas Deakin, hingga tamat dengan gelar Masters of International Business (MIB)."</p>

                <div class="author">Hendri Septa - Walikota Padang</div>
              </blockquote>
            </div>
          </div> <!-- .item -->

          <div class="d-md-flex testimony-29101 align-items-stretch">
            <div class="image" style="background-image: url('image/Wali_Kota_Padang_Hendri_Septa.png');"></div>
            <div class="text">
              <blockquote>
                <p>&ldquo;"Hendri Septa, B.Bus.(Acc), M.I.B, Lahir di Kota Padang, Sumatra Barat, 6 September 1976. Mnghabiskan masa kecilnya di
                  Kota Padang. Ia menamatkan pendidikan menengah di SMP Negeri 2 Padang dan SMA Negeri 2 Padang. Setelah tamat SMA, Hendri
                  melanjutkan pendidikan di Universitas Swinburne, Melbourne, setara Diploma III dengan gelar Advanced Diploma Business in
                  Accounting. Hendri melanjutkan pendidikan ke Universitas Monash di Melbourne selama tiga tahun, kemudian pindah ke
                  Universitas Central Queensland. Di sini, Hendri menamatkan pendidikan setara Strata 1 dengan gelar Bachelor of Business
                  (Accounting) atau disingkat BBus (Acc). Setelah itu, untuk mematangkan lagi ilmunya di bidang bisnis, Hendri kuliah Strata
                  2 di Universitas Deakin, hingga tamat dengan gelar Masters of International Business (MIB)."&rdquo;</p>

                <div class="author">&mdash; Julia Smith</div>
              </blockquote>
            </div>
          </div> <!-- .item -->

        </div>

        <div class="my-5 text-center">
          <ul class="thumbwalkot">
            <li class="active"><a href="#"><img src="image/wk.png" alt="Image" class="img-fluid"></a></li>
            <li><a href="#"><img src="image/Wali_Kota_Padang_Hendri_Septa.png" alt="Image" class="img-fluid"></a></li>
          </ul>
        </div>
      </div>


    </div>
  </section>

  <section class="etalase-sec">
    <div class="container">
      <h3>Etalase Kota Padang</h3>

      <div class="row mb-4 justify-content-start">
        <div class="col m-2" style="width: 190px; height: 240px;">
          <div class="card-kota">
            <img src="image/kota.jpg" class="card-img-top rounded-kota" alt="...">
            <a href="https://padang.go.id/pemerintahan" class="btn btn-kota btn-sm-kota carousel-caption-kota">Pemkot Padang</a>
          </div>
        </div>
        <div class="col m-2" style="width: 190px; height: 240px;">
          <div class="card-kota">
            <img src="./image/OPDETALASE.jpeg" class="image card-img-top rounded-kota" alt="...">
            <a href="https://jdih.padang.go.id/po-content/uploads/6_Tahun_2016.pdf" class="btn btn-kota btn-sm-kota carousel-caption-kota">OPD</a>
          </div>
        </div>
        <div class="col m-2" style="width: 190px; height: 240px;">
          <div class="card-kota">
            <img src="./image/img/Destinasi Wisata.jpeg" class="image card-img-top rounded-kota" alt="...">
            <a href="https://dispar.sumbarprov.go.id/" class="btn btn-kota btn-sm-kota carousel-caption-kota">Destinasi Wisata</a>
          </div>
        </div>
        <div class="col m-2" style="width: 190px; height: 240px;">
          <div class="card-kota">
            <img src="./image/EGOVERMENT.jpeg" class="image card-img-top rounded-kota" alt="...">
            <a href="https://padang.go.id/e-goverment-kota-padang" class="btn btn-kota btn-sm-kota carousel-caption-kota">E - GOVERMENT</a>
          </div>
        </div>
        <div class="col m-2" style="width: 190px; height: 240px;">
          <div class="card-kota">
            <img src="./image/img/Kuliner.jpeg" class="image card-img-top rounded-kota" alt="...">
            <a href="etalasemakanan.php" class="btn btn-kota btn-sm-kota carousel-caption-kota">Kuliner</a>
          </div>
        </div>
        <div class="col m-2" style="width: 190px; height: 240px;">
          <div class="card-kota">
            <img src="./image/sejarahkotapadang.png" class="image card-img-top rounded-kota" alt="...">
            <a href="etalasemakanan.php" class="btn btn-kota btn-sm-kota carousel-caption-kota">Seputar Padang</a>
          </div>
        </div>
        <div class="col m-2" style="width: 190px; height: 240px;">
          <div class="card-kota">
            <img src="./image/img/Event & Budaya.jpeg" class="image card-img-top rounded-kota" alt="...">
            <a href="etalasemakanan.php" class="btn btn-kota btn-sm-kota carousel-caption-kota">Event & Budaya</a>
          </div>
        </div>
        <div class="col m-2" style="width: 190px; height: 240px;">
          <div class="card-kota">
            <img src="./image/img/bus.jpeg" class="image card-img-top rounded-kota" alt="...">
            <a href="https://padang.go.id/category/transportasi" class="btn btn-kota btn-sm-kota carousel-caption-kota">Transportasi</a>
          </div>
        </div>
        <div class="col m-2" style="width: 190px; height: 240px;">
          <div class="card-kota">
            <img src="./image/img/Seputar Padang.jpeg" class="image card-img-top rounded-kota" alt="...">
            <a href="https://vr.padang.go.id/pano_padang/" class="btn btn-kota btn-sm-kota carousel-caption-kota">Pedang 360</a>
          </div>
        </div>
        <div class="col m-2" style="width: 190px; height: 240px;">
          <div class="card-kota">
            <img src="./image/img/unand.jpeg" class="image card-img-top rounded-kota" alt="...">
            <a href="etalasemakanan.php" class="btn btn-kota btn-sm-kota carousel-caption-kota">Sejarah</a>
          </div>
        </div>

      </div>
    </div>
  </section>


  <div class="container">
    <h2 class="text-danger">Berita & Video</h2>
    <div class="row">
      <?php
      $datavideo = mysqli_query($db, "SELECT * FROM video v JOIN kategori k ON v.kategori_id = k.id_kategori JOIN penulis p ON v.penulis_id = p.id_penulis ORDER BY created_at DESC LIMIT 1");
      while ($row2 = mysqli_fetch_array($datavideo)) {
        $tgl = $row2['created_at'];
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
        <div class="col-md-7">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.youtube.com/embed/<?= $row2['videoId']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="embed-responsive-item rounded"></iframe>
          </div>
          <div class="">
            <h5 class="card-title mt-3"><?= $row2['judul'];?></h5>
            <p class="text-muted"><?= $tanggal; ?></p>
            <a href="detailvideo.php?id=<?= $row2['id']; ?>">Tonton Video <span class="iconify" data-icon="bi:arrow-right" style="color: #007bff; font-size: 16px;"></span></a>
          </div>
        </div>
      <?php } ?>
      <div class="col-md-1 d-flex justify-content-center ">
        <div class="d-none d-md-block d-lg-block">
          <div class="vr"></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row">
          <?php
          $dberita = mysqli_query($db, "SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori JOIN penulis p ON b.id_penulis = p.id_penulis ORDER BY created_at DESC limit 2;");
          while ($row1 = mysqli_fetch_array($dberita)) {
            $tgl = $row1['created_at'];
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
          <div class="col-sm-6 col-md-12 mb-3">
            <a href="detailberita.php">
              <img src="backend/foto/<?= $row1['gambar']; ?>" class="img-fluid rounded" alt="...">
            </a>
            <h5 class="mt-2"><?= $row1['judul_berita']; ?></h5>
            <p class="text-justify line-clamp"><?= $row1['isi_berita']; ?></p>
            <p class="text-muted"><?= $tanggal; ?></p>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-pendapat">
          <div class="card-body-nopad-pendapat">
            <h1 class="card-title-pendapat">Berikan Pendapat Kamu <br> Untuk Peningkatan.</br> </h1>
            <a class="btn btn-lg btn-polling" href="polling.php">Berikan Pendapat!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>

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
    <script src="backend/ckeditor/ckeditor.js"></script>
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