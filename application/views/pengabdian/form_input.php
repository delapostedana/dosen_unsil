<section class="content">
	<div class="row">
		<div class='col-xs-12'>
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Riwayat Pengabdian</h3>
				</div>
				<div class="box-body">
					<?php
					echo form_open('pengabdian/post', array('role' => "form", 'id' => "myForm", 'data-toggle' => "validator"));
					?>
					<div class="form-group">
						<label for="smester" class="control-label">Smester <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="smester" id="smester" data-error="Smester harus diisi" placeholder="Smester" value="" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
						<label for="matkul" class="control-label">Nama Mata Kuliah <span style="color:red"> *</span></label>
						<div class="input-group">
							<select class="form-control" name="matkul" data-error="Mata Kuliah harus diisi" required>
                                <option value=''>- PILIH -</option>;
                                <?php foreach ($record as $a) { ?>
								<option value='<?= $a->id_matkul ?>'><?= $a->nama_matkul ?></option>;
								<?php } ?>
							</select>
							<span class="input-group-addon">
								<span class="fa fa-list"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
					</div>

                    <div class="form-group">
						<label for="kelas" class="control-label">Kelas <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="kelas" id="kelas" data-error="Kelas harus diisi" placeholder="Kelas" value="" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
					</div>
					
					<div class="form-group">
						<label for="perguruan_tinggi" class="control-label">Perguruan Tinggi <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="perguruan_tinggi" id="perguruan_tinggi" data-error="Perguruan Tinggi harus diisi" placeholder="Perguruan Tinggi" value="" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
					</div>
					                    
					<button type="submit" class="btn btn-info" name="submit"> Simpan </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>