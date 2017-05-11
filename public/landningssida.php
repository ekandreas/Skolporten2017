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

  <?php include("partials/cover.php");?>

  <div class="container wrapper">

    <div class="row">

      <div class="col-xs-12 col-md-12 col-lg-7 news-main">

        <div class="meta">
          <a href="#" class="meta-link" target="_blank">2016-12-19 11:09</a>
          <div class="dropdown d-inline">
            <a href="#" class="meta-link dropdown-toggle" target="_blank" data-toggle="dropdown"><img src="css/gfx/icon-share.png"/> Dela</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">Dela på Twitter</a></li>
              <li><a href="#">Dela på Facebook</a></li>
              <li><a href="#">Dela på LinkedIn</a></li>
            </ul>
          </div>
          <a href="#" class="meta-link" target="_blank"><img src="css/gfx/icon-print.png"/> Skriv ut</a>
        </div>

        <div class="grouped primary">

          <h6 class="section-header">VIDEO</h6>

          <div class="well">

            <div class="article-short">

              <div class="article-content">
                <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                <div class="videoWrapper">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/rs78xgvrlZA" frameborder="0" allowfullscreen></iframe>
                </div>
                <h2><a href="">Vanliga missuppfattningar vid bedömning</a></h2>
                <p>Det finns en rad missuppfattningar kring betyg och bedömning och lärare efterfrågar stöd. Skolvärlden träffar betygsexperten Per Måhl som berättar om vanliga fel och reder ut vad som faktiskt gäller.</p>
              </div>

            </div>

          </div>

        </div>

        <h6 class="section-header">Nyheter</h6>

        <div class="article-short">

          <div class="article-content">
            <h3><a href="">Ämnesbetyg möter motstånd</a></h3>
            <p>Sveriges Kommuner och Landsting är kritiska till att införa ämnesbetyg. Även andra instanser är tveksamma till gymnasieutredningens förslag.</p>
          </div>

          <div class="meta">
            <ul class="meta-tags">
              <li class="meta-tag"><a href="">Betyg</a></li>
            </ul>
            <a href="#" class="meta-link" target="_blank">Gymnasiet <img src="css/gfx/icon-link.png"/></a>
          </div>

        </div>

        <div class="article-short">

          <div class="article-content">
            <h3><a href="">500 läxhjälpare stödjer elever med skakiga betyg</a></h3>
            <p>Nominerad till Årets samhällsentreprenör: Läxhjälpen. 1 500 elever med stor risk att inte klara godkända avgångsbetyg i grundskolan får individuellt studiestöd i Stiftelsen Läxhjälpens program i dag. Erfarenheten talar ­tydligt: de allra flesta kommer att lyckas.</p>
          </div>

          <div class="meta">
            <a href="#" class="meta-link" target="_blank">Dagens samhälle <img src="css/gfx/icon-link.png"/></a>
          </div>

        </div>

        <div class="article-short">

          <div class="article-content">
            <h3><a href="">Saknas behöriga lärare inför betygsättning</a></h3>
            <p>Snart ska högstadieeleverna få betyg. Men på flera Motalaskolor sköts undervisningen av obehöriga vikarier som inte har rätt att ensamma sätta betyg.</p>
          </div>

          <div class="meta">
            <ul class="meta-tags">
              <li class="meta-tag"><a href="">Lärarbrist</a></li>
            </ul>
            <a href="#" class="meta-link" target="_blank">Corren <img src="css/gfx/icon-link.png"/></a>
          </div>

        </div>

        <div class="banner-area pl-5">
          <h6 class="banner-title rotated">ANNONS:</h6>
          <div class="banner-content">
            <a href=""><img src="images/exempel_annons.png"/></a></a>
          </div>
        </div>

        <h6 class="section-header">Konferens om</h6>

        <div class="widget conferences">

          <div id="conferences-carousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="carousel-item-inner">
                  <p>24 jan 2017</p>
                  <h6>Betyg & bedömning</h6>
                  <h3><a href="">Hur driver och säkerställer vi ett gott mottagande av nyanlända elever i skola och kommun?</a></h3>
                  <button type="button" class="btn btn-link">Läs mer</button>
                </div>
              </div>

              <div class="carousel-item">
                <div class="carousel-item-inner">
                  <p>24 jan 2017</p>
                  <h6>Betyg & bedömning</h6>
                  <h3><a href="">Lorem ipsum dolor sit amet, duo eius adolescens at, meis dicat facer te vix. Ea utroque partiendo vix.</a></h3>
                  <button type="button" class="btn btn-link">Läs mer</button>
                </div>
              </div>

            </div>

            <ol class="carousel-indicators">
              <li data-target="#conferences-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#conferences-carousel" data-slide-to="1" class=""></li>
              <!-- <li data-target="#myCarousel" data-slide-to="2" class=""></li> -->
            </ol>

          </div>

        </div>

      </div>

      <div class="col-xs-12 col-md-12 col-lg-4  offset-xs-0 offset-md-0 offset-lg-1 news-sidebar">

        <?php include("partials/sidebar-landningssida.php");?>

      </div>

    </div>

  </div>

  <?php include("partials/footer.php");?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
