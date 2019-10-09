<?php 
  
  include 'header.php';
  include 'proses_cek.php';
  if ($total >= 8) {
    $pesan = "Kamu Terdiagnosa Dini Terkena HIV";
  } else {
    $pesan = "Kamu terdiagnosa tidak terkena HIV, mungkin kamu lelah. Jaga Selalu Kesehatan ya";
  }

  $tanggal = new DateTime($umur);
  $today = new DateTime('today');
  $y = $today->diff($tanggal)->y;
?>
  <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Hasil Cek</h1>
        <h5><?= $nama ?></h5>
        <h5><?= $y ?> Tahun</h5>
        <?php if($total >= 8): ?>
        <h4>Kamu Terdiagnosa Dini Terkinfeksi HIV</h4>
        <p>Jangan Khawatir dan cemas ini hanya diagnosa awal .
        Silahkan masuk ke aplikasi kamiuntuk mendapatkan informasi dan alur pengobatan lebih lanjut.</p>
        <a href="daftar.php">
          <button class="btn btn-primary">Daftar</button>
        </a>
        <br><br>
        <?php elseif($total >= 6): ?>
        <h4>Ada indikias kamu ada gejala HIV, numun untuk memastikan silahkan periksa ke Layanan terdekat.</h4>
        <?php else: ?>
        <h4>Kamu Tidak Terdiagnosa Terinfeksi HIV, mungkin kamu lelah dan butuh istrahat. Jaga Selalu Kesehatan dan untuk informasi layanan anda dapat mengunjungi aplikasi kami </h4>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->
  <?php include 'footer.php'; ?>