<?php 
    include 'header.php';
    
    $sql = "SELECT * FROM tb_tempat_layanan INNER JOIN tb_user ON tb_tempat_layanan.id = tb_user.idUser";
    $query = mysqli_query($konek,$sql);
    
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Data Rumah Sakit Dan Puskesmas</h4>
                            </div>
                        </div>
                    </div>
                    <a href="form_input_layanan.php" style="margin-left:20px;margin-bottom:20px;">
                        <button class="btn btn-success">Tambah Data</button>
                    </a>
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">Username</th>
                                    <th class="border-top-0">Nama</th>
                                    <th class="border-top-0">Alamat</th>
                                    <th class="border-top-0">Layanan</th>
                                    <th class="border-top-0">Biaya</th>
                                    <th class="border-top-0">Jam Layanan</th>
                                    <th class="border-top-0">Contact Person</th>
                                    <th class="border-top-0">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($data = mysqli_fetch_array($query)) : ?>
                                    <tr>
                                        <td><?= $data['username'] ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['layanan'] ?></td>
                                        <td>
                                            Biaya Retribusi Rp.<?= $data['biayaRetribusi'] ?><br>
                                            Biaya Hiv Rp.<?= $data['biayaHIV'] ?><br>
                                            Biaya IMS Rp.<?= $data['biayaIMS'] ?>
                                        </td>
                                        <td>
                                            <?= $data['jamLayanan']?>
                                        </td>
                                        <td><?= $data['cp'] . " (" . $data['namaCp'] . ") "?></td>
                                        <td>
                                            <a href="form_update_layanan.php?id=<?= $data['id'] ?>">
                                                <button class="btn btn-warning">Edit</button>
                                            </a>
                                            <a href="delete_layanan.php?id=<?= $data['id'] ?>">
                                                <button onClick='return konfirmasi()' class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
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