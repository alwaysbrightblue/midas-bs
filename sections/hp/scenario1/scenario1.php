<?php $docRoot = getenv("DOCUMENT_ROOT"); ?>

<?php // for mock up purposes only, I'm containing each section as a module.
// for production, you would probably clean this up a bit, but this works for 
// getting the idea out. - Gabe Lloyd, Oct 6 2014 ?>

<div class="container-fluid padding-left-none padding-right-none" id="container">
<div class="splash-wrap" id="scenario1">

<div id="splash-center-top" class="splash-text">
	<h1 class="text-center">Hassle Free Collaboration</h1>
</div><!-- /#splash-center -->

	<div id="splash-left">
	<p class="lead text-center">Work with federal employees on projects you are passionate about.</p>
	<div class="text-center"><a href="#"><button class="btn btn-midas" id="center">Learn More</button></a></div>
	</div><!-- /#splash-left -->

	<div id="splash-right">
	<p class="lead text-center">Work with federal employees on projects you are passionate about.</p>
	<div class="text-center"><a href="#"><button class="btn btn-midas" id="center">Learn More</button></a></div>
	</div><!-- /#splash-left -->

</div><!-- /.splash-wrap-->
</div><!-- /.container-fluid-->

<!-- we have to restart the container class here because we have a closing div tag in the footer.php file -->
<div class="container-fluid padding-left-none padding-right-none" id="container">
