<div class="row">
    <div class="col-md-12">
        <div class="card" style="background-color:cornflowerblue;">
            <div class="card-body">
                <form method="get" action="">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="font-weight-bold" for="tanggal_awal">Tanggal Mulai Cuti</label>
                                <input type="date" class="form-control" required name="tanggal_awal" placeholder="Masukkan tanggal mulai pinjam">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="font-weight-bold" for="tanggal_akhir">Tanggal Cuti Sampai</label>
                                <input type="date" class="form-control" required name="tanggal_akhir" placeholder="Masukkan tanggal pinjam sampai">
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-top: 30px;">
                            <input type="submit" class="btn btn-success" value="Search">
                            <?php
                            // membuat tombol cetak jika data sudah di filter
                            if (isset($_GET['tanggal_awal']) && isset($_GET['tanggal_akhir'])) {
                                $mulai = $_GET['tanggal_awal'];
                                $sampai = $_GET['tanggal_akhir'];
                            ?>
                                <a class='btn btn-default' style="float: right; " target="_blank" href='<?php echo base_url() . 'C_Master/cuti_cetak/?tanggal_awal=' . $mulai . '&tanggal_akhir=' . $sampai ?>'><i class='fa fa-print'></i> CETAK</a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </form>
</div>



<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover table-datatable">
        <thead>
            <tr>
                <th width="1%">No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Tanggal Cuti</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;

            foreach ($cuti as $key => $value) {

            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value->kode; ?></td>
                    <td><?php echo $value->nama; ?></td>
                    <td><?php echo date('d-M-Y', strtotime($value->tanggal_awal)); ?> s/d <?php echo date('d-M-Y', strtotime($value->tanggal_akhir)); ?> </td>
                    <td><?php echo $value->ket; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>