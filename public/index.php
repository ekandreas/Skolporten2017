<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>Skolporten.se</title>
  <meta content="Skolporten" name="description">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="css/style.css" rel="stylesheet">
  </head>
<body>

  <?php include("partials/header.php");?>

  <div class="container">

    <div class="row">
      <div class="col-sm-12">

        <div class="banner-area">
          <h6 class="banner-title">ANNONS:</h6>
          <div class="banner-content">
            <a href=""><img src="images/example-banner.png"/></a></a>
          </div>
        </div>

      </div>
    </div>

    <div class="row">

      <div class="col-xs-12 col-md-12 col-lg-7 news-main">

        <button type="button" class="btn btn-primary btn-lg btn-block">Allt om pisa <img src="/css/gfx/arrow-right.png" class="arrow-right"/></button>

        <?php include("partials/filter.php");?>

        <?php include("partials/latest-news.php");?>

        <div class="widget conferences">

          <div id="conferences-carousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

              <div class="carousel-item active">
                <p>24 jan 2017</p>
                <h3><a href="">Hur driver och säkerställer vi ett gott mottagande av nyanlända elever i skola och kommun?</a></h3>
                <button type="button" class="btn btn-link">Läs mer</button>
              </div>

              <div class="carousel-item">
                <p>24 jan 2017</p>
                <h3><a href="">Lorem ipsum dolor sit amet, duo eius adolescens at, meis dicat facer te vix. Ea utroque partiendo vix.</a></h3>
                <button type="button" class="btn btn-link">Läs mer</button>
              </div>

            </div>

            <ol class="carousel-indicators">
              <li data-target="#conferences-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#conferences-carousel" data-slide-to="1" class=""></li>
              <!-- <li data-target="#myCarousel" data-slide-to="2" class=""></li> -->
            </ol>

          </div>

        </div>

        <div class="banner-area">
          <h6 class="banner-title">ANNONS:</h6>
          <div class="banner-content">
            <a href=""><img src="images/example-banner.png"/></a></a>
          </div>
        </div>

        <?php include("partials/news.php");?>

      </div>

      <div class="col-xs-12 col-md-12 col-lg-4  offset-xs-0 offset-md-0 offset-lg-1 news-sidebar">

        <?php include("partials/sidebar.php");?>

      </div>

    </div>

  </div>

  <?php include("partials/footer.php");?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.headroom.js"></script>
  <script src="js/headroom.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
