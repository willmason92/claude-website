<?php 

require_once 'includes/mysql-connect-local.php';
require_once 'includes/base-url.php';
require_once 'includes/contact-form/process.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Claude &amp; the Pigeon Antiques</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!-- <link href="favicon.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/slick-slider.css" rel="stylesheet">
</head>

<body>

<?php require_once 'sections/navigation.php'; ?>

<?php require_once 'sections/banner.php';?>

    <div class="container-xxl py-5">
        <div class="">
            <div class="mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="">
                <h6 class="bg-white text-center text-primary" style="font-size: 2.2em;">
                    Contact
                </h6>
                <h6 class="bg-white text-center text-primary" style="max-width: 800px; text-align: center; margin: auto;">
                    We are always interested in purchasing items. If you have something you think may be of interest please get in touch via our contact form, email or phone.
                </h6>
                <div class="row">
                    <div class="col-lg-4 col-md-4 mx-5 my-5">
                        <h6 class="text-primary">
                            Get in touch:
                        </h6>
                        <p>
                            Tel - <a href="tel: 07500936129">07500936129</a>
                            <br>
                            Email - <a href="mailto: hello@claudeandthepigeon.co.uk">hello@claudeandthepigeon.co.uk</a>
                        </p>


                        <h6 class="text-primary">
                            Visit us:
                        </h6>
                        <p>
                            The Loft, Derwentside Shopping Mill, Derwent Street, Belper, DE56 1WN
                        </p>

                        <h6 class="text-primary">
                            Opening Times
                        </h6>
                        <h6 class="text-primary">
                            Monday-Saturday 9am-5pm & Sunday 10am-4pm.
                        </h6>

                        <br><br>

                        <div style="display: inline-flex;">
                            <a 
                                class="btn btn-lg btn-primary btn-square btn-outline-secondary rounded-circle me-1" 
                                href="https://www.instagram.com/claudeandthepigeon" target="_blank"
                            >
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a 
                                class="btn btn-lg btn-primary btn-square btn-outline-secondary rounded-circle me-1" 
                                href="https://www.facebook.com/claudeandthepigeon" target="_blank"
                            >
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>

                    </div>


            <div class="col-lg-6 wow fadeInUp mx-5 my-5" data-wow-delay="0.5s">
                <form 
                name="formContact" 
                method="POST"
                encrypt="multipart/form-data"
                onsubmit="return validateContactForm()"
                >
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control input-field" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                                <span id="name-info" class="info">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control input-field" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                                <span id="email-info" class="info">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control input-field" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                                <span id="subject-info" class="info">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control input-field" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                <label for="message">Message</label>
                                <span id="message-info" class="info">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                        </div>

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
                    </div>
                </form>
            </div>
<!-- Footer End -->





                    </div>
                </div>



            </div>
        </div>
    </div>


    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-black">
                    &copy; <a href="https://claudeandthepigeon.co.uk" style="color: black;">Claude &amp; the Pigeon</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/slick-slider.js"></script>

<script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#FF0000 4px solid');
            var userName = $("#name").val();
            var userEmail = $("#email").val();
            var subject = $("#subject").val();
            var message = $("#message").val();
            
            if (userName == "") {
                $("#name-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#email-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#email-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#FF0000 4px solid');
                valid = false;
            }
            if (message == "") {
                $("#message-info").html("Required.");
                $("#content").css('border', '#FF0000 4px solid');
                valid = false;
            }
            return valid;
        }
</script>
</body>

</html>