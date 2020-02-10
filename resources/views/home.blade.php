<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Smart travel home</title>
        <meta name="description" content="A bus booking application">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="best bus service,lagos to owerri,Lagos to onitsha, best transport company in Nigeria  ">
		<meta name="Author" content="Olekamma Kingsley Uche">
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

       
        <link rel="stylesheet" href= <?php echo asset("css/bootstrap.css"); ?>>
        <link rel="stylesheet" href=<?php echo asset("style.css");?>>
    </head>
    <body>
    	<div class="container-fluid">
         <div class="row m-1">
            <div class="nav navg" style="display: flex;position:fixed;z-index:1;width:95%; border:1px solid red">
              <div class="col-md-6"><img src="images/logo.png" style="max-height:50px" class="img-fluid"><h4 class="text-danger">Smart Transport Nigeria Limited</h4><span class="text-light">...Giving you the best experience on road <b>transportation</b></span></div>
                    <div class="col-md-6"><nav class="navbar navbar-expand-lg navbar-light bg-light nav mt-2 navg">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pick up service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sign up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Log in</a>
      </li>
      
    </ul>
  </div>
</nav></div>
                    

        </div> 
       

            </div>
               

<div class="row m-1">
        <div id="outer" class="rounded col-md-12 p-1">
            <div id="inner">
                <form action="home_submit" method="post" accept-charset="utf-8">
                  @csr
                  <div class="form-group rounded"><select name="" class="rounded">
                    <option value="">Where are you travelling from?</option>
                    
                  </select></div>
                  <div class="form-group"><select name="destination" class="rounded">
                    <option value=""> Select destination</option>
                    
                  </select></div>
                  <div class="form-group rounded">
                    <label><input type="date" name="date" ></label>
                  </div>
                  <div class="form-group rounded">
                    <select name="number of adults" class="rounded">
                      <option value="">Number of adults</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      
                    </select>
                  </div>
                  <button type="button" class="btn btn-success rounded">Submit</button>
                </form>
                
            </div>
        </div>
    </div>

                    
                
    </div>
    
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
            <script src="js/jquery.js" type="text/javascript" ></script>
                    <script src="js/popper.min.js" type="text/javascript"></script>
                    <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>