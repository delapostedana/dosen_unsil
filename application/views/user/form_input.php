<section class="content">
	<div class="row">
		<div class='col-xs-12'>
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah User</h3>
				</div>
				<div class="box-body">
					<?php
					echo form_open('user/post', array('role' => "form", 'id' => "myForm", 'data-toggle' => "validator"));
					?>
					<div class="form-group">
						<label for="nama_user" class="control-label">Nama User <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="nama_user" id="nama_user" data-error="Nama User harus diisi" placeholder="Nama User" value="<?= set_value('nama_user')?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
						<label for="username" class="control-label">Username <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="text" class="form-control" name="username" id="username" data-error="Username harus diisi" placeholder="Username" value="<?= set_value('username')?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
						<span class="text-danger ml-1"><?php echo form_error('username'); ?></span>
					</div>
					
					<div class="form-group">
						<label for="email" class="control-label">Email <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="email" class="form-control" name="email" id="email" data-error="Email harus diisi (contoh: example@gmail.com)" placeholder="Email" value="<?= set_value('email')?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
						<span class="text-danger ml-1"><?php echo form_error('email'); ?></span>
                    </div>
                
                    <div class="form-group">
						<label for="password" class="control-label">Password <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="password" class="form-control" name="password" id="password" data-error="Password harus diisi" placeholder="Password" value="<?= set_value('password')?>" required/>
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
						<span class="text-danger ml-1"><?php echo form_error('password'); ?></span>
                    </div>
                    
                    <div class="form-group">
						<label for="passconf" class="control-label">Konfirmasi Password <span style="color:red"> *</span></label>
						<div class="input-group">
							<input type="password" class="form-control" name="passconf" id="passconf" data-error="Konfirmasi Password harus diisi" placeholder="Konfirmasi Password" value="<?= set_value('passconf')?>" required />
							<span class="input-group-addon">
								<span class="fa fa-cube"></span>
							</span>
						</div>
						<div class="help-block with-errors"></div>
						<span class="text-danger ml-1"><?php echo form_error('passconf'); ?></span>
					</div>
					
					<div class="form-group">
						<label for="role" class="control-label">Role <span style="color:red"> *</span></label>
						<div class="input-group">
                        <select class="form-control" name="role" data-error="Role harus diisi" required>
								<option value=''>- PILIH -</option>;
								<option value='1' <?= set_value('role') == 1 ? 'selected': null ?>>Admin</option>;
								<option value='2' <?= set_value('role') == 2 ? 'selected': null ?>>Approver</option>;
								<option value='3' <?= set_value('role') == 3 ? 'selected': null ?>>Dosen</option>;
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