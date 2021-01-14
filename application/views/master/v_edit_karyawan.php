<div class="row">
    <div class="col-md-2"></div>
    <!-- left column -->
    <div class="col-md-8">
        <!-- general form elements -->
        <div class="card-primary">
            <div class="register-card-body">
                <h3>
                    <div class="bg-primary"><span class="login-box-msg">
                            <p class="login-box-msg"><?= $title ?></p>
                        </span></div>
                </h3>
                <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success mt-2">';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }
                echo form_open('C_Master/edit_datakaryawan/' . $karyawan->nik);
                ?>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>NIK</label>
                            </span>
                            <input class="form-control" readonly required name="nik" placeholder="nik" value="<?= $karyawan->nik ?>" />
                            <?= form_error('nik', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Nama</label>
                            </span>
                            <input class="form-control" required name="nama" placeholder="nama" value="<?= $karyawan->nama ?>" />
                            <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>No. HP</label>
                            </span>
                            <input class="form-control" required name="tlp" placeholder="6285771212732" value="<?= $karyawan->tlp ?>" />
                            <?= form_error('tlp', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label class="font-weight-bold" for="tanggal_mulai">Tanggal Masuk</label>
                            </span>
                            <input type="date" class="form-control" required name="tanggal_masuk" value="<?= $karyawan->tanggal_masuk ?>" placeholder=" Masukkan tanggal masuk">
                            <?= form_error('tanggal_masuk', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>username</label>
                                    </span>
                                    <input class="form-control" required name="username" placeholder="username" value="<?= $karyawan->username ?>" />
                                    <?= form_error('username', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>level User</label>
                                    </span>
                                    <select name="level" id="level" class="form-control">
                                        <option value="<?= $karyawan->level ?>" <?= $karyawan->level == $karyawan->level ? "selected" : null ?>> <?= $karyawan->level ?></option>
                                        <option value="HRD"> HRD </option>
                                        <option value="MGR"> MGR </option>
                                        <option value="SPV"> SPV </option>
                                        <option value="karyawan"> karyawan </option>
                                    </select>
                                    <?= form_error('departement', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>departement</label>
                                    </span>
                                    <select name="departement" id="departement" class="form-control">
                                        <option value=""> -- Pilih Departement --</option>
                                        <?php foreach ($departement as $key => $value) { ?>
                                            <option value="<?= $value->id_departement ?>" <?= $value->id_departement == $karyawan->id_departement ? "selected" : null ?>> <?= $value->departement ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('departement', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>company</label>
                                    </span>
                                    <select name="company" id="company" class="form-control">
                                        <option value=""> -- Pilih company --</option>
                                        <?php foreach ($company as $key => $value) { ?>
                                            <option value="<?= $value->company ?>" <?= $value->company == $karyawan->company ? "selected" : null ?>> <?= $value->company ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('company', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Jabatan</label>
                                    </span>
                                    <select name="jabatan" id="jabatan" class="form-control">
                                        <option value=""> -- Pilih Jabatan --</option>
                                        <?php foreach ($jabatan as $key => $value) { ?>
                                            <option value="<?= $value->id_jabatan ?>" <?= $value->id_jabatan == $karyawan->id_jabatan ? "selected" : null ?>> <?= $value->jabatan ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- <input class="form-control" required name="jabatan" placeholder="jabatan" value="<?= set_value('jabatan'); ?>" /> -->
                                    <?= form_error('jabatan', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Jumlah Cuti</label>
                                    </span>
                                    <input class="form-control" required name="jumlah_cuti" placeholder="jumlah_cuti" value="<?= $karyawan->jumlah_cuti ?>" />
                                    <?= form_error('jumlah_cuti', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <!-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                <label class="form-check-label" for="is_active">
                                    Active ??
                                </label>
                            </div> -->
                            <div class="card-body">
                                <label for="is_active">Status Karyawan</label>
                                <input type="checkbox" name="is_active" id="is_active" value="1" <?= ($karyawan->is_active == 1) ? 'checked' : '' ?> data-bootstrap-switch data-off-color="danger" data-on-color="success">
                            </div>
                        </div>

                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
        </div>
        <?= form_close(); ?>
        <!--/.col (left) -->

    </div>
    <div class="col-md-3"></div>
    <!-- /.row -->
</div>