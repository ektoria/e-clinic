<?php
require_once 'app/functions/MY_model.php';
$pegawai = get("SELECT * FROM pegawai");

$no = 1;

?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pegawai</h4>
          <a href="?page=tambah-pegawai" class="btn btn-primary round waves-effect waves-light">
            Tambah pegawai
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>Spesialis</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pegawai as $p) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $p['nama_pegawai']; ?></td>
                      <td><?= $p['posisi']; ?></td>
                      <td><?= $p['alamat']; ?></td>
                      <td><?= $p['telephone']; ?></td>
                      <td>
                        <a href="?page=edit-pegawai&id=<?= $p['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-pegawai&id=<?= $p['id']; ?>" class="btn-hapus">
                          <i class="feather icon-trash"></i>
                        </a>
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