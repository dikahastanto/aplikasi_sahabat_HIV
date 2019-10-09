<?php include 'header.php'; ?>
  <!--================Search Package section Start =================-->
  <section class="hero-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-6 offset-xl-3">
          <div class="search-wrapper">
            <h3>Login</h3>

            <form class="search-form" method="post" action="loginProses.php">
              <div class="form-group">
                <div class="input-group">
                  <input name="username" type="text" class="form-control" placeholder="Username">
                </div>
              </div>
              <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <button class="button border-0 mt-3" type="submit">Login</button>
              </div>
              Belum Punya Akun ? <a href="daftar.php">Daftar Sekarang</a>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--================Search Package section End =================-->
<?php include 'footer.php'; ?>