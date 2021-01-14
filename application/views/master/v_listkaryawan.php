<head>
    <meta charset="utf-8">

    <!-- Bootstrap stylesheets (included template modifications) -->
    <link href="<?= base_url() ?>assets2/css/bootstrap.css" rel="stylesheet" />
    <!-- Plugins stylesheets (all plugin custom css) -->
    <link href="<?= base_url() ?>assets2/css/plugins.css" rel="stylesheet" />
    <!-- Main stylesheets (template main css file) -->
    <link href="<?= base_url() ?>assets2/css/main.css" rel="stylesheet" />
</head>
<body>
    <!--Body content-->
    <div id="content" class="page-content clearfix">
        <div class="contentwrapper">
            <!-- Start .row -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- col-lg-4 start here -->
                    <div class="panel panel-default">
                        <!-- Start .panel -->
                        <div class="panel-heading">
                            <h4 class="panel-title">Profile details</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row profile">
                                <!-- Start .row -->
                                <div class="col-md-4">
                                    <div class="profile-avatar">
                                        <img src="<?= base_url() ?>assets2/img/avatars/128.jpg" alt="Avatar">
                                        <p class="mt10">
                                            Online
                                            <span class="device">
                                                <i class="fa fa-mobile s16"></i>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="profile-name">
                                        <h3>Jonathan Smith</h3>
                                        <p class="job-title mb0"><i class="fa fa-building"></i> SEO in Neocom Solutions</p>
                                        <p class="balance">
                                            Balance: <span>146$</span>
                                        </p>
                                        <a href="#" class="btn btn-primary btn-large mr10"> <i class="fa fa-envelope"></i> Send email</a>
                                        <a href="#" class="btn btn-default btn-alt btn-large"> Send PM</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-info bt">
                                        <div class="row">
                                            <!-- Start .row -->
                                            <div class="col-md-4">
                                                <dl class="mt20">
                                                    <dt class="text-muted">Phone</dt>
                                                    <dd>(367)-045-347</dd>
                                                    <dt class="text-muted">Mobile</dt>
                                                    <dd>(368)-234-112</dd>
                                                    <dt class="text-muted">Fax</dt>
                                                    <dd>(362)-666-347</dd>
                                                </dl>
                                            </div>
                                            <div class="col-md-8">
                                                <dl class="mt20">
                                                    <dt class="text-muted">Email</dt>
                                                    <dd>jonathansmith@gmail.com</dd>
                                                    <dt class="text-muted">Skype</dt>
                                                    <dd>jonatahn_smith</dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="profile-info bt">
                                        <h5 class="text-muted">Profile info</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores minus consequuntur corporis optio accusantium perspiciatis veritatis temporibus nostrum, saepe omnis aperiam illum odit, quos, cum eveniet
                                            possimus illo. Saepe sunt porro culpa repellat dolorem aperiam, quae nihil, maxime ducimus officiis voluptate. Libero obcaecati laboriosam reprehenderit adipisci harum ad, veniam explicabo.</p>
                                    </div>

                                </div>
                            </div>
                            <!-- End .row -->
                        </div>
                    </div>

                </div>
                <!-- col-lg-4 end here -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- col-lg-4 start here -->
                    <div class="tabs mb20">
                        <ul id="profileTab" class="nav nav-tabs">
                            <li class="">
                                <a href="#edit-profile" data-toggle="tab">Edit</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade pb0" id="edit-profile">
                                <form class="form-horizontal group-border stripped" role="form">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="">First Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="firstname" name="firstname">
                                        </div>
                                    </div>
                                    <!-- End .form-group  -->
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="">Last Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="lastname" name="lastname">
                                        </div>
                                    </div>
                                    <!-- End .form-group  -->
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="">Adress</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="address" name="address">
                                        </div>
                                    </div>
                                    <!-- End .form-group  -->
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="">Company</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="company" name="company">
                                        </div>
                                    </div>
                                    <!-- End .form-group  -->
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="">Info for you</label>
                                        <div class="col-lg-9">
                                            <textarea name="info" id="info" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-vertical">
                                        <label class="col-lg-3 control-label" for="">Change password</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control" id="password" name="password">
                                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Repeat your password">
                                        </div>
                                    </div>
                                    <!-- End .form-group  -->
                                    <div class="form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <a href="#" class="btn btn-primary" type="subimt">Make change</a>
                                        </div>
                                    </div>
                                    <!-- End .form-group  -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End .tabs -->
                </div>

                <!-- col-lg-4 end here -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End contentwrapper -->
    </div>

    <!-- Javascripts -->
    <!-- Load pace first -->
    <script src="<?= base_url() ?>assets2/plugins/core/pace/pace.min.js"></script>
    <!-- Important javascript libs(put in all pages) -->
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/libs/jquery-2.1.1.min.js">\x3C/script>')
    </script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
    </script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/libs/jquery-migrate-1.2.1.min.js">\x3C/script>')
    </script>
    <!--[if lt IE 9]>
  <script type="text/javascript" src="js/libs/excanvas.min.js"></script>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="js/libs/respond.min.js"></script>
<![endif]-->
    <!-- Bootstrap plugins -->
    <script src="<?= base_url() ?>assets2/js/bootstrap/bootstrap.js"></script>
    <!-- Core plugins ( not remove ) -->
    <script src="<?= base_url() ?>assets2/js/libs/modernizr.custom.js"></script>
    <!-- Handle responsive view functions -->
    <script src="<?= base_url() ?>assets2/js/jRespond.min.js"></script>
    <!-- Custom scroll for sidebars,tables and etc. -->
    <script src="<?= base_url() ?>assets2/plugins/core/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
    <!-- Remove click delay in touch -->
    <script src="<?= base_url() ?>assets2/plugins/core/fastclick/fastclick.js"></script>
    <!-- Increase jquery animation speed -->
    <script src="<?= base_url() ?>assets2/plugins/core/velocity/jquery.velocity.min.js"></script>
    <!-- Quick search plugin (fast search for many widgets) -->
    <script src="<?= base_url() ?>assets2/plugins/core/quicksearch/jquery.quicksearch.js"></script>
    <!-- Bootbox fast bootstrap modals -->
    <script src="<?= base_url() ?>assets2/plugins/ui/bootbox/bootbox.js"></script>
    <!-- Other plugins ( load only nessesary plugins for every page) -->
    <script src="<?= base_url() ?>assets2/js/libs/date.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/charts/sparklines/jquery.sparkline.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/charts/flot/jquery.flot.custom.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/charts/flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/charts/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/charts/flot/jquery.flot.time.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/charts/flot/jquery.flot.growraf.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/charts/flot/jquery.flot.categories.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/charts/flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/charts/flot/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/charts/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url() ?>assets2/js/libs/raphael.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/charts/morris/morris.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/charts/chartjs/Chart.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/forms/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="<?= base_url() ?>assets2/plugins/ui/waypoint/waypoints.js"></script>
    <script src="<?= base_url() ?>assets2/js/jquery.supr.js"></script>
    <script src="<?= base_url() ?>assets2/js/main.js"></script>
    <script src="<?= base_url() ?>assets2/js/pages/profile.js"></script>
</body>

</html>