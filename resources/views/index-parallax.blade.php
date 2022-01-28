<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nirmala Archipelago</title>
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/logoutama.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/logoutama.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Nivo Lightbox
    ================================================== -->
    <link rel="stylesheet" href="css/nivo-lightbox.css" >
    <link rel="stylesheet" href="css/nivo_lightbox_themes/default/default.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Google Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>
  </head>
  <body>

    <!-- Main Navigation 
    ================================================== -->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="img/logo2.png" alt="..."></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#tf-home" class="scroll">Home</a></li>
                <li><a href="#tf-about" class="scroll">About</a></li>
                <li><a href="#tf-services" class="scroll">Why Us</a></li>
                <li><a href="#tf-team" class="scroll">Our Team</a></li>
                <li><a href="#tf-features" class="scroll">Product</a></li>
                <li><a href="#tf-contact" class="scroll">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Header/Homepage
    ================================================== -->
    <div id="tf-home" class="parallax">
        <div class="bcg" 
            data-center="background-position: 50% 0px;" 
            data-top-bottom="background-position: 50% -300px;" 
            data-bottom-top="background-position: 50% 300px;"  
            data-anchor-target="#tf-home">

            <div class="homeSlide">
                <div class="container"> <!-- Container -->

    
                   
                </div> <!-- End Container -->
            </div>
          
        </div> <!-- Parallax-->
    </div>

    <!-- Intro Section
    ================================================== -->
    @if (!empty($home))
    <div id="tf-intro">
        <div class="container"> <!-- container -->
            <div class="row"> <!-- row -->
                <div class="col-md-8 col-md-offset-2"> 
                <p><h3><em>{{ $home->description }}</em></h3></p>
                
                </div>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    @endif
    <!-- About Us Section
    ================================================== -->
    <div id="tf-about">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>About Our <span class="highlight"><strong>Company</strong></span></h2>
            </div>
        </div><!-- end container -->

        <div class="gray-bg"> <!-- fullwidth gray background -->

            <div class="container"><!-- container -->
                <div class="row"> <!-- row -->

                    <div class="col-md-6"> <!-- left content col 6 -->
                        <div class="about-left-content text-center">
                            <div class="img-wrap"> <!-- profile image wrap -->
                                <div class="profile-img"> <!-- company profile details -->
                                    <img src="img/gmbr.png" class="img-responsive" alt="Image"> <!-- change link to your image for your company profile -->
                                </div>
                            </div><!-- end profile image wrap -->
                        </div>
                    </div><!-- end left content col 6 -->

                    <div class="col-md-6"><!-- right content col 6 -->
                        <div class="about-right-content"> <!-- right content wrapper -->

                        <h4><strong>Company Profile</strong></h4>
                        @if(!empty($home))

                            <p>{!! $home->about !!}</p>
                            
                        @endif

                            <h4><strong>Vision</strong></h4>
                            <p>Introducing Indonesia's rich natural and human resources abroad.</p>
                            
                            <h4><strong>Mission</strong></h4>
                            <p><i class="fa fa-check"></i> Advancing the life of homeland producers by opening up opportunities to the outside world.</p>
                            <p><i class="fa fa-check"></i> Recall the world's attention to Indonesia's natural wealth.</p>
                            <p><i class="fa fa-check"></i> Maximizing the potential of Indonesia's wealth to improve the welfare of the nation.</p>
                        </div><!-- end right content wrapper -->
                    </div><!-- end right content col 6 -->

                </div> <!-- end row -->
            </div><!-- end container -->
        </div> <!-- end fullwidth gray background -->
    </div>
    <!-- Works Section
    ================================================== -->
    @if(!empty($home))
    @if($home->linkyt)
    <div id="tf-works">
        <div class="container">
            <div class="section-header">
                <h2>Our Product is <span class="highlight"><strong>Amazing</strong></span></h2>
            </div>

            <div class="text-center">
                <iframe src="{{$home->getEmbed()}}" width="100%" height="450" frameborder="0" allowfullscreen></iframe>
            </div>

        </div><!-- End Container -->
    </div>
    @endif
    @endif
    <!-- Service Section
    ================================================== -->
    <div id="tf-services">
        <div class="container"> <!-- container -->

            <div class="section-header">
                <h2>Why <span class="highlight"><strong>Us?</strong></span></h2>
            </div>

            <div class="row"> <!-- row -->
                
                <div class="col-md-6 text-right">  <!-- Left Content Col 6 -->
                    <div class="media service"> <!-- Service #1 -->
                        <div class="media-body">
                            <h4 class="media-heading">Brand Identity</h4>
                            <p>We believe that local products
                                Indonesia is one of the products
                                best price in the world judging by
                                natural wealth that is very sufficient and
                                support to create a
                                superior products that can compete in
                                international market.</p>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-line-chart"></i>
                        </div>
                    </div><!-- End Service #1 -->

                    <div class="media service"> <!-- Service #3 -->
                        <div class="media-body">
                            <h4 class="media-heading">Comfortable</h4>
                            <p>We work with a simple yet comfortable way to trade our products. By having local communities and farmers, we ensure you that we only provide the best quality product on the market straight from the local communities and farmers.</p>
                        </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-line-chart"></i>
                        </div>
                    </div> <!-- End Service #3 -->
                </div> <!-- End Left Content Col 6 -->

                <div class="col-md-6"> <!-- Right Content Col 6 -->
                    <div class="media service"> <!-- Service #4 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Best Quality</h4>
                            <p>Nirmala Archipelago Commodity &
                                Export is always thinking and searching
                                the best producers in the country
                                to showcase their products
                                to the eyes of the world and compete in the
                                international market.</p>
                        </div>
                    </div><!-- end Service #4 -->

                    <div class="media service"> <!-- Service #5 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Marketing Target</h4>
                            <p>Our target market
                                its main pursuit is the international market with mainly middle east countries, but we don't
                                only looking at opportunities from the international market but also looking at the domestic market, especially other areas such as Jakarta, Surabaya, and other areas that are popular with Shisha consumers.</p>
                        </div>
                    </div> <!-- end Service #5 -->
                
            </div><!-- end row -->

        </div><!-- end container -->
    </div>
    <!-- Team Section
    ================================================== -->
    @if (!empty($team))
    <div id="tf-team">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Awesome <span class="highlight"><strong>Team</strong></span></h2>
            </div>

             <div id="team" class="owl-carousel owl-theme text-center"> <!-- team carousel wrapper -->
             @foreach($team as $t)
             <div class="item"> <!-- Team #2 -->
                 <div class="hover-bg"> <!-- Team Wrapper -->
                     <div class="hover-text off"> <!-- Hover Description -->
                        <p><span class="fa fa-envelope" ></i></span>  Email : {{$t->email}}</p>
                        <p><span class="fa fa-instagram" >  Instagram : {{$t->instagram}}</p>
                     </div> <!-- End Hover Description -->
                     <img src="{{asset('storage/'. $t->image)}}" alt="..." class="img-responsive" style="border-radius:120px; border:#968345; border-style:solid; border-width:15px" ><!-- Team Image -->
                     <div class="team-detail text-center">
                         <h3>{{$t->name}}</h3>
                         <p class="text-uppercase">{{$t->role}}</p>
                     </div>
                 </div> <!-- End Team Wrapper -->
             </div><!-- End Team #2 -->
            @endforeach
            </div> <!-- end team carousel wrapper -->
        </div> <!-- container -->
    </div>
    @endif

    <!-- Why Us/Features Section
    ================================================== -->
    @if (!empty($product))
    <div id="tf-features">

        <div class="container">
            <div class="section-header">
                <h2>Our Great <span class="highlight"><strong>Product</strong></span></h2>
            </div>
        </div>

        <div id="feature" class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"> <!-- container -->
                <div class="row" role="tabpanel"> <!-- row -->
                    <div class="col-md-4 col-md-offset-1"> <!-- tab menu col 4 -->

                        <ul class="features nav nav-pills nav-stacked" role="tablist">
                        @foreach($product as $p)
                            <li role="presentation">  <!-- feature tab menu #1 -->
                                <a href="#{{$p->id}}" aria-controls="{{$p->id}}" role="tab" data-toggle="tab">
                                    {{$p->name}}<br><small>Click here</small>
                                </a>
                            </li>
                        @endforeach
                            <li role="presentation"> <!-- feature tab menu #2 -->
                                <a href="#freq" aria-controls="freq" role="tab" data-toggle="tab">
                                Any Request ? <br><small>Click here</small>
                                </a>
                            </li>
                        </ul>

                    </div><!-- end tab menu col 4 -->

                    <div class="col-md-6"> <!-- right content col 6 -->
                        <!-- Tab panes -->
                        <div class="tab-content features-content"> <!-- tab content wrapper -->

                            @foreach($product as $p)
                            <div role="tabpanel" class="tab-pane fade" id="{{$p->id}}"> <!-- feature #1 content open -->
                                <h4>{{$p->name}}</h4>
                                <p>{{$p->description}}</p>
                                <img src="{{asset('storage/'. $p->image)}}" class="img-responsive" alt="...">
                            </div>
                            @endforeach
                            
                            <div role="tabpanel" class="tab-pane fade" id="freq"> <!-- feature #2 content -->
                            <a href="form-request"><button>Form request</button></a> 
                            <br>
                            <br>                             
                            <img src="img/comingsoon.jpg" class="img-responsive" alt="...">
                            </div>
                        </div> <!-- end tab content wrapper -->
                    </div><!-- end right content col 6 -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </div><!-- end fullwidth gray background -->
    </div>
    @endif

    <!-- Contact Section
    ================================================== -->
    @if (!empty($home))
    <div id="tf-contact">

        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>More information? <span class="highlight"><strong>Contact Us</strong></span></h2>
                <h3><em>We are ready to serve you</em></h3>
            </div>
        </div><!-- end container -->

        <div class="container"><!-- container -->
            <div class="row"> <!-- outer row -->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <div class="row"> <!-- nested row -->

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">  
                            <div class="contact-detail">
                                <i class="fa fa-map-marker"></i>
                                <p><b>Location</b></p>
                                <h4>{{ $home->location }}</h4> <!-- address -->
                            </div>
                        </div>
                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-envelope-o"></i>
                                <p><b>Email</b></p>
                                <h4>{{ $home->email }}</h4><!-- email add -->
                            </div>
                        </div>

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-phone"></i>
                                <p><b>WhatsApp & Telegram</b></p>
                                <h4>{{ $home->whatsapp }}</h4> <!-- phone no. -->
                            </div>
                        </div>

                    </div> <!-- end nested row -->
                </div> <!-- end col 10 with offset 1 to centered -->
            </div><!-- end outer row -->
        </div><!-- end container -->

    </div>
    @endif

    <!-- Footer 
    ================================================== -->
    <div id="tf-footer">
        <div class="container"><!-- container -->
            <p class="pull-left">© 2022 Nirmala Archipelago. All rights reserved.</p> <!-- copyright text here-->
            <ul class="list-inline social pull-right">
            </ul>
        </div><!-- end container -->
    </div>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script type="text/javascript" src="js/owl.carousel.js"></script><!-- Owl Carousel Plugin -->

    <script type="text/javascript" src="js/SmoothScroll.js"></script>

    <!-- Google Map -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>
    <script type="text/javascript" src="js/map.js"></script>

    <!-- Parallax Effects -->
    <script type="text/javascript" src="js/skrollr.js"></script>
    <script type="text/javascript" src="js/imagesloaded.js"></script>
    <script type="text/javascript" src="js/parallax.js"></script>

    <!-- Portfolio Filter -->
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <!-- LightBox Nivo -->
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>

    <!-- Contact page-->
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>