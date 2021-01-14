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
                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>' . $error_upload . '</div>';
                }
                echo form_open_multipart('C_Master/input_karyawan');
                ?>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>NIK</label>
                            </span>
                            <input class="form-control" type="number" required name="nik" placeholder="nik" value="<?= set_value('nik'); ?>" />
                            <?= form_error('nik', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Nama</label>
                            </span>
                            <input class="form-control" required name="nama" placeholder="nama" value="<?= set_value('nama'); ?>" />
                            <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>No. HP</label>
                            </span>
                            <input class="form-control" required name="tlp" placeholder="6285771212732" value="<?= set_value('tlp'); ?>" />
                            <?= form_error('tlp', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label class="font-weight-bold" for="tanggal_mulai">Tanggal Masuk</label>
                                    </span>
                                    <input type="date" class="form-control" required name="tanggal_masuk" value="<?= set_value('tanggal_masuk'); ?> placeholder=" Masukkan tanggal masuk>
                                    <?= form_error('tanggal_masuk', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Jumlah Cuti</label>
                                    </span>
                                    <input class="form-control" required name="jumlah_cuti" placeholder="jumlah_cuti" value="<?= set_value('jumlah_cuti'); ?>" />
                                    <?= form_error('jumlah_cuti', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Level User</label>
                                    </span>
                                    <select name="level" id="level" class="form-control">
                                        <option value=""> -- Pilih Level --</option>
                                        <option value="HRD"> HRD </option>
                                        <option value="MGR"> MGR </option>
                                        <option value="SPV"> SPV </option>
                                        <option value="karyawan"> karyawan </option>
                                        <!-- <?php foreach ($jabatan as $key => $value) { ?>
                                            <option value="<?= $value->id_jabatan ?>"> <?= $value->jabatan ?></option>
                                        <?php } ?> -->
                                    </select>
                                    <!-- <input class="form-control" required name="jabatan" placeholder="jabatan" value="<?= set_value('level'); ?>" /> -->
                                    <?= form_error('level', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Departement</label>
                                    </span>
                                    <select name="departement" id="departement" class="form-control">
                                        <option value=""> -- Pilih Departement --</option>
                                        <?php foreach ($departement as $key => $value) { ?>
                                            <option value="<?= $value->id_departement ?>"> <?= $value->departement ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('departement', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>company</label>
                                    </span>
                                    <select name="company" id="company" class="form-control">
                                        <option value=""> -- Pilih company --</option>
                                        <?php foreach ($company as $key => $value) { ?>
                                            <option value="<?= $value->company ?>"> <?= $value->company ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('company', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Jabatan</label>
                                    </span>
                                    <select name="jabatan" id="jabatan" class="form-control">
                                        <option value=""> -- Pilih Jabatan --</option>
                                        <?php foreach ($jabatan as $key => $value) { ?>
                                            <option value="<?= $value->id_jabatan ?>"> <?= $value->jabatan ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- <input class="form-control" required name="jabatan" placeholder="jabatan" value="<?= set_value('jabatan'); ?>" /> -->
                                    <?= form_error('jabatan', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Username</label>
                                    </span>
                                    <input class="form-control" required name="username" placeholder="username" value="<?= set_value('username'); ?>" />
                                    <?= form_error('username', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Password</label>
                                    </span>
                                    <input class="form-control" type="password" id="password" required name="password" placeholder="password" value="<?= set_value('password'); ?>" />
                                    <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Uploud TTD</label>
                            </span>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="gambar">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
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