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
        <div class="container" style="margin-bottom: 20px;">
            <h2 class="mt-4 mb-3 middle-heading" style="margin-top: 45px !important;">ARK Global Experience Workforce</h2>
            <form>
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
                                            <input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="Enter Your Name" maxlength="50">
                                        </div>
                                    </div> 
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="email" id="email" autocomplete="off" placeholder="Enter Email" maxlength="75">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="mobile" id="mobile" autocomplete="off" placeholder="Enter Mobile Number" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="address" id="address" autocomplete="off" placeholder="Enter Address" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Street</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="street" id="street" autocomplete="off" placeholder="Enter Street Name" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>City</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="city" id="city" autocomplete="off" placeholder="Enter City Name" maxlength="50">
                                        </div>
                                    </div> 
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>District</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="district" id="district" autocomplete="off" placeholder="Enter District Name" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>State</label>
                                            <span class="star">*</span>
                                            <select class="form-control" name="state">
                                                <option value="">-- Select One--</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chattisgarh">Chattisgarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Orissa">Orissa</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="pincode" id="pincode" autocomplete="off" placeholder="Enter Pincode" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Phone ( Res )</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="phone_res" id="phone_res" autocomplete="off" placeholder="Enter Phone" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <span class="star">*</span>
                                            <select class="form-control" name="state">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="age" id="age" autocomplete="off" placeholder="Enter Age" maxlength="3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="row common_data">
                    <div class="col-md-12">
                        <div class="card register">
                            <h4 class="card-header form-heading">Educational Information <small>( eg:- Course name with Percentage )</small></h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>SSC ( 10th )</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="ssc" id="ssc" autocomplete="off" placeholder="Enter Percentage" maxlength="10">
                                        </div>
                                    </div> 
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Inter or Diploma</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="inter" id="inter" autocomplete="off" placeholder="Enter Percentage" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Bachelor Degree</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="degree" id="degree" autocomplete="off" placeholder="Enter Percentage" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Master Degree</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="masters" id="masters" autocomplete="off" placeholder="Enter Percentage" maxlength="10">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="row common_data">
                    <div class="col-md-12">
                        <div class="card register">
                            <h4 class="card-header form-heading">Bussiness Information</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="companyName" id="companyName" autocomplete="off" placeholder="Enter company Name" maxlength="100">
                                        </div>
                                    </div> 
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Experience ( In Years )</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="experience" id="experience" autocomplete="off" placeholder="Enter Experience" maxlength="3">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <span class="star">*</span>
                                            <select class="form-control" name="location">
                                                <option value="" selected="">-- Select Location --</option>
                                                <option value="Australia">Australia</option>
                                                <option value="New Zealand ">New Zealand</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Job in Technology</label>
                                            <span class="star">*</span>
                                            <select class="form-control" name="technology">
                                                <option value="" selected="">-- Select One --</option>
                                                <option value="J2EE Technologies">J2EE Technologies</option>
                                                <option value="DOT Net Technologies">DOT Net Technologies</option>
                                                <option value="LINUX Administration">LINUX Administration</option>
                                                <option value="Network Administration">Network Administration</option>
                                                <option value="SAP / ABAP">SAP / ABAP</option>
                                                <option value="ERP Package">ERP Package</option>
                                                <option value="Structural Analysis System">Structural Analysis System</option>
                                                <option value="Hotel Management">Hotel Management</option>
                                                <option value="Construction Work">Construction Work</option>
                                                <option value="Site Engineer">Site Engineer</option>
                                                <option value="Testing Tools">Testing Tools</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Other Location</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="otherLocation" id="otherLocation" autocomplete="off" placeholder="Enter Other Location" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Other Technology</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="otherTechnology" id="otherTechnology" autocomplete="off" placeholder="Enter Other Technology" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Passport No</label>
                                            <span class="star">*</span>
                                            <input type="text" class="form-control" name="passport" id="passport" autocomplete="off" placeholder="Enter Passport No" maxlength="35">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Referred By</label>
                                            <span class="star">*</span>
                                            <select class="form-control" name="reference">
                                                <option value="">-- Select Reference --</option>
                                                <option value="Friends">Friends</option>
                                                <option value="News Papers">News Papers</option>
                                                <option value="Advertisment">Advertisement</option>
                                                <option value="Relatives">Relatives</option>
                                                <option value="Web Site">Web Site</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary" style="width: 100%;">SUBMIT</button>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <?php $this->load->view('common/footer'); ?>
    </body>

</html>