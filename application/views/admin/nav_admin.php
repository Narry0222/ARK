<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('common/head_admin'); ?>
    </head>
    <body class="hold-transition skin-blue layout-top-nav">
        <div class="wrapper">
            <?php $this->load->view('common/header_admin'); ?>
            <div class="content-wrapper">
                <div class="m-heading">
                    <h4 style="margin: 0;">Fresher Details</h4>
                </div>
                <div class="container-fluid">
                    <div class="well search_bar">
                        <form role="form" action="<?= base_url('admin_login/index'); ?>" method="get">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Search by name" value="<?= $name; ?>">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" autocomplete="off" id="city" placeholder="Search by city" value="<?= $city; ?>">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="<?= base_url('admin_login'); ?>" class="btn btn-default">Clear</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="box">
                        <div class="row" style="padding: 10px 10px 0px 10px;">
                            <div class="col-md-2">
                                <span>
                                    <form role="form" class="form-horizontal" action="<?= base_url('admin_login/index' . $querystring); ?>" method="get">
                                        Records
                                        <select name="limit" class="records-control dropdown1" onchange="this.form.submit();">
                                            <option value="10" <?= ($limit == '10 ') ? 'selected' : ''; ?>>10</option>
                                            <option value="25" <?= ($limit == '25') ? 'selected' : ''; ?>>25</option>
                                            <option value="50" <?= ($limit == '50') ? 'selected' : ''; ?>>50</option>
                                            <option value="75" <?= ($limit == '75') ? 'selected' : ''; ?>>75</option>
                                            <option value="100" <?= ($limit == '100') ? 'selected' : ''; ?>>100</option>
                                        </select>
                                    </form>
                                </span>
                            </div>
                            <div class="col-md-2" style="margin-top: 4px;">
                                <span class="countclass"><?= 'Count : <b>' . $ttl_rows . '</b>'; ?></span>
                            </div>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>City</th>
                                        <th>Location</th>
                                        <th>Job Technology</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($freshers) {
                                        foreach ($freshers as $fresher) {
                                            ?>
                                            <tr>
                                                <td><?= $fresher->name; ?></td>
                                                <td><?= $fresher->email; ?></td>
                                                <td><?= $fresher->mobile; ?></td>
                                                <td><?= $fresher->city; ?></td>
                                                <td><?= $fresher->location; ?></td>
                                                <td><?= $fresher->job_technology; ?></td>
                                                <td>
                                                    <a href="<?= base_url() . 'admin_login/view_fresher/' . $fresher->id; ?>" title="View Details" alter="View Details" class="btn btn-xs btn-primary">
                                                        <span class="fa fa-eye"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="7"><p class="text-center" style="margin: 10px;">No Data Available </p></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>City</th>
                                        <th>Location</th>
                                        <th>Job Technology</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <?= $pagination; ?>
                        </div>
                    </div>
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
        <script src="<?= config_item('root_dir'); ?>assets/admin/components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= config_item('root_dir'); ?>assets/admin/components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?= config_item('root_dir'); ?>assets/admin/components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?= config_item('root_dir'); ?>assets/admin/components/fastclick/lib/fastclick.js"></script>
        <script src="<?= config_item('root_dir'); ?>assets/admin/dist/js/adminlte.min.js"></script>
        <script src="<?= config_item('root_dir'); ?>assets/admin/dist/js/demo.js"></script>
    </body>
</html>
