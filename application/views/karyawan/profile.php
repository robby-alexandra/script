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
            </div>
        </div>
    </div>
</body>

</html>