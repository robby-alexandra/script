<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data <?= $title ?></h3>

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
                            <a href="<?= base_url('C_Master/input_jeniscuti'); ?>" class="btn btn-success float-left">
                                <i class="fas fa-plus"> Add Data</i>
                            </a>
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kategori Cuti</th>
                                    <th class=" text-center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($namacuti as $key => $value) { ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <!-- departement merupakan nama field dari database -->
                                        <td class="text-center"><?= $value->nama_cuti ?></td>

                                        <td class="text-center">
                                            <!-- id_cuti merupakan get id dari database -->
                                            <div class="row">
                                                <div class="col">
                                                    <a href="<?= base_url('C_Master/edit_datajenis_cuti/' . $value->id_cuti) ?>" class="btn btn-block btn-outline-primary btn-xs"><i class=" far fa-edit"> EDIT</i></a></div>
                                                <div class="col">
                                                    <a href="<?= base_url('C_Master/hapus_jeniscuti/' . $value->id_cuti) ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-block btn-outline-danger btn-xs"><i class="fas fa-trash-alt"> HAPUS</i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>


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