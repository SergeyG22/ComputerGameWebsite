<!DOCTYPE html>

<html>

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>youplay</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Icon -->
  <link rel="icon" type="image/png" href="assets/images/icon.png">
  <!-- Google Fonts -->

  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="components/assets/bower_components/bootstrap/dist/css/bootstrap.min.css" />

  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="components/assets/bower_components/font-awesome/css/font-awesome.min.css" />
  <!-- Youplay -->

  <link rel="stylesheet" type="text/css" href="components/assets/youplay/css/youplay-shooter.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
  <!-- RTL (uncomment this to enable RTL support) -->
  <!-- <link rel="stylesheet" type="text/css" href="../assets/youplay/css/youplay-rtl.css" /> -->

</head>


<body>

  <!-- Navbar -->
  <nav class="navbar-youplay navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index-2.php">
          <img src="assets/images/logo.png" alt="">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="index-2.php#preorder">
                        ????????????????
                        <span class="label">?????????????? ????????????</span>
                    </a>
          </li>
          <li>
            <a href="blog.php">
                        ??????????????
                        <span class="label">?????? ????????</span>
                    </a>
          </li>
          <li class="active">
            <a href="forums.php">
                        ????????????????????
                        <span class="label">????????????</span>
                    </a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown dropdown-hover dropdown-cart">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu pb-20" style="width: 300px;">
              <div class="block-content ml-20 mr-20 mnb-10">
                <div class="lwa lwa-default">
                  <form class="block-content" action="php/authorization.php" method="post">
				   <?php if($_COOKIE['user'] == ''): ?>
                    <p>??????????:</p>
                    <div class="youplay-input">
                      <input type="text" name="log">
                    </div>

                    <p>????????????:</p>
                    <div class="youplay-input">
                      <input type="password" name="pwd">
                    </div>

                    <div class="youplay-checkbox mb-15 ml-5">
                      <input type="checkbox" name="rememberme" value="forever" id="rememberme" tabindex="103">
                      <label for="rememberme">??????????????????</label>
                    </div>

                    <button class="btn btn-sm ml-0 mr-0" name="wp-submit" id="lwa_wp-submit" tabindex="100">??????????</button>

                    <br>
                    <p><a href="#">???????????????? ?????????????</a> | <a href="index-registry.php">????????????????????????????????????</a>
                    </p>
					 <?php else: ?>
				  <p>???????????? <?=$_COOKIE['user']?>!<br> ?????????????? ???? ??????????????????????!<br> ?????????? ?????????? ?????????????? <a href ="exit.php"> [????????]. </a></p>
				  	<?php endif;?>
                  </form>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->


  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <div class="youplay-banner banner-top xsmall">
      <div class="image" style="background-image: url('assets/images/banner-bg.jpg')">
      </div>

      <div class="info">
        <div>
          <div class="container">
            <h2>????????????</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <div class="container youplay-content">

      <div class="col-md-9">

        <!-- Breadcrumb -->
        <div class="mt-10 pull-left">
          <a href="index-2.php">????????????????</a>
          <span class="fa fa-angle-right"></span>
          <span>????????????</span>
        </div>
        <!-- /Breadcrumb -->

        <!-- Search -->
        <form action="http://html.nkdev.info/youplay/shooter/search.html" class="pull-right">
          <p>?????????? ???? ????????????:</p>
          <div class="youplay-input pull-left">
            <input type="text" name="search">
          </div>
          <button class="btn pull-right">????????????</button>
        </form>
        <!-- /Search -->

        <div class="clearfix"></div>

        <!-- Forums List -->
        <ul class="youplay-forum mr-10">
          <li class="header">
            <ul>
              <li class="cell-icon"></li>
              <li class="cell-info">??????????</li>
              <li class="cell-topic-count">????????</li>
              <li class="cell-reply-count">??????????</li>
              <li class="cell-freshness">????????????</li>
            </ul>
          </li>

          <li class="body">
            <ul>
              <li class="cell-icon">
                <i class="fa fa-folder-open-o"></i>
              </li>
              <li class="cell-info">
                <a href="#!" class="title h4">????????</a>
                <div class="description">???????? ?????? ?????????????????? ????????????????</div>
                <ul class="forums-list">
                  <li><a href="#!"><i class="fa fa-folder-open-o"></i> Xbox</a>,</li>
                  <li><a href="#!"><i class="fa fa-folder-open-o"></i> PlayStation</a>,</li>
                  <li><a href="#!"><i class="fa fa-folder-open-o"></i> PC</a>
                  </li>
                </ul>
              </li>
              <li class="cell-topic-count">7</li>
              <li class="cell-reply-count">21</li>
              <li class="cell-freshness">
                <a href="#!">1 ??????, 2 ???????????? ??????????</a>
                <p>
                  <a href="#!">
                    <img alt="" src="assets/images/avatar-user-2.png" height="25" width="25">???????????????? ??????????????
                  </a>
                </p>
              </li>
            </ul>

            <ul>
              <li class="cell-icon">
                <i class="fa fa-folder-open-o"></i>
              </li>
              <li class="cell-info">
                <a href="#!" class="title h4">??????????????</a>
                <div class="description">???????????? (??????????????????)</div>
                <ul class="forums-list">
                  <li><a href="#!"><i class="fa fa-folder-open-o"></i> ??????????????</a>,</li>
                  <li><a href="#!"><i class="fa fa-folder-open-o"></i> ??????????????</a>
                  </li>
                </ul>
              </li>
              <li class="cell-topic-count">0</li>
              <li class="cell-reply-count">0</li>
              <li class="cell-freshness">
                ?????? ????????
              </li>
            </ul>

            <ul>
              <li class="cell-icon">
                <i class="fa fa-folder-open-o"></i>
              </li>
              <li class="cell-info">
                <a href="#!" class="title h4">?????????????????? ????????????????????</a>
                <div class="description">?????????? ?????????????????? ????????????????????</div>
              </li>
              <li class="cell-topic-count">0</li>
              <li class="cell-reply-count">0</li>
              <li class="cell-freshness">
                ?????? ????????
              </li>
            </ul>

            <ul>
              <li class="cell-icon">
                <i class="fa fa-folder-open-o"></i>
              </li>
              <li class="cell-info">
                <a href="#!" class="title h4">?????????????????? ????????</a>
                <div class="description">?????????? ?????????????????? ??????</div>
              </li>
              <li class="cell-topic-count">1</li>
              <li class="cell-reply-count">1</li>
              <li class="cell-freshness">
                <a href="#!">4 ????????????, 1 ???????????? ??????????</a>
                <p>
                  <a href="#!" class="bbp-author-avatar">
                    <img alt="" src="assets/images/avatar-user-2.png" height="25" width="25">???????????????? ??????????????
                  </a>
                </p>
              </li>
            </ul>

            <ul>
              <li class="cell-icon">
                <i class="fa fa-folder-open-o"></i>
              </li>
              <li class="cell-info">
                <a href="#!" class="title h4">?????????????? ??????????????????</a>
                <div class="description">???????????? ?? ?????????????? ???????????? ????????????????????</div>
              </li>
              <li class="cell-topic-count">0</li>
              <li class="cell-reply-count">0</li>
              <li class="cell-freshness">
                ?????? ????????
              </li>
            </ul>
          </li>

        </ul>
        <!-- /Forums List -->

        <div class="clearfix"></div>
      </div>

      <!-- Right Side -->
      <div class="col-md-3">

        <!-- Side Search -->
        <div class="side-block">
          <p>?????????? ???? ??????????:</p>
          <form action="http://html.nkdev.info/youplay/shooter/search.html">
            <div class="youplay-input">
              <input type="text" name="search" placeholder="?????????????? ???????? ??????????????">
            </div>
          </form>
        </div>
        <!-- /Side Search -->

        <!-- Side Categories -->
        <div class="side-block">
          <h4 class="block-title">??????????????????</h4>
          <ul class="block-content">
            <li><a href="#!">??????</a>
            </li>
            <li><a href="#!">??????????</a>
            </li>
            <li><a href="#!">??????????????????????</a>
            </li>
            <li><a href="#!">????????????????????</a>
            </li>
            <li><a href="#!">????????</a>
            </li>
            <li><a href="#!">??????????</a>
            </li>
            <li><a href="#!">??????</a>
            </li>
            <li><a href="#!">????????????????????</a>
            </li>
            <li><a href="#!">??????????????????</a>
            </li>
          </ul>
        </div>
        <!-- /Side Categories -->

        <!-- Side Popular News -->
        <div class="side-block">
          <h4 class="block-title">???????????????????? ??????????????</h4>
          <div class="block-content p-0">
            <!-- Single News Block -->
            <div class="row youplay-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="blog-post.php" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-cos-1-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="blog-post.php" title="Bloodborne - First Try!">Painkiller: ?????????????????? ????????????</a></h4>
                <span class="date"><i class="fa fa-calendar"></i> April 1, 2022</span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row youplay-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="blog-post-1.php" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-cos-2-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="blog-post-1.php" title="Whats New in Middle-earth">Grand Theft Auto III ("?????????????? ??????????????????????")</a></h4>
                <span class="date"><i class="fa fa-calendar"></i> Febriary 24, 2022</span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row youplay-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="blog-post-2.php" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-cos-3-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="blog-post-2.php" title="Let's Grind Diablo III">Need for Speed: Underground</a></h4>
                <span class="date"><i class="fa fa-calendar"></i> January 18, 2022</span>
              </div>
            </div>
            <!-- /Single News Block -->
          </div>
        </div>
        <!-- /Side Popular News -->

        <!-- Instagram -->
        <div class="side-block">
          <h4 class="block-title">Instagram</h4>
          <div class="youplay-instagram row small-gap" data-instagram-user-id="2133360819"></div>
        </div>
        <!-- /Instagram -->

      </div>
      <!-- /Right Side -->

    </div>

    <!-- Footer -->
    <footer class="youplay-footer">
      <div class="wrapper">

        <!-- Widgets -->
        <div class="widgets">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="side-block">
                  <div class="block-content">
                    <img src="assets/images/logo.png" alt="">
                    <br>
                    <br>
                    <p>
                      ???????????????? ??????????????, ?????? ???????? ??? ?????? ?? ???????????????? ??????????????????????. ?? ???????? ?????? ????????????????! ???? ???? ???? ???????????????? ?????????????????? ?????????? ?? ????????????????????. ?????? ?? ?? ???????????????????????? ?????????? ?????? ???????????? ????????????????????.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <!-- Side Popular News -->
                <div class="side-block">
                  <h4 class="block-title">???????????????????? ??????????????</h4>
                  <div class="block-content p-0">
                    <!-- Single News Block -->
                    <div class="row youplay-side-news">
                      <div class="col-xs-3 col-md-4">
                        <a href="blog-post.php" class="angled-img">
                          <div class="img">
                            <img src="assets/images/game-cos-1-500x375.jpg" alt="">
                          </div>
                        </a>
                      </div>
                      <div class="col-xs-9 col-md-8">
                        <h4 class="ellipsis"><a href="blog-post.php" title="Bloodborne - First Try!">Painkiller: ?????????????????? ????????????</a></h4>
                        <span class="date"><i class="fa fa-calendar"></i> April 1, 2022</span>
                      </div>
                    </div>
                    <!-- /Single News Block -->

                    <!-- Single News Block -->
                    <div class="row youplay-side-news">
                      <div class="col-xs-3 col-md-4">
                        <a href="blog-post-1.php" class="angled-img">
                          <div class="img">
                            <img src="assets/images/game-cos-2-500x375.jpg" alt="">
                          </div>
                        </a>
                      </div>
                      <div class="col-xs-9 col-md-8">
                        <h4 class="ellipsis"><a href="blog-post-1.php" title="Whats New in Middle-earth">Grand Theft Auto III ("?????????????? ??????????????????????")</a></h4>
                        <span class="date"><i class="fa fa-calendar"></i>Febriary 24, 2022</span>
                      </div>
                    </div>
                    <!-- /Single News Block -->

                    <!-- Single News Block -->
                    <div class="row youplay-side-news">
                      <div class="col-xs-3 col-md-4">
                        <a href="blog-post-2.php" class="angled-img">
                          <div class="img">
                            <img src="assets/images/game-cos-3-500x375.jpg" alt="">
                          </div>
                        </a>
                      </div>
                      <div class="col-xs-9 col-md-8">
                        <h4 class="ellipsis"><a href="blog-post-2.php" title="Let's Grind Diablo III">Need for Speed: Underground</a></h4>
                        <span class="date"><i class="fa fa-calendar"></i> January 18, 2022</span>
                      </div>
                    </div>
                    <!-- /Single News Block -->
                  </div>
                </div>
                <!-- /Side Popular News -->
              </div>
              <div class="col-md-3">
                <!-- Our Twitter -->
                <div class="side-block">
                  <h4 class="block-title">Twitter</h4>
                  <div class="block-content">
                    <div class="youplay-twitter" data-twitter-user-name="nkdevv" data-twitter-count="2" data-twitter-hide-replies="false"></div>
                  </div>
                </div>
                <!-- /Our Twitter -->
              </div>
              <div class="col-md-3">
                <!-- Instagram -->
                <div class="side-block">
                  <h4 class="block-title">Instagram</h4>
                  <div class="youplay-instagram row small-gap" data-instagram-user-id="2133360819"></div>
                </div>
                <!-- /Instagram -->
              </div>
            </div>
          </div>
        </div>
        <!-- /Widgets -->

        <!-- Copyright -->
        <div class="copyright">
          <div class="container">
            <strong>nK</strong> &copy; 2022. ?????? ?????????? ???????????????? @
          </div>
        </div>
        <!-- /Copyright -->
      </div>
    </footer>
    <!-- /Footer -->


  </section>
  <!-- /Main Content -->

  <!-- Search Block -->
  <div class="search-block">
    <a href="#!" class="search-toggle glyphicon glyphicon-remove"></a>
    <form action="http://html.nkdev.info/youplay/shooter/search.html">
      <div class="youplay-input">
        <input type="text" name="search" placeholder="Search...">
      </div>
    </form>
  </div>
  <!-- /Search Block -->

  <!-- jQuery -->
  <script type="text/javascript" src="components/assets/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Hexagon Progress -->
  <script type="text/javascript" src="components/assets/bower_components/HexagonProgress/jquery.hexagonprogress.min.js"></script>


  <!-- Bootstrap -->
  <script type="text/javascript" src="components/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Jarallax -->
  <script type="text/javascript" src="components/assets/bower_components/jarallax/dist/jarallax.min.js"></script>

  <!-- Smooth Scroll -->
  <script type="text/javascript" src="components/assets/bower_components/smoothscroll-for-websites/SmoothScroll.js"></script>
  <!-- Youplay -->
  <script type="text/javascript" src="components/assets/youplay/js/youplay.min.js"></script>

  <!-- init youplay -->
  <script>
    if(typeof youplay !== 'undefined') {
        youplay.init({
            // enable parallax
            parallax:         true,
    
            // set small navbar on load
            navbarSmall:      false,
    
            // enable fade effect between pages
            fadeBetweenPages: true,
    
            // twitter and instagram php paths
            php: {
                twitter: './php/twitter/tweet.php',
                instagram: './php/instagram/instagram.php'
            }
        });
    }
  </script>


</body>

</html>
