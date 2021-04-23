<section class="content">
	<div class="row">
	<div class="col-md-12">
			<div class="box box-info">
				<div class='box-header  with-border'>
					<h3 class='box-title'>Laporan Status Pengajuan</h3>
				</div>
				<div class="box-body table-responsive">
					<table id="datatable" class="table table-bordered table-hover table-striped">
						<thead class="bg-primary">
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Tanggal Pengajuan</th>
								<th class="text-center">No Pengajuan</th>
								<th class="text-center">Nama Dosen</th>
								<th class="text-center">Status Pengajuan</th>
								<th class="text-center">Alasan Penolakan</th>
							</tr>
						</thead>
						<?php 
							$no=0;
							foreach ($record as $a) { ?>
							<tr>
								<td class="text-center"><?= ++$no; ?></td>
								<td><?= $a->tgl_pengajuan ?> </td>
								<td><?= $a->no_pengajuan ?> </td>
								<td><?= $a->nama_user ?> </td>
								<td class="text-center"><p class="bg-<?php 
									if($a->status_pengajuan == "Proses")
									{
										echo "info";
									} 
									if($a->status_pengajuan == "Reject")
									{
										echo "danger";
									} 
									if($a->status_pengajuan == "Approved")
									{
										echo "success";
									}
									?>"><?= $a->status_pengajuan ?> </p></td>
								<td><?= $a->alasan ?> </td>
							</tr>
						<?php } ?>
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