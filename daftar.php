<?php include 'header.php'; ?>
  <!--================Search Package section Start =================-->
  <section class="hero-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-6 offset-xl-3">
          <div class="search-wrapper">
            <h3>Daftar Akun</h3>

            <form class="search-form" action="proses_daftar.php" method="post">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="namaLengkap" class="form-control" placeholder="Nama Lengkap">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <select name="jenisKelamin" class="form-control">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <label style="margin-top:10px;">Tanggal Lahir</label>
                  <input style="margin-left:10px;" type="date" name="umur" class="form-control" placeholder="Umur">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <select name="tahunDiagnosa" class="form-control">
                    <option selected disabled>Tahun Diagnosa</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="email" name="email" class="form-control" placeholder="E-Mail">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="number" name="noTelp" class="form-control" placeholder="No Telp">
                </div>
              </div>
              <div class="form-group">
                <button class="button border-0 mt-3" type="submit">Daftar</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--================Search Package section End =================-->
<?php include 'footer.php'; ?>