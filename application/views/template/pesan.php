<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">  <![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
<head>
  <!-- meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
  <title>Euro Travel</title>

  <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/owl.theme.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/main.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/section.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/services.css">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="<?php echo base_url();?>assets/landing/js/html5shiv.js"></script>
        <script src="<?php echo base_url();?>assets/landing/js/respond.js"></script>
      <![endif]-->

      <!--[if IE 8]>
          <script src="<?php echo base_url();?>assets/landing/js/selectivizr.js"></script>
        <![endif]-->
      </head>
      <body>

        <!-- Home -->
        <section class="header">

          <nav class="navbar navbar-default">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" title="HOME"><i class="ion-paper-airplane"></i> euro <span>travel</span></a>
              </div> <!-- /.navbar-header -->

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">about</a></li>
                  <li class="active"><a href="services.html">services</a></li>
                  <li><a href="contact.html">contact</a></li>
                </ul> <!-- /.nav -->
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
          </nav>
        </section> <!-- /#header -->

        <!-- Section Background -->
        <section class="section-background">
          <div class="container">
            <h2 class="page-header">
              our service
            </h2>
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li class="active">&nbsp;services</li>
            </ol>
          </div> <!-- /.container -->
        </section> <!-- /.section-background -->


        <section class="features section-wrapper">
          <div class="container">
            <h2 class="section-title">
              Mengisi Data Diri
            </h2>
            <!-- <p class="section-subtitle">
              <i></i>
            </p> -->
            <div class="row">
              <form action="<?php echo base_url('template/reservasi') ?>" method="post">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="hidden" name="idtransport" value="<?php echo $id_transport ?>">
                    <input type="hidden" name="idrute" value="<?php echo $id_rute ?>">
                    <label for="name">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" name="address" class="form-control" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                    <label for="phone">No. Telepon</label>
                    <input type="text" name="phone" class="form-control" placeholder="No. Telepon">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <p><input type="radio" name="gender" value="1" > Laki-Laki</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <p><input type="radio" name="gender" value="0"> Perempuan</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit" class="form-control btn btn-primary">
                  </div>
                </div>
                <div class="col-md-6">
                  <?php for ($i=1; $i <= 200; $i++) :?>
                    <div class="col-md-2">
                      <div class="form-group">
                        <p><input type="radio" name="seat" value="A<?php echo $i;?>"> A<?php echo $i;?></p>
                      </div>
                    </div>
                  <?php endfor; ?>
                </div>

              </div>
            </form>

          </div>


        </div> <!-- /.container -->
      </section> <!-- /.features -->



      <section class="additional-services section-wrapper">
        <div class="container">
          <h2 class="section-title">
            Additional services
          </h2>
          <p class="section-subtitle">
            Lorem Ipsum is simply dummy text of the industry.
          </p>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="custom-table">
                <img src="<?php echo base_url();?>assets/landing/images/add-srvc-1.png" alt="" class="add-srvc-img">
                <div class="add-srvc-detail">
                  <h4 class="add-srvc-heading">
                    Photography
                  </h4>
                  <p class="add-srvc">
                    Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                  </p>
                </div> <!-- /.add-srvc-detail -->
              </div> <!-- /.custom-table -->
            </div> <!-- /.col-md-4 col-sm-6 -->

            <div class="col-md-4 col-sm-6">
              <div class="custom-table">
                <img src="<?php echo base_url();?>assets/landing/images/add-srvc-2.png" alt="" class="add-srvc-img">
                <div class="add-srvc-detail">
                  <h4 class="add-srvc-heading">
                    Cycling
                  </h4>
                  <p class="add-srvc">
                    Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                  </p>
                </div> <!-- /.add-srvc-detail -->
              </div> <!-- /.custom-table -->
            </div> <!-- /.col-md-4 col-sm-6 -->

            <div class="col-md-4 col-sm-6">
              <div class="custom-table">
                <img src="<?php echo base_url();?>assets/landing/images/add-srvc-3.png" alt="" class="add-srvc-img">
                <div class="add-srvc-detail">
                  <h4 class="add-srvc-heading">
                    Waking
                  </h4>
                  <p class="add-srvc">
                    Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                  </p>
                </div> <!-- /.add-srvc-detail -->
              </div> <!-- /.custom-table -->
            </div> <!-- /.col-md-4 col-sm-6 -->

            <div class="col-md-4 col-sm-6">
              <div class="custom-table">
                <img src="<?php echo base_url();?>assets/landing/images/add-srvc-4.png" alt="" class="add-srvc-img">
                <div class="add-srvc-detail">
                  <h4 class="add-srvc-heading">
                    Skiing
                  </h4>
                  <p class="add-srvc">
                    Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                  </p>
                </div> <!-- /.add-srvc-detail -->
              </div> <!-- /.custom-table -->
            </div> <!-- /.col-md-4 col-sm-6 -->

            <div class="col-md-4 col-sm-6">
              <div class="custom-table">
                <img src="<?php echo base_url();?>assets/landing/images/add-srvc-5.png" alt="" class="add-srvc-img">
                <div class="add-srvc-detail">
                  <h4 class="add-srvc-heading">
                    Sea beach
                  </h4>
                  <p class="add-srvc">
                    Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                  </p>
                </div> <!-- /.add-srvc-detail -->
              </div> <!-- /.custom-table -->
            </div> <!-- /.col-md-4 col-sm-6 -->

            <div class="col-md-4 col-sm-6">
              <div class="custom-table">
                <img src="<?php echo base_url();?>assets/landing/images/add-srvc-6.png" alt="" class="add-srvc-img">
                <div class="add-srvc-detail">
                  <h4 class="add-srvc-heading">
                    Hill tracking
                  </h4>
                  <p class="add-srvc">
                    Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
                  </p>
                </div> <!-- /.add-srvc-detail -->
              </div> <!-- /.custom-table -->
            </div> <!-- /.col-md-4 col-sm-6 -->
          </div> <!-- /.row -->
        </div> <!-- /.container -->
      </section> <!-- /.Additional-services -->


      <section class="section-wrapper services-owl">
        <div class="container">
          <div class="owl-carousel services-owl-carousel row">
            <div class="item col-sm-8 col-sm-offset-2">
              <div class="item-name">
                David Martin
              </div>
              <p class="item-detail">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos omnis, architecto ipsam laudantium corporis eveniet blanditiis eaque ab ex eum, provident culpa tenetur adipisci libero aliquid quia dolores deleniti illo.
              </p>
            </div> <!-- /.item -->

            <div class="item col-sm-8 col-sm-offset-2">
              <div class="item-name">
                David Martin
              </div>
              <p class="item-detail">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos omnis, architecto ipsam laudantium corporis eveniet blanditiis eaque ab ex eum, provident culpa tenetur adipisci libero aliquid quia dolores deleniti illo.
              </p>
            </div> <!-- /.item -->

            <div class="item col-sm-8 col-sm-offset-2">
              <div class="item-name">
                David Martin
              </div>
              <p class="item-detail">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos omnis, architecto ipsam laudantium corporis eveniet blanditiis eaque ab ex eum, provident culpa tenetur adipisci libero aliquid quia dolores deleniti illo.
              </p>
            </div> <!-- /.item -->
          </div> <!-- /.services-owl-carousel -->
        </div> <!-- /.container -->
      </section> <!-- /.services-owl -->


      <div class="section-wrapper sponsor">
        <div class="container">
          <div class="owl-carousel sponsor-carousel">
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="<?php echo base_url();?>assets/landing/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
              </a>
            </div>
          </div> <!-- /.owl-carousel -->
        </div> <!-- /.container -->
      </div> <!-- /.sponsor -->

      <div class="subscribe section-wrapper">
        <a class="brand-logo" href="index.html" title="HOME"><i class="ion-paper-airplane"></i> Euro <span>Travel</span></a>
        <p class="subscribe-now">
          Subscribe to our Newsletter
        </p>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
              <div class="input-group">
                <input type="email" class="form-control border-radius" placeholder="Email address">
                <span class="input-group-btn">
                  <button class="btn btn-default border-radius custom-sub-btn" type="button">DONE</button>
                </span>
              </div><!-- /input-group -->
            </div>
          </div>
        </div>



        <ul class="social-icon">
          <li><a href="#"><i class="ion-social-twitter"></i></a></li>
          <li><a href="#"><i class="ion-social-facebook"></i></a></li>
          <li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
          <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
        </ul>
      </div> <!-- /.subscribe -->


      <footer>
        <div class="container">
          <div class="row">
            <div class="col-xs-4">
              <div class="text-left">
                &copy; Copyright Euro Travels
              </div>
            </div>
            <div class="col-xs-4">
              Theme by <a href="http://www.themewagon.com">THEMEWAGON</a>
            </div>
            <div class="col-xs-4">
          <!-- <div class="top">
            <a href="#header">
              <i class="ion-arrow-up-b"></i>
            </a>
          </div> -->
        </div>
      </div>
    </div>    
  </footer>


  <script src="<?php echo base_url();?>assets/landing/js/jquery-1.11.2.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/contact.js"></script>
  <script src="<?php echo base_url();?>assets/landing/js/script.js"></script>






</body>
</html>