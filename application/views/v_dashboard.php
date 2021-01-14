<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Departement</span>
                        <span class="info-box-number">
                            <?= $this->db->get('departement')->num_rows(); ?>
                            <a href="<?= base_url('C_Master'); ?>" class="btn btn-sm btn-success float-right">Details</a>

                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Karyawan</span>
                        <span class="info-box-number"> <?= $this->db->get('Karyawan')->num_rows(); ?>
                            <a href="<?= base_url('C_Master/karyawan'); ?>" class="btn btn-sm btn-success float-right">Details</a>

                        </span>
                    </div>
                </div>
            </div>

            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Category Cuti</span>
                        <span class="info-box-number"><?= $this->db->get('jenis_cuti')->num_rows(); ?>
                            <a href="<?= base_url('C_Master/jenis_cuti'); ?>" class="btn btn-sm btn-success float-right">Details</a>
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Company</span>
                        <span class="info-box-number"><?= $this->db->get('company')->num_rows(); ?>
                            <a href="<?= base_url('C_Master/company'); ?>" class="btn btn-sm btn-success float-right">Details</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
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

            <div class="card-header border-transparent">
                <h3 class="card-title">DATA PEMOHON</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr class="text-center" style="background-color: #e3f2fd;">
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Tgl Cuti</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (
                                $this->session->userdata('level') == 'SuperAdmin' ||
                                $this->session->userdata('level') == 'HRD' ||
                                $this->session->userdata('level') == 'MGR' ||
                                $this->session->userdata('level') == 'SPV'
                            ) { ?>
                                <?php
                                foreach ($cuti as $key => $value) { ?>
                                    <tr class="text-center">
                                        <?php
                                        if ($value->status === 'Pending') { ?>
                                            <td><?= $value->kode ?></td>
                                            <td><?= $value->nama ?></td>
                                            <td><?= $value->tanggal_awal ?> s/d <?= $value->tanggal_akhir ?></td>
                                            <td><?= $value->ket ?></td>

                                            <?php
                                            echo "<td class='project-state'>";
                                            if ($value->status === 'Pending') {
                                                echo "<span class= 'badge badge-warning'> Pending</span>";
                                            }
                                            ?>
                                            </td>

                                            <div class="modal fade" id="modaldetailcuti" tabindex="-1" role="dialog" aria-labelledby="newmenumodalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">View Cuti</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="<?= base_url('Dashboard/reject/' . $value->kode) ?>" id="rejectform" method="post">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <span class="fas fa-user">
                                                                        <label>Kode</label>
                                                                    </span>
                                                                    <input class="form-control" readonly id="kode" required name="kode" value="<?= $value->kode ?>" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="fas fa-user">
                                                                        <label>Nama</label>
                                                                    </span>
                                                                    <input class="form-control" readonly id="nama" required name="nik" value="<?= $value->nik ?>-<?= $value->nama ?>" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="fas fa-user">
                                                                        <label>Alasan Cuti</label>
                                                                    </span>
                                                                    <textarea class="form-control" id="ket" required readonly name="ket"> <?= $value->ket ?> </textarea>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <span class="fas fa-user">
                                                                                <label>Periode Cuti</label>
                                                                            </span>
                                                                            <input class="form-control text-center" id="periode" required readonly name="tgl_cuti" value="<?= $value->tanggal_awal ?> s/d <?= $value->tanggal_akhir ?>" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <span class="fas fa-user">
                                                                                <label>Lama Cuti</label>
                                                                            </span>
                                                                            <input class="form-control text-center" required id="jumlah" readonly name="jumlah" value="<?= $value->jumlah ?>" />
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="form-group">
                                                                    <span class="fas fa-user">
                                                                        <label>Keterangan Reject</label>
                                                                    </span>
                                                                    <textarea class="form-control" required id="ket_atasan" placeholder="Alasan Wajib di isi " name="ket_atasan" value="<?= set_value('ket_atasan'); ?>"> </textarea>
                                                                    <?= form_error('ket_atasan', ' <small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <td>
                                                <?php if (
                                                    $value->atasan == $this->session->userdata('nama')
                                                ) { ?>
                                                    <a href="<?= base_url('Dashboard/acc/' . $value->kode) ?>" onclick="return confirm('Yakin Confrim Cuti ??')" class="btn bg-info btn-xs data-card-widget='collapse'"><i class=" fas fa-check"> ACC</i></a>
                                                    <!-- <a href="<?= base_url('Dashboard/reject/' . $value->kode) ?>" onclick="return confirm('Yakin Anda akan TOLAK ??')" data-toggle="modal" data-target="#modaldetailcuti" class="btn btn-danger btn-xs data-card-widget='collapse'"><i class=" fa fa-times"> Tolak</i></a> -->

                                                    <a class="btn btn-danger btn-xs data-card-widget='collapse'" style="cursor :pointer;" onclick="select_data('<?= $value->kode ?>','<?= $value->nama ?>','<?= $value->jumlah ?>','<?= $value->ket ?>','<?= $value->tanggal_awal ?> s/d <?= $value->tanggal_akhir ?>','<?= $value->ket_atasan ?>')" data-toggle="modal" data-target="#modaldetailcuti"><i class=" fa fa-times"> Tolak</i></a>
                                                <?php  } ?>
                                            </td>
                                            <!-- Modal -->
                                        <?php } ?>

                                    <?php } ?>
                                    </tr>
                                <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>

            <script>
                function select_data($kode, $nama, $jumlah, $ket, $periode, $ket_atasan) {
                    $base_url = ' <?= base_url() ?>';
                    document.getElementById("rejectform").action = $base_url + 'Dashboard/reject/' + $kode;

                    $("#kode").val($kode);
                    $("#nama").val($nama);
                    $("#jumlah").val($jumlah);
                    $("#ket").val($ket);
                    $("#periode").val($periode);
                    $("#ket_atasan").val($ket_atasan);
                }
            </script>
            <!-- /.table-responsive -->