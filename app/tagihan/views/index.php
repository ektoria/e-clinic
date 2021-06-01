<?php
require_once 'app/functions/MY_model.php';
$tagihan = get("SELECT a.*, b.nama_pasien as nama_pasien from tagihanht a, pasien b where a.pasien_id = b.id");

$no = 1;

$title = 'Tagihan';
?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tagihan</h4>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nama Pasien</th>
                    <th>Nama Obat</th>
                    <th>Harga Obat</th>
                    <th>
                      <i class="feather icon-settings"></i>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($tagihan as $t) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $t['nama_pasien']; ?></td>
                      <td>
                        <?php
                        $obats = mysqli_query($conn, "SELECT a.*, b.nama_obat as nama_obat from tagihandt a, obat b where a.no_transaksi = '" . $t['no_transaksi'] . "' and a.obat_id = b.id") or die(mysqli_error($conn));
                        while ($obat = mysqli_fetch_assoc($obats)) {
                          echo $obat['nama_obat'] . '<br>';
                        }
                        ?>
                      </td>
                      <td><?= $t['tagihan'] ?></td>
                      <td><a href="?page=proses-tagihan&no_transaksi=<?= $t['no_transaksi']; ?>"><i class="feather icon-refresh-cw"></i></a></td>
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