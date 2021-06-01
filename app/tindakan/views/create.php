<?php
require_once 'app/functions/MY_model.php';

$pasiens = get("SELECT * FROM pasien");
$pegawai = get("SELECT * FROM pegawai");
$obats = get("SELECT * FROM obat");

$no_transaksi = date('Ymdhis');
?>

<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=rekam-medis" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tambah Tindakan</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/tindakan/proses/create.php" method="post">
              <div class="form-body">
                <div class="row">

                  <input type="hidden" value="<?= $no_transaksi ?>" name="no_transaksi">

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Pasien</label>
                      </div>
                      <div class="col-md-8">
                        <select class="select2 form-control" name="pasien_id" required>
                          <?php foreach ($pasiens as $pasien) : ?>
                            <option value="<?= $pasien['id']; ?>"><?= $pasien['nama_pasien']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Keluhan</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="keluhan" name="keluhan" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Pegawai</label>
                      </div>
                      <div class="col-md-8">
                        <select class="select2 form-control" name="pegawai_id" required>
                          <?php foreach ($pegawai as $p) : ?>
                            <option value="<?= $p['id']; ?>"><?= $p['nama_pegawai']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Diagnosa</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="diagnosa" name="diagnosa" required></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>obat</label>
                      </div>
                      <div class="col-md-8">
                        <select multiple class="form-control" name="obat_id[]" size="7" required>
                          <?php foreach ($obats as $obat) : ?>
                            <option value="<?= $obat['id']; ?>"><?= $obat['nama_obat']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Tanggal Periksa</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="tanggal" value="<?= date('Y-m-d'); ?>" readonly class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Save</button>
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

<?php

$addon_script = ['assets/vendors/js/forms/select/select2.full.min.js', 'assets/js/scripts/forms/select/form-select2.js'];

?>