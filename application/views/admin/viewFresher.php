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
                <div class="container">
                    <div class="view_file">
                        <div class="col-md-12">
                            <h4 class="middle-heading">Personal Information</h4>
                        </div>
                        <div class="col-md-12">   
                            <table class="table table table-striped table-condensed table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="width: 40%;"><b>Name</b></td>
                                        <td><?= $fresher->name; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td>
                                        <td><?= $fresher->email; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Mobile</b></td>
                                        <td><?= $fresher->mobile; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Address</b></td>
                                        <td>
                                            <?= $fresher->address; ?>                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Street</b></td>
                                        <td>
                                            <?= $fresher->street; ?>                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>City</b></td>
                                        <td>
                                            <?= $fresher->city; ?>         
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>District</b></td>
                                        <td>
                                            <?= $fresher->district; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>State</b></td>
                                        <td>
                                            <?= $fresher->state; ?>             
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Pincode</b></td>
                                        <td>
                                            <?= $fresher->pincode; ?>                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Phone ( Res )</b></td>
                                        <td>
                                            <?= $fresher->phone; ?>         
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Gender</b></td>
                                        <td>
                                            <?= $fresher->gender; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Age</b></td>
                                        <td>
                                            <?= $fresher->age . ' Years Old'; ?>             
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <h4 class="middle-heading">Educational Information</h4>
                        </div>
                        <div class="col-md-12">   
                            <table class="table table table-striped table-condensed table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="width: 40%;"><b>SSC ( 10th )</b></td>
                                        <td><?= $fresher->ssc . ' %'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Inter or Diploma</b></td>
                                        <td><?= $fresher->inter . ' %'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Bachelor Degree</b></td>
                                        <td><?= $fresher->degree . ' %'; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Master Degree</b></td>
                                        <td><?= $fresher->masters . ' %'; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <h4 class="middle-heading">Technical Information <small>( Type of Field Known )</small></h4>
                        </div>
                        <div class="col-md-12">   
                            <table class="table table table-striped table-condensed table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="width: 40%;"><b>Type 1</b></td>
                                        <td><?= $fresher->type1; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Type 2</b></td>
                                        <td><?= $fresher->type2; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Location</b></td>
                                        <td><?= $fresher->location; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Job in Technology</b></td>
                                        <td><?= $fresher->job_technology; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 40%;"><b>Other Location</b></td>
                                        <td><?= $fresher->other_location; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Other Technology</b></td>
                                        <td><?= $fresher->other_technology; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Passport No</b></td>
                                        <td><?= $fresher->passport; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Referred By</b></td>
                                        <td><?= $fresher->referred; ?></td>
                                    </tr>
                                </tbody>
                            </table>
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
    </body>
</html>
