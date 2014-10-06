<?php $docRoot = getenv("DOCUMENT_ROOT"); ?>
<?php include $docRoot.'/header.php'; ?>

 <body>
    
    <?php include $docRoot.'/navbar.php'; // this also includes the Find A Dealer Search ?>

	<!-- content -->

	<?php include $docRoot.'/sections/hp/splash1/splash1.php'; // this is the main splash image.  can change to carousel?>
	<?php include $docRoot.'/sections/hp/scenario1/scenario1.php'; // this is a scenario section?>
	<?php include $docRoot.'/sections/hp/splash3/splash3.php'; // this is a info section?>
	<?php include $docRoot.'/sections/hp/splash4/splash4.php'; // this shows existing project previews?>
	<div class="container-fluid padding-left-none padding-right-none" id="container">

<?php include('footer.php'); ?> <?php // ending div tag for .container is in here ?>