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
                echo form_open('C_Master/edit_datacompany/' . $company->id_company);

                ?>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>company</label>
                            </span>
                            <input class="form-control" required name="company" value="<?= $company->company ?>" />
                        </div>
                        <div class="form-group">
                            <span class="fas fa-user">
                                <label>address</label>
                            </span>
                            <textarea class="form-control" required name="address" placeholder="User Name"><?= $company->address ?></textarea>
                            <?= form_error('address', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <span class="fas fa-phone-alt">
                                <label>tlp</label>
                            </span>
                            <input class="form-control" required name="tlp" value="<?= $company->tlp ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
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






















<!-- <div class="form-group">
        <label for="inputClientCompany">password</label>
        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
        <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <label for="inputClientCompany">Repeat password</label>
        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password" ">
                    <?= form_error('password2', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>

            </div> -->