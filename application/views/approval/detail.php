<section class="content">
	<div class="row">
	<div class="col-md-12">
			<div class="box box-info">
				<div class='box-header  with-border'>
					<h3 class='box-title'>Biodata Dosen</h3>
                </div>
                
				<div class="box-body table-responsive">
                <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" style="width: 200px; height: 200px" src="<?php echo base_url(); ?>assets/dist/img/<?= $user['foto'] ?>" alt="User Image">
                </div>
                <h3 class="profile-username text-center text-bold text-uppercase"><?= $user['nama_user']?></h3>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td class="text-right satu">NIP Dosen</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['nip']?></td>
                        </tr>
                        <tr>
                            <td class="text-right satu">NIDN</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['nidn']?></td>
                        </tr>
                        <tr>
                            <td class="text-right satu">ID Scopus</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['id_scopus']?></td>
                        </tr>
                        <tr>
                            <td class="text-right satu">Program Studi</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['program_studi']?></td>
                        </tr>
                        <tr>
                            <td class="text-right satu">Jenis Kelamin</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['jk']?></td>
                        </tr><tr>
                            <td class="text-right satu">Jabatan Fungsional</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['jabatan']?></td>
                        </tr><tr>
                            <td class="text-right satu">Pendidikan Tertinggi</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['pendidikan_tertinggi']?></td>
                        </tr><tr>
                            <td class="text-right satu">Status Ikatan Kerja</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['status_ikatan_kerja']?></td>
                        </tr><tr>
                            <td class="text-right satu">Status Aktivitas</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['status_aktivitas']?></td>
                        </tr>
                    </tbody>
                </table>
          
               <div class="infobox">
               <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Riwayat Pendidikan</a></li>
                    <li><a data-toggle="tab" href="#menu1">Pengabdian</a></li>
                    <li><a data-toggle="tab" href="#menu2">Penelitian</a></li>
                    <li><a data-toggle="tab" href="#menu3">Daftar Publikasi</a></li>
                    <li><a data-toggle="tab" href="#menu4">Daftar Buku</a></li>
                    <!-- <li><a data-toggle="tab" href="#menu2">Menu 2</a></li> -->
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>Riwayat Pendidikan</h3>
                        <table class="table table-bordered table-hover table-striped">
						<thead class="bg-primary">
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Perguruan Tinggi</th>
								<th class="text-center">Gelar Akademik</th>
								<th class="text-center">Tahun Ijazah</th>
								<th class="text-center">Jenjang</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no=1;
								foreach ($pendidikan as $a) { ?>
                                <tr>
									<td class="text-center"><?= $no++ ?> </td>
                                    <td><?= $a->perguruan_tinggi ?></td>
									<td><?= $a->gelar_akademik ?> </td>
									<td><?= $a->tahun_ijazah ?> </td>
									<td><?= $a->jenjang ?> </td>
								</tr>
								<?php } ?>
						</tbody>
					</table>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Pengabdian</h3>
                        <table class="table table-bordered table-hover table-striped">
						<thead class="bg-primary">
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Smester</th>
								<th class="text-center">Nama Mata Kuliah</th>
								<th class="text-center">Kelas</th>
								<th class="text-center">Perguruan Tinggi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no=1;
								foreach ($pengabdian as $a) { ?>
								<tr>
									<td class="text-center"><?= $no++ ?> </td>
									<td><?= $a->smester ?> </td>
									<td><?= $a->nama_matkul ?> </td>
									<td><?= $a->kelas ?> </td>
									<td><?= $a->perguruan_tinggi ?> </td>
                                </tr>
                                <?php } ?>
						    </tbody>
					    </table>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Penelitian</h3>
                        <table class="table table-bordered table-hover table-striped">
							<thead class="bg-primary">
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Judul Penelitian</th>
									<th class="text-center">Bidang Ilmu</th>
									<th class="text-center">Lembaga</th>
									<th class="text-center">Tahun</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$no=1;
								foreach ($penelitian as $a) { ?>
								<tr>
									<td class="text-center"><?= $no++ ?> </td>
									<td><?= $a->judul ?> </td>
									<td><?= $a->bidang_ilmu ?> </td>
									<td><?= $a->lembaga ?> </td>
									<td><?= $a->tahun ?> </td>
								</tr>
							<?php } ?>
						    </tbody>
					    </table>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Daftar Publikasi</h3>
                        <table class="table table-bordered table-hover table-striped">
							<thead class="bg-primary">
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Judul</th>
									<th class="text-center">Jurnal</th>
									<th class="text-center">No Artikel</th>
									<th class="text-center">Volume</th>
									<th class="text-center">Tahun</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$no=1;
								foreach ($publikasi as $a) { ?>
								<tr>
									<td class="text-center"><?= $no++ ?> </td>
									<td><?= $a->judul_pub ?> </td>
									<td><?= $a->jurnal ?> </td>
									<td><?= $a->no_artikel ?> </td>
									<td><?= $a->volume ?> </td>
									<td><?= $a->tahun ?> </td>
								</tr>
							<?php } ?>
						    </tbody>
					    </table>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <h3>Daftar Buku</h3>
                        <table class="table table-bordered table-hover table-striped">
						<thead class="bg-primary">
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Judul Buku</th>
								<th class="text-center">ISBN</th>
								<th class="text-center">Penerbit</th>
								<th class="text-center">Tahun Terbit</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no=1;
								foreach ($buku as $a) { ?>
								<tr>
								<tr>
									<td class="text-center"><?= $no++ ?> </td>
									<td><?= $a->judul_buku ?> </td>
									<td><?= $a->isbn ?> </td>
									<td><?= $a->penerbit ?> </td>
									<td><?= $a->tahun_terbit ?> </td>
								</tr>
							<?php } ?>
						</tbody>
					    </table>
                    </div>
				</div>
				<?php 
					if($pengajuan['status_pengajuan'] != "Proses") {
						$att = 'disabled';
						}
					else{
							$att = '';
						}
				?>
				<form action="<?= base_url('approval/approve') ?>" method="post">
                    <button type="submit" class="btn btn-success pull-right" name="approve" id="approve" <?= $att ?>><i class="fa fa-check fa-lg"></i> Approve</button>
                    <button <?= $att ?> data-toggle="modal" data-target="#exampleModal" type="button" class="btn pull-right" style="margin-right: 5px; background-color: #dd4b39; border-color: #d73925; color:white;" name="reject" id="reject"><i class="fa fa-times fa-lg"></i> Reject</button>
                    <input type="hidden" name="id_pengajuan" value="<?= $pengajuan['id'] ?>">
				</form>
             </div>
                <!-- /.card-body -->
				</div>
			</div>
		</div>
	</div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
			<form action="<?= base_url('approval/reject') ?>" method="post" role="form">
				<div class="modal-body">
						<div class="form-group">
							<label for="alasan">Alasan Reject <span style="color: red;">*</span></label>
							<textarea name="alasan" id="alasan" rows="5" class="form-control" required></textarea>
							<!-- <input type="text-area" class="form-control" id="alasan" name="alasan"> -->
						</div>
                </div>
                <div class="modal-footer">
					<input type="hidden" name="id_pengajuan" value="<?= $pengajuan['id'] ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
				</div>
        	</form>
		</div>
    </div>
	</div>
</section>


<script src="<?php echo base_url() ?>assets/app/js/alert.js"></script>
<script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>