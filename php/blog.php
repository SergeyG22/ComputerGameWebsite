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
                        Подписка
                        <span class="label">Премиум доступ</span>
                    </a>
          </li>
          <li class="active">
            <a href="blog.php">
                        Новости
                        <span class="label">Наш блог</span>
                    </a>
          </li>
          <li>
            <a href="forums.php">
                        Сообщество
                        <span class="label">Форумы</span>
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
				<?php if($_COOKIE['user'] == ''): ?>
                  <form class="block-content" action="php/authorization.php" method="post">
                    <p>Пользователь:</p>
                    <div class="youplay-input">
                      <input type="text" name="log">
                    </div>

                    <p>Пароль:</p>
                    <div class="youplay-input">
                      <input type="password" name="pwd">
                    </div>

                    <div class="youplay-checkbox mb-15 ml-5">
                      <input type="checkbox" name="rememberme" value="forever" id="rememberme" tabindex="103">
                      <label for="rememberme">Запомнить</label>
                    </div>

                    <button class="btn btn-sm ml-0 mr-0" name="wp-submit" id="lwa_wp-submit" tabindex="100">Войти</button>

                    <br>
                    <p><a href="#">Потеряли пароль?</a> | <a href="index-registry.php">Зарегистрироваться</a>
                    </p>
                  </form>
				  <?php else: ?>
				  <p>Привет <?=$_COOKIE['user']?>!<br> Спасибо за регистрацию!<br> Чтобы выйти нажмите <a href ="exit.php"> [сюда]. </a></p>
				  	<?php endif;?>
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
    <div class="youplay-banner banner-top small">
      <div class="image" style="background-image: url('assets/images/banner-bg.jpg')">
      </div>

      <div class="info">
        <div>
          <div class="container">
            <h1>Новости</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <div class="container youplay-news mb-60">

      <!-- News List -->
      <div class="col-md-9">

        <!-- Single News Block -->
        <div class="news-one">
          <div class="row vertical-gutter">
            <div class="col-md-4">
              <a href="blog-post.php" class="angled-img">
                <div class="img">
                  <img src="assets/images/game-cos-1-500x375.jpg" alt="">
                </div>
              </a>
            </div>
            <div class="col-md-8">
              <div class="clearfix">
                <h3 class="h2 pull-left m-0"><a href="blog-post.php">Painkiller: крещенный кровью</a></h3>
                <span class="date pull-right"><i class="fa fa-calendar"></i> April 1, 2022</span>
              </div>
              <div class="description">
                <p>
                  Painkiller («Пейнки́ллер», досл. «Болеутоляющее») — серия компьютерных игр в жанре шутера от первого лица. Первая игра в серии была выпущена в 2004 году, её разработкой занималась польская студия People Can Fly. Последующие игры серии разрабатывались сторонними разработчиками.
                </p>
                <p>
                  Серия рассказывает о надвигающейся войне между силами Рая и Ада, в которую оказываются втянуты души обычных людей, заточённые в Чистилище и призванные сражаться с демоническими созданиями, чтобы остановить войска Ада...
              </div>
            </div>
          </div>
        </div>
        <!-- /Single News Block -->

        <!-- Single News Block -->
        <div class="news-one">
          <div class="row vertical-gutter">
            <div class="col-md-4">
              <a href="blog-post-1.php" class="angled-img">
                <div class="img">
                  <img src="assets/images/game-cos-2-500x375.jpg" alt="">
                </div>
              </a>
            </div>
            <div class="col-md-8">
              <div class="clearfix">
                <h3 class="h2 pull-left m-0"><a href="blog-post-1.php">Grand Theft Auto III ("Великий автоугонщик")</a></h3>
                <span class="date pull-right"><i class="fa fa-calendar"></i> Febriary 24, 2022</span>
              </div>
              <div class="description">
                 Компьютерная игра, разработанная компанией DMA Design и выпущенная Rockstar Games. Это третья по счёту и первая трёхмерная игра в серии Grand Theft Auto.<p>Игра в жанре аction-adventure, сочетающая в себе элементы шутера от третьего лица и элементы автосимулятора.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- /Single News Block -->

        <!-- Single News Block -->
        <div class="news-one">
          <div class="row vertical-gutter">
            <div class="col-md-4">
              <a href="blog-post-2.php" class="angled-img">
                <div class="img">
                  <img src="assets/images/game-cos-3-500x375.jpg" alt="">
                </div>
              </a>
            </div>
            <div class="col-md-8">
              <div class="clearfix">
                <h3 class="h2 pull-left m-0"><a href="blog-post-2.php">Need for Speed: Underground</a></h3>
                <span class="date pull-right"><i class="fa fa-calendar"></i> January 18, 2022</span>
              </div>
              <div class="description">
                Need for Speed: Underground (сокр. NFSU) — компьютерная игра серии Need for Speed в жанре аркадных автогонок, разработанная студией EA Black Box и изданная компанией Electronic Arts для игровых консолей и персональных компьютеров в 2003 году.
              </div>
            </div>
          </div>
        </div>
        <!-- /Single News Block -->

        <!-- Single News Block -->
        <div class="news-one">
          <div class="row vertical-gutter">
            <div class="col-md-4">
              <a href="blog-post-3.php" class="angled-img">
                <div class="img">
                  <img src="assets/images/game-cos-4-500x375.jpg" alt="">
                </div>
              </a>
            </div>
            <div class="col-md-8">
              <div class="clearfix">
                <h3 class="h2 pull-left m-0"><a href="blog-post-3.php">Command & Conquer: Red Alert 2</a></h3>
                <span class="date pull-right"><i class="fa fa-calendar"></i> December 27, 2021</span>
              </div>
              <div class="description">
                <p>
                  Компьютерная игра, продолжение стратегии в реальном времени Command & Conquer: Red Alert, выпущенная в 2000 году компанией Westwood Studios. Действия игры происходят в созданном Альбертом Эйнштейном параллельном мире в 1970-е или 1980-е годы, продолжая сюжетную линию Союзников из оригинального Red Alert.
                </p>
                <p>
                  Игра получила положительные отзывы критиков и игрового сообщества. На Game Rankings её рейтинг составляет 86 %.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /Single News Block -->
      </div>
      <!-- /News List -->

      <!-- Right Side -->
      <div class="col-md-3">

        <!-- Side Search -->
        <div class="side-block">
          <p>Найти новости:</p>
          <form action="http://html.nkdev.info/youplay/shooter/search.html">
            <div class="youplay-input">
              <input type="text" name="search" placeholder="введите тему запроса">
            </div>
          </form>
        </div>
        <!-- /Side Search -->

        <!-- Side Categories -->
        <div class="side-block">
          <h4 class="block-title">Категории</h4>
          <ul class="block-content">
            <li><a href="#!">Все</a>
            </li>
            <li><a href="#!">Анонсы</a>
            </li>
            <li><a href="#!">Обзоры</a>
            </li>
            <li><a href="#!">Выпуски</a>
            </li>
            <li><a href="#!">Обновления</a>
            </li>
          </ul>
        </div>
        <!-- /Side Categories -->

        <!-- Side Popular News -->
        <div class="side-block">
          <h4 class="block-title"><i>Популярные новости</i></h4>
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
                <h4 class="ellipsis"><a href="blog-post.php" title="Bloodborne - First Try!">Painkiller: крещенный кровью</a></h4>
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
                <h4 class="ellipsis"><a href="blog-post-1.php" title="Whats New in Middle-earth">Grand Theft Auto III ("Великий автоугонщик")</a></h4>
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

        <!-- Our Twitter -->
        <div class="side-block">
          <h4 class="block-title">Twitter</h4>
          <div class="block-content">
            <div class="youplay-twitter" data-twitter-user-name="nkdevv" data-twitter-count="3" data-twitter-hide-replies="false"></div>
          </div>
        </div>
        <!-- /Our Twitter -->

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
                      <i>Игра — это праздник, потому что она выводит нас за пределы прагматики и на самый серьёзный вопрос нашего времени «зачем?» отвечает, глазом не моргнув: да просто так!</i>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <!-- Side Popular News -->
                <div class="side-block">
                  <h4 class="block-title">Популярные новости</h4>
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
                        <h4 class="ellipsis"><a href="blog-post.php" title="Bloodborne - First Try!">Painkiller: крещенный кровью</a></h4>
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
                        <h4 class="ellipsis"><a href="blog-post-1.php" title="Whats New in Middle-earth">Grand Theft Auto III ("Великий автоугонщик")</a></h4>
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
              </div>
              <div class="col-md-3">
                <!-- Our Twitter -->
                <div class="side-block">
                  <h4 class="block-title"><i>Twitter</i></h4>
                  <div class="block-content">
                    <div class="youplay-twitter" data-twitter-user-name="nkdevv" data-twitter-count="2" data-twitter-hide-replies="false"></div>
                  </div>
                </div>
                <!-- /Our Twitter -->
              </div>
              <div class="col-md-3">
                <!-- Instagram -->
                <div class="side-block">
                  <h4 class="block-title"><i>Instagram</i></h4>
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
            <strong>nK</strong> &copy; 2022. Все права защищены @
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

  <!-- Countdown -->
  <script type="text/javascript" src="components/assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>
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
