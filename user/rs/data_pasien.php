<?php 
    include 'header.php';
    $status = $_GET['status'];
    $id = $localStorage['id'];
    $sql = "SELECT * FROM tb_detail_user INNER JOIN tb_rekam_medik ON tb_detail_user.idUser = tb_rekam_medik.idPasien WHERE tb_rekam_medik.status = '$status' AND tb_rekam_medik.idRs = '$id'";
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
                                <h4 class="card-title">Data Pasien 
                                <?php 
                                
                                    if ($status == 1) {
                                        echo "Belum";
                                    }
                                
                                ?>
                                Terverifikasi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table v-middle">
                            <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">Nama Lengkap</th>
                                    <?php if($status == 2): ?>
                                    <th class="border-top-0">No Rekam Medik</th>
                                    <?php endif; ?>
                                    <th class="border-top-0">Jenis Kelamin</th>
                                    <th class="border-top-0">Alamat</th>
                                    <th class="border-top-0">Umur</th>
                                    <th class="border-top-0">Tahun Diagnosa</th>
                                    <th class="border-top-0">E-Mail</th>
                                    <th class="border-top-0">No Telp</th>
                                    <th class="border-top-0">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($data = mysqli_fetch_array($query)) : ?>
                                    <tr>
                                        <td><?= $data['namaLengkap'] ?></td>
                                        <?php if($status == 2): ?>
                                        <td><?= $data['noRekamMedis'] ?></th>
                                        <?php endif; ?>
                                        <td><?= $data['jenisKelamin'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['umur'] ?></td>
                                        <td><?= $data['tahunDiagnosa'] ?></td>
                                        <td>
                                            <?= $data['email']?>
                                        </td>
                                        <td><?= $data['noTelp'] ?></td>
                                        <?php if($status == 1): ?>
                                        <td>
                                            <a href="proses_rekam_medik.php?id=<?= $data['id'] ?>&idUser=<?= $data['idUser'] ?>">
                                                <button class="btn btn-success">Terima</button>
                                            </a>
                                        </td>
                                        <?php else: ?>
                                            <td>
                                                <label class="label label-success">Status Pasien</label>
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