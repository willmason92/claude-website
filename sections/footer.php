
<!-- Footer Start -->
<div class="container-fluid bg-cream text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title text-center text-black px-3">Contact Us</h6>
        </div>
        <div class="row g-0 justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
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
</div>
<!-- Footer End -->