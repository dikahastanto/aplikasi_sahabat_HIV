<?php 
    include 'header.php';
    
    $sql = "SELECT * FROM tb_obat";
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
                                <h4 class="card-title">Data Obat</h4>
                            </div>
                        </div>
                    </div>
                    <a href="form_input_obat.php" style="margin-left:20px;margin-bottom:20px;">
                        <button class="btn btn-success">Tambah Obat</button>
                    </a>
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">Nama</th>
                                    <th class="border-top-0">Keterangan</th>
                                    <th class="border-top-0">Gambar</th>
                                    <th class="border-top-0">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($data = mysqli_fetch_array($query)) : ?>
                                    <tr>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['deskripsi'] ?></td>
                                        <td><?= $data['gambar'] ?></td>
                                        <td>
                                            <a href="form_update_obat.php?id=<?= $data['id'] ?>">
                                                <button class="btn btn-warning">Edit</button>
                                            </a>
                                            <a href="delete_obat.php?id=<?= $data['id'] ?>">
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