@extends('master')
@section('title', 'FOTOIN.ID | Home Page')
@section('content')

  <div class="content-wrapper">
    <nav class="navbar transparent absolute nav-wrapper-dark inverse-text navbar-expand-lg text-uppercase">
      <div class="container">
        <div class="navbar-header">
          <div class="navbar-brand"><a href="index.html"><h1>FOTOIN.ID</h1></a></div>
          <div class="navbar-hamburger ml-auto d-lg-none d-xl-none"><button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse"><span></span></button></div>
        </div>
        <!-- /.navbar-header -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link scroll" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link scroll" href="#about">Services</a></li>
            <li class="nav-item"><a class="nav-link scroll" href="#services">About Us</a></li>
            <li class="nav-item"><a class="nav-link scroll" href="#contact">Contact</a></li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <section id="home" class="pt-0 mt-0">
      <div class="rev_slider_wrapper fullscreen-container">
        <div id="slider" class="rev_slider fullscreenbanner bg-dark" data-version="5.4.7">
          <ul>
            <li data-transition="fade" data-thumb="style/images/art/slider-bg34.jpg"><img src="style/images/art/slider-bg34.jpg" alt="" /></li>
            <li data-transition="fade" data-thumb="style/images/art/slider-bg35.jpg"><img src="style/images/art/slider-bg35.jpg" alt="" /></li>
          </ul>
          <div class="tp-static-layers">
            <div class="tp-caption tp-static-layer font-weight-500 text-uppercase color-white text-center"
  	        data-x="center"
  			data-y="middle"
  			data-voffset="['-110','-110','-110','-110']"
  			data-fontsize="['16','16','16','16']"
  			data-lineheight="['26','26','26','26']"
  			data-width="['600','600','600','600']"
  			data-textAlign="['center','center','center','center']"
  			data-whitespace="['normal','normal','normal','normal']"
  			data-frames='[{"delay":1000,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
  			data-startslide="0"
  			data-endslide="3"
  			data-responsive="on"
  			data-responsive_offset="on"
  			style="z-index: 9; letter-spacing: 3px;">fotoin.id</div>
            <div class="tp-caption tp-static-layer font-weight-700 text-lowercase color-white text-center"
  	        data-x="center"
  			data-y="middle"
  			data-voffset="['-5','-5','-5','-5']"
  			data-fontsize="['55','55','45','45']"
  			data-lineheight="['70','70','60','60']"
  			data-width="['900','900','700','700']"
  			data-textAlign="['center','center','center','center']"
  			data-whitespace="['normal','normal','normal','normal']"
  			data-frames='[{"delay":1500,"speed":1200,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
  			data-startslide="0"
  			data-endslide="3"
  			data-responsive="on"
  			data-responsive_offset="on"
  			style="z-index: 9; letter-spacing: -0.5px;">Photographer dan Videographer<br>lokal terbaik</div>
            <a class="tp-caption tp-static-layer btn btn-full-rounded btn-l btn-white scroll"
  			data-x="center"
  			data-y="middle"
  			data-voffset="['130','130','130','130']"
  			data-width="['auto','auto','auto','auto']"
  			data-textAlign="['center','center','center','center']"
  			data-frames='[{"delay":2000,"speed":1200,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
  			data-startslide="0"
  			data-endslide="3"
  			data-responsive="on"
  			data-responsive_offset="on"
  			style="z-index: 9;" href="#portfolio">Booking sekarang</a> </div>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
        <!-- /.rev_slider -->
      </div>
      <!-- /.rev_slider_wrapper -->
    </section>
    <!-- /section -->
    <section id="about">
      <div class="wrapper dark-wrapper inverse-text">
        <div class="container inner">
          <h2 class="section-title section-title-upper text-center">A Little About Me</h2>
          <div class="space20"></div>
          <div class="row">
            <div class="col-lg-5 text-md-center">
              <figure><img src="style/images/art/about13.jpg" alt="" /></figure>
            </div>
            <!-- /column -->
            <div class="space30 d-lg-none d-xl-none"></div>
            <div class="col-lg-7">
              <p class="lead larger">Hello! I'm Julia Brailie, a people & portrait photographer. I am very passionate about photography and it becomes quite obvious in the way I create portraits.</p>
              <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus.</p>
              <ul class="social social-mute social-s">
                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-500px"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
              </ul>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
      <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="style/images/art/bg20.jpg">
        <div class="container inner pt-150 pb-150">
          <h2 class="heading text-center">I take photographs with<br class="d-none d-md-block" />
            creativity, concept & passion</h2>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
    </section>
    <!-- /section -->
    <footer class="dark-wrapper inverse-text">
      <div class="sub-footer">
        <div class="container inner text-center"> <img src="#" srcset="style/images/logo-light.png 1x, style/images/logo-light@2x.png 2x" alt="" />
          <div class="space25"></div>
          <p>© 2018 Brailie. All rights reserved. Theme by elemis.</p>
          <div class="space30"></div>
          <ul class="social social-bg social-s">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.sub-footer -->
    </footer>
  </div>

@endsection
