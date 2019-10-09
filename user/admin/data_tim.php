<?php 
    include 'header.php';
    
    $sql = "SELECT * FROM tb_tim_layanan";
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
                                <h4 class="card-title">Data Tim Pelayanan Kesehaatan</h4>
                            </div>
                        </div>
                    </div>
                    <a href="form_input_tim_layanan.php" style="margin-left:20px;margin-bottom:20px;">
                        <button class="btn btn-success">Tambah Tim Pelayanan</button>
                    </a>
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">Jenis</th>
                                    <th class="border-top-0">Nama</th>
                                    <th class="border-top-0">E-Mail</th>
                                    <th class="border-top-0">No Telp</th>
                                    <th class="border-top-0">Deskripsi</th>
                                    <th class="border-top-0">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($data = mysqli_fetch_array($query)) : ?>
                                    <tr>
                                        <td><?= $data['jenisTim'] ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['email'] ?></td>
                                        <td><?= $data['noTelp'] ?></td>
                                        <td><?= $data['deskripsi'] ?></td>
                                        <td>
                                            <a href="form_update_tim_layanan.php?id=<?= $data['id'] ?>">
                                                <button class="btn btn-warning">Edit</button>
                                            </a>
                                            <a href="delete_tim_layanan.php?id=<?= $data['id'] ?>">
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