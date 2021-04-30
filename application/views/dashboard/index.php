<section class="content">

<?php 
   if($record['id_role'] == 3 && $record['nip'] == null){
     echo '<div class="alert alert-warning" role="alert">
     Segera lengkapi <a href="'. base_url().'profile" class="alert-link">profil</a> anda!!
   </div>';
   }
?>

<div id="flash" data-flash="<?= $this->session->flashdata('notif') ?>">
<?php
  if($record['id_role'] != 3){
    $no=1;
   ?>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $dosen ?></h3>

              <p>Total Dosen Publish</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-happy"></i>
            </div>
            <a href="<?= base_url('laporan/daftar_dosen') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $fakul ?></h3>

              <p>Total Fakultas</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-briefcase"></i>
            </div>
            <a href="<?=base_url('fakultas')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$matkul?></h3>

              <p>Total Mata Kuliah</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            <a href="<?=base_url('matkul')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$user?></h3>

              <p>Total User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?=base_url('user')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
       
        <div class="p-4" style="background-color: white;" id="canvas-holder">
        <h4 class="text-center">Diagram</h4>
			    <canvas id="chart-area">
		    </div>
      
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-list"></i>
              <h3 class="box-title">Pengajuan status : Proses</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-12">
                <table class="table table-bordered table-hover">
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">No Pengajuan</th>
                    <th class="text-center">Tanggal Pengajuan</th>
                    <th class="text-center">Nama Dosen</th>
                    <th class="text-center">Status Pengajuan</th>
                  </tr>
                  <?php 
                    $no=1;
                    foreach ($approval as $a) {
                  ?>
                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$a['no_pengajuan'];?></td>
                    <td><?=$a['tgl_pengajuan'];?></td>
                    <td><?=$a['nama_user'];?></td>
                    <td class="text-center"><p class="bg-warning"><?=$a['status_pengajuan'];?></p></td>
                  </tr>
                    <?php } ?>
                </table>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

  <?php } ?>

  <script>

var doughnutData = [
    {
      value: 300,
      color:"#F7464A",
      highlight: "#FF5A5E",
      label: "Red"
    },
    {
      value: 50,
      color: "#46BFBD",
      highlight: "#5AD3D1",
      label: "Green"
    },
    {
      value: 100,
      color: "#FDB45C",
      highlight: "#FFC870",
      label: "Yellow"
    },
    {
      value: 40,
      color: "#949FB1",
      highlight: "#A8B3C5",
      label: "Grey"
    },
    {
      value: 120,
      color: "#4D5360",
      highlight: "#616774",
      label: "Dark Grey"
    }

  ];

  window.onload = function(){
    var ctx = document.getElementById("chart-area").getContext("2d");
    window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
  };



</script>
    </section>