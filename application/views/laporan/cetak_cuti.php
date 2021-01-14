<!DOCTYPE html>
<html>
<?php
$this->load->view('template/v_head');
?>


<body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

    <style type="text/css">
        table {
            border-collapse: collapse;
        }

        table th,
        td {
            border: 1px solid #000;
        }
    </style>

    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <img src="<?= base_url() ?>img/icon.png" style="margin:10px;" height="60px" alt="">
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">
                    <h2> Laporan Cuti Karyawan</h2>
                </a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#" aria-label="Search">
                    <b> Periode Cuti : <br> </b> <?= date('d-M-Y', strtotime($mulai = $_GET['tanggal_awal'])), ' <b>s/d</b> ',
                                                        date('d-M-Y', strtotime($sampai = $_GET['tanggal_akhir'])); ?>
                </a>

            </div>

        </div>
    </header>

    <table>
        <tr class="text-center">
            <th width="1%">No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Tanggal Cuti</th>
            <th>Keterangan</th>
            <th>Total Sisa Cuti </th>
        </tr>
        <?php
        $no = 1;
        foreach ($cuti as $p) {
        ?>
            <tr style="text-align: center;">
                <td><?php echo $no++; ?></td>
                <td><?php echo $p->kode; ?></td>
                <td><?php echo $p->nama; ?></td>
                <td><?php echo date('d-M-Y', strtotime($p->tanggal_awal)); ?> s/d <?php echo date('d-M-Y', strtotime($p->tanggal_akhir)); ?> </td>
                <td><?php echo $p->ket; ?></td>

                <td><?php echo $p->jumlah_cuti; ?></td>

            </tr>
        <?php
        }
        ?>
    </table>

    <!-- <script type="text/javascript">
        window.print();
    </script> -->

</body>

</html>