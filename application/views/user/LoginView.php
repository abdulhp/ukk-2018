<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>AIR Trans | Home</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url();?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url();?>assets/cover/cover.css" rel="stylesheet">
</head>

<body>

  <div class="site-wrapper">

    <div class="site-wrapper-inner">

      <div class="cover-container">

        <div class="masthead clearfix">
          <div class="inner">
            <h3 class="masthead-brand">AIR Trans</h3>
            <ul class="nav masthead-nav">
              <li><a href="<?= base_url('index.php');?>/home">Home</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Contact</a></li>
              <li class="active"><a href="<?= base_url('index.php');?>/Login">Login</a></li>
            </ul>
          </div>
        </div>

        <div class="inner cover">
          <h1 class="cover-heading">Log in</h1>
           <form action="" method="POST" >
          <p class="lead">
           
            <input type="text" name="username" placeholder="username" >
            <input type="password" name="password" placeholder="password" >
         
        </p>
          <p class="lead">
            <input type="submit" name="submit" value="Login" class="btn btn-lg btn-default">
          </p>
           </form>
        </div>

        <div class="mastfoot">
          <div class="inner">
            <p>Cover template for <a href="../../index.html">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
          </div>
        </div>

      </div>

    </div>

  </div>

    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="<?= base_url();?>assets/js/jquery.min.js"></script>
      <script src="<?= base_url();?>assets/dist/js/bootstrap.min.js"></script>
      <!-- <script src="../../assets/js/docs.min.js"></script> -->
    </body>
    </html>
