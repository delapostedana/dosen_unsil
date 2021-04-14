<section class="content">
<div id="flash" data-flash="<?= $this->session->flashdata('notif') ?>">
	<div class="row">
	<div class="col-md-12">
			<div class="box box-info">
				<div class='box-header  with-border'>
					<h3 class='box-title'>Daftar Penelitian</h3>
					<div class="pull-right">
						<?php
						echo anchor('penelitian/post', 'Tambah Data', array('class' => 'btn btn-success'));
						?>
					</div>
				</div>
				<div class="box-body table-responsive">
					<table id="datatable" class="table table-bordered table-hover table-striped">
                        <thead class="bg-primary">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Judul Penelitian</th>
                                <th class="text-center">Bidang Ilmu</th>
                                <th class="text-center">Lembaga</th>
                                <th class="text-center">Tahun</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
							$no=0;
							foreach ($record as $a) { ?>
								<tr>
									<td class="text-center"><?= ++$no; ?> </td>
									<td><?= $a->judul ?> </td>
									<td><?= $a->bidang_ilmu ?> </td>
									<td><?= $a->lembaga ?> </td>
									<td><?= $a->tahun ?> </td>
									<td class="text-center"><?php
										echo anchor(site_url('penelitian/edit/' . $a->id_penelitian), '<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;&nbsp;Edit', array('title' => 'edit', 'class' => 'btn btn-sm btn-warning'));
										echo '&nbsp';
										echo anchor(site_url('penelitian/hapus/' . $a->id_penelitian), '<i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Hapus', 'title="deleted" class="btn btn-sm btn-danger "');
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