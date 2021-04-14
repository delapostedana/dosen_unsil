<section class="content">
	<div class="row">
		<div class='col-xs-12'>
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Publikasi</h3>
				</div>
				<div class="box-body">
					<?php
					echo form_open('publikasi/post', array('role' => "form", 'id' => "myForm", 'data-toggle' => "validator"));
					?>
					<div class="form-group">
						<label for="judul_pub" class="control-label">Judul Publikasi <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="judul_pub" id="judul_pub" data-error="Judul Publikasi harus diisi" placeholder="Judul Publikasi" value="" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
						<label for="jurnal" class="control-label">Jurnal <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="jurnal" id="jurnal" data-error="Jurnal harus diisi" placeholder="Jurnal" value="" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
                    </div>
                
                    <div class="form-group">
						<label for="no_artikel" class="control-label">No Artikel</label>
						<div class="input-group">
							<input type="text" class="form-control" name="no_artikel" id="no_artikel" data-error="No Artikel harus diisi" placeholder="No Artikel" value="" />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
                    </div>
                    
                    <div class="form-group">
						<label for="volume" class="control-label">Volume</label>
						<div class="input-group">
							<input type="text" class="form-control" name="volume" id="volume" data-error="Volume harus diisi" placeholder="Volume" value="" />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
					</div>
					
					<div class="form-group">
						<label for="tahun" class="control-label">Tahun <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="number" class="form-control" name="tahun" id="tahun" data-error="Tahun harus diisi" placeholder="Tahun" value="" required />
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