<?php $page = "committee"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - Investment Committee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sources.inc.php'); ?>
  </head>

  <body>

    <header>
      <div class="uk-container">
        <a href="/index.php"><img class="my-logo1 uk-align-center" src="/img/logo/Logo 1a.svg" alt="Company Logo"></a>
      </div>
      <!-- Navbar -->
      <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.inc.php'); ?>
    </header>

  <!-- Container -->

    <div class="uk-container uk-margin-small-top">
      <div class="my-content-container">
        <h1 class="uk-margin-medium-left my-h1-padding uk-text-center">INVESTMENT COMMITTEE</h1>

        <div class="uk-grid-match uk-child-width-1-2@s uk-text-center" uk-grid>
          <div>
            <div class="uk-card uk-card-default uk-card-body">
              <img src="" alt="">
              <p class="uk-text-bold">Moshe Koren</p>
              <p>Chairman</p>
              <p>B.A. in Economics and Statistics, Hebrew University</p>
            </div>
          </div>

          <div>
            <div class="uk-card uk-card-default uk-card-body">
              <img src="" alt="">
              <p class="uk-text-bold">Ari Pinto</p>
              <p>Deputy Chairman</p>
              <p>B.A. in Business Administration, New England College, New Hampshire</p>
              <p>Master's degree in Public Administration, Clark University, Boston</p>
            </div>
          </div>

          <div>
            <div class="uk-card uk-card-default uk-card-body">
              <img src="" alt="">
              <p class="uk-text-bold">Tali Bernstein</p>
              <p>Member</p>
              <p>Tel Aviv University, The Buchmann Faculty of Law</p>
            </div>
          </div>

          <div>
            <div class="uk-card uk-card-default uk-card-body">
              <img src="" alt="">
              <p class="uk-text-bold">Dan Stav</p>
              <p>Member</p>
              <p>Diplomat</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="uk-container my-container-push-bottom">
        <!-- Push -->
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/imprint.inc.php'); ?>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.php'); ?>
    </footer>

  </body>
</html>
