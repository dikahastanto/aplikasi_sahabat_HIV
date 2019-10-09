<?php 
    include 'header.php';
    $sql = "SELECT * FROM tb_tempat_layanan";
    $query = mysqli_query($konek, $sql);
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Daftar RS/Puskesmas</h4>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table v-middle">
                                <thead>
                                    <tr class="bg-light">
                                        <th class="border-top-0">Nama RS/Puskesmas</th>
                                        <th class="border-top-0">Alamat</th>
                                        <th class="border-top-0">Layanan</th>
                                        <th class="border-top-0">Biaya</th>
                                        <th class="border-top-0">Jam Layanan</th>
                                        <th class="border-top-0">CP</th>
                                        <th class="border-top-0">Foto</th>
                                        <th class="border-top-0">Aksi/Ket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($data=mysqli_fetch_array($query)): ?>
                                        <tr>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['alamat'] ?></td>
                                            <td><?= $data['layanan'] ?></td>
                                            <td>
                                                <p>Biaya Restribusi Rp.<?= $data['biayaRetribusi'] ?>,-</p>
                                                <p>Biaya HIV Rp.<?= $data['biayaHIV'] ?>,-</p>
                                                <p>Biaya IMS Rp.<?= $data['biayaIMS'] ?>,-</p>
                                            </td>
                                            <td><?= $data['jamLayanan'] ?></td>
                                            <td>
                                                <?= $data['cp'] ?> (<?= $data['namaCp'] ?>)
                                            </td>
                                            <td>
                                                <img width="100%" src="../img/<?= $data['gambar'] ?>" alt="">
                                            </td>
                                            <td>
                                                <?php if($localStorage['noRekamMedis'] === null): ?>
                                                    <?php 
                                                        $idUser = $localStorage['idUser'];
                                                        $cek = "SELECT * FROM tb_rekam_medik WHERE idPasien='$idUser'";
                                                        $queryCek = mysqli_query($konek,$cek);
                                                        $dataRekam = mysqli_fetch_array($queryCek);
                                                        $ada = mysqli_num_rows($queryCek);
                                                        if ($ada > 0) {
                                                            if ($dataRekam['idRs'] == $data['id']) {
                                                                if ($dataRekam['status'] == 1) {
                                                                    echo '<label class="label label-warning">Menunggu Konfirmasi</label>';
                                                                } else {
                                                                    echo '<label class="label label-success">Langganan</label>';  
                                                                }
                                                            } else {
                                                                echo "<a href='pengajuan.php?id='".$data['id']."'>
                                                                        <button disabled class='btn btn-success'>Daftar</button>
                                                                    </a>";
                                                            }
                                                        } else {
                                                            echo "<a href='pengajuan.php?id=".$data['id']."'>
                                                                        <button class='btn btn-success'>Daftar</button>
                                                                    </a>";
                                                        }
                                                    ?>
                                                <?php else: ?>
                                                    <a href="pengajuan.php?id=<?= $data['id'] ?>">
                                                        <button disabled class="btn btn-success">Daftar</button>
                                                    </a>
                                                <?php endif; ?>
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
    </div>
    <footer class="footer text-center">
        Copyright Sahabat HIV/AIDS 2019
    </footer>
</div>
<?php include 'footer.php' ?>
