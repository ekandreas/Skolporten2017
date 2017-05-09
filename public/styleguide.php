<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>Skolporten.se</title>
  <meta content="Skolporten" name="description">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="css/style.css" rel="stylesheet">
  </head>
<body class="styleguide">

  <div class="container">

    <div class="row">
      <div class="col-sm-12">

        <h1><a class="navbar-brand" href="#"><img src="images/logo.png"/></a></h1>

        <div class="well">

          <h6 class="section-header">Typografi</h6>

          <h1>Rubrik h1</h1>
          <h2>Rubrik h2</h2>
          <h3>Rubrik h3</h3>
          <h4>Rubrik h4</h4>
          <h5>Rubrik h5</h5>

          <br/>

          <h6>Rubrik h6</h6>
          <p class="small">Används som rubrik i widgets och som sektionsrubrik</p>

          <h6 class="section-header">Body typsnitt</h6>

          <p class="lead">Lorem ipsum dolor sit amet, te sit iusto complectitur, te mazim albucius sit. Quas solum epicurei vix ut. Id sit impetus inermis, quo rebum iriure periculis ei, vel eu reque vidisse. </p>

          <p>Lorem ipsum dolor sit amet, te sit iusto complectitur, te mazim albucius sit. Quas solum epicurei vix ut. Id sit impetus inermis, quo rebum iriure periculis ei, vel eu reque vidisse. </p>

          <p class="small">Lorem ipsum dolor sit amet, te sit iusto complectitur, te mazim albucius sit. Quas solum epicurei vix ut. Id sit impetus inermis, quo rebum iriure periculis ei, vel eu reque vidisse. </p>

        </div>

        <div class="well">

          <h6 class="section-header">Formulär</h6>

          <div class="form-group">
            <label for="exampleInputEmail1">Ditt namn</label>
            <input type="text" class="form-control" id="" aria-describedby="" placeholder="Ditt namn">
            <small id="emailHelp" class="form-text text-muted">Vi delar aldrig din epostadress</small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Din epostadress</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fyll i din epostadress">
            <small id="emailHelp" class="form-text text-muted">Vi delar aldrig din epostadress</small>
          </div>

          <div class="form-group">
            <label for="exampleSelect1">Välj mig</label>
            <select class="form-control" id="exampleSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleTextarea">Beskrivning</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
          </div>

          <fieldset class="form-group">
            <legend>Radioknappar</legend>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                Standard
              </label>
            </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                Alternativ
              </label>
            </div>
            <div class="form-check disabled">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                Ej aktiverad
              </label>
            </div>
          </fieldset>

          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Bocka i mig
            </label>
          </div>

        </div>

        <div class="well">

          <h6 class="section-header">Tags</h6>

          <div class="meta">
            <ul class="meta-tags">
              <li class="meta-tag"><a href="">Standard</a></li>
              <li class="meta-tag tag-success"><a href="">Grön</a></li>
              <li class="meta-tag tag-info"><a href="">Blå</a></li>
              <li class="meta-tag tag-warning"><a href="">Orange</a></li>
              <li class="meta-tag tag-danger"><a href="">Varning</a></li>
            </ul>
          </div>

        </div>

        <div class="well">

          <h6 class="section-header">Stora knappar</h6>

          <a class="btn btn-primary btn-link btn-lg" href="#" role="button">Länk</a>
          <button class="btn btn-primary btn-lg" type="submit">Primär knapp</button>
          <button class="btn btn-secondary btn-lg" type="submit">Sekundär knapp</button>

          <h6 class="section-header">Normala knappar</h6>

          <a class="btn btn-primary btn-link btn-md" href="#" role="button">Länk</a>
          <button class="btn btn-primary btn-md" type="submit">Primär knapp</button>
          <button class="btn btn-secondary btn-md" type="submit">Sekundär knapp</button>

          <h6 class="section-header">Små knappar</h6>

          <a class="btn btn-primary btn-link btn-sm" href="#" role="button">Länk</a>
          <button class="btn btn-primary btn-sm" type="submit">Primär knapp</button>
          <button class="btn btn-secondary btn-sm" type="submit">Sekundär knapp</button>

          <h6 class="section-header">Knapp med ikon</h6>
          <button class="btn btn-primary btn-lg" type="submit">Primär knapp <img src="css/gfx/arrow-right.png" class="arrow-right"/></button>
          <button class="btn btn-primary btn-md" type="submit">Primär knapp <img src="css/gfx/arrow-right.png" class="arrow-right"/></button>
          <button class="btn btn-primary btn-sm" type="submit">Primär knapp <img src="css/gfx/arrow-right.png" class="arrow-right"/></button>

          <h6 class="section-header">Övriga knappar</h6>

          <div class="dropdown d-inline">
            <a href="#" class="meta-link dropdown-toggle" target="_blank" data-toggle="dropdown"><img src="css/gfx/icon-share.png"/> Dela</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">Dela på Twitter</a></li>
              <li><a href="#">Dela på Facebook</a></li>
              <li><a href="#">Dela på LinkedIn</a></li>
            </ul>
          </div>

        </div>

        <div class="well light">

          <h6 class="section-header">ANNONSER</h6>

          <div class="row">
            <div class="col-sm-8">

              <div class="banner-area pl-5">
                <h6 class="banner-title rotated">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/exempel_annons.png"/></a></a>
                </div>
              </div>

            </div>

            <div class="col-sm-4">

              <div class="banner-area">
                <h6 class="banner-title">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/exempel_annons.png"/></a></a>
                </div>
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-sm-8">

              <div class="banner-area fill pl-5">
                <h6 class="banner-title rotated">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/exempel_annons.png"/></a></a>
                </div>
              </div>

            </div>

            <div class="col-sm-4">

              <div class="banner-area">
                <h6 class="banner-title">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/exempel_annons.png"/></a></a>
                </div>
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-sm-8">

              <div class="banner-area">
                <h6 class="banner-title">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/example-banner.png"/></a></a>
                </div>
              </div>

            </div>

            <div class="col-sm-4">

              <div class="banner-area">
                <h6 class="banner-title">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/example-banner2.png"/></a></a>
                </div>
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">

              <div class="banner-area fill pl-5">
                <h6 class="banner-title rotated">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/example-banner.png"/></a></a>
                </div>
              </div>

            </div>

          </div>

          <div class="row">
            <div class="col-sm-6">

              <div class="banner-area fill pl-5">
                <h6 class="banner-title rotated">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/example-banner.png"/></a></a>
                </div>
              </div>

            </div>

            <div class="col-sm-6">

              <div class="banner-area fill pl-5">
                <h6 class="banner-title rotated">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/example-banner.png"/></a></a>
                </div>
              </div>

            </div>

          </div>

          <div class="row">
            <div class="col-sm-12">

              <div class="banner-area fill pl-5">
                <h6 class="banner-title rotated">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/example-banner.png"/></a></a>
                </div>
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-sm-7">

              <div class="banner-area fill pl-5">
                <h6 class="banner-title rotated">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/example-banner.png"/></a></a>
                </div>
              </div>

            </div>

            <div class="col-sm-4 offset-sm-1">

              <div class="banner-area fill pl-5">
                <h6 class="banner-title rotated">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/example-banner2.png"/></a></a>
                </div>
              </div>

            </div>

          </div>

          <div class="row">
            <div class="col-sm-7">

              <div class="banner-area fill pl-3">
                <h6 class="banner-title">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/example-banner.png"/></a></a>
                </div>
              </div>

            </div>

            <div class="col-sm-4 offset-sm-1">

              <div class="banner-area fill pl-3">
                <h6 class="banner-title">ANNONS:</h6>
                <div class="banner-content">
                  <a href=""><img src="images/example-banner2.png"/></a></a>
                </div>
              </div>

            </div>

          </div>

        </div>

        <div class="well light">

          <div class="row">

            <div class="col-md-6">

              <h6 class="section-header">TABBAR</h6>

              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-tab-item">
                  <a class="nav-tab-item-link active" data-toggle="tab" href="##" role="tab">Senaste nytt</a>
                </li>
                <li class="nav-tab-item">
                  <a class="nav-tab-item-link" data-toggle="tab" href="##" role="tab">Gårdagens</a>
                </li>
                <li class="nav-tab-item">
                  <a class="nav-tab-item-link" data-toggle="tab" href="##" role="tab">Veckans mest lästa</a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content well">
                <div class="tab-pane active" id="#" role="tabpanel">

                  <div class="article-short">

                    <div class="article-content">
                      <h2><a href="">LO: Förstatliga skolan</a></h2>
                      <p>Pisa-mätningarna visar att den svenska skolan har blivit mindre likvärdig. Nu uttalar sig LO i frågan och säger att ”ett förstatligande av skolan bör övervägas”.</p>
                    </div>

                    <div class="meta">
                      <ul class="meta-tags">
                        <li class="meta-tag"><a href="">Huvudmannaskap</a></li>
                      </ul>
                      <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                    </div>

                  </div>

                </div>

                <div class="tab-pane" id="" role="tabpanel">
                </div>

                <div class="tab-pane" id="#" role="tabpanel">
                </div>
              </div>

            </div>

            <div class="col-md-6">

              <h6 class="section-header">TABBAR MED BAKGRUNDSPLATTA</h6>

              <!-- Nav tabs -->
              <ul class="nav nav-tabs filled" role="tablist">
                <li class="nav-tab-item">
                  <a class="nav-tab-item-link active" data-toggle="tab" href="##" role="tab">Senaste nytt</a>
                </li>
                <li class="nav-tab-item">
                  <a class="nav-tab-item-link" data-toggle="tab" href="##" role="tab">Gårdagens</a>
                </li>
                <li class="nav-tab-item">
                  <a class="nav-tab-item-link" data-toggle="tab" href="##" role="tab">Veckans mest lästa</a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content well">
                <div class="tab-pane active" id="#" role="tabpanel">

                  <div class="article-short">

                    <div class="article-content">
                      <h2><a href="">LO: Förstatliga skolan</a></h2>
                      <p>Pisa-mätningarna visar att den svenska skolan har blivit mindre likvärdig. Nu uttalar sig LO i frågan och säger att ”ett förstatligande av skolan bör övervägas”.</p>
                    </div>

                    <div class="meta">
                      <ul class="meta-tags">
                        <li class="meta-tag"><a href="">Huvudmannaskap</a></li>
                      </ul>
                      <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                    </div>

                  </div>

                </div>

                <div class="tab-pane" id="" role="tabpanel">
                </div>

                <div class="tab-pane" id="#" role="tabpanel">
                </div>
              </div>

            </div>

          </div>

        </div>

      <div class="well light">

        <h6 class="section-header">Posttyper</h6>

        <div class="row">

          <div class="col-md-6">

            <h6 class="section-header secondary">Puffa mer - med ram, bild</h6>

            <div class="article-short well">

              <div class="article-content">
                <h2><a href="">LO: Förstatliga skolan</a></h2>
                <p>Pisa-mätningarna visar att den svenska skolan har blivit mindre likvärdig. Nu uttalar sig LO i frågan och säger att ”ett förstatligande av skolan bör övervägas”.</p>
              </div>

              <div class="meta">
                <ul class="meta-tags">
                  <li class="meta-tag"><a href="">Huvudmannaskap</a></li>
                </ul>
                <a href="#" class="meta-link dropdown-toggle" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
              </div>

            </div>

            <div class="article-short well">

              <div class="article-content">
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
                <img class="article-thumbnail" src="images/dummy-post-image.png"/>
                <h2><a href="">LO: Förstatliga skolan</a></h2>
                <p>Pisa-mätningarna visar att den svenska skolan har blivit mindre likvärdig. Nu uttalar sig LO i frågan och säger att ”ett förstatligande av skolan bör övervägas”.</p>
              </div>

              <div class="meta">
                <ul class="meta-tags">
                  <li class="meta-tag"><a href="">Huvudmannaskap</a></li>
                </ul>
                <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
              </div>

            </div>

            <div class="article-short well">

              <div class="article-content">
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
                <img class="article-thumbnail alignleft" width="160" src="images/dummy-post-image.png"/>
                <h2><a href="">LO: Förstatliga skolan</a></h2>
                <p>Pisa-mätningarna visar att den svenska skolan har blivit mindre likvärdig. Nu uttalar sig LO i frågan och säger att ”ett förstatligande av skolan bör övervägas”.</p>
              </div>

              <div class="meta">
                <ul class="meta-tags">
                  <li class="meta-tag"><a href="">Huvudmannaskap</a></li>
                </ul>
                <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
              </div>

            </div>

            <div class="article-short well">

              <div class="article-content">
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
                <img class="article-thumbnail alignright" width="160" src="images/dummy-post-image.png"/>
                <h2><a href="">LO: Förstatliga skolan</a></h2>
                <p>Pisa-mätningarna visar att den svenska skolan har blivit mindre likvärdig. Nu uttalar sig LO i frågan och säger att ”ett förstatligande av skolan bör övervägas”.</p>
              </div>

              <div class="meta">
                <ul class="meta-tags">
                  <li class="meta-tag"><a href="">Huvudmannaskap</a></li>
                </ul>
                <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
              </div>

            </div>

            <h6 class="section-header secondary">DATUM OCH DELNINGSFUNKTIONER UNDER INNEHÅLLET</h6>

            <div class="article-short well">

              <div class="article-content">
                <img class="article-thumbnail alignright" width="160" src="images/dummy-post-image.png"/>
                <h2><a href="">LO: Förstatliga skolan</a></h2>
                <p>Pisa-mätningarna visar att den svenska skolan har blivit mindre likvärdig. Nu uttalar sig LO i frågan och säger att ”ett förstatligande av skolan bör övervägas”.</p>
              </div>

              <div class="meta">
                <ul class="meta-tags">
                  <li class="meta-tag"><a href="">Huvudmannaskap</a></li>
                </ul>
                <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
              </div>

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

            </div>

            <h6 class="section-header secondary">DATUM UNDER RUBIRKEN</h6>

            <div class="article-short well">

              <div class="article-content">
                <div class="meta">
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
                <img class="article-thumbnail alignright" width="160" src="images/dummy-post-image.png"/>
                <h2><a href="">LO: Förstatliga skolan</a></h2>
                <div class="meta">
                  <a href="#" class="meta-link" target="_blank">2016-12-19 11:09</a>
                </div>
                <p>Pisa-mätningarna visar att den svenska skolan har blivit mindre likvärdig. Nu uttalar sig LO i frågan och säger att ”ett förstatligande av skolan bör övervägas”.</p>
              </div>

              <div class="meta">
                <ul class="meta-tags">
                  <li class="meta-tag"><a href="">Huvudmannaskap</a></li>
                </ul>
                <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
              </div>

            </div>

          </div>

          <div class="col-md-6">

            <h6 class="section-header secondary">Fördjupa - mindre rubrik och text</h6>

            <div class="article-short">

              <div class="article-content">
                <h3><a href="">7 av 10 lärare utsätts för press av föräldrar</a></h3>
                <p class="small">En majoritet av lärarna i grund- och gymnasieskolan utsätts för påtryckningar från elevernas föräldrar, framför allt när det gäller betygsättningen, undervisningens upplägg och läxor. Det visar en undersökning av Lärarnas Riksförbund. ”Lärarna har i dag inte den auktoritet som de borde ha”, säger LR:s ordförande Åsa Fahlén.</p>
              </div>

              <div class="meta">
                <ul class="meta-tags">
                  <li class="meta-tag"><a href="">Arbetsmiljö</a></li>
                </ul>
                <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
              </div>

            </div>

            <div class="row">

              <div class="col-md-6">

                <div class="article-short">
                  <div class="article-content">
                    <h3><a href="">7 av 10 lärare utsätts för press av föräldrar</a></h3>
                    <p class="small">En majoritet av lärarna i grund- och gymnasieskolan utsätts för påtryckningar från elevernas föräldrar, framför allt när det gäller betygsättningen, undervisningens upplägg och läxor. Det visar en undersökning av Lärarnas Riksförbund. ”Lärarna har i dag inte den auktoritet som de borde ha”, säger LR:s ordförande Åsa Fahlén.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Arbetsmiljö</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

              </div>
              <div class="col-md-6">

                <div class="article-short">

                  <div class="article-content">
                    <h3><a href="">7 av 10 lärare utsätts för press av föräldrar</a></h3>
                    <p class="small">En majoritet av lärarna i grund- och gymnasieskolan utsätts för påtryckningar från elevernas föräldrar, framför allt när det gäller betygsättningen, undervisningens upplägg och läxor. Det visar en undersökning av Lärarnas Riksförbund. ”Lärarna har i dag inte den auktoritet som de borde ha”, säger LR:s ordförande Åsa Fahlén.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Arbetsmiljö</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

              </div>

              <div class="col-md-6">

                <div class="article-short">
                  <div class="article-content">
                    <h3><a href="">7 av 10 lärare utsätts för press av föräldrar</a></h3>
                    <p class="small">En majoritet av lärarna i grund- och gymnasieskolan utsätts för påtryckningar från elevernas föräldrar, framför allt när det gäller betygsättningen, undervisningens upplägg och läxor. Det visar en undersökning av Lärarnas Riksförbund. ”Lärarna har i dag inte den auktoritet som de borde ha”, säger LR:s ordförande Åsa Fahlén.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Arbetsmiljö</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

              </div>
              <div class="col-md-6">

                <div class="article-short">

                  <div class="article-content">
                    <img class="article-thumbnail" src="images/dummy-post-image.png">
                    <h3><a href="">7 av 10 lärare utsätts för press av föräldrar</a></h3>
                    <p class="small">En majoritet av lärarna i grund- och gymnasieskolan utsätts för påtryckningar från elevernas föräldrar, framför allt när det gäller betygsättningen, undervisningens upplägg och läxor. Det visar en undersökning av Lärarnas Riksförbund. ”Lärarna har i dag inte den auktoritet som de borde ha”, säger LR:s ordförande Åsa Fahlén.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Arbetsmiljö</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-md-12">
            <h6 class="section-header secondary">Grupperade nyheter, special</h6>
          </div>

          <div class="col-md-6">

            <div class="grouped default">

              <h6 class="section-header">TEMA OGILTIG FRÅNVARO</h6>

              <div class="well">

                <div class="article-short">

                  <div class="article-content">
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
                    <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                    <h2><a href="">Locka lärare till Borås - få 15.000 kronor i bonus</a></h2>
                    <p>Annica Dahlén, förhandlingschef på Borås stad, har lanserat en lärarrekryteringsbonus för kommunens anställda.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Lärarbrist</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

                <div class="article-short">

                  <div class="article-content">
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
                    <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                    <h2><a href="">Jonas var hemma hela åttan</a></h2>
                    <p>Fyra elever i Sverige är hemmasittare, de går inte till skolan. “Jag försökte gå till skolan nästan varje dag, men misslyckades” säger Jonas.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Lärarbrist</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

                <div class="article-short">

                  <div class="article-content">
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
                    <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                    <h2><a href="">Allt fler frånvarande elever i Västra Götaland</a></h2>
                    <p>Siffror från Skolinspektionen visar att Västra Götaland är det län med flest beslut gällande skolfrånvaro som lett till kritik från myndigheten. I dag, måndag, anordnas ett seminarium i Angered för så kallade “hemmasittare”.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Lärarbrist</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

              </div>

              <div class="row">
                <div class="col-3 col-sm-2 col-md-3 mr-0 pr-0">
                  <p class="small mb-0">Läs mer om<p>
                </div>

                <div class="col-9 col-sm-10 col-md-9 ml-0 pl-2">
                  <ul class="meta-tags">
                    <li class="meta-tag"><a href="#" class="btn-secondary btn-sm">Lärarbrist</a></li>
                    <li class="meta-tag"><a href="#" class="btn-secondary btn-sm">Ogiltig frånvaro</a></li>
                    <li class="meta-tag"><a href="#" class="btn-secondary btn-sm">Skolk</a></li>
                    <li class="meta-tag"><a href="#" class="btn-secondary btn-sm">Tar hellre rast</a></li>
                    <li class="meta-tag"><a href="#" class="btn-secondary btn-sm">Ointresserad</a></li>
                    <li class="meta-tag"><a href="#" class="btn-secondary btn-sm">Skolkar</a></li></p>
                  </ul>
                </div>

              </div>

            </div>

          </div>

          <div class="col-md-6">

            <div class="grouped primary">

              <h6 class="section-header">TEMA OGILTIG FRÅNVARO</h6>

              <div class="well">

                <div class="article-short">

                  <div class="article-content">
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
                    <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                    <h2><a href="">Locka lärare till Borås - få 15.000 kronor i bonus</a></h2>
                    <p>Annica Dahlén, förhandlingschef på Borås stad, har lanserat en lärarrekryteringsbonus för kommunens anställda.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Lärarbrist</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

                <div class="article-short">

                  <div class="article-content">
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
                    <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                    <h2><a href="">Jonas var hemma hela åttan</a></h2>
                    <p>Fyra elever i Sverige är hemmasittare, de går inte till skolan. “Jag försökte gå till skolan nästan varje dag, men misslyckades” säger Jonas.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Lärarbrist</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

                <div class="article-short">

                  <div class="article-content">
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
                    <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                    <h2><a href="">Allt fler frånvarande elever i Västra Götaland</a></h2>
                    <p>Siffror från Skolinspektionen visar att Västra Götaland är det län med flest beslut gällande skolfrånvaro som lett till kritik från myndigheten. I dag, måndag, anordnas ett seminarium i Angered för så kallade “hemmasittare”.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Lärarbrist</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

              </div>

              <div class="row">
                <div class="col-3 col-sm-2 col-md-3 mr-0 pr-0">
                  <p class="small mb-0">Läs mer om<p>
                </div>

                <div class="col-9 col-sm-10 col-md-9 ml-0 pl-2">
                  <ul class="meta-tags">
                    <li class="meta-tag"><a href="#" class="btn-primary btn-sm">Ogiltig frånvaro</a></li>
                  </ul>
                </div>

              </div>

            </div>

          </div>

          <div class="col-md-6">

            <div class="grouped secondary mt-3">

              <h6 class="section-header">TEMA OGILTIG FRÅNVARO</h6>

              <div class="well">

                <div class="article-short">

                  <div class="article-content">
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
                    <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                    <h2><a href="">Locka lärare till Borås - få 15.000 kronor i bonus</a></h2>
                    <p>Annica Dahlén, förhandlingschef på Borås stad, har lanserat en lärarrekryteringsbonus för kommunens anställda.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Lärarbrist</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

                <div class="article-short">

                  <div class="article-content">
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
                    <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                    <h2><a href="">Jonas var hemma hela åttan</a></h2>
                    <p>Fyra elever i Sverige är hemmasittare, de går inte till skolan. “Jag försökte gå till skolan nästan varje dag, men misslyckades” säger Jonas.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Lärarbrist</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

                <div class="article-short">

                  <div class="article-content">
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
                    <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                    <h2><a href="">Allt fler frånvarande elever i Västra Götaland</a></h2>
                    <p>Siffror från Skolinspektionen visar att Västra Götaland är det län med flest beslut gällande skolfrånvaro som lett till kritik från myndigheten. I dag, måndag, anordnas ett seminarium i Angered för så kallade “hemmasittare”.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Lärarbrist</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

              </div>

              <div class="row">
                <div class="col-3 col-sm-2 col-md-3 mr-0 pr-0">
                  <p class="small mb-0">Läs mer om<p>
                </div>

                <div class="col-9 col-sm-10 col-md-9 ml-0 pl-2">
                  <ul class="meta-tags">
                    <li class="meta-tag"><a href="#" class="btn-warning btn-sm">Ogiltig frånvaro</a></li>
                  </ul>
                </div>

              </div>

            </div>

          </div>

          <div class="col-md-6">

            <div class="grouped info mt-3">

              <h6 class="section-header">TEMA OGILTIG FRÅNVARO</h6>

              <div class="well">

                <div class="article-short">

                  <div class="article-content">
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
                    <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                    <h2><a href="">Locka lärare till Borås - få 15.000 kronor i bonus</a></h2>
                    <p>Annica Dahlén, förhandlingschef på Borås stad, har lanserat en lärarrekryteringsbonus för kommunens anställda.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Lärarbrist</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

                <div class="article-short">

                  <div class="article-content">
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
                    <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                    <h2><a href="">Jonas var hemma hela åttan</a></h2>
                    <p>Fyra elever i Sverige är hemmasittare, de går inte till skolan. “Jag försökte gå till skolan nästan varje dag, men misslyckades” säger Jonas.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Lärarbrist</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

                <div class="article-short">

                  <div class="article-content">
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
                    <!-- <img class="article-thumbnail" src="images/dummy-post-image.png"/> -->
                    <h2><a href="">Allt fler frånvarande elever i Västra Götaland</a></h2>
                    <p>Siffror från Skolinspektionen visar att Västra Götaland är det län med flest beslut gällande skolfrånvaro som lett till kritik från myndigheten. I dag, måndag, anordnas ett seminarium i Angered för så kallade “hemmasittare”.</p>
                  </div>

                  <div class="meta">
                    <ul class="meta-tags">
                      <li class="meta-tag"><a href="">Lärarbrist</a></li>
                    </ul>
                    <a href="#" class="meta-link" target="_blank">Skolvärlden <img src="css/gfx/icon-link.png"/></a>
                  </div>

                </div>

              </div>

              <div class="row">
                <div class="col-3 col-sm-2 col-md-3 mr-0 pr-0">
                  <p class="small mb-0">Läs mer om<p>
                </div>

                <div class="col-9 col-sm-10 col-md-9 ml-0 pl-2">
                  <ul class="meta-tags">
                    <li class="meta-tag"><a href="#" class="btn-danger btn-sm">Ogiltig frånvaro</a></li>
                    <li class="meta-tag"><a href="#" class="btn-danger btn-sm">Ogiltig frånvaro</a></li>
                    <li class="meta-tag"><a href="#" class="btn-danger btn-sm">Ogiltig frånvaro</a></li>
                    <li class="meta-tag"><a href="#" class="btn-danger btn-sm">Ogiltig frånvaro</a></li>
                    <li class="meta-tag"><a href="#" class="btn-danger btn-sm">Ogiltig frånvaro</a></li>
                    <li class="meta-tag"><a href="#" class="btn-danger btn-sm">Ogiltig frånvaro</a></li>
                    <li class="meta-tag"><a href="#" class="btn-danger btn-sm">Ogiltig frånvaro</a></li>
                    <li class="meta-tag"><a href="#" class="btn-danger btn-sm">Ogiltig frånvaro</a></li>
                    <li class="meta-tag"><a href="#" class="btn-danger btn-sm">Ogiltig frånvaro</a></li>
                  </ul>
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
