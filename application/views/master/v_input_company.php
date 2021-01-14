<div class="row">
    <div class="col-md-3"></div>
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card-primary">
            <div class="register-card-body">
                <h3>
                    <div class="bg-primary"><span class="login-box-msg">
                            <p class="login-box-msg"><?= $title ?></p>
                        </span></div>
                </h3>
                <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success mt-2">';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }
                echo form_open('C_Master/input_company');
                ?>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Company</label>
                            </span>
                            <input class="form-control" required name="company" autofocus placeholder="Company" value="<?= set_value('company'); ?>" />
                            <?= form_error('company', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Address</label>
                            </span>
                            <textarea class="form-control" required name="address" placeholder="Address" value="<?= set_value('address'); ?>"></textarea>
                            <?= form_error('address', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Tlp</label>
                            </span>
                            <input class="form-control" required name="tlp" placeholder="Tlp" value="<?= set_value('tlp'); ?>" />
                            <?= form_error('tlp', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-8">

                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
        </div>
        <?= form_close(); ?>
        <!--/.col (left) -->

    </div>
    <div class="col-md-3"></div>
    <!-- /.row -->
</div>