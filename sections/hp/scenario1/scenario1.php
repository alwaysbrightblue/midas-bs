<?php $docRoot = getenv("DOCUMENT_ROOT"); ?>

<?php // for mock up purposes only, I'm containing each section as a module.
// for production, you would probably clean this up a bit, but this works for 
// getting the idea out. - Gabe Lloyd, Oct 6 2014 ?>

<div class="container-fluid padding-left-none padding-right-none" id="container">

<div class="splash-wrap" id="scenario1">
<div class="trans-cover-white">

	<h1 class="text-center highlight-trans box-pad-b box-pad-t">Hassle Free Collaboration</h1>


	<div id="splash-left">
	<p class="lead text-center"><span class="highlight-complement2">Problem:</span> You need volunteers for an event, but cannot use public employees.</p>
	</div><!-- /#splash-left -->

	<div id="splash-right">
	<p class="lead text-center"><span class="highlight-complement1">Solution:</span> Post a Work Group request to thousands of interested federal employees.</p>
	<div class="text-center"><a href="#"><button class="btn btn-midas" id="center">Post a Work Group Request</button></a></div>
	</div><!-- /#splash-left -->

</div><!-- /.splash-wrap-->
</div><!-- /.trans-cover-white -->
</div><!-- /.container-fluid-->

<!-- we have to restart the container class here because we have a closing div tag in the footer.php file -->
<div class="container-fluid padding-left-none padding-right-none" id="container">
