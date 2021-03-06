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

  <div class="container wrapper">

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

        <?php include("partials/latest-news.php");?>

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

  <?php include("partials/scripts.php");?>

</body>
</html>
