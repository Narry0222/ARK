<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Login</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?= config_item('root_dir'); ?>assets/admin/components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= config_item('root_dir'); ?>assets/admin/components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= config_item('root_dir'); ?>assets/admin/components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="<?= config_item('root_dir'); ?>assets/admin/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?= config_item('root_dir'); ?>assets/admin/plugins/iCheck/square/blue.css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans|Raleway|Open+Sans|Quicksand|Cinzel|Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">
        <style>
            body {
                font-family: work sans;
            }
            .admin-logoo {
                background: #3c8dbc;
                padding: 5px 10px;
                margin-bottom: 0px;
                font-size: 30px;
            }
            .admin-logoo a {
                color: #FFF !important;
                font-family: Cinzel;
            }
        </style>
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo admin-logoo">
                <a href="../../index2.html">ADMIN</a>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="../../index2.html" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                    </div>
                </form>
                <p style="margin: 10px 0 10px;"><a href="#">I forgot my password</a></p>
            </div>
        </div>
        <script src="<?= config_item('root_dir'); ?>assets/admin/components/jquery/dist/jquery.min.js"></script>
        <script src="<?= config_item('root_dir'); ?>assets/admin/components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?= config_item('root_dir'); ?>assets/admin/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' 
                });
            });
        </script>
    </body>
</html>
