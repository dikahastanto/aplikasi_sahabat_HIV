<?php include 'header.php'; ?>
  <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Diagnosa Dini</h1>
        <p>Mohon Dapat Mengisi Form Data Berikut Ini</p>
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->

  <!--================Search Package section Start =================-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-xl-10" style="background:#F0F8FF;padding-top:20px;">
            <div class="search-content">
                <form class="search-form" action="hasil_cek.php" method="post">
                    <div class="form-group">
                       1. Siapa nama kamu ?
                        <div class="input-group">
                            <input name="nama" type="text" class="form-control" placeholder="Nama Kamu">
                        </div>
                    </div>
                    <div class="form-group">
                       2. Berapa umur kamu ?
                        <div class="input-group">
                            <input name="umur" type="date" class="form-control" placeholder="Umur Kamu">
                        </div>
                    </div>
                    <div class="form-group">
                        <p>3. Apakah anda pernah melakukan hubungan seksual yang beresiko dalam satu tahun terakhir (tidak menggunakan kondom)?</p>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="1" id="customRadioInline1" name="p9" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">1-5 Kali</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="2" id="customRadioInline17" name="p9" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline17">6-10 Kali</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="3" id="customRadioInline18" name="p9" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline18">11-15 Kali</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="4" id="customRadioInline19" name="p9" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline19">16-20 Kali</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="0" id="customRadioInline2" name="p9" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Tidak Pernah</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p>4. Apakah anda pernah menggunakan narkoba jenis suntik dan lainya dalam setahun terakhir ?</p>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="1" id="customRadioInline22" name="p10" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline22">1-5 Kali</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="2" id="customRadioInline23" name="p10" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline23">6-10 Kali</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="3" id="customRadioInline24" name="p10" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline24">11-15 Kali</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="4" id="customRadioInline25" name="p10" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline25">16-20 Kali</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="0" id="customRadioInline26" name="p10" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline26">Tidak Pernah</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p>5. Apakah anda saat ini atau pernah mengalami gejala batuk ?</p>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="1" id="customRadioInline20" name="p1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline20">Kurang dari 4 hari </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="2" id="customRadioInline21" name="p1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline21">Kurang dari 1 minggu</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="3" id="customRadioInline27" name="p1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline27">Kurang 2 minggu</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="4" id="customRadioInline28" name="p1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline28">Kurang dari 1 bulan </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="0" id="customRadioInline29" name="p1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline29">Tidak Pernah</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p>6. Apakah anda saat ini pernah atau mengalami Gejala Flu ?</p>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="1" id="customRadioInline3" name="p2" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline3">Kurang dari 4 hari </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="2" id="customRadioInline30" name="p2" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline30">Kurang dari 1 minggu</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="3" id="customRadioInline31" name="p2" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline31">Kurang dari 2 minggu</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="4" id="customRadioInline32" name="p2" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline32">Kurang dari 1 bulan</label>
                            </div>                         
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="0" id="customRadioInline4" name="p2" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline4">Tidak Pernah</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p>7. Apakah anda saat ini atau pernah mengalami  gejala nyeri pada bagian sendi – sendi pada bagian tubuh tertentu ?</p>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="1" id="customRadioInline5" name="p3" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline5">Kurang dari 4 hari</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="2" id="customRadioInline33" name="p3" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline33">Kurang dari 1 minggu</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="3" id="customRadioInline34" name="p3" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline34">Kurang dari 2 minggu</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="4" id="customRadioInline35" name="p3" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline35">Kurang dari 1 bulan</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="0" id="customRadioInline6" name="p3" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline6">Tidak mengalami nyeri</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p>8. Apakah tubuh  anda saat ini atau pernah mengalami gejala demam ?</p>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="1" id="customRadioInline7" name="p4" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline7">Kurang dari 4 hari</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="2" id="customRadioInline36" name="p4" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline36">Kurang dari 1 minggu</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="3" id="customRadioInline37" name="p4" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline37">Kurang dari 2 minggu</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="4" id="customRadioInline38" name="p4" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline38">Kurang dari 1 bulan</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="0" id="customRadioInline8" name="p4" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline8">Tidak mengalami demam</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p>9. Apakah anda saat ini atau pernah mengalami  diare ?</p>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="1" id="customRadioInline9" name="p5" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline9">Kurang dari 4 hari</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="2" id="customRadioInline39" name="p5" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline39">Kurang dari 1 minggu</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="3" id="customRadioInline40" name="p5" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline40">Kurang dari 2 minggu</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="4" id="customRadioInline41" name="p5" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline41">Kurang dari 1 bulan</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="0" id="customRadioInline10" name="p5" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline10">Tidak mengalami diare</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p>10. Apakah anda saat ini atau pernah mengalami penurunan berat badan secara drastis ?</p>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="1" id="customRadioInline11" name="p6" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline11">Kurang dari 5 Kg</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="2" id="customRadioInline42" name="p6" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline42">Kurang dari 10 Kg</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="3" id="customRadioInline43" name="p6" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline43">Kurang dari 15 Kg</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="4" id="customRadioInline44" name="p6" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline44">Kurang dari 20 Kg</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="0" id="customRadioInline12" name="p6" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline12">Tidak mengalami penurunan berat badan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p>11. Apakah anda saat ini atau pernah mengalami bercak – bercak gatal ke-merahan di sekitar bagian tubuh ?</p>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="1" id="customRadioInline13" name="p7" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline13">Bercak kemerahan di sekitar tubuh selama kurang dari 3 hari</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="2" id="customRadioInline45" name="p7" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline45">Bercak kemerahan di sekitar tubuh selama kurang dari 7 hari</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="3" id="customRadioInline46" name="p7" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline46">Bercak kemerahan di sekitar tubuh selama kurang dari 14 hari</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="4" id="customRadioInline47" name="p7" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline47">Bercak kemerahan di sekitar tubuh selama kurang dari 21 hari</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="0" id="customRadioInline14" name="p7" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline14">Tidak ada bercak apapun</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p>12. Apakah anda saat ini atau pernah mengalami infeksi jamur pada area mulut atau tenggorokan ?</p>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="1" id="customRadioInline15" name="p8" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline15">Infeksi jamur pada area mulut dantenggorokan selama  kurang lebih 3 hari</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="2" id="customRadioInline48" name="p8" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline48">Infeksi jamur pada area mulut dantenggorokan selama  kurang lebih 7 hari</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="3" id="customRadioInline49" name="p8" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline49">Infeksi jamur pada area mulut dantenggorokan selama  kurang lebih 14 hari</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input required type="radio" value="4" id="customRadioInline50" name="p8" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline50">Infeksi jamur pada area mulut dantenggorokan selama  kurang lebih 21 hari</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="0" id="customRadioInline16" name="p8" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline16">Tidak ada infeksi jamur pada area mulut dantenggorokan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="button border-0 mt-3" type="submit">Cek</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Search Package section End =================-->
  <?php include 'footer.php'; ?>