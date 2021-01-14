<style type="text/css">
    th {
        position: relative;
        min-height: 41px;
    }

    th span {
        display: block;
        position: absolute;
        left: 0;
        right: 0;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }
</style>
<header class="blog-header py-3">
    <div class="mt-2">
        <div class="text-center">
            <a class="blog-header-logo text-dark" href="#">
                <h2> Form Cuti Karyawan</h2>
            </a>
        </div>
    </div>
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <img src="<?= base_url() ?>img/icon.png" style="margin:10px;" height="30px" alt="">
        </div>
        <div class="col-4 mt-3 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#" aria-label="Search">
                <div class="float-right d-none d-sm-block">
                    <b>Form Cuti : <?= date('Y'); ?></b>
                </div>
            </a>
        </div>
    </div>
</header>
<!-- mematikan klik kanan ada pada body -->

<body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">
    <?php
    echo form_open('C_Master/print_datacuti/' . $cuti->kode);
    ?>
    <form>
        <div class="ml-5 mt-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Kode</label>
                        <div>:</div>
                        <div class="col-sm-6">
                            <input class="form-control" required readonly name="kode" value="<?= $cuti->kode ?>" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                        <div>:</div>
                        <div class="col-sm-6">
                            <select style="appearance:none;" disabled name="nik" id="nik" class="form-control">
                                <?php foreach ($karyawan as $key => $value) { ?>
                                    <option value="<?= $value->nik ?>" <?= $value->nik == $cuti->nik ? "selected" : null ?>> <?= $value->nik ?> - <?= $value->nama ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                        <div>:</div>
                        <div class="col-sm-6">
                            <select style="appearance:none;" disabled name="nik" id="nik" class="form-control">
                                <?php foreach ($karyawan as $key => $value) { ?>
                                    <option value="<?= $value->nik ?>" <?= $value->nik == $cuti->nik ? "selected" : null ?>> <?= $value->jabatan ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal Approved</label>
                        <div>:</div>
                        <div class="col-sm-6">
                            <input class="form-control" required readonly name="kode" value="<?= date('d-M-Y / H:i:s', strtotime($cuti->updated)); ?>" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Tlp Dapat Dihubungi</label>
                        <div>:</div>
                        <div class="col-sm-6">
                            <select style="appearance:none;" disabled name="nik" id="nik" class="form-control">
                                <?php foreach ($karyawan as $key => $value) { ?>
                                    <option value="<?= $value->nik ?>" <?= $value->nik == $cuti->nik ? "selected" : null ?>> <?= $value->tlp ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                        <div>:</div>
                        <div class="col-sm-6">
                            <input class="form-control" required readonly name="kode" value=" <?= $cuti->pemiliktlp ?> -- <?= $cuti->tlp_darurat ?> " />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
        <br>
        <table border="1" style="width: 100%; text-align:center" class="table-bordered">
            <tr>
                <th style="position: relative;" style="margin-top: 10%;" rowspan="2">No</th>
                <th colspan="3">Tanggal Pengajuan</th>
                <th rowspan="2">Keterangan Cuti</th>
            </tr>
            <tr>
                <th>Tgl Awal Cuti</th>
                <th>Tgl Akhir Cuti</th>
                <th>Lama Cuti</th>
            </tr>
            </thead>
            <?php
            $no = 1;
            ?>
            <tbody>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= date('d-M-Y', strtotime($cuti->tanggal_awal)); ?> </td>
                    <td><?= date('d-M-Y', strtotime($cuti->tanggal_akhir)); ?> </td>
                    <td>
                        <?php

                        echo "$cuti->jumlah Hari ";
                        ?>
                    </td>
                    <td><?= $cuti->ket; ?> </td>
                </tr>
            </tbody>
        </table>
    </form>

    <!-- FOOTER -->
    <div class="ml-5 mt-3">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Total Sisa Cuti Periode <?= date('Y'); ?> </label>
                    <div>:</div>
                    <div class="col-sm-6">
                        <select style="appearance:none;" disabled name="nik" id="nik" class="form-control">
                            <?php foreach ($karyawan as $key => $value) { ?>
                                <option value="<?= $value->nik ?>" <?= $value->nik == $cuti->nik ? "selected" : null ?>> <?= $value->jumlah_cuti ?> Hari </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <br>

    <div class="card card-danger">
        <div class="card-body" style="text-align: center;">
            <div class="row">
                <div class="col-4">
                    <label for="pemohon">Pemohon Cuti</label>
                    <br>
                    <br>
                    <img src="<?= base_url('img/TTD/' . $cuti->ttd) ?>" width="100px">
                    <br>
                    <?= $cuti->nama ?>
                </div>
                <div class="col-4">
                    <label for="HRD">HRD</label>
                    <br>
                    <br>

                    <?php foreach ($karyawan as $key => $value) { ?>

                        <?php if ($value->level === 'HRD') { ?>

                            <img src="<?= base_url('img/TTD/' . $value->ttd) ?>" width="100px">
                            <br>
                            <?= $value->nama ?>

                        <?php } ?>
                    <?php } ?>
                    <br>
                </div>
                <div class="col-4">
                    <label for="Atasan Langsung">Atasan Langsung</label>
                    <br>
                    <br>
                    <?php foreach ($karyawan as $key => $value) { ?>
                        <?php if (
                            $value->nama == $cuti->atasan && $cuti->status === 'Approved'
                        ) { ?>
                            <img src="<?= base_url('img/TTD/' . $value->ttd) ?>" width="100px">
                            <br>
                            <?= $value->nama ?>

                        <?php } ?>
                    <?php } ?>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <?= form_close(); ?>
</body>
<script type="text/javascript">
    window.print();
</script>