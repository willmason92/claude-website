<?php 

require_once '../includes/mysql-connect-local.php';
require_once '../includes/base-url.php';
require_once '../includes/data/get-products.php';
require_once '../includes/contact-form/process.php';

if ($_GET['c']) {
    $c = $_GET['c'];

    $query = "SELECT * FROM products WHERE category_id = $c"; //You don't need a ; like you do in SQL
    $products = $mysqli->query($query);

    $category_id = $c;

    $query2 = "SELECT * FROM categories WHERE id = $category_id"; //You don't need a ; like you do in SQL
    $result = $mysqli->query($query2);
    $category = $result->fetch_assoc();
}
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
    <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/slick-slider.css" rel="stylesheet">
</head>

<body>

<?php require_once '../sections/navigation.php'; ?>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="bg-white text-center text-primary">
                <?php echo $category['name']; ?>
				</h6>
            </div>
        </div>
    </div>

   <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <?php 

                $count = 1;
                foreach ($products as $product) {
                        $pathx = '../assets/img/claude/';

                ?>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="<?php echo $base_url; ?>/stock/product?id=<?php echo $product['id']; ?>">
                        <div class="team-item text-center p-4">
                            <img class="img-fluid" src="<?php echo $pathx . $product['photo']; ?>" alt="">
                            <div class="team-text">
                                <div class="team-title">
                                    <h5><?php echo $product['name']; ?> (ref: <?php echo $product['id']; ?>)</h5>
                                    <span><?php echo '£' . $product['price']; ?></span>
                                </div>
                                <div class="team-social">
                                    View
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php $count++; } ?>
            </div>
        </div>
    </div>

   <!--  <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Latest Stock</h6>
            </div>
            <div class="slider">
            	<?php foreach ($products as $product) { 
            		$pathx = 'assets/img/claude/';
        		?>
                <div class="overlay-container">
                    <a href="<?php echo $base_url; ?>/stock/product.php?id=<?php echo $product['id']; ?>">
	                    <img class="image" src="<?php echo $pathx . $product['photo']; ?>" />
	                    <div class="overlay">
	                        <div class="text"><?php echo $product['name'] ?></div>
	                    </div>
                    </a>
                </div>
            	<?php } ?>
            </div>
        </div>
    </div> -->

	<?php require_once '../sections/footer.php'; ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/wow/wow.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/counterup/counterup.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/slick-slider.js"></script>

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