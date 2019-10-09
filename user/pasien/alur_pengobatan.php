<?php include 'header.php' ?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<style>
* {
  box-sizing: border-box;
}

/* Set a background color */
body {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.containert {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.containert::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
/* Place the timelime to the left */
  .timeline::after {
    left: 31px;
  }

/* Full-width containers */
  .containert {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

/* Make sure that all arrows are pointing leftwards */
  .containert::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

/* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }

/* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}
</style>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Alur Pengobatan</h4>
                                <h5 class="card-subtitle">Panduan Untuk Melakukan Pengobatan</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="timeline">
            <div class="containert left">
                <div class="content">
                <h2>Pertama</h2>
                <p>Silahkan kamu datang ke Puskesmas untuk meminta rujukan ke RS tipe C atau B</p>
                <p>Tipe C :</p>
                <p>Rumah sakit DKT, RS. Dadi Djokrodipo</p>
                <p>Tipe B :</p>
                <p>Rumah sakit Imanuel</p>
                </div>
            </div>
            <div class="containert right">
                <div class="content">
                <h2>Kedua</h2>
                <p>Setelah mendapat rujukan dari Rumah Sakit tipe C atau B , kemudian anda ke Rumah Sakit Tipe A untuk mendapatkan ACC dari Rumah Sakit tipe A  </p>
                <p>Tipe A : RS. Umum Abdoel Mouluk</p>
                </div>
            </div>
            <div class="containert left">
                <div class="content">
                <h2>Ketiga</h2>
                <p>Setelah itu melakukan cek kelengkapan lainya yaitu :
3. SGOT (Serum Glutamic Oxaloacetic Transaminase )
Adalah cek untuk mengetahui kondisi hati(liver ) , Otot , ginjal dan otak
</p>
                </div>
            </div>
            <div class="containert right">
                <div class="content">
                <h2>Keempat</h2>
                <p>SGPT( Serum Glumanic Pyruvic Tranaminase)
Adalah tes untuk  mengecek  fungsi Hati secara detail 
</p>
                </div>
            </div>
            <div class="containert left">
                <div class="content">
                <h2>Kelima</h2>
                <p>Ureum kreatinin
Adalah tes untuk mengetahui fungsi ginjal 
</p>
                </div>
            </div>
            <div class="containert right">
                <div class="content">
                <h2>Keenam</h2>
                <p>Anti HCP ( Hepatitis C )
Adalah tes untuk mengecek Hepatitis C seseorang yang terinfeksi  HIV & aids 
</p>
                </div>
            </div>
            <div class="containert left">
                <div class="content">
                <h2>Ketujuh</h2>
                <p>HBSAG ( hepatitis A dan B )
Adalah tes untuk mengecek hepatitis A dan B 

</p>
                </div>
            </div>
            <div class="containert right">
                <div class="content">
                <h2>Kedelapan</h2>
                <p>VDRAL / TPHA
Adalah tes untuk mengetahui bakteri sifilis dan raja singa atau IO ( infeksi Oportunistik ) lainya 
</p>
                </div>
            </div>
            <div class="containert left">
                <div class="content">
                <h2>Kesembilan</h2>
                <p>Rotgen Throat
Adalah untuk mengecek secara keseluruhan tubuh bagian dalam
</p>
                </div>
            </div>
            <div class="containert right">
                <div class="content">
                <h2>Kesepuluh</h2>
                <p>setelah itu kembali lagi ke Rumah Sakit Tipe A untuk berkoordinasi dan mendapatkan No.Rekam Medis serta Obat ARV ( Antyretroviral ) apa yang di konsumsi pasien 

</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        Copyright Sahabat HIV/AIDS 2019
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<?php include 'footer.php' ?>