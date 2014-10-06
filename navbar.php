 <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="row">
        
        <div class="navbar-header">
          <div class="btn-container">
          <div class="visible-xs-inline">
          <button type="button" class="ask-toggle collapsed" data-toggle="collapse" data-target=".ask-the-expert">
            <span class="sr-only">Ask The Expert Navigation</span>
            <span class="q"><i class="fa fa-question fa-2x"></i></span>
          </button>
        </div>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
          <div class="navbar-brand">
          <a href="/"><img src="/assets/images/logo@2x.png" alt="Midas" title="Midas"></a>
          
         
          </div> <!-- /.navbar-brand -->
        <div class="navbar-right">
          
        <?php 
        // Insert the Find a Dealer Above the collapse nav so it shows in the header at all times
        include('sections/finddealer.php'); 
        ?>
        </div>
        </div>
      </div> <!-- /.row -->
        <div id="main-nav">
        
        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="/">Working Group</a></li>
            <li><a href="/pages/products.php">Opportunities</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        
      
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </nav>
    <div class="clearfix"></div>