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
                echo form_open('C_Master/input_jabatan');
                ?>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>Jabatan</label>
                            </span>
                            <input class="form-control" required name="jabatan" placeholder="jabatan" value="<?= set_value('jabatan'); ?>" />
                            <?= form_error('jabatan', ' <small class="text-danger pl-3">', '</small>'); ?>
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