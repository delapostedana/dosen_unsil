<section class="content">
	<div class="row">
	<div class="col-md-12">
			<div class="box box-info">
				<div class='box-header  with-border'>
					<h3 class='box-title'>Approval</h3>
				</div>
				<div class="box-body table-responsive">
					<table id="datatable" class="table table-bordered table-hover table-striped">
						<thead class="bg-primary">
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">No Pengajuan</th>
								<th class="text-center">Nama Dosen</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="text-center">1 </td>
									<td>PBD-202103131 </td>
									<td>Ahmad Jaelani </td>
                                    <td class="text-center">
                                        <a href="" class="btn-primary btn"><i class="fa fa-eye"></i>&nbsp;&nbsp;</a>
                                       <a href="" class="btn-success btn"><i class="fa fa-check"></i>&nbsp;&nbsp;</a>
                                        <a href="" class="btn-danger btn"><i class="fa fa-times"></i>&nbsp;&nbsp;</a>
										<!-- // echo anchor(site_url('kategori/edit/' . $a->id_kategori), '<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;&nbsp;Edit', array('title' => 'edit', 'class' => 'btn btn-sm btn-warning'));
										// echo '&nbsp';
										// echo anchor(site_url('kategori/hapus/' . $a->id_kategori), '<i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Hapus', 'title="delete" class="btn btn-sm btn-danger "'); -->
									</td>
                                </tr>
                                <tr>
									<td class="text-center">2 </td>
									<td>PBD-202103132 </td>
									<td>Ahmad Santoso </td>
                                    <td class="text-center">
                                        <a href="" class="btn-primary btn"><i class="fa fa-eye"></i>&nbsp;&nbsp;</a>
                                       <a href="" class="btn-success btn"><i class="fa fa-check"></i>&nbsp;&nbsp;</a>
                                        <a href="" class="btn-danger btn"><i class="fa fa-times"></i>&nbsp;&nbsp;</a>
										<!-- // echo anchor(site_url('kategori/edit/' . $a->id_kategori), '<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;&nbsp;Edit', array('title' => 'edit', 'class' => 'btn btn-sm btn-warning'));
										// echo '&nbsp';
										// echo anchor(site_url('kategori/hapus/' . $a->id_kategori), '<i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Hapus', 'title="delete" class="btn btn-sm btn-danger "'); -->
									</td>
                                </tr>
                                <tr>
									<td class="text-center">3 </td>
									<td>PBD-202103133 </td>
									<td>Zainudin </td>
                                    <td class="text-center">
                                        <a href="" class="btn-primary btn"><i class="fa fa-eye"></i>&nbsp;&nbsp;</a>
                                        <a href="" class="btn-success btn"><i class="fa fa-check"></i>&nbsp;&nbsp;</a>
                                        <a href="" class="btn-danger btn"><i class="fa fa-times"></i>&nbsp;&nbsp;</a>
										<!-- // echo anchor(site_url('kategori/edit/' . $a->id_kategori), '<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;&nbsp;Edit', array('title' => 'edit', 'class' => 'btn btn-sm btn-warning'));
										// echo '&nbsp';
										// echo anchor(site_url('kategori/hapus/' . $a->id_kategori), '<i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Hapus', 'title="delete" class="btn btn-sm btn-danger "'); -->
									</td>
                                </tr>
                                <tr>
									<td class="text-center">4 </td>
									<td>PBD-202103134</td>
									<td>Adbul Karim</td>
                                    <td class="text-center">
                                        <a href="" class="btn-primary btn"><i class="fa fa-eye"></i>&nbsp;&nbsp;</a>
                                        <a href="" class="btn-success btn"><i class="fa fa-check"></i>&nbsp;&nbsp;</a>
                                        <a href="" class="btn-danger btn"><i class="fa fa-times"></i>&nbsp;&nbsp;</a>
										<!-- // echo anchor(site_url('kategori/edit/' . $a->id_kategori), '<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;&nbsp;Edit', array('title' => 'edit', 'class' => 'btn btn-sm btn-warning'));
										// echo '&nbsp';
										// echo anchor(site_url('kategori/hapus/' . $a->id_kategori), '<i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Hapus', 'title="delete" class="btn btn-sm btn-danger "'); -->
									</td>
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