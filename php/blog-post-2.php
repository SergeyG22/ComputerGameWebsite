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

  <!-- Magnific Popup -->
  <link rel="stylesheet" type="text/css" href="components/assets/bower_components/magnific-popup/dist/magnific-popup.css" />

  <!-- Social Likes -->
  <link rel="stylesheet" type="text/css" href="components/assets/bower_components/social-likes/dist/social-likes_flat.css" />
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
                    <p>Логин:</p>
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
    <div class="youplay-banner banner-top youplay-banner-parallax xsmall">
      <div class="image" style="background-image: url('assets/images/banner-bg.jpg')">
      </div>

      <div class="info">
        <div>
          <div class="container">
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <div class="container youplay-news youplay-post">

      <div class="col-md-9">
        <!-- Post Info -->
        <article class="news-one">

          <!-- Post Text -->
          <div class="description">
            <a href="https://www.youtube.com/watch?v=c7nRTF2SowQ" class="angled-img pull-left video-popup">
              <div class="img">
                <img src="assets/images/game-cos-3-500x375.jpg" alt="">
              </div>
              <i class="fa fa-play icon"></i>
            </a>
            <p>
              Need for Speed: Underground (сокр. NFSU) — компьютерная игра серии Need for Speed в жанре аркадных автогонок, разработанная студией EA Black Box и изданная компанией Electronic Arts для игровых консолей и персональных компьютеров в 2003 году.
            </p>

            <p>
              Игра была основана на уличных гонках, которые стали популярными благодаря фильму «Форсаж». Разработчики хотели возродить серию Need for Speed, в связи с её снижавшимся уровнем продаж. Новая часть стала перезагрузкой франшизы. Игровая пресса положительно встретила Need for Speed: Underground.
            </p>

            <p>
              Need for Speed: Underground представляет собой аркадную гоночную игру, выполненную в трёхмерной графике. Действие игры происходит в вымышленном городе под названием Олимпик-Сити, который напоминает такие американские города, как Нью-Йорк и Лос-Анджелес. 
            </p>

            <p>
              Основным режимом в игре является «Карьера». Сюжет строится на участии главного героя в уличных гонках города. Помогает герою на протяжении игры девушка по имени Саманта. Главными соперниками являются лучший гонщик города — Эдди и его девушка Мелисса. На протяжении «Карьеры» игрок должен участвовать в гонках разных типов: всего в данном режиме нужно пройти 112 гонок
            </p>

            <p>
              Положительных отзывов со стороны критиков удостоился игровой процесс. Обозреватель сайта IGN, Фрэн Мирабелла, назвал геймплей «фантастически реализованным» и отметил множество настроек автомобиля, а сетевая игра, по его мнению, заставит игрока сидеть за Need for Speed: Underground много месяцев
            </p>
          </div>
          <!-- /Post Text -->

          <!-- Post Meta -->
          <div class="meta">
            <div class="item">
              <i class="fa fa-user meta-icon"></i>
              Автор <a href="#!">LittleMan</a>
            </div>
            <div class="item">
              <i class="fa fa-calendar meta-icon"></i>
              Опубликовано <a href="#!">December 14, 2021</a>
            </div>
            <div class="item">
              <i class="fa fa-bookmark meta-icon"></i>
              Категории <a href="#!">Предварительные</a>
            </div>
            <div class="item">
              <i class="fa fa-eye meta-icon"></i>
              Просмотры 1532
            </div>
            <div class="item">
              <a href="#"><i class="fa fa-heart"></i> 179</a>
            </div>
          </div>
          <!-- /Post Meta -->

          <!-- Post Share -->
          <div class="btn-group social-list social-likes" data-counters="no">
            <span class="btn btn-default facebook" title="Share link on Facebook"></span>
            <span class="btn btn-default twitter" title="Share link on Twitter"></span>
            <span class="btn btn-default plusone" title="Share link on Google+"></span>
            <span class="btn btn-default pinterest" title="Share image on Pinterest" data-media=""></span>
            <span class="btn btn-default vkontakte" title="Share link on VK"></span>
          </div>
          <!-- /Post Share -->
        </article>
        <!-- /Post Info -->

        <!-- Post Comments -->
        <div class="comments-block">
          <h2>Комментарии <small>(2)</small></h2>

          <!-- Comments List -->
          <ul class="comments-list">
            <li>
              <article>
                <div class="comment-avatar pull-left">
                  <img src="assets/images/avatar-user-3.png" alt="">
                </div>
                <div class="comment-cont clearfix">
                  <a class="comment-author h4" href="#!">Сергей Гаврилов</a>
                  <div class="date">
                    <i class="fa fa-calendar"></i> 15 minutes ago
                    <a href="#!" class="pull-right"><i class="fa fa-reply"></i> Reply</a>
                  </div>
                  <div class="comment-text">
                    Это первая и любимая из серии NFS игра, в которую мне довелось поиграть. Для меня она одна из тех, что вспоминаются с ностальгической ноткой. Всё-таки старые добрые гонки с офигенным музыкальным сопровождением... Никогда не понимала тех, кто в этой игре создавал свой плейлист.
                  </div>
                </div>
              </article>

              <ul class="child-comment">
                <li>
                  <article>
                    <div class="comment-avatar pull-left">
                      <img src="assets/images/avatar-user-4.png" alt="">
                    </div>
                    <div class="comment-cont clearfix">
                      <a class="comment-author h4" href="#!">Антонина Кислова</a>
                      <div class="date">
                        <i class="fa fa-calendar"></i> 35 minutes ago
                        <a href="#!" class="pull-right"><i class="fa fa-reply"></i> Reply</a>
                      </div>
                      <div class="comment-text">
                        Именно эта часть серии Need for Speed стала переломной и дала начало новой эре гонок, уличных гонок, "тюнинга", разнообразных режимов гонки. Помню я то время, когда эта игрушка вышла - это было нечто, ничего подобного...
                      </div>
                    </div>		
                  </article>
				  <article>
                    <div class="comment-avatar pull-left">
                      <img src="assets/images/avatar.png" alt="">
                    </div>
                    <div class="comment-cont clearfix">
                      <a class="comment-author h4" href="#!">Ангелина Васильевна</a>
                      <div class="date">
                        <i class="fa fa-calendar"></i> 55 minutes ago
                        <a href="#!" class="pull-right"><i class="fa fa-reply"></i> Reply</a>
                      </div>
                      <div class="comment-text">
                        Для любителей поноситься на автомобилях по виртуальному игровому миру можно порекомендовать эту компьютерную игру.
                      </div>
                    </div>		
                  </article>
                </li>
              </ul>
            </li>
          </ul>
          <!-- /Comments List -->

          <h2>Оставить комментарий</h2>
          <!-- Comment Form -->
          <form action="#!" class="comment-form">
            <div class="comment-cont clearfix">
              <div class="youplay-input">
                <input type="text" name="username" placeholder="Ваше имя *">
              </div>
              <div class="youplay-input">
                <input type="email" name="email" placeholder="Ваш Email *">
              </div>
              <div class="youplay-textarea">
                <textarea name="message" rows="5" placeholder="Ваш комментарий..."></textarea>
              </div>
              <button class="btn btn-default pull-right">Отправить</button>
            </div>
          </form>
          <!-- /Comment Form -->
        </div>
        <!-- /Post Comments -->
      </div>

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
                      Игра — один из способов обучения, познания мира, получения полезных навыков, развития психических функций. Для всех игр характерны повторения и отсутствие жизненно важных мотиваций. Игры присутствуют в жизни каждого человека, они особенно важны в детстве...
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

  <!-- Magnific Popup -->
  <script type="text/javascript" src="components/assets/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

  <!-- Social Likes -->
  <script type="text/javascript" src="components/assets/bower_components/social-likes/dist/social-likes.min.js"></script>
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
