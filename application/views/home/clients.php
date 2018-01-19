<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('common/head'); ?>
    </head>
    <body>
        <?php $this->load->view('common/nav'); ?>
        <div class="container">            
            <h2 class="mt-4 mb-3 middle-heading" style="margin-top: 45px !important;">Clients</h2>
            <div class="about-website">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded mb-4" src="<?= config_item('root_dir'); ?>assets/images/client.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <p>We offer specialized resources that deliver their area of responsibility while maintaining a "big picture"
                            perspective to insure the overall success of the project. We identify, manage, and mitigate risk,
                            both technical and non-technical. Our people come with extensive experience in various industries
                            and understand the unique challenges that must be met to deliver successful projects.
                        </p>
                        <p> We provide the option of selecting a combination of business models to suit various phases of a project
                            cycle. Depending on your specific requirement, we can work out a business model best suited to your
                            needs.
                        </p>
                        <p>ARK's Client Engagement Model has been developed with the Customer in mind. It focuses on delivery of
                            cost, quality, and schedule sensitive solutions to our customers.</p>
                    </div>
                </div>
            </div>
            <!-- /.row -->
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
            <div class="row" style="margin-bottom: 25px;">
                <div class="col-lg-12 mb-12">
                    <div class="card h-100">
                        <h4 class="card-header" style="color: #4CAF50;">Client Success</h4>
                        <div class="card-body">
                            <p class="card-text">
                                <b>ARK Innovations</b> prides itself on providing objective advice on issues related to services
                                globalization to the most discerning clients. We build trusted, long-term relationships with
                                our clients by focusing on exemplary service, innovative thinking and measurable results..
                            </p>
                            <p class="card-text">Here's what some of our clients have to say.</p>
                            <p class="card-text">
                                "The level of expertise, strategic thinking, consultation, rapid response, and integrity that I receive from ARK Innovations
                                is unparalleled in over 20 years of technology leadership. I would recommend their services to
                                anyone truly serious about world-class offshoring."
                                <br>
                                <b>- Inner Graph Incorporation ( USA )</b>
                            </p>
                            <p class="card-text">
                                "We are very pleased with the comprehensive nature of the due diligence and subsequent analysis. The information definitely
                                helps us understand the offshore marketplace better. In fact, the risk assessment will be critical
                                to our offshore initiatives going forward."
                                <br>
                                <b>- Global Connection Company ( Singapore )</b>
                            </p>
                            <p class="card-text">
                                "It is difficult to stress just how important a role ARK Innovations played. They have engineered this process, and have
                                accelerated our implementation timeline with a better quality result...a good combination to
                                have. One of the things I find striking about ARK Innovations is the depth and quality of resources
                                they have - everyone they threw at us is top-notch."
                                <br>
                                <b>- Australian Institue of Commerce & Technology ( AICT-Australia )</b>
                            </p>
                            <p class="card-text">
                                <b>Some More Clients are: </b>
                                <br>
                                <b>Industries Pvt. ltd. (IND)</b>
                                <br>
                                <b>KISIKA Solutions Pvt. Ltd. (IND)</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('common/footer'); ?>
    </body>
</html>