<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Scrolling Nav - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo asset('vendor/bootstrap/css/bootstrap.min.css') ?>"rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo asset('css/scrolling-nav.css')?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo url('/') ?>"></a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo url('/about') ?>">About</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo url('/contact')?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Contact Us</h2>
          <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
          
          <form>
  <div class="form-group" method='post' action ="<?php echo url('/addcontact');?>">
    @csrf

    <?php
    if(!empty($errors->all())){
      print_r(($errors->all()));
      foreach ($errors->all() as $e) {
        echo "<div>$e</div>";
      
      };
    }
   



    ?>
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name='fullname'>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name='email' value="<?php echo 'old';?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Confirm email</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name='confirmemail'>
  </div>
    <div class="form-group">
     <button class="btn btn-info"> Contact Us</button>
  </div>
</form>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
   <script src="<?php echo asset('vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo asset('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo asset('vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="<?php echo asset('js/scrolling-nav.js')?>"></script>

</body>

</html>
