<div class="row">
    <div class="col-md-3"></div>
    <!-- left column -->
    <div class="col-md-6">
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
                echo form_open('C_Master/edit_datacuti/' . $cuti->kode);

                ?>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>kode</label>
                            </span>
                            <input class="form-control" required readonly name="kode" value="<?= $cuti->kode ?>" />
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Nama</label>
                            </span>
                            <select name="nik" id="nik" class="form-control">
                                <option value=""> -- Pilih Karyawan --</option>
                                <?php foreach ($karyawan as $key => $value) { ?>
                                    <option value="<?= $value->nik ?>" <?= $value->nik == $cuti->nik ? "selected" : null ?>> <?= $value->nama ?> - <?= $value->nik ?></option>
                                <?php } ?>
                            </select>
                            <?= form_error('nik', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Jenis Cuti</label>
                            </span>
                            <select name="jenis_cuti" id="jenis_cuti" class="form-control">
                                <option value=""> -- Pilih Jenis Cuti --</option>
                                <?php foreach ($jeniscuti as $key => $value) { ?>
                                    <option value="<?= $value->nama_cuti ?>" <?= $value->nama_cuti == $cuti->jenis_cuti ? "selected" : null ?>> <?= $value->nama_cuti ?></option>
                                <?php } ?>
                            </select>
                            <?= form_error('jenis_cuti', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label class="font-weight-bold" for="tanggal_awal">Tanggal Awal</label>
                                    </span>
                                    <input type="date" class="form-control" required name="tanggal_awal" value="<?= $cuti->tanggal_awal ?>" placeholder=" Masukkan tanggal masuk">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label class="font-weight-bold" for="tanggal_akhit">Tanggal Akhir</label>
                                    </span>
                                    <input type="date" class="form-control" required name="tanggal_akhir" value="<?= $cuti->tanggal_akhir ?>" placeholder=" Masukkan tanggal masuk">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Jumlah Cuti</label>
                                    </span>
                                    <input class="form-control" required readonly name="jumlah" value="<?= $cuti->jumlah ?>" />
                                    <?= form_error('jumlah', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Pilih Atasan</label>
                                    </span>
                                    <select name="atasan" id="atasan" class="form-control">
                                        <option value=""> -- Pilih Atasan --</option>
                                        <?php foreach ($jabatan as $key => $value) { ?>
                                            <option value="<?= $value->nama ?>" <?= $value->nama == $cuti->atasan ? "selected" : null ?>> <?= $value->nama ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('atasan', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Keterangan</label>
                            </span>
                            <textarea class="form-control" required name="ket"> <?= $cuti->ket ?> </textarea>
                            <?= form_error('ket', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>status</label>
                            </span>
                            <input class="form-control" required readonly name="status" value="<?= $cuti->status ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
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