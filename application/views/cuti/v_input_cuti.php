<div class="row">
    <div class="col-md-3"></div>
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card-primary">
            <div class="register-card-body">

                <div class="bg-primary"><span class="login-box-msg">
                        <h2><?= $title ?></h2>
                    </span></div>

                <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success mt-2">';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }
                echo form_open('C_Master/input_cuti');

                ?>
                <form method="POST" id="formfield" action="#" enctype="multipart/form-data" onsubmit="return validateForm();">


                    <div class="card-body">
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>kode</label>
                            </span>
                            <input type='hidden' class='form-control' name='chat_id' id='telegram_id' value='-424601956'>
                            <input class="form-control" required readonly id="kode" name="kode" placeholder="kode" value="<?php echo $kode; ?>" />
                            <?= form_error('kode', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label class="control-label">Karyawan</label>
                            </span>
                            <?php if ($this->session->userdata('level') != 'Karyawan') { ?>
                                <select required name="nik" id="nik" class="form-control">
                                    <option value=""> -- Pilih Karyawan --</option>
                                    <?php foreach ($karyawan as $key => $value) { ?>
                                        <option value="<?= $value->nik ?>"> <?= $value->nama ?>-<?= $value->nik ?></option>
                                    <?php } ?>
                                </select>
                            <?php } else { ?>
                                <select readonly name="nik" id="nik" class="form-control">
                                    <option value="<?= $this->llogin->user_login()->nik ?>"> <?= $this->llogin->user_login()->nama ?></option>
                                    <!-- <option value="<?= $value->nik ?>"><?= $this->llogin->user_login()->nama ?>-<?= $this->llogin->user_login()->nik ?></option> -->
                                </select>
                            <?php }  ?>
                            <?= form_error('nik', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label class="font-weight-bold" for="tanggal_awal">Tanggal Awal</label>
                                    </span>
                                    <input type='date' class="form-control" id="tanggal_awal" required name="tanggal_awal" value="<?= set_value('tanggal_awal'); ?> placeholder=" Masukkan tanggal awal>
                                    <?= form_error('tanggal_awal', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label class="font-weight-bold" for="tanggal_akhir">Tanggal Akhir</label>
                                    </span>
                                    <input class="form-control" type='date' id="tanggal_akhir" required name="tanggal_akhir" value="<?= set_value('tanggal_akhir'); ?> placeholder=" Masukkan tanggal akhir>
                                    <?= form_error('tanggal_akhir', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Jenis Cuti</label>
                            </span>
                            <select required name="jenis_cuti" id="jenis_cuti" class="form-control">
                                <option value=""> -- Pilih Jenis Cuti --</option>
                                <?php foreach ($jeniscuti as $key => $value) { ?>
                                    <option value="<?= $value->nama_cuti ?>"> <?= $value->nama_cuti ?></option>
                                <?php } ?>
                            </select>
                            <?= form_error('jenis_cuti', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row">
                            <!-- <div class="col-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Jumlah Cuti</label>
                                    </span>

                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <input id='hasil' type='text' name="jumlah" class="form-control" value="<?= set_value('jumlah'); ?>" />
                                        </div>
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Hari</label>
                                    </div>
                                    <?= form_error('jumlah', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div> -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Pilih Atasan</label>
                                    </span>
                                    <select required name="atasan" id="atasan" class="form-control">
                                        <option value=""> -- Pilih Atasan --</option>
                                        <?php foreach ($jabatan as $key => $value) { ?>
                                            <option value="<?= $value->nama ?>"> <?= $value->nama ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('atasan', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>Notlp Atasan</label>
                                    </span>
                                    <input type="text" id="nowa" nama="nowa">

                                    <?= form_error('atasan', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div> -->
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Keterangan</label>
                            </span>
                            <textarea class="form-control" required name="ket" id="ket" placeholder="ket" value="<?= set_value('ket'); ?>"></textarea>
                            <?= form_error('ket', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>No. Tlp dihubungi saat cuti</label>
                                    </span>
                                    <input class="form-control" required name="tlp" id="tlp" placeholder="6285771212732" value="<?= set_value('tlp'); ?>" />
                                    <?= form_error('tlp', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="fas fa-user">
                                        <label>A/N</label>
                                    </span>
                                    <input class="form-control" required id="pemilik" name="pemilik" placeholder="Nama Pemilik" value="<?= set_value('tlp'); ?>" />
                                    <?= form_error('tlp', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Status</label>
                            </span>
                            <select name='status' id='status' class='form-control' required value="<?= set_value('status'); ?>">
                                <option value="">-- Pilih Status --</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                                <option value="Pending">Pending</option>
                            </select>
                            <!-- <input class="form-control" required name="status" placeholder="status" value="<?= set_value('status'); ?>" /> -->
                            <?= form_error('status', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-8">

                        </div>
                        <div class="col-4">
                            <input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-primary btn-block" />

                        </div>

                    </div>

                    <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    Confirm Submit
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to submit the following details?
                                    <table class="table">
                                        <tr>
                                            <th>Kode Cuti</th>
                                            <td id="kd"></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Cuti</th>
                                            <td id="awal"></td>
                                        </tr>
                                        <tr>
                                            <th>Akhir Cuti</th>
                                            <td id="akhir"></td>
                                        </tr>
                                        <tr>
                                            <th>Atasan</th>
                                            <td id="pimpinan"></td>
                                        </tr>
                                        <tr>
                                            <th>Keterangan</th>
                                            <td id="kt"></td>
                                        </tr>
                                        <tr>
                                            <th>Nomer Tlp Saat Cuti</th>
                                            <td id="telp" id="an"></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Pemilik Tlp</th>
                                            <td id="an"></td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" id="sendToGroup" class="btn btn-primary btn-block">Add</button>
                                    <?= $button ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- 
                <script>
                    $(document).ready(function() {
                        $('#atasan').change(function() {
                            var id = $(this).val();
                            console.log(id);
                            $.ajax({
                                type: "POST",
                                url: "<?= base_url() ?>"

                            })
                        });
                    });
                </script> -->



                <script>
                    $('#submitBtn').click(function() {
                        $('#kd').text($('#kode').val());
                        $('#awal').text($('#tanggal_awal').val());
                        $('#akhir').text($('#tanggal_akhir').val());
                        $('#jumlah').text($('#hasil').val());
                        $('#pimpinan').text($('#atasan').val());
                        $('#kt').text($('#ket').val());
                        $('#telp').text($('#tlp').val());
                        $('#an').text($('#pemilik').val());
                    });
                </script>

            </div>
        </div>
        <?= form_close(); ?>
        <!--/.col (left) -->

    </div>
    <div class="col-md-3"></div>
    <!-- /.row -->
</div>

<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>