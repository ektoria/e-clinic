<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];
$pegawai = get_where("SELECT * FROM pegawai WHERE id = '$id' ");

?>
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=pegawai" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Pegawai</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/pegawai/proses/update.php" method="post">
              <input type="hidden" name="id" value="<?= $pegawai['id']; ?>">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nama </label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Nama Pegawai" class="form-control" name="nama_pegawai" value="<?= $pegawai['nama_pegawai']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nomor Hp</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Nomor Hp" class="form-control" name="telephone" value="<?= $pegawai['telephone']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Alamat</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Alamat" name="alamat"><?= $pegawai['alamat']; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Posisi</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Posisi" class="form-control" name="posisi" value="<?= $pegawai['posisi']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-8 offset-md-4">
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>