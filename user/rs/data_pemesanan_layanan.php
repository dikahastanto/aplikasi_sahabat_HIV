<?php 
    include 'header.php';
    $status = $_GET['status'];
    $id = $localStorage['id'];
    $sql = "SELECT * FROM tb_book_tes INNER JOIN tb_detail_user ON tb_book_tes.idUser=tb_detail_user.idUser WHERE tb_book_tes.status='$status' AND tb_book_tes.idRs='$id'";
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
                                <h4 class="card-title">Data Pemesanan Layanan
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
                                    <th class="border-top-0">Jenis Tes</th>
                                    <th class="border-top-0">Metode Pembayaran</th>
                                    <th class="border-top-0">Tanggal</th>
                                    <th class="border-top-0">Jam</th>
                                    <th class="border-top-0">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($data = mysqli_fetch_array($query)) : ?>
                                    <tr>
                                        <td><?= $data['namaLengkap'] ?></td>
                                        <td><?= $data['jenisTes'] ?></td>
                                        <td><?= $data['metodePembayaran'] ?></td>
                                        <td><?= $data['tgl'] ?></td>
                                        <td><?= $data['jam'] ?></td>
                                        <?php if($status == 1): ?>
                                        <td>
                                            <a href="proses_verf_layanan.php?id=<?= $data['id'] ?>">
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