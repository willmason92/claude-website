<?php 

$seating = 1;
$lighting = 2;
$tables = 3;
$cabinets = 4;
$mirrors = 5;
$decorative = 6;

?>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
    <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-primary navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="<?php echo $base_url; ?>" class="navbar-brand ms-3 d-lg-none century-gothic">CLAUDE &amp; THE PIGEON</a>
    <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav me-auto p-3 p-lg-0">
            <a href="<?php echo $base_url; ?>/index.php" class="nav-item nav-link century-gothic">CLAUDE &amp; THE PIGEON</a>
            <a href="<?php echo $base_url; ?>/index.php" class="nav-item nav-link active">HOME</a>
            <a href="<?php echo $base_url; ?>/about.php" class="nav-item nav-link active">ABOUT</a>
            <!-- <a href="about.html" class="nav-item nav-link">About Us</a> -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">STOCK</a>
                <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                    <a href="<?php echo $base_url; ?>/stock/category.php?c=<?php echo $seating; ?>" class="dropdown-item">Seating</a>
                    <a href="<?php echo $base_url; ?>/stock/category.php?c=<?php echo $lighting; ?>" class="dropdown-item">Lighting</a>
                    <a href="<?php echo $base_url; ?>/stock/category.php?c=<?php echo $tables; ?>" class="dropdown-item">Tables</a>
                    <a href="<?php echo $base_url; ?>/stock/category.php?c=<?php echo $cabinets; ?>" class="dropdown-item">Cabinets & Storage</a>
                    <a href="<?php echo $base_url; ?>/stock/category.php?c=<?php echo $mirrors; ?>" class="dropdown-item">Mirrors</a>
                    <a href="<?php echo $base_url; ?>/stock/category.php?c=<?php echo $decorative; ?>" class="dropdown-item">Decorative</a>
                </div>
            </div>
            <a href="<?php echo $base_url; ?>/contact.php" class="nav-item nav-link">CONTACT US</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->