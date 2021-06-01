<?php
require_once 'app/functions/MY_model.php';
$user = get("SELECT * FROM users");

$no = 1;

?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">User</h4>
          <a href="?page=tambah-user" class="btn btn-primary round waves-effect waves-light">
            Tambah user
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($user as $w) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $w['username']; ?></td>
                      <td>
                        <a href="?page=edit-user&id=<?= $w['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-user&id=<?= $w['id']; ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
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
<?php $title = 'User'; ?>