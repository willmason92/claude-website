<?php 

require_once '../includes/mysql-connect-local.php';
require_once '../includes/base-url.php';
require_once '../includes/data/get-products.php';
require_once '../includes/contact-form/process.php';

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



<?php 
$id = $_GET['id'];
$product_path = 'http://api.claudeandthepigeon.co.uk/images/products/';
?>
    <main class="container" style="max-width: 1200px; margin: 0 auto; padding: 15px; display: flex;">
    <?php 
    if ($result = $mysqli->query("SELECT * FROM products WHERE id=$id")) {
        while ($row = $result->fetch_assoc()) {
        $category_id = $row['category_id'];
    ?>
      <div class="left-column">
        <img src="<?php echo $product_path . $row['photo']; ?>" alt="">
      </div>

      <!-- Right Column -->
      <div class="right-column">
        <!-- Product Description -->
        <div class="product-description">
            <?php 
            if ($result2 = $mysqli->query("SELECT * FROM categories WHERE id = $category_id")) {
                while ($category = $result2->fetch_assoc()) {
            ?>
          <span><a href="<?php echo $base_url; ?>/stock/category.php?c=<?php echo strtolower($category['id']); ?>"><?php echo $category['name']; ?></a></span>
          <?php 
                }
            }
          ?>
          <h1><?php echo $row['name'] ?></h1>
          <p><?php echo $row['description']; ?></p>
          <p>Ref: <?php echo $row['id']; ?></p>
        </div>
        <!-- Product Pricing -->
        <div class="product-price">
          <span>£<?php echo $row['price']; ?></span>
        </div>
      </div>
    <?php 
        }
    }
    $result->free_result();
    ?>
    </main>

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