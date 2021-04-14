<section class="content">
	<div class="row">
		<div class='col-xs-12'>
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Data Mata Kuliah</h3>
				</div>
				<div class="box-body">
					<?php
					echo form_open('matkul/post', array('role' => "form", 'id' => "myForm", 'data-toggle' => "validator"));
					?>
					<div class="form-group">
						<label for="matkul" class="control-label">Nama Mata Kuliah <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="matkul" id="matkul" data-error="Nama Mata Kuliah harus diisi" placeholder="Nama Mata Kuliah" value="" required />
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