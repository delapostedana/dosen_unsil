<section class="content">
	<div class="row">
		<div class='col-xs-12'>
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Riwayat Pendidikan</h3>
				</div>
				<div class="box-body">
					<?php
					echo form_open('pendidikan/post', array('role' => "form", 'id' => "myForm", 'data-toggle' => "validator"));
					?>
					<div class="form-group">
						<label for="perguruan_tinggi" class="control-label">Nama Perguruan Tinggi <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="perguruan_tinggi" id="perguruan_tinggi" data-error="Nama Perguruan Tinggi harus diisi" placeholder="Nama Perguruan Tinggi" value="" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
						<label for="gelar_akademik" class="control-label">Gelar Akademik <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="gelar_akademik" id="gelar_akademik" data-error="Gelar Akademik harus diisi" placeholder="Gelar Akademik" value="" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
					</div>
					
					<div class="form-group">
						<label for="tahun_ijazah" class="control-label">Tahun Ijazah <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="tahun_ijazah" id="tahun_ijazah" data-error="Tahun Ijazah harus diisi" placeholder="Tahun Ijazah" value="" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
					</div>
					
					<div class="form-group">
						<label for="jenjang" class="control-label">Jenjang <span style="color:red"> *</span></label>
						<div class="input-group">
							<select class="form-control" name="jenjang" data-error="Jenjang harus diisi" required>
								<option value=''>- PILIH -</option>;
								<option value='D1'>D1</option>;
								<option value='D2'>D2</option>;
								<option value='D3'>D3</option>;
								<option value='D4'>D4</option>;
								<option value='S1'>S1</option>;
								<option value='S2'>S2</option>;
								<option value='S3'>S3</option>;
							</select>
							<span class="input-group-addon">
								<span class="fa fa-list"></span>
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