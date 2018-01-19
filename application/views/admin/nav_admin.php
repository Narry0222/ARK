<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Top Navigation</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?= config_item('root_dir'); ?>assets/admin/components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= config_item('root_dir'); ?>assets/admin/components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= config_item('root_dir'); ?>assets/admin/components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="<?= config_item('root_dir'); ?>assets/admin/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?= config_item('root_dir'); ?>assets/admin/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue layout-top-nav">
        <div class="wrapper">
            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="../../index2.html" class="navbar-brand"><b>Admin</b>LTE</a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">Link</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Narendra Medarametla <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-custom-menu -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </header>

            <div class="content-wrapper">
                <div class="container">

                </div>
            </div>
            <footer class="main-footer">
                <div class="container">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> 2.4.0
                    </div>
                    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
                    reserved.
                </div>
            </footer>
        </div>
        <script src="<?= config_item('root_dir'); ?>assets/admin/components/jquery/dist/jquery.min.js"></script>
        <script src="<?= config_item('root_dir'); ?>assets/admin/components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?= config_item('root_dir'); ?>assets/admin/components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?= config_item('root_dir'); ?>assets/admin/components/fastclick/lib/fastclick.js"></script>
        <script src="<?= config_item('root_dir'); ?>assets/admin/dist/js/adminlte.min.js"></script>
        <script src="<?= config_item('root_dir'); ?>assets/admin/dist/js/demo.js"></script>
    </body>
</html>
