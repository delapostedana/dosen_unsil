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
								<th class="text-center">Keterangan</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="text-center">1 </td>
									<td>13-3-2021 </td>
									<td>PBD-202103131 </td>
									<td>Ahmad Jaelani </td>
                                    <td class="text-center">
                                    <p class="bg-danger">Reject</p>
                                    </td>
                                    <td>Biodata harus dilengkapi </td>
                                </tr>
                                <tr>
									<td class="text-center">2 </td>
									<td>15-3-2021 </td>
									<td>PBD-202103135 </td>
                                    <td>Ahmad Jaelani </td>
                                    <td class="text-center">
                                    <p class="bg-success">Approved</p>
                                    </td>
									<td>Biodata sudah di Approve</td>
                                </tr>
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