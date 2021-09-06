<section class="content">
    <div id="flash" data-flash="<?= $this->session->flashdata('notif') ?>">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class='box-header  with-border'>
                        <h3 class='box-title'>Profile User</h3>
                    </div>
                    <div class="box-body">
                        <form action="profile" role="form" id="myForm" data-toggle="validator" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="true">
                            <div class="callout callout-info">
                                <h4 class="text-center">AKUN USER</h4>
                            </div>
                            <?php
                            $role = $this->fungsi->user_login()->id_role;
                            if ($role != 3) {
                            ?>
                                <div class="form-group">
                                    <label for="nama_user" class="control-label">Nama User <span style="color:red"> *</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama Dosen" data-error="Nama dosen harus diisi" value="<?= ucfirst($record['nama_user']) ?>" required="">
                                        <span class="input-group-addon">
                                            <span class="fa fa-cube"></span>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="username" class="control-label">Username <span style="color:red"> *</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" data-error="Username harus diisi" value="<?= $record['username'] ?>" required="">
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube"></span>
                                    </span>
                                </div>
                                <div class="help-block with-errors"></div>
                                <span class="text-danger ml-1"><?php echo form_error('username'); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label">Ganti Password </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Kosongkan jika tidak ingin mengganti password" value="">
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube"></span>
                                    </span>
                                </div>
                                <span class="text-danger ml-1"><?php echo form_error('password'); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="passconf" class="control-label">Konfirmasi Password </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="passconf" id="passconf" placeholder="Kosongkan jika tidak ingin mengganti password" value="">
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube"></span>
                                    </span>
                                </div>
                                <span class="text-danger ml-1"><?php echo form_error('passconf'); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="role" class="control-label">Role <span style="color:red"> *</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="role" id="role" placeholder="Username" data-error="Username harus diisi" value="<?php $role = $record['id_role'];
                                                                                                                                                                    if ($role == 1) {
                                                                                                                                                                        echo 'Admin';
                                                                                                                                                                    } else if ($role == 2) {
                                                                                                                                                                        echo 'Approver';
                                                                                                                                                                    } else if ($role == 3) {
                                                                                                                                                                        echo 'dosen';
                                                                                                                                                                    }
                                                                                                                                                                    ?>" required="" disabled>
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube"></span>
                                    </span>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                            <?php
                            $role = $this->fungsi->user_login()->id_role;
                            if ($role != 3) {
                            ?>
                            <div class="form-group">
                                <label for="foto" class="control-label">Foto</label>
                                <div class="input-group">
                                    <input type="file" name="foto" class="form-control">
                                    <span class="input-group-addon">
                                        <span class="fa fa-photo">
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <?php } ?>

                            <?php $role = $this->fungsi->user_login()->id_role;
                            if ($role == 3) { ?>
                                <div class="callout callout-info">
                                    <h4 class="text-center">DATA USER</h4>
                                </div>
                                <div class="form-group">
                                    <label for="nama_user" class="control-label">Nama Dosen <span style="color:red"> *</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama Dosen" data-error="Nama dosen harus diisi" value="<?= ucfirst($record['nama_user']) ?>" required="">
                                        <span class="input-group-addon">
                                            <span class="fa fa-cube"></span>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="nip" class="control-label">NIP Dosen <span style="color:red"> *</span></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" data-error="NIP harus diisi" name="nip" id="nip" placeholder="NIP Dosen" value="<?= $record['nip'] ?>" required="">
                                        <span class="input-group-addon">
                                            <span class="fa fa-cube"></span>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="nidn" class="control-label">NIDN <span style="color:red"> *</span></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" data-error="NIDN harus diisi" name="nidn" id="nidn" placeholder="NIDN" value="<?= $record['nidn'] ?>" required="">
                                        <span class="input-group-addon">
                                            <span class="fa fa-cube"></span>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="id_scopus" class="control-label">ID Scopus <span style="color:red"> *</span></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" data-error="ID Scopus harus diisi" name="id_scopus" id="id_scopus" placeholder="ID Scopus" value="<?= $record['id_scopus'] ?>" required="">
                                        <span class="input-group-addon">
                                            <span class="fa fa-cube"></span>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="fakultas" class="control-label">Fakultas <span style="color:red"> *</span></label>
                                    <div class="input-group">
                                        <select class="form-control" name="fakultas" data-error="Fakultas harus diisi" required>
                                            <option value="">- PILIH -</option>
                                            <?php foreach ($fakultas as $a) { ?>
                                                <option value="<?= $a->nama_fakul ?>" <?php if ($record['fakultas'] == $a->nama_fakul) {
                                                                                            echo 'selected';
                                                                                        } ?>><?= $a->nama_fakul ?></option>
                                            <?php } ?>
                                        </select>
                                        <span class="input-group-addon">
                                            <span class="fa fa-list"></span>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

								<div class="form-group">
                                    <label for="program_studi" class="control-label">Program Studi <span style="color:red"> *</span></label>
                                    <div class="input-group">
                                        <select class="form-control" name="program_studi" data-error="Program studi harus diisi" required>
                                            <option value="">- PILIH -</option>
                                            <?php
											foreach ($prodi as $a) { ?>
                                                <option value="<?= $a->nama_prodi ?>" 
												<?php 
												if ($record['program_studi'] == $a->nama_prodi) {
														echo 'selected';
													} 
													?>>
													<?= $a->nama_prodi ?>
													</option>
                                            	<?php } ?>
                                        </select>
                                        <span class="input-group-addon">
                                            <span class="fa fa-list"></span>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="jk" class="control-label">Jenis Kelamin <span style="color:red"> *</span></label>
                                    <div class="input-group">
                                        <select class="form-control" name="jk" required data-error="Jenis Kelamin harus diisi">
                                            <option value="">- PILIH -</option>
                                            <option value="Laki-laki" <?php if ($record['jk'] == 'Laki-laki') {
                                                                            echo 'selected';
                                                                        } ?>>Laki-laki</option>
                                            <option value="Perempuan" <?php if ($record['jk'] == 'Perempuan') {
                                                                            echo 'selected';
                                                                        } ?>>Perempuan</option>
                                        </select>
                                        <span class="input-group-addon">
                                            <span class="fa fa-list"></span>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="jabatan" class="control-label">Jabatan Fungsional <span style="color:red"> *</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" data-error="Jabatan Fungsional harus diisi" name="jabatan" id="jabatan" placeholder="Jabatan Fungsional" value="<?= $record['jabatan'] ?>" required="">
                                        <span class="input-group-addon">
                                            <span class="fa fa-cube"></span>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="pendidikan_tertinggi" class="control-label">Pendidikan Tertinggi <span style="color:red"> *</span></label>
                                    <div class="input-group">
                                        <select class="form-control" name="pendidikan_tertinggi" data-error="Pendidikan tertinggi harus diisi" required>
                                            <option value=''>- PILIH -</option>;
                                            <option value='D1' <?php if ($record['pendidikan_tertinggi'] == 'D1') {
                                                                    echo 'selected';
                                                                } ?>>D1</option>;
                                            <option value='D2' <?php if ($record['pendidikan_tertinggi'] == 'D2') {
                                                                    echo 'selected';
                                                                } ?>>D2</option>;
                                            <option value='D3' <?php if ($record['pendidikan_tertinggi'] == 'D3') {
                                                                    echo 'selected';
                                                                } ?>>D3</option>;
                                            <option value='D4' <?php if ($record['pendidikan_tertinggi'] == 'D4') {
                                                                    echo 'selected';
                                                                } ?>>D4</option>;
                                            <option value='S1' <?php if ($record['pendidikan_tertinggi'] == 'S1') {
                                                                    echo 'selected';
                                                                } ?>>S1</option>;
                                            <option value='S2' <?php if ($record['pendidikan_tertinggi'] == 'S2') {
                                                                    echo 'selected';
                                                                } ?>>S2</option>;
                                            <option value='S3' <?php if ($record['pendidikan_tertinggi'] == 'S3') {
                                                                    echo 'selected';
                                                                } ?>>S3</option>;
                                        </select>
                                        <span class="input-group-addon">
                                            <span class="fa fa-list"></span>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="status_ikatan_kerja" class="control-label">Status Ikatan Kerja <span style="color:red"> *</span></label>
                                    <div class="input-group">
                                        <select class="form-control" name="status_ikatan_kerja" data-error="Status ikatan kerja harus diisi" required>
                                            <option value="">- PILIH -</option>
                                            <option value="Dosen Tetap" <?php if ($record['status_ikatan_kerja'] == 'Dosen Tetap') {
                                                                            echo 'selected';
                                                                        } ?>>Dosen Tetap</option>
                                            <option value="Dosen Tidak Tetap" <?php if ($record['status_ikatan_kerja'] == 'Dosen Tidak Tetap') {
                                                                                    echo 'selected';
                                                                                } ?>>Dosen Tidak Tetap</option>
                                        </select>
                                        <span class="input-group-addon">
                                            <span class="fa fa-list"></span>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="status_aktivitas" class="control-label">Status Aktivitas <span style="color:red"> *</span></label>
                                    <div class="input-group">
                                        <select class="form-control" name="status_aktivitas" required data-error="Status aktivitas harus diisi">
                                            <option value="">- PILIH -</option>
                                            <option value="Aktif" <?php if ($record['status_aktivitas'] == 'Aktif') {
                                                                        echo 'selected';
                                                                    } ?>>Aktif</option>
                                            <option value="Tidak Aktif" <?php if ($record['status_aktivitas'] == 'Tidak Aktif') {
                                                                            echo 'selected';
                                                                        } ?>>Tidak Aktif</option>
                                        </select>
                                        <span class="input-group-addon">
                                            <span class="fa fa-list"></span>
                                        </span>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="foto" class="control-label">Foto</label>
                                    <div class="input-group">
                                        <input type="file" name="foto" class="form-control">
                                        <span class="input-group-addon">
                                            <span class="fa fa-photo">
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="box-footer">
                                <input type="hidden" name="id_user" value="<?php echo $record['id_user'] ?>">
                                <button type="submit" name="submit" class="btn btn-primary disabled">Simpan</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </form>

                    </div><!-- /.box -->
                </div>

            </div>
        </div>

</section>

<script src="<?php echo base_url() ?>assets/app/js/alert.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
