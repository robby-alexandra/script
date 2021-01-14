<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h1 class="card-title">Data <?= $title ?></h1>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
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

                        <table id="example2" class="table table-bordered table-hover">
                            <a href="<?= base_url('C_Master/input_cuti'); ?>" class="btn btn-success float-left">
                                <i class="fas fa-plus"> Add Data</i>
                            </a>

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Tanggal Awal</th>
                                    <th>Tanggal Akhir</th>
                                    <th>Jumlah</th>
                                    <th>Atasan</th>
                                    <th>Jenis Cuti</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th class="text-center"> Action </th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $no = 1;
                                foreach ($cuti as $key => $value) { ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <!-- departement merupakan nama field dari database -->
                                        <td><?= $value->kode ?></td>
                                        <td><?= $value->nama ?></td>
                                        <td><?= date('d M Y', strtotime($value->tanggal_awal)); ?></td>
                                        <td><?= date('d M Y', strtotime($value->tanggal_akhir)); ?></td>
                                        <td><?= $value->jumlah ?></td>
                                        <td><?= $value->atasan ?></td>
                                        <td><?= $value->jenis_cuti ?></td>
                                        <td><?= $value->ket ?></td>
                                        <!-- <span class="badge badge-success">Success</span> -->
                                        <?php
                                        echo "<td class='project-state'>";
                                        if ($value->status === 'Pending') {
                                            echo "<span class= 'badge badge-warning'> Pending</span>";
                                        } elseif ($value->status === 'Approved') {
                                            echo "<span class= 'badge badge-success'> Approved</span>";
                                        } else {
                                            echo "<span class= 'badge badge-danger'> Rejected</span>";
                                        }
                                        ?>

                                        </td>
                                        <td>
                                            <!-- id_cuti merupakan get id dari database -->
                                            <?php if ($value->status != 'Approved') { ?>
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="<?= base_url('C_Master/edit_datacuti/' . $value->kode . '/' . $value->nik) ?>" class="btn btn-block btn-outline-primary btn-xs"><i class=" far fa-edit"> EDIT</i></a></div>
                                                    <div class="col">
                                                        <a href="<?= base_url('C_Master/hapus_formcuti/' . $value->kode) ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-block btn-outline-danger btn-xs"><i class="fas fa-trash-alt"> HAPUS</i></a>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="<?= base_url('C_Master/print_datacuti/' . $value->kode) ?>" target="_blank" class="btn btn-block btn-outline-success btn-xs" ><i class="fas fa-print"> Print</i></a>
                                                    </div>
                                                </div>
                                        </td>
                                    <?php } ?>
                                <?php } ?>
                                    </tr>
                            </tbody>


                        </table>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->