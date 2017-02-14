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

  <div class="container">

    <div class="row">
      <div class="col-sm-12">

        <h1><a class="navbar-brand" href="#"><img src="../images/logo.png"/></a></h1>

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
          <button class="btn btn-primary btn-lg" type="submit">Primär knapp <img src="/css/gfx/arrow-right.png" class="arrow-right"/></button>
          <button class="btn btn-primary btn-md" type="submit">Primär knapp <img src="/css/gfx/arrow-right.png" class="arrow-right"/></button>
          <button class="btn btn-primary btn-sm" type="submit">Primär knapp <img src="/css/gfx/arrow-right.png" class="arrow-right"/></button>

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
