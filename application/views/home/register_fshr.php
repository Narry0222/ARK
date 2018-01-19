<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('common/head'); ?>
        <style>
            .register {box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.2), 0 0px 8px 0 rgba(0, 0, 0, 0.19);border: 0;}
            .form-heading {background-color: rgb(246, 188, 215);border-bottom: 0;}
            .star {margin-left: 0px; color: red;}
            form .card-body * {font-size: 13px;}
            select.form-control:not([size]):not([multiple]) {height: 33px;}
            .common_data {margin-bottom: 25px;}
            .card-header {padding: 10px 15px 10px 20px; font-size: 16px;}
        </style>
    </head>

    <body>
        <?php $this->load->view('common/nav'); ?>
        <div class="container" style="margin-top: 40px; margin-bottom: 20px;">
            <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
            <h2 class="mt-4 mb-3 middle-heading">ARK Global Fresher Workforce</h2>
            <form method="post" action="<?= base_url('register_fshr'); ?>">
                <div class="row common_data">
                    <div class="col-md-12">
                        <div class="card register">
                            <h4 class="card-header form-heading">Personal Information</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="Enter Your Name" maxlength="50" value="<?= set_value('name') ?>">
                                            <?= form_error('name'); ?>
                                        </div>
                                    </div> 
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" id="email" autocomplete="off" placeholder="Enter Email" maxlength="75" value="<?= set_value('email') ?>">
                                            <?= form_error('email'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="text" class="form-control" name="mobile" id="mobile" autocomplete="off" placeholder="Enter Mobile Number" maxlength="15" value="<?= set_value('mobile') ?>">
                                            <?= form_error('mobile'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="address" id="address" autocomplete="off" placeholder="Enter Address" maxlength="100" value="<?= set_value('address') ?>">
                                            <?= form_error('address'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Street</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="street" id="street" autocomplete="off" placeholder="Enter Street Name" maxlength="100" value="<?= set_value('street') ?>">
                                            <?= form_error('street'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>City</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="city" id="city" autocomplete="off" placeholder="Enter City Name" maxlength="50" value="<?= set_value('city') ?>">
                                            <?= form_error('city'); ?>
                                        </div>
                                    </div> 
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>District</label>
                                            <input type="text" class="form-control" name="district" id="district" autocomplete="off" placeholder="Enter District Name" maxlength="50" value="<?= set_value('district') ?>">
                                            <?= form_error('district'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select class="form-control" name="state">
                                                <option value="" <?= set_select('state', '', TRUE); ?>>-- Select One--</option>
                                                <option value="Andhra Pradesh" <?= set_select('state', 'Andhra Pradesh'); ?>>Andhra Pradesh</option>
                                                <option value="Andaman and Nicobar Islands" <?= set_select('state', 'Andaman and Nicobar Islands'); ?>>Andaman and Nicobar Islands</option>
                                                <option value="Arunachal Pradesh" <?= set_select('state', 'Arunachal Pradesh'); ?>>Arunachal Pradesh</option>
                                                <option value="Assam" <?= set_select('state', 'Assam'); ?>>Assam</option>
                                                <option value="Bihar" <?= set_select('state', 'Bihar'); ?>>Bihar</option>
                                                <option value="Chandigarh" <?= set_select('state', 'Chandigarh'); ?>>Chandigarh</option>
                                                <option value="Chattisgarh" <?= set_select('state', 'Chattisgarh'); ?>>Chattisgarh</option>
                                                <option value="Dadra and Nagar Haveli" <?= set_select('state', 'Dadra and Nagar Haveli'); ?>>Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu" <?= set_select('state', 'Daman and Diu'); ?>>Daman and Diu</option>
                                                <option value="Delhi" <?= set_select('state', 'Delhi'); ?>>Delhi</option>
                                                <option value="Goa" <?= set_select('state', 'Goa'); ?>>Goa</option>
                                                <option value="Gujarat" <?= set_select('state', 'Gujarat'); ?>>Gujarat</option>
                                                <option value="Haryana" <?= set_select('state', 'Haryana'); ?>>Haryana</option>
                                                <option value="Himachal Pradesh" <?= set_select('state', 'Himachal Pradesh'); ?>>Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir" <?= set_select('state', 'Jammu and Kashmir'); ?>>Jammu and Kashmir</option>
                                                <option value="Karnataka" <?= set_select('state', 'Karnataka'); ?>>Karnataka</option>
                                                <option value="Kerala" <?= set_select('state', 'Kerala'); ?>>Kerala</option>
                                                <option value="Lakshadweep" <?= set_select('state', 'Lakshadweep'); ?>>Lakshadweep</option>
                                                <option value="Madhya Pradesh" <?= set_select('state', 'Madhya Pradesh'); ?>>Madhya Pradesh</option>
                                                <option value="Maharashtra" <?= set_select('state', 'Maharashtra'); ?>>Maharashtra</option>
                                                <option value="Manipur" <?= set_select('state', 'Manipur'); ?>>Manipur</option>
                                                <option value="Meghalaya" <?= set_select('state', 'Meghalaya'); ?>>Meghalaya</option>
                                                <option value="Mizoram" <?= set_select('state', 'Mizoram'); ?>>Mizoram</option>
                                                <option value="Nagaland" <?= set_select('state', 'Nagaland'); ?>>Nagaland</option>
                                                <option value="Orissa" <?= set_select('state', 'Orissa'); ?>>Orissa</option>
                                                <option value="Pondicherry" <?= set_select('state', 'Pondicherry'); ?>>Pondicherry</option>
                                                <option value="Punjab" <?= set_select('state', 'Punjab'); ?>>Punjab</option>
                                                <option value="Rajasthan" <?= set_select('state', 'Rajasthan'); ?>>Rajasthan</option>
                                                <option value="Sikkim" <?= set_select('state', 'Sikkim'); ?>>Sikkim</option>
                                                <option value="Tamil Nadu" <?= set_select('state', 'Tamil Nadu'); ?>>Tamil Nadu</option>
                                                <option value="Tripura" <?= set_select('state', 'Tripura'); ?>>Tripura</option>
                                                <option value="Uttarakhand" <?= set_select('state', 'Uttarakhand'); ?>>Uttarakhand</option>
                                                <option value="Uttar Pradesh" <?= set_select('state', 'Uttar Pradesh'); ?>>Uttar Pradesh</option>
                                                <option value="West Bengal" <?= set_select('state', 'West Bengal'); ?>>West Bengal</option>
                                            </select>
                                            <?= form_error('state'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" name="pincode" id="pincode" autocomplete="off" placeholder="Enter Pincode" maxlength="10" value="<?= set_value('pincode') ?>">
                                            <?= form_error('pincode'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Phone ( Res )</label>
                                            <input type="text" class="form-control" name="phone_res" id="phone_res" autocomplete="off" placeholder="Enter Phone" maxlength="15" value="<?= set_value('phone_res') ?>">
                                            <?= form_error('phone_res'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <span class="star">*</span>
                                            <select class="form-control" name="gender">
                                                <option value="Male" <?= set_select('gender', 'Male'); ?>>Male</option>
                                                <option value="Female" <?= set_select('gender', 'Female'); ?>>Female</option>
                                            </select>
                                            <?= form_error('gender'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type="text" class="form-control" name="age" id="age" autocomplete="off" placeholder="Enter Age" maxlength="3" value="<?= set_value('age') ?>">
                                            <?= form_error('age'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row common_data">
                    <div class="col-md-12">
                        <div class="card register">
                            <h4 class="card-header form-heading">Educational Information <small>( eg:- Course name with Percentage )</small></h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>SSC ( 10th )</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="ssc" id="ssc" autocomplete="off" placeholder="Enter Percentage" maxlength="10" value="<?= set_value('ssc') ?>">
                                            <?= form_error('ssc'); ?>
                                        </div>
                                    </div> 
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Inter or Diploma</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="inter" id="inter" autocomplete="off" placeholder="Enter Percentage" maxlength="10" value="<?= set_value('inter') ?>">
                                            <?= form_error('inter'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bachelor Degree</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="degree" id="degree" autocomplete="off" placeholder="Enter Percentage" maxlength="10" value="<?= set_value('degree') ?>">
                                            <?= form_error('degree'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Master Degree</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="masters" id="masters" autocomplete="off" placeholder="Enter Percentage" maxlength="10" value="<?= set_value('masters') ?>">
                                            <?= form_error('masters'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row common_data">
                    <div class="col-md-12">
                        <div class="card register">
                            <h4 class="card-header form-heading">Technical Information <small>( Type of Field Known )</small></h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Type 1</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="type1" id="type1" autocomplete="off" placeholder="Enter Field Name" maxlength="155" value="<?= set_value('type1') ?>">
                                            <?= form_error('type1'); ?>
                                        </div>
                                    </div> 
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Type 2</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="type2" id="type2" autocomplete="off" placeholder="Enter Field Name" maxlength="155" value="<?= set_value('type2') ?>">
                                            <?= form_error('type2'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <span class="star">*</span>
                                            <select class="form-control" name="location">
                                                <option value="" <?= set_select('location', '', TRUE); ?>>-- Select Location --</option>
                                                <option value="Australia" <?= set_select('location', 'Australia'); ?>>Australia</option>
                                                <option value="New Zealand" <?= set_select('location', 'New Zealand'); ?>>New Zealand</option>
                                                <option value="Singapore" <?= set_select('location', 'Singapore'); ?>>Singapore</option>
                                                <option value="Ireland" <?= set_select('location', 'Ireland'); ?>>Ireland</option>
                                                <option value="United Kingdom" <?= set_select('location', 'United Kingdom'); ?>>United Kingdom</option>
                                            </select>
                                            <?= form_error('location'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Job in Technology</label>
                                            <span class="star">*</span>
                                            <select class="form-control" name="technology">
                                                <option value="" selected="" <?= set_select('technology', '', TRUE); ?>>-- Select One --</option>
                                                <option value="J2EE Technologies" <?= set_select('technology', 'J2EE Technologies'); ?>>J2EE Technologies</option>
                                                <option value="DOT Net Technologies" <?= set_select('technology', 'DOT Net Technologies'); ?>>DOT Net Technologies</option>
                                                <option value="LINUX Administration" <?= set_select('technology', 'LINUX Administration'); ?>>LINUX Administration</option>
                                                <option value="Network Administration" <?= set_select('technology', 'Network Administration'); ?>>Network Administration</option>
                                                <option value="SAP / ABAP" <?= set_select('technology', 'SAP / ABAP'); ?>>SAP / ABAP</option>
                                                <option value="ERP Package" <?= set_select('technology', 'ERP Package'); ?>>ERP Package</option>
                                                <option value="Structural Analysis System" <?= set_select('technology', 'Structural Analysis System'); ?>>Structural Analysis System</option>
                                                <option value="Hotel Management" <?= set_select('technology', 'Hotel Management'); ?>>Hotel Management</option>
                                                <option value="Construction Work" <?= set_select('technology', 'Construction Work'); ?>>Construction Work</option>
                                                <option value="Site Engineer" <?= set_select('technology', 'Site Engineer'); ?>>Site Engineer</option>
                                                <option value="Testing Tools" <?= set_select('technology', 'Testing Tools'); ?>>Testing Tools</option>
                                                <option value="Other" <?= set_select('technology', 'Other'); ?>>Other</option>
                                            </select>
                                            <?= form_error('technology'); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Other Location</label>
                                            <input type="text" class="form-control" name="otherLocation" id="otherLocation" autocomplete="off" placeholder="Enter Other Location" maxlength="50" value="<?= set_value('otherLocation') ?>">
                                            <?= form_error('otherLocation'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Other Technology</label>
                                            <input type="text" class="form-control" name="otherTechnology" id="otherTechnology" autocomplete="off" placeholder="Enter Other Technology" maxlength="50" value="<?= set_value('otherTechnology') ?>">
                                            <?= form_error('otherTechnology'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Passport No</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="passport" id="passport" autocomplete="off" placeholder="Enter Passport No" maxlength="35" value="<?= set_value('passport') ?>">
                                            <?= form_error('passport'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Referred By</label>
                                            <span class="star">*</span>
                                            <select class="form-control" name="reference">
                                                <option value="" <?= set_select('reference', '', TRUE); ?>>-- Select Reference --</option>
                                                <option value="Friends" <?= set_select('reference', 'Friends'); ?>>Friends</option>
                                                <option value="News Papers" <?= set_select('reference', 'News Papers'); ?>>News Papers</option>
                                                <option value="Advertisment" <?= set_select('reference', 'Advertisment'); ?>>Advertisement</option>
                                                <option value="Relatives" <?= set_select('reference', 'Relatives'); ?>>Relatives</option>
                                                <option value="Web Site" <?= set_select('reference', 'Web Site'); ?>>Web Site</option>
                                                <option value="Others" <?= set_select('reference', 'Others'); ?>>Others</option>
                                            </select>
                                            <?= form_error('reference'); ?>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">SUBMIT</button>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </form>
        </div>
        <?php $this->load->view('common/footer'); ?>
    </body>

</html>