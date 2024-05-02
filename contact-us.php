<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Print and Plot | Digital Printing, Plotting & Labels</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="description"
        content="" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/pp-favicon.png" />
    <link rel="apple-touch-icon" href="images/pp-favicon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/pp-favicon.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/pp-favicon.png" />
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="css/font-icons.min.css" />
    <link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <style>
        @media (max-width: 1140px) {
            .contentA {
                display: none;
            }
        }
    </style>
    <script>
        function generateCaptcha() {
            // Generate two random numbers between 1 and 10
            var num1 = Math.floor(Math.random() * 10) + 1;
            var num2 = Math.floor(Math.random() * 10) + 1;

            // Display the numbers in the form
            document.getElementById('captcha').innerHTML = 'Please solve: ' + num1 + ' + ' + num2 + ' = ';

            // Store the correct answer in a hidden field for validation
            document.getElementById('captchaAnswer').value = num1 + num2;
        }

        function validateForm() {
            // Get user's answer and the correct answer
            var userAnswer = parseInt(document.getElementById('userAnswer').value);
            var correctAnswer = parseInt(document.getElementById('captchaAnswer').value);

            // Validate the CAPTCHA
            if (userAnswer === correctAnswer) {
                alert('CAPTCHA is correct. Form submission allowed!');
                // Here, you can proceed with the form submission logic
            } else {
                alert('CAPTCHA is incorrect. Please try again.');
                // Prevent form submission if CAPTCHA is incorrect
                return false;
            }
        }
    </script>
</head>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header class="header-with-topbar">
        <!-- start navigation -->
        <?php include('navbar.php'); ?>
        <!-- end navigation -->
    </header>
    <!-- end header -->
    <div class="main-content">
        <!-- start page title -->
        <section class="parallax" data-parallax-background-ratio="0.5"
            style="background-image:url('https://via.placeholder.com/1920x1100');">
            <div class="opacity-medium bg-gradient-fast-blue-purple"></div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div
                        class="col-12 position-relative page-title-large text-center d-flex align-items-center justify-content-center flex-column">
                        <h4 class="alt-font text-white font-weight-500 no-margin-bottom">Let's start a conversation
                            about your next project!</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="pb-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">
                    <!-- start feature box item -->
                    <div class="col md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeIn"
                        data-wow-delay="0.2s">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon">
                                <i
                                    class="line-icon-Headset icon-large text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span
                                    class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-large text-uppercase">Let's
                                    Talk</span>
                                <p><a href="tel:84605 12372" class="text-fast-blue-hover text-extra-dark-gray text-extra-medium">Phone: 84605
                                        12372</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeIn"
                        data-wow-delay="0.4s">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon">
                                <i
                                    class="line-icon-Geo2-Love icon-large text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span
                                    class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-large text-uppercase">Print
                                    & Plot</span>
                                <p class="d-inline-block w-70 lg-w-90 md-w-60 sm-w-80 xs-w-100"><a
                                        href="https://maps.app.goo.gl/2Edpor2cZkiKJ8jy9"
                                        class="text-fast-blue-hover text-extra-dark-gray text-extra-medium">905/B, Panditji Ni
                                        Pol,
                                        Raipur, Ahmedabad, Gujarat 380001</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col xs-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.3s">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon">
                                <i
                                    class="line-icon-Mail-Read icon-large text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span
                                    class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-large text-uppercase">E-mail
                                    Us</span>
                                <p><a href="mailto:info@yourdomain.com"
                                        class="text-fast-blue-hover text-extra-dark-gray text-extra-medium">info@printandplot.in</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="big-section wow animate__fadeIn">
            <div class="container">
                <div class="row align-items-end justify-content-center">
                    <div class="col-12 col-lg-12 col-md-8">
                        <h4 class="alt-font text-black font-weight-600">Let's get in touch with us</h4>
                        <form action="email-templates/contact-form.php" method="post"
                            class="alt-font text-extra-dark-gray">
                            <input
                                class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px required"
                                type="text" name="name" placeholder="Your name" />
                            <input
                                class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px required"
                                type="email" name="email" placeholder="Your email address" />
                            <input
                                class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px required"
                                type="tel" name="phone" placeholder="Mobile no" />
                            <textarea
                                class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-35px-bottom border-radius-0px required"
                                name="comment" rows="5" placeholder="How can we help you?"></textarea>
                            <div class="container">
                                <div class="row row-cols-2 row-cols-lg-2 row-cols-sm-2"
                                    style="justify-content: space-between;">
                                    <label class="no-padding" id="captcha"></label>
                                    <a type="button" onclick="generateCaptcha()"
                                        class="btn btn-extra-small btn-rounded no-padding"><i class="feather icon-feather-repeat icon-small align-middle"></i>
                                    </a>
                                </div>
                            </div>
                            <input type="text" id="userAnswer" name="userAnswer"
                                class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px required"
                                placeholder="Your Answer" />
                            <input type="hidden" id="captchaAnswer" name="captchaAnswer" />
                            <!-- <div class="g-recaptcha margin-35px-bottom"
                                data-sitekey="6LfJf98bAAAAAGC26hfKyd2Ptddbs9xYm4mCNeLx"></div> -->
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-medium btn-dark-gray mb-0 submit" type="submit">send
                                message</button>
                            <div class="form-results d-none"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start map section -->
        <section class="no-padding-tb wow animate__fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-0">
                        <div class="map-style-3 h-500px xs-h-300px">
                            <iframe class="w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.083493870214!2d72.5903208749517!3d23.020706379175067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e87e9a5a7e4cb%3A0xc2a39e6d6b31a1c4!2sPRINT%20AND%20PLOT!5e0!3m2!1sen!2sin!4v1703510141579!5m2!1sen!2sin"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end map section -->
        <!-- start section -->
        <section class="half-section">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- start feature box item-->
                    <div class="col-12 col-sm-auto sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex justify-content-center align-items-center padding-15px-lr h-100">
                            <i
                                class="feather icon-feather-mail align-middle icon-extra-small text-fast-blue margin-10px-right"></i>
                            <a href="mailto:info@yourdomain.com"
                                class="text-extra-dark-gray text-fast-blue-hover text-medium">info@printandplot.in</a>
                        </div>
                    </div>
                    <!-- end feature box item-->
                    <!-- start feature box item-->
                    <div class="col-12 col-sm-auto sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex justify-content-center align-items-center padding-15px-lr h-100">
                            <i
                                class="feather icon-feather-headphones align-middle icon-extra-small text-fast-blue margin-10px-right"></i>
                            <span class="alt-font text-medium"><a href="tel:84605 12372"
                                    class="text-extra-dark-gray text-fast-blue-hover text-medium">84605
                                    12372</a></span>
                        </div>
                    </div>
                    <!-- end feature box item-->
                    <!-- start feature box item-->
                    <div class="col-12 col-sm-auto wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="d-flex justify-content-center align-items-center padding-15px-lr h-100">
                            <i
                                class="feather icon-feather-globe align-middle icon-extra-small text-fast-blue margin-10px-right"></i>
                            <a href="https://www.printandplot.in"
                                class="text-extra-dark-gray alt-font text-medium">www.printandplot.in</a>
                        </div>
                    </div>
                    <!-- end feature box item-->
                </div>
            </div>
            <div class="row justify-content-center wow animate__fadeIn">
                <div
                    class="col-12 col-lg-10 d-flex flex-row align-items-center justify-content-center text-center margin-7-half-rem-top">
                    <span class="col-auto w-40px h-1px bg-dark-gray opacity-3"></span>
                    <div class="alt-font font-weight-500 text-large text-extra-dark-gray padding-20px-lr">We like to
                        talk and on the strength of that you are invited for a coffee</div>
                    <span class="col-auto w-40px h-1px bg-dark-gray opacity-3"></span>
                </div>
            </div>
        </section>
        <!-- end section -->
    </div>
    <!-- start footer -->
    <?php include('footer.php'); ?>
    <!-- end footer -->
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
    <!-- end scroll to top -->
    <!-- javascript -->
    <script>
        // Generate CAPTCHA when the page loads
        window.onload = generateCaptcha;
    </script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/theme-vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- google recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>