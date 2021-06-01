<?php
require_once 'app/functions/MY_model.php';
$tindakan = get("SELECT *, a.id as tindakan_id FROM tindakan a, pasien b, pegawai c where a.pasien_id = b.id and a.pegawai_id = c.id");

$no = 1;

$title = 'tindakan';
?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tindakan</h4>
          <a href="?page=tambah-tindakan" class="btn btn-primary round waves-effect waves-light">
            Tambah Tindakan
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>Tanggal Periksa</th>
                    <th>Nama Pasien</th>
                    <th>Keluhan</th>
                    <th>Nama Pegawai</th>
                    <th>Diagnosa</th>
                    <th>Nama Obat</th>
                    <th>
                      <i class="feather icon-settings"></i>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($tindakan as $t) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $t['tanggal']; ?></td>
                      <td><?= $t['nama_pasien']; ?></td>
                      <td><?= $t['keluhan']; ?></td>
                      <td><?= $t['nama_pegawai']; ?></td>
                      <td><?= $t['diagnosa']; ?></td>
                      <td>
                        <?php
                        $obats = mysqli_query($conn, "SELECT * FROM rm_obat JOIN obat ON rm_obat.obat_id = obat.id WHERE rm_id = '$t[tindakan_id]'") or die(mysqli_error($conn));
                        while ($obat = mysqli_fetch_assoc($obats)) {
                          echo $obat['nama_obat'] . '<br>';
                        }
                        ?>
                      </td>
                      <td>
                        <a href="?page=hapus-tindakan&no_transaksi=<?= $t['no_transaksi']; ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- User Table -->
<?php $title = 'Tindakan'; ?>