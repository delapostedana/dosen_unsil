<section class="content">
	<div class="row">
		<div class='col-xs-12'>
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title"> Edit Data Program Studi</h3>
				</div>
				<div class="box-body">
					<?php
					echo form_open('prodi/edit', array('role' => "form", 'id' => "myForm", 'data-toggle' => "validator"));
					?>
					<div class="form-group">
						<label for="prodi" class="control-label">Nama Program Studi <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="prodi" id="prodi" data-error="Nama Program Studi harus diisi" placeholder="Nama Program Studi" value="<?php echo $record['nama_prodi']; ?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
					</div>
					<input type="hidden" name="id" value="<?php echo $record['id_prodi'] ?>">
					<button type="submit" class="btn btn-info" name="submit"> simpan </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
