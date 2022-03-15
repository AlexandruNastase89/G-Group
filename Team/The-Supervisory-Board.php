<?php $page = "supervisory"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - The Supervisory Board</title>
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
        <h1 class="uk-margin-medium-left my-h1-padding uk-text-center">THE SUPERVISORY BOARD</h1>

        <div class="uk-grid-match uk-child-width-1-2@s uk-text-center" uk-grid>
          <div>
            <div class="uk-card uk-card-default uk-card-body">
              <img src="" alt="">
              <p class="uk-text-bold">Jonathan Eli Cohen</p>
              <p>Chairman</p>
            </div>
          </div>

          <div>
            <div class="uk-card uk-card-default uk-card-body">
              <img src="" alt="">
              <p class="uk-text-bold">Gabriel Menaged</p>
              <p>Deputy Chairman</p>
            </div>
          </div>

          <div>
            <div class="uk-card uk-card-default uk-card-body">
              <img src="" alt="">
              <p class="uk-text-bold">Fabian Schwartzenberg</p>
              <p>Business consultant</p>
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
