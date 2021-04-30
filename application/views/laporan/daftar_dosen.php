<section class="content">
	<div class="row">
	<div class="col-md-12">
			<div class="box box-info">
				<div class='box-header  with-border'>
					<h3 class='box-title'>Daftar Dosen</h3>
				</div>
				<div class="box-body table-responsive">
                <table id="datatable" class="table table-bordered table-striped table-responsive">
                    <thead class="bg-primary">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">NIDN</th>
                        <th class="text-center">Nama Dosen</th>
                        <th class="text-center">Fakultas</th>
                        <th class="text-center">Pendidikan Tertinggi</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=0;
                    foreach ($record as $a) { ?>
                        <tr>
                            <td class="text-center"><?= ++$no; ?></td>
                            <td><?= $a->nidn ?></td>
                            <td><?= $a->nama_user ?></td>
                            <td><?= $a->program_studi ?></td>
                            <td><?= $a->pendidikan_tertinggi ?></td>
                            <td class="text-center"><a href="<?= base_url() ?>laporan/detail/<?= $a->id_dosen ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php } ?>
                
                </table>
				</div>
			</div>
		</div>
	</div>

</section>

<script src="<?php echo base_url() ?>assets/app/js/alert.js"></script>
