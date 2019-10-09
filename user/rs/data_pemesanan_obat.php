<?php 
    include 'header.php';
    $status = $_GET['status'];
    $id = $localStorage['id'];
    $sql = "SELECT *, tb_book_obat.id AS 'idBook' FROM tb_book_obat INNER JOIN tb_obat ON tb_obat.id=tb_book_obat.idObat INNER JOIN tb_detail_user ON tb_detail_user.idUser=tb_book_obat.idUser WHERE tb_book_obat.status = '$status' AND tb_book_obat.idRs='$id'";
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
                                <h4 class="card-title">Data Pemesanan Obat
                                <?php 
                                
                                    if ($status == 1) {
                                        echo "Belum";
                                    }
                                
                                ?>
                                Terkonfirmasi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">Nama Pasien</th>
                                    <th class="border-top-0">Nama Obat</th>
                                    <th class="border-top-0">Tanggal</th>
                                    <th class="border-top-0">Jam</th>
                                    <th class="border-top-0">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($data = mysqli_fetch_array($query)) : ?>
                                    <tr>
                                        <td><?= $data['namaLengkap'] ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['tgl'] ?></td>
                                        <td><?= $data['jam'] ?></td>
                                        <?php if($status == 1): ?>
                                        <td>
                                            <a href="proses_verf_obat.php?id=<?= $data['idBook'] ?>">
                                                <button class="btn btn-success">Terima</button>
                                            </a>
                                        </td>
                                        <?php else: ?>
                                            <td>
                                                <label class="label label-success">Terkonfirmasi</label>
                                            </td>
                                        <?php endif; ?>
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