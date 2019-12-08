<!-- menghubungkan ke master -->
@extends('master')

<!-- page main -->
@section('content')
<div id="templatemo_home_page">
  <div class="templatemo_topbar">
    <div class="container">
      <div class="row">
        <div class="templatemo_titlewrapper"><img src="images/templatemo_logobg.png" alt="logo background">
          <div class="templatemo_title"><span>Temanggung Gandem</span></div>
        </div>
        <div class="clear"></div>
        <div class="templatemo_titlewrappersmall">Temanggung Gandem</div>
        <nav class="navbar navbar-default templatemo_menu" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="top-menu">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a class="menu" href="#templatemo_home_page">Home</a></li>
                  <li><a class="menu" href="#templatemo_service_page">Services</a></li>
                  <li><a class="menu" href="#templatemo_work_page">Weather</a></li>
                  <li><a class="menu" href="#templatemo_team_page">Our Team</a></li>
                  <li><a class="menu" href="#templatemo_contact_page">Contact</a></li>
                </ul>
              </div>
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
        </nav>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="templatemo_headerimage">
    <div class="flexslider">
      <ul class="slides">
        <li><img src="images/slider/1.jpg" alt="Slide 1"></li>
        <li><img src="images/slider/2.jpg" alt="Slide 2"></li>
        <li><img src="images/slider/3.jpg" alt="Slide 3"></li>
      </ul>
    </div>
  </div>
  <div class="slider-caption">
    <div class="templatemo_homewrapper">
      <div class="templatemo_hometitle">Nam Condimentum</div>
      <div class="templatemo_hometext">Mauris varius magna eu mauris. Nam ut dui. Nullam mollis, nulla nonummy commodo commodo, enim risus tincidunt tortor, sed pellentesque massa ante a tortor. Aliquam vitae nulla. Cras convallis urna id urna. Pellentesque nec orci a metus posuere tempus. Nulla molestie pretium purus.</div>
      <div class="templatemo_homebutton"><a href="#">Continue</a></div>
    </div>
  </div>
</div>
<!-- header end -->
<div class="clear"></div>
<!-- service start -->
<div class="templatemo_servicewrapper" id="templatemo_service_page">
  <div class="container">
    <div class="row">
      <h1>Services</h1>
      <div class="col-md-12 templatemo_marginbot">You can easily <strong>change icons</strong> by looking at guidelines from <a rel="nofollow" href="http://fontawesome.info/font-awesome-icon-world-map/">Font Awesome</a>. Example: <strong>&lt;i class=&quot;fa fa-camera&quot;&gt;&lt;/i&gt;</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam dapibus leo quis nisl. In lectus. Vivamus consectetuer pede in nisl. Mauris cursus pretium mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox margin_bottom_1col margin_bottom_2col">
          <div class="templatemo_serviceicon"><span class="fa fa-pencil-square-o"></span></div>
          <div class="templatemo_service_title">Phasellus sed metus</div>
          <p>Donec euismod, justo sed convallis blandit, ipsum erat mattis lectus, vel pharetra neque enim tristique risus.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox margin_bottom_1col margin_bottom_2col">
          <div class="templatemo_serviceicon"><span class="fa fa-home"></span></div>
          <div class="templatemo_service_title">Web Design</div>
          <p>Temanggung Gandem is free HTML5 template by <span class="blue">template</span><span class="green">mo</span>. Feel free to download, edit and use this template for any purpose.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox margin_bottom_1col">
          <div class="templatemo_serviceicon"><span class="fa fa-download"></span></div>
          <div class="templatemo_service_title">Free Download</div>
          <p>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for images used in this template. Curabitur rhoncus felis quis nibh pulvinar.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox">
          <div class="templatemo_serviceicon"><span class="fa fa-random"></span></div>
          <div class="templatemo_service_title">Mobile Friendly</div>
          <p>Donec euismod, justo sed convallis blandit, ipsum erat mattis lectus, vel pharetra neque enim tristique risus.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- service end -->
<div class="clear"></div>
<!-- work start -->
<div class="templatemo_workwrapper" id="templatemo_work_page">
  <div class="container">
    <div class="row">
      <h1>Today's Weather</h1>
      <br>
    </div>
  </div>
  <div>
    <div class="templatemo_workbox">
      <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
          <div><?php echo date("l g:i a", $currenttime); ?></div>
          <div><?php echo date("jS F, Y", $currenttime); ?></div>
          <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
          <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>°C<span class="min-temperature"><?php echo $data->main->temp_min; ?>°C</span>
        </div>
        <div class="time">
          <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
          <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
      </div>
    </div>
  </div>
  <!--work end-->
  <div class="clear"></div>
  <!-- team start -->
  <div class="templatemo_team_wrapper" id="templatemo_team_page">
    <div class="container">
      <div class="row">
        <h1>Our Team</h1>
        <div class="col-md-12 templatemo_workmargin">Suspendisse potenti. Etiam elementum laoreet mauris. Ut rutrum feugiat neque. Suspendisse viverra gravida nulla. Duis sed enim vitae metus nonummy venenatis. Curabitur semper rutrum sapien. Mauris luctus. Aenean elit turpis, volutpat id, facilisis eget, mollis a, est. Nulla eget elit pellentesque enim hendrerit venenatis.</div>
        <div id="w">
          <div class="crsl-items" data-navigation="navbtns">
            <div class="crsl-wrap">
              <div class="crsl-item"><img src="images/team/01.jpg" alt="person 1">
                <div class="templatemo_team_name">Mauris Luctus</div>
                <div class="templatemo_team_post">CEO</div>
                <div class="templatemo_social">
                  <ul>
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                  </ul>
                </div>
              </div>
              <!-- post #1 -->
              <div class="crsl-item"><img src="images/team/02.jpg" alt="person 2">
                <div class="templatemo_team_name">Etiam Massa</div>
                <div class="templatemo_team_post">Director</div>
                <div class="templatemo_social">
                  <ul>
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                  </ul>
                </div>
              </div>
              <!-- post #2 -->
              <div class="crsl-item"><img src="images/team/03.jpg" alt="person 3">
                <div class="templatemo_team_name">Mauris Luctus</div>
                <div class="templatemo_team_post">New Manager</div>
                <div class="templatemo_social">
                  <ul>
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                  </ul>
                </div>
              </div>
              <!-- post #3 -->
              <div class="crsl-item"><img src="images/team/04.jpg" alt="person 4">
                <div class="templatemo_team_name">Morbi Pulvinar</div>
                <div class="templatemo_team_post">Designer</div>
                <div class="templatemo_social">
                  <ul>
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                  </ul>
                </div>
              </div>
              <!-- post #4 -->
              <div class="crsl-item"><img src="images/team/05.jpg" alt="person 5">
                <div class="templatemo_team_name">Mauris Luctus</div>
                <div class="templatemo_team_post">Developer</div>
                <div class="templatemo_social">
                  <ul>
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                  </ul>
                </div>
              </div>
              <!-- post #5 -->
              <div class="crsl-item"><img src="images/team/06.jpg" alt="person 6">
                <div class="templatemo_team_name">Mauris Luctus</div>
                <div class="templatemo_team_post">Technical Staff</div>
                <div class="templatemo_social">
                  <ul>
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                  </ul>
                </div>
              </div>
              <!-- post #6 -->
            </div>
            <!-- @end .crsl-wrap -->
          </div>
          <!-- @end .crsl-items -->
        </div>
        <div class="clear"></div>
        <nav class="slidernav">
          <div id="navbtns" class="clearfix"><a href="#" class="previous"><img src="images/slideitmoo_back.png" alt="previous"></a> <a href="#" class="next"><img src="images/slideitmoo_forward.png" alt="next"></a></div>
        </nav>
      </div>
      <script>
        $(function() {
          $('.crsl-items').carousel({
            visible: 4,
            itemMinWidth: 180,
            itemEqualHeight: 370,
            itemMargin: 9,
          });
          $("a[href=#]").on('click', function(e) {
            e.preventDefault();
          });
        });
      </script>
    </div>
  </div>
  <!-- team end -->
  <div class="clear"></div>
  <!-- contact start -->
  <div class="templatemo_contactwrapper" id="templatemo_contact_page">
    <div class="container">
      <div class="row">
        <h1>Contact</h1>
      </div>
    </div>
    <div class="templatemo_contactmap">
      <div id="templatemo_map"></div>
    </div>
    <div class="container templatemo_contactmargin">
      <div class="row">
        <div class="col-md-3">
          <div class="templatemo_address_title">Mailing Address:</div>
          No 123, Duis in enim road, Sed sit amet arcu ut quam porttitor.
          <div class="clear"></div>
          <div class="templatemo_address_left">Call us:</div>
          <div class="templatemo_address_right">+001 333 000 1010<br>
            +002 666 000 2020</div>
          <div class="clear"></div>
          <div class="templatemo_address_left">Hot line:</div>
          <div class="templatemo_address_right">+009 000 999 0000</div>
          <div class="clear"></div>
          <div class="templatemo_address_left">Email us:</div>
          <div class="templatemo_address_right">admin@company.com<br>
            info@company.com</div>
        </div>
        <form action="#" method="post">
          <div class="col-md-9">
            <div class="col-md-4">
              <input type="text" name="name" id="name" class="name" placeholder="Your Name">
            </div>
            <div class="col-md-4">
              <input type="text" name="email" id="email" class="email" placeholder="Your Email">
            </div>
            <div class="col-md-4">
              <input type="text" name="subject" id="subject" class="subject" placeholder="Subject">
            </div>
            <div class="col-md-12">
              <textarea name="message" cols="1" rows="1" class="message" placeholder="Your message... " id="message"></textarea>
            </div>
            <div class="col-md-4">
              <input type="submit" name="send" value="Send Message" id="submit" class="button templatemo_sendbtn">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- contact end -->
  @endsection