<section class="content">
<div id="flash" data-flash="<?= $this->session->flashdata('notif') ?>">
	<div class="row">
	<div class="col-md-12">
			<div class="box box-info">
				<div class='box-header  with-border'>
					<h3 class='box-title'>Riwayat Pendidikan</h3>
					<div class="pull-right">
						<?php
						echo anchor('pendidikan/post', 'Tambah Data', array('class' => 'btn btn-success'));
						?>
					</div>
				</div>
				<div class="box-body table-responsive">
					<table id="datatable" class="table table-bordered table-hover table-striped">
						<thead class="bg-primary">
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Perguruan Tinggi</th>
								<th class="text-center">Gelar Akademik</th>
								<th class="text-center">Tahun Ijazah</th>
								<th class="text-center">Jenjang</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no=0;
							foreach ($record as $a) { ?>
								<tr>
									<td class="text-center"><?= ++$no; ?> </td>
									<td><?= $a->perguruan_tinggi ?> </td>
									<td><?= $a->gelar_akademik ?> </td>
									<td><?= $a->tahun_ijazah ?> </td>
									<td><?= $a->jenjang ?> </td>
									<td class="text-center"><?php
										echo anchor(site_url('pendidikan/edit/' . $a->id_riw_pendidikan), '<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;&nbsp;Edit', array('title' => 'edit', 'class' => 'btn btn-sm btn-warning'));
										echo '&nbsp';
										echo anchor(site_url('pendidikan/hapus/' . $a->id_riw_pendidikan), '<i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Hapus', 'title="delete" class="btn btn-sm btn-danger "');
										?>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
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