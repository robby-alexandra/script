<!DOCTYPE html>
<html>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <!-- Profile Image -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <?php
                        if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-success mt-2">';
                            echo $this->session->flashdata('pesan');
                            echo '</div>';
                        }

                        ?>
                        <?php
                        if ($this->session->flashdata('hapus')) {
                            echo '<div class="alert alert-danger mt-2">';
                            echo $this->session->flashdata('hapus');
                            echo '</div>';
                        }
                        ?>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url() ?>/assets/dist/img/user4-128x128.jpg" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center"><?= $this->llogin->user_login()->nama ?></h3>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Cuti Sisa</b> <a class="float-right badge badge-primary"><?= $this->llogin->user_login()->jumlah_cuti ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Profile</b><a href="<?= base_url('C_Master/update_profile/' . $this->llogin->user_login()->nik) ?>" class="float-right btn-danger btn-sm">Edit</a>
                                </li>
                                <li class="list-group-item">
                                    <b>History Cuti</b><a href="<?= base_url('C_Master/cek_cuti') ?>" class="float-right btn-success btn-sm">Cek</a>

                                </li>
                            </ul>
                            <a href="<?= base_url('C_Master/input_cuti'); ?>" class="btn btn-primary btn-block"><b>Ajukan Cuti</b></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <?php
                        if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-success mt-2">';
                            echo $this->session->flashdata('pesan');
                            echo '</div>';
                        }
                        echo form_open('C_Master/update_profile/' . $karyawan->nik);

                        ?>
                        <form role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <span class="fas fa-id-card">
                                            <label>NIK</label>
                                        </span>
                                        <input type="text" name="nik" id="nik" readonly class="form-control" value="<?= $karyawan->nik ?>">
                                        <?= form_error('nik', ' <small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="fas fa-id-badge">
                                            <label>Nama</label>
                                        </span>
                                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $karyawan->nama ?>" readonly>
                                        <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="fas fa-house-user">
                                    <label for="address">Address</label>
                                </span>
                                <input type="text" name="address" class="form-control" id="address" placeholder="address" value="<?= $karyawan->address ?>">
                                <?= form_error('address', ' <small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <span class="fas fa-phone-alt">
                                    <label for="tlp">Phone</label>
                                </span>
                                <input type="text" name="tlp" class="form-control" id="tlp" placeholder="tlp" value="<?= $karyawan->tlp ?>">
                                <?= form_error('tlp', ' <small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <span class="fas fa-user-alt">
                                    <label for="username">Username</label>
                                </span>
                                <input type="text" name="username" class="form-control" id="username" placeholder="username" value="<?= $karyawan->username ?>">
                                <?= form_error('username', ' <small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <span class="fas fa-unlock-alt">
                                    <label for="password">New Password</label>
                                </span>
                                <input type="password" name="password" class="form-control" id="password" value="<?= set_value('password'); ?>" placeholder="password">
                                <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <span class="fas fa-key">
                                    <label for="password2">Re-Password</label>
                                </span>
                                <input type="password" name="password2" class="form-control" id="password2" value="<?= set_value('password2'); ?>" placeholder="password2">
                                <?= form_error('password2', ' <small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <?= form_close(); ?>
        </div>
    </div>




</body>

</html>