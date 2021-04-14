<section class="content">
<div id="flash" data-flash="<?= $this->session->flashdata('notif') ?>">
	<div class="row">
	<div class="col-md-12">
			<div class="box box-info">
				<div class='box-header  with-border'>
					<h3 class='box-title'>Data User</h3>
					<div class="pull-right">
						<?php
						echo anchor('user/post', 'Tambah Data', array('class' => 'btn btn-success'));
						?>
					</div>
				</div>
				<div class="box-body table-responsive">
					<table id="datatable" class="table table-bordered table-hover table-striped">
						<thead class="bg-primary">
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Nama Lengkap</th>
								<th class="text-center">Username</th>
								<th class="text-center">Role</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							$no=0;
							foreach ($record as $a) { ?>
								<tr>
									<td class="text-center"><?= ++$no; ?> </td>
									<td><?= $a->nama_user ?> </td>
									<td><?= $a->username ?> </td>
									<td><?php $role = $a->id_role;
											if ($role == 1){
												echo 'Admin';
											}
											else if ($role == 2){
												echo 'Approver';
											}
											else if ($role == 3){
												echo 'Dosen';
											}
											else{}
									?> </td>
									<td class="text-center"><?php
										echo anchor(site_url('user/edit/' . $a->id_user), '<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;&nbsp;Edit', array('title' => 'edit', 'class' => 'btn btn-sm btn-warning'));
										echo '&nbsp';
										echo anchor(site_url('user/hapus/' . $a->id_user), '<i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Hapus', 'title="delete" class="btn btn-sm btn-danger "');
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