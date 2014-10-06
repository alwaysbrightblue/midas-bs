<?php $docRoot = getenv("DOCUMENT_ROOT"); ?>

<?php // for mock up purposes only, I'm containing each section as a module.
// for production, you would probably clean this up a bit, but this works for 
// getting the idea out. - Gabe Lloyd, Oct 6 2014 ?>

<div class="container-fluid padding-left-none padding-right-none" id="container">
<div class="splash-wrap">
	<div class="col-md-4">
	<div class="hero-wrapper" id="fs">
      <div class="hero-widget well" id="allstar">
            <a href="#">
            <div class="icon">
                 <i class="fa fa-clock-o"></i>
            </div>
            <div class="text">
                <var>Save Time</var>
              </a>  
            </div>
        </div>
	    </div>
	</div>
    <div class="col-md-4">
      <div class="hero-widget well" id="facebook">
            <a href="#" target="_blank">
            <div class="icon">
                 <i class="fa fa-facebook-square"></i>
            </div>
            <div class="text">
                <var>Make Connections</var>
              </a>
               
            </div>
            
       </div>
    </div>
    <div class="col-md-4">
        <div class="hero-widget well" id="twitter">
            <a href="#" target="_blank">
            <div class="icon">
                 <i class="fa fa-twitter-square"></i>
            </div>
            <div class="text">
                <var>Make a Difference</var>
              </a>
                
            </div>
         
        </div>
    </div>

</div><!-- /.splash-wrap -->
</div><!-- /.container-fluid-->
