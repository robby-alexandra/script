<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= base_url('img/icon.png') ?>">
    <title>Albeta | Y2C</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">



</head>
<img class="rounded float-left" src="<?= base_url() ?>img/icon.png"  alt="">



<img src="<?= base_url() ?>img/al.png" width="100%" height="100%" style="position: absolute; background-size:cover; opacity: 0.7; ">


<body class="hold-transition login-page">
    <div class="login-box" style="opacity: 0.9;">

        <!-- <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-warning mt-2">';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }
                echo form_open('C_Auth/login');
                ?>
                <?php
                if ($this->session->flashdata('logout')) {
                    echo '<div class="alert alert-success mt-2">';
                    echo $this->session->flashdata('logout');
                    echo '</div>';
                }
                echo form_open('C_Auth/login');
                ?> -->
        <form action="<?= base_url('C_Auth/process'); ?>" style="float: right;" method="post">
            <div class="card-body">
                <div class="form-group">
                    <span class="fas fa-user">
                        <label>User Name</label>
                    </span>
                    <input class="form-control" autofocus required name="username" placeholder="username" value="<?= set_value('name'); ?>" />
                    <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <span class="fas fa-lock">
                        <label>Password</label>
                    </span>
                    <input type="password" id="password" required name="password" class="form-control" value="<?= set_value('password'); ?>" placeholder="Password">
                    <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                </div>
                <!-- <div class="form-group">
                            <a href="<?= base_url() ?>" class="btn btn-success btn-block">Back To Web</a>
                        </div> -->

            </div>

        </form>
    </div>
    </div>
    <?= form_close(); ?>
    </div>
    </div>

    </div>
    <!-- /.login-box -->

    <!-- SweetAlert2 -->
    <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script type="text/javascript">
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    icon: 'success',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });

            $('.swalDefaultError').click(function() {
                Toast.fire({
                    icon: 'error',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });

        });
    </script>
</body>

</html>