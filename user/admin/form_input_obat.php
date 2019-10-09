<?php 
    include 'header.php';
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Input Data Obat</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <div class="col-md-6 col-xs-12">
                            <form action="simpan_obat.php" method="post" enctype="multipart/form-data">
                                <input type="text" required class="form-control" name="nama" placeholder="Nama Obat"><br>
                                <textarea name="deskripsi" cols="30" rows="5" placeholder="Deskripsi" class="form-control"></textarea><br>
                                Lampiran Gambar
                                <input type="file" class="form-control" name="image" placeholder="Gambar"><br>
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center">
        Copyright Sahabat HIV/AIDS 2019
    </footer>
</div>
<?php include 'footer.php' ?>