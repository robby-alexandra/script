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
                                    <b> History Cuti</b> <a href="<?= base_url('C_Master/profile') ?>" class=" float-right btn-success btn-sm" data-toggle="tab">Cek</a>
                                </li>
                            </ul>
                            <a href="<?= base_url('C_Master/input_cuti'); ?>" class="btn btn-primary btn-block"><b>Ajukan Cuti</b></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center" style="background-color: #e3f2fd;">
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Tgl Cuti</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($historycuti as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>

                                    <td><?= $value->kode ?></td>
                                    <td><?= $value->nama ?></td>
                                    <td><?= $value->tanggal_awal ?> <b> s/d</b> <?= $value->tanggal_akhir ?></td>
                                    <td><?= $value->ket ?></td>

                                    <td class="project-state">
                                        <?php
                                        if ($value->status == 'Pending') {
                                            echo "<span class='badge badge-warning'> Pending</span>";
                                        } elseif ($value->status == 'Approved') {
                                            echo "<span class='badge badge-success'> Approved</span>";
                                        } else {
                                            echo "<span class='badge badge-danger'> Rejected</span>";
                                        }
                                        ?>
                                    </td>
                                <?php } ?>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
</body>

</html>