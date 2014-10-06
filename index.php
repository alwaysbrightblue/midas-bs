<?php $docRoot = getenv("DOCUMENT_ROOT"); ?>
<?php include $docRoot.'/header.php'; ?>

 <body>
    
    <?php include $docRoot.'/navbar.php'; // this also includes the Find A Dealer Search ?>

    <div class="container-fluid padding-left-none padding-right-none" id="container"><?php // ending div is in the footer.php file ?>
	<!-- content -->
	<?php include $docRoot.'/sections/hp/splash1.php';?>

<?php include('footer.php'); ?> <?php // ending div tag for .container is in here ?>