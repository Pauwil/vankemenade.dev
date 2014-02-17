<?php include("includes/head.php"); ?>
<?php include("includes/header.php"); ?>

<!-- Main Wrapper -->
<div id="main-wrapper">

    <?php isset($_GET['p']) ? include $_GET['p'] : include 'home.php'; ?>
</div>

<?php include("includes/footer.php"); ?>
<?php include("includes/end.php"); ?>