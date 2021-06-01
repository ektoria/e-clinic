<?php
require_once 'app/functions/MY_model.php';
$wilayah = get("SELECT * FROM wilayah");

$no = 1;

?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Wilayah</h4>
          <a href="?page=tambah-wilayah" class="btn btn-primary round waves-effect waves-light">
            Tambah Wilayah
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($wilayah as $w) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $w['nama_wilayah']; ?></td>
                      <td><?= $w['keterangan']; ?></td>
                      <td>
                        <a href="?page=edit-wilayah&id=<?= $w['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-wilayah&id=<?= $w['id']; ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
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
<?php $title = 'Wilayah'; ?>