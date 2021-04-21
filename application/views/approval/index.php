<section class="content">
<div id="flash" data-flash="<?= $this->session->flashdata('notif') ?>">
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
								<th class="text-center">Tanggal Pengajuan</th>
								<th class="text-center">No Pengajuan</th>
								<th class="text-center">Nama Dosen</th>
								<th class="text-center">Status Pengajuan</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$no=0;
						foreach ($record as $a) { ?>
						
								<tr>
									<td class="text-center"><?= ++$no; ?> </td>
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
                                    <td class="text-center">
									<?php 
										if($a->status_pengajuan != "Proses") {
											$att = 'disabled';
											$reject = '';
											$approved = '#';
											}
										else{
												$att = '';
												$reject ='#exampleModal'; 
												$approved = base_url('approval/approved/'.$a->id);
											}
									?>
										<a class="btn btn-primary" href="<?= base_url('approval/detail/'.$a->id); ?>"><i class="fa fa-eye fa-lg"> </i> Lihat</a>

										<a class="btn btn-success" href="<?= $approved ?>" <?=$att ?>><i class="fa fa-check fa-lg"> </i> Approve</a>

										<a data-id="<?= $a->id ?>" <?=$att ?> data-toggle="modal" data-target="<?= $reject ?>" type="button" class="btn" style="background-color: #dd4b39; border-color: #d73925; color:white;" name="reject" id="reject"><i class="fa fa-times fa-lg"></i> Reject</a>
									
									</td>
                                </tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
			<form action="<?= base_url('approval/rejects') ?>" method="post" role="form">
				<div class="modal-body">
						<div class="form-group">
							<label for="alasan">Alasan Reject <span style="color: red;">*</span></label>
							<textarea name="alasan" id="alasan" rows="5" class="form-control" required></textarea>
							<!-- <input type="text-area" class="form-control" id="alasan" name="alasan"> -->
						</div>
                </div>
                <div class="modal-footer">
					<input type="hidden" name="id_pengajuan" id="id_pengajuan" value="<?= $a->id ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
				</div>
        	</form>
		</div>
    </div>
	</div>

	
</section>

<script src="<?php echo base_url() ?>assets/app/js/alert.js"></script>
<script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$('#myTable').DataTable();
	});
</script>
<script type="text/javascript">
            $(document).on("click", "#reject", function() {
                var id_pengajuan = $(this).data('id');
                $(".modal-footer #id_pengajuan").val(id_pengajuan);
            })
        </script>