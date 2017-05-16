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

      <div class="col-xs-12 col-md-12 col-lg-7 news-main">

        <?php include("partials/filter.php");?>

        <?php include("partials/more-news.php");?>

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
