<?php
require_once 'app/functions/MY_model.php';

$tanggal = date('Y-m-d');
$backdate = date('Y-m-d', strtotime('-30 days', strtotime( $tanggal )));
if (isset($_POST['filter'])) {
  $tindakan = get("SELECT *, rm.id as rm_id FROM tindakan rm
                    INNER JOIN pasien ON rm.pasien_id = pasien.id 
                    INNER JOIN pegawai ON rm.pegawai_id = pegawai.id 
                    WHERE rm.tanggal BETWEEN '$tanggal' AND '$backdate' ") or die(mysqli_error($conn));
} else {
  $tindakan = get("SELECT *, rm.id as rm_id FROM tindakan rm
                    INNER JOIN pasien ON rm.pasien_id = pasien.id 
                    INNER JOIN pegawai ON rm.pegawai_id = pegawai.id 
                    WHERE rm.tanggal = '$tanggal' ") or die(mysqli_error($conn));
}

$data = '';
foreach ($tindakan as $tt){
  $query = get("SELECT * from tindakan where tanggal = '" . $tt['tanggal'] . "'");
  $count = count($query);
  $data .= "{y: '" . $tt['tanggal'] . "', b: " . $count . "},";
}
$data = substr($data, 0, -1);
$no = 1;

$title = 'Tindakan';
?>

<!-- Basic tabs start -->
<section id="basic-tabs-components">
  <div class="row">
    <div class="col-sm-12">
      <div class="card overflow-hidden">
        <div class="card-header">
          <h4 class="card-title">Tindakan 30 hari terakhir</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <!-- <div class="x_panel"> -->
              <!-- <div class="x_title"> -->
                <h2>Chart Tindakan</h2>
                <div class="clearfix"></div>
              </div>
              <div id="divname" style="width:100%; height:300px;"></div>
            <!-- </div> -->
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Tag Input end -->

<!-- Page Specific JS File -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script>

var data = [<?= $data ?>],
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['', 'Total tindakan'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };
  config.element = 'divname';
    new Morris.Line(config);
</script>