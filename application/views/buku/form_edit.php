<section class="content">
	<div class="row">
		<div class='col-xs-12'>
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Buku</h3>
				</div>
				<div class="box-body">
					<?php
					echo form_open('buku/edit', array('role' => "form", 'id' => "myForm", 'data-toggle' => "validator"));
					?>
					<div class="form-group">
						<label for="judul_buku" class="control-label">Judul Buku <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="judul_buku" id="judul_buku" data-error="Judul Buku harus diisi" placeholder="Judul Buku" value="<?php echo $record['judul_buku'];?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
						<label for="isbn" class="control-label">ISBN <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="isbn" id="isbn" data-error="ISBN harus diisi" placeholder="ISBN" value="<?php echo $record['isbn'];?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
                    </div>
                
                    <div class="form-group">
						<label for="penerbit" class="control-label">Penerbit <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="penerbit" id="penerbit" data-error="Penerbit harus diisi" placeholder="Penerbit" value="<?php echo $record['penerbit'];?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
                    </div>
                                       				
					<div class="form-group">
						<label for="tahun_terbit" class="control-label">Tahun Terbit <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="number" class="form-control" name="tahun_terbit" id="tahun_terbit" data-error="Tahun Terbit harus diisi" placeholder="Tahun Terbit" value="<?php echo $record['tahun_terbit'];?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
					</div>
                    
                    <input type="hidden" name="id" value="<?php echo $record['id_buku'] ?>">
					<button type="submit" class="btn btn-info" name="submit"> Simpan </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>