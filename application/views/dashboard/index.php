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
  if($record['id_role'] == 3){?>
    <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $pendidikan ?></h3>

              <p>Riwayat Pendidikan</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-refresh"></i>
            </div>
            <a href="<?= base_url('pendidikan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3><?= $pengabdian ?></h3>

              <p>Pengabdian</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-share"></i>
            </div>
            <a href="<?= base_url('pengabdian') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?= $penelitian ?></h3>

              <p>Penelitian</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-search"></i>
            </div>
            <a href="<?= base_url('penelitian') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $publikasi ?></h3>

              <p>Daftar Publikasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-share-alt"></i>
            </div>
            <a href="<?=base_url('publikasi')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$buku?></h3>

              <p>Daftar Buku</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            <a href="<?=base_url('buku')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$pengajuan_me?></h3>
              <p>Total Pengajuan</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-send"></i>
            </div>
            <a href="<?=base_url('laporan/status_pengajuan')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
       
        <ul class="list-group">
          <li class="list-group-item active" aria-current="true"><i class="ion ion-android-checkbox-outline"></i><b>  Panduan Dosen</b></li>
          <li class="list-group-item">1. Sudah melakukan registrasi dan login</li>
          <li class="list-group-item">2. Setelah berhasil registrasi dan login, silahkan lengkapi <a href="<?= base_url('profile') ?>">Profile</a> anda</li>
          <li class="list-group-item">3. Lengkapi <a href="<?= base_url('pendidikan') ?>">Riwayat Pendidikan</a>, <a href="<?= base_url('pengabdian') ?>">Pengabdian</a>, <a href="<?= base_url('penelitian') ?>">Penelitian</a>, <a href="<?= base_url('publikasi') ?>">Daftar Publikasi</a> dan <a href="<?= base_url('buku') ?>">Daftar buku</a></li>
          <li class="list-group-item">4. Kirim <a href="<?= base_url('biodata') ?>">Biodata</a> anda</li>
          <li class="list-group-item">5. Tunggu proses pengajuan, jika di approve maka data anda akan di publish</li>
        </ul>
      
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-list"></i>
              <h3 class="box-title">History Pengajuan</h3>
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
                    foreach ($pengajuanku as $a) {
                  ?>
                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$a['no_pengajuan'];?></td>
                    <td><?=$a['tgl_pengajuan'];?></td>
                    <td><?=$a['nama_user'];?></td>
                    <td class="text-center"><p class="bg-<?php 
									if($a['status_pengajuan'] == "Proses")
									{
										echo "info";
									} 
									if($a['status_pengajuan'] == "Reject")
									{
										echo "danger";
									} 
									if($a['status_pengajuan'] == "Approved")
									{
										echo "success";
									}
									?>"><?=$a['status_pengajuan'];?></p></td>
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
  <?php } 
  else{
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
       
        <div style="background-color: white;" id="canvas-holder">
        <h4 class="text-center"><b>Diagram Pengajuan</b></h4> <br>
        <h5 class="text-center" > 
          <span class="bg-warning" style="margin-right: 5px; padding: 5px; border-radius: 5px"> Total : <?= $pengajuan ?></span> 
          <span class="bg-info" style="margin-right: 5px; padding: 5px; border-radius: 5px"> Proses : <?= $pengajuan_proses ?></span> 
          <span class="bg-success" style="margin-right: 5px; padding: 5px; border-radius: 5px"> Approved : <?= $pengajuan_approved ?> </span> 
          <span class="bg-danger" style="margin-right: 5px; padding: 5px; border-radius: 5px"> Reject : <?= $pengajuan_reject ?> </span></h5>

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
      value: <?=$pengajuan_approved?>,
      color:"#198754",
      highlight: "#dff0d8",
      label: "Approved",
    },
    {
      value: <?=$pengajuan_reject?>,
      color: "#dc3545",
      highlight: "#f2dede",
      label: "Reject"
    },
    {
      value: <?=$pengajuan_proses?>,
      color: "#0dcaf0",
      highlight: "#d9edf7",
      label: "Proses"
    },

  ];

  window.onload = function(){
    var ctx = document.getElementById("chart-area").getContext("2d");
    window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
  };



</script>
    </section>