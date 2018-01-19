<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('common/head'); ?>
    </head>
    <body>
        <?php $this->load->view('common/nav'); ?>
        <header>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url('<?= config_item('root_dir'); ?>assets/images/111.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Freshers</h3>
                            <p class="text-center">ARK Innovations offers challenging opportunities to freshers. Please
                                <a href="#">Click here</a> to apply</p>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('<?= config_item('root_dir'); ?>assets/images/222.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Students</h3>
                            <p class="text-center">ARK Innovations needs Students for AICT. Please
                                <a href="#">Click here</a> to apply</p>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('<?= config_item('root_dir'); ?>assets/images/333.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Professionals</h3>
                            <p class="text-center">ARK Innovations offers experienced professionals. Please
                                <a href="#">Click here</a> to apply.</p>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('<?= config_item('root_dir'); ?>assets/images/444.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Bussiness</h3>
                            <p class="text-center">ARK Innovations offers Bussiness opportunities. Please
                                <a href="#">Click here</a> to apply</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>

        <!-- Page Content -->
        <div class="container">
            <!-- About Section -->
            <div class="welcome-website">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="text-center">Welcome to Our Website</h2>
                        <p>Established in 2005,
                            <b>ARK Innovations Consultancy Services</b> is the world leader in providing Global Resettlement Solutions, which
                            is vouched by more than 3,000 people who have happily settled in some of the favoured countries like
                            <b>Singapore, UK, Ireland, Poland, Beligum, Australia and New Zealand</b>. As the country's largest Immigration
                            and Settlement Company, WWICS is built on a legacy of delivering excellence, industry knowledge, world-class
                            infrastructure and comprehensive resettlement package consisting of immigration, placement & settlement experts.
                        </p>
                        <p>We thrive for the excellence of your career. we, at
                            <b>ARK Innovations</b>, work to bring the best Opportunities to you, which you deserve from the world. We make you,
                            stand before the world of opportunities and face it with all the zeal that you have. Placing the right fruit
                            for the right person is our theme, we work for Enthusiasm, Hard work & Confidence is our weapons we face the
                            world with and make you do the same. </p>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid rounded" src="<?= config_item('root_dir'); ?>assets/images/ab.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <h2 class="my-4 middle-heading">
                <small>Welcome to </small>&nbsp;ARK Innovations&nbsp;
                <small> Consultancy Services</small>
            </h2>

            <!-- Marketing Icons Section -->
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Skilled Worker Category</h4>
                        <div class="card-body">
                            <p class="card-text">You can obtain Permanent Residency under Skilled Worker category which grants you the permission to live and
                                work lawfully anywhere in the country of your choice. It also allows you to have an access on various social
                                programs. Being a skilled professional you can make your home abroad with the help of your education and work
                                experience.
                            </p>
                        </div>
                        <!-- <div class="card-footer">
                          <a href="#" class="btn btn-primary">Learn More</a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Business Immigration</h4>
                        <div class="card-body">
                            <p class="card-text">Business Immigration With the world revolutionizing into a global village, distances are shrinking and breaking
                                of trade barriers with advancement in technology has created a phenomenal demand for potential businessmen
                                worldwide. Developed countries like Canada, South Africa, Singapore, Australia & New Zealand offer excellent
                                opportunities to attract potential investor to establish new business or expand/diversify their existing business.</p>
                        </div>
                        <!-- <div class="card-footer">
                          <a href="#" class="btn btn-primary">Learn More</a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Work Permit</h4>
                        <div class="card-body">
                            <p class="card-text">Interested in working abroad? Well you can't just hop on a plane for any country and start looking for a paid
                                job. To work would be illegal without a work permit, which you cannot acquire without a job offer and very
                                few employers will offer you a job if you haven't applied for a work permit. But, ARK Innovations can help
                                you cut the red tape, acquire a legal work permit and place you in a job.</p>
                        </div>
                        <!-- <div class="card-footer">
                          <a href="#" class="btn btn-primary">Learn More</a>
                        </div> -->
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Overseas Education</h4>
                        <div class="card-body">
                            <p class="card-text">Educational Excellence, High Rate of Employment and Good Income Potential with Excellent Work Environment attracts
                                the top students from across the globe. Outstanding academic standing and resources of the Universities in
                                the developed countries make sure that you get the most from your experience in an international education
                                institute.
                            </p>
                        </div>
                        <!-- <div class="card-footer">
                          <a href="#" class="btn btn-primary">Learn More</a>
                        </div> -->
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Visitor Visa</h4>
                        <div class="card-body">
                            <p class="card-text">Visitor Visa is for applicants who intend to travel to Canada as tourists. The visitor visa or Temporary Resident
                                Permit (TRV) is country specific and may be for single entry, multiple entry or transit purposes. Generally,
                                visitor visas may be granted for a renewable period of 6 months. </p>
                        </div>
                        <!-- <div class="card-footer">
                          <a href="#" class="btn btn-primary">Learn More</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="welcome-website" style="margin-top: 0px;">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded" src="<?= config_item('root_dir'); ?>assets/images/abc.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <p>
                            <b>ARK Innovations</b> is appointed by various universities as their official Representative to provide quality
                            service to the students in terms of Admission and Visa guidance. We at 'ARK' make sure an utmost care is given
                            to each and every student to make sure that the admission and the visa are secured.
                        </p>
                        <p>Proper guidance is necessary for the students so that students do not go on wrong track to achieve their goal.
                            We guide them in every necessary aspect: </p>
                        <ul class="service-list">
                            <li>For IELTS.</li>
                            <li>For Documentation for visa purpose.</li>
                            <li>For NRI Accounts.</li>
                            <li>Pre – Departure guidance.</li>
                            <li>Educational Loan.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Portfolio Section -->
            <h2 class="my-4 middle-heading">
                <small>Our comprehensive </small>&nbsp;Services&nbsp;
                <small>includes</small>
            </h2>

            <div class="row">
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/information.png" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Information about Australia and New Zealand</a>
                            </h4>
                            <!-- <p class="card-text">Information about Australia and New Zealand</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/visa.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Guidance about VISA processing</a>
                            </h4>
                            <!-- <p class="card-text">Appointments with panel of doctors for medical examination</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/arrival.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">On arrival services in Australia and New Zealand</a>
                            </h4>
                            <!-- <p class="card-text">Updated information on courses and Universities</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/ser4.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">To provide authentic information to students</a>
                            </h4>
                            <!-- <p class="card-text">To provide authentic information to students</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/insurance.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Assistance for Foreign Exchange and Insurance</a>
                            </h4>
                            <!-- <p class="card-text">Assistance for Foreign Exchange and Insurance</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/university.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Updated information on courses and Universities</a>
                            </h4>
                            <!-- <p class="card-text">Updated information on courses and Universities</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/airtickets.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Discounted Air ticket from Major airliner</a>
                            </h4>
                            <!-- <p class="card-text">Updated information on courses and Universities</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/council.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Counseling the students</a>
                            </h4>
                            <!-- <p class="card-text">Counseling the students</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/family.jpeg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">The total solution provider for International students and their families after their departure</a>
                            </h4>
                            <!-- <p class="card-text">Information about Australia and New Zealand</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/accomodation.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Temporary accommodation arrangement in Australia / New Zealand on students request</a>
                            </h4>
                            <!-- <p class="card-text">Appointments with panel of doctors for medical examination</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/medical.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Appointments with panel of doctors for medical examination</a>
                            </h4>
                            <!-- <p class="card-text">Updated information on courses and Universities</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/lifestyle.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Guidelines and information's regarding part-time work, life style, etc</a>
                            </h4>
                            <!-- <p class="card-text">To provide authentic information to students</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/followup.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Regular follow-up with High Commission</a>
                            </h4>
                            <!-- <p class="card-text">Updated information on courses and Universities</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/application.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Assistance in application procedures</a>
                            </h4>
                            <!-- <p class="card-text">To provide authentic information to students</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <h2 class="my-4 middle-heading" style="margin: 0px !important;">
                <small>Our </small>Clients</h2>
            <div class="row" style="margin: 0px !important;">
                <div class="col-lg-3 col-sm-6 text-center mb-4 welcome-clients">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="<?= config_item('root_dir'); ?>assets/images/3-p3.gif" alt="">
                    <h6 class="text-center">InnerGraph Incorporation (USA)</h6>
                </div>
                <div class="col-lg-3 col-sm-6 text-center mb-4 welcome-clients">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="<?= config_item('root_dir'); ?>assets/images/3-p5.gif" alt="">
                    <h6 class="text-center">Gloabal Connection (Sing)</h6>
                </div>
                <div class="col-lg-3 col-sm-6 text-center mb-4 welcome-clients">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="<?= config_item('root_dir'); ?>assets/images/3-p6.gif" alt="">
                    <h6 class="text-center">Bethipudi Industries pvt. ltd.</h6>
                </div>
                <div class="col-lg-3 col-sm-6 text-center mb-4 welcome-clients">
                    <img class="rounded-circle img-fluid d-block mx-auto" src="<?= config_item('root_dir'); ?>assets/images/aictlogo.jpg" width="40" height="auto" alt="">
                    <h6 class="text-center">Australian Institue of Commerce & Technology (AUS)</h6>
                </div>
            </div>

            <h2 class="my-4 middle-heading">Careers</h2>

            <div class="row">
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/leader.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Leadership</a>
                            </h4>
                            <p class="card-text">We are committed to being the industry leader in services globalization.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/quality.png" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Quality</a>
                            </h4>
                            <p class="card-text">We are intently focused on the needs of our clients, and will consistently deliver the highest level of service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/passion.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Passion</a>
                            </h4>
                            <p class="card-text">Our passion for services globalization permeates every client relationship we establish and every solution we
                                help our clients develop.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/teamwork.png" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Teamwork</a>
                            </h4>
                            <p class="card-text">The mutual success of our clients, our partners, our company and our community starts with effective teamwork.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/speed.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Speed</a>
                            </h4>
                            <p class="card-text">We realize that time is money and help clients achieve objectives in a timely and efficient manner.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/respect.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Respect</a>
                            </h4>
                            <p class="card-text">We recognize that our business is about people, and treat each individual client, partner, and team member with
                                the utmost respect.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#">
                            <img class="card-img-top" src="<?= config_item('root_dir'); ?>assets/images/results.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Results</a>
                            </h4>
                            <p class="card-text">Our clients deserve measurable, sustainable results that transform their organizations. </p>
                        </div>
                    </div>
                </div>
            </div>


            <h2 class="my-4 middle-heading" style="margin-top: 0 !important;">Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="contacts-home">
                        <h3>Main Branch Office :</h3>
                        <h4>B. ANAND KUMAR -
                            <small>Director</small>
                        </h4>
                        <h6>ARK Innovations </h6>
                        <p>#203, 2nd Floor,</p>
                        <p>Alluri Commercial Complex, Bhagyanagar, </p>
                        <p>Colony, KPHB Main Road, Kukatpally,</p>
                        <p>Hyderabad, Telangana., India - 72. </p>
                        <br>
                        <p>Cell : &nbsp;+91-98489 45727 </p>
                        <p>Tele : &nbsp;+91-40-39109727 </p>
                        <p>Fax : &nbsp;+91-40-30421727 </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contacts-home">
                        <h3>Corporate Office :</h3>
                        <h4>B. ANAND KUMAR -
                            <small>Director</small>
                        </h4>
                        <h6>Mission Manpower Solutions Pte Ltd.</h6>
                        <p>35 Selegie Road,</p>
                        <p>#05-21, Park Lane Shopping Mall,</p>
                        <p>Singapore - 188307.</p>
                        <br>
                        <br>
                        <p>Cell : &nbsp;+65-9881 1334 </p>
                        <p>Tele : &nbsp;+65-6337 6773</p>
                        <p>Fax : &nbsp;+65-6337 3743 </p>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('common/footer'); ?>
    </body>

</html>