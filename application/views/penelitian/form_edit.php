<section class="content">
	<div class="row">
		<div class='col-xs-12'>
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Penelitian</h3>
				</div>
				<div class="box-body">
					<?php
					echo form_open('penelitian/edit', array('role' => "form", 'id' => "myForm", 'data-toggle' => "validator"));
					?>
						<div class="form-group">
						<label for="judul" class="control-label">Judul Penelitian <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="judul" id="judul" data-error="Judul harus diisi" placeholder="Judul" value="<?php echo $record['judul'];?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
						<label for="bidang_ilmu" class="control-label">Bidang Ilmu <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="bidang_ilmu" id="bidang_ilmu" data-error="Bidang Ilmu harus diisi" placeholder="Bidang Ilmu" value="<?php echo $record['bidang_ilmu'];?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
                    </div>
                
                    <div class="form-group">
						<label for="lembaga" class="control-label">Lembaga <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="lembaga" id="lembaga" data-error="Lembaga harus diisi" placeholder="Lembaga" value="<?php echo $record['lembaga'];?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
					</div>
					
					<div class="form-group">
						<label for="tahun" class="control-label">Tahun <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="number" class="form-control" name="tahun" id="tahun" data-error="Tahun harus diisi" placeholder="Tahun" value="<?php echo $record['tahun'];?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
					</div>
                    
                    <input type="hidden" name="id" value="<?php echo $record['id_penelitian'] ?>">
					<button type="submit" class="btn btn-info" name="submit"> Simpan </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>