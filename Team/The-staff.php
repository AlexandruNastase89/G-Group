<?php $page = "staff"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - The staff</title>
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
      <div class="my-image-container">
        <div class="uk-background-cover uk-height-medium uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/staff.jpg);"></div>
      </div>

      <div class="my-content-container">
        <h1 class="uk-margin-medium-left">THE STAFF</h1>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;Collaboration with all associate companies as partners is just as much a priority for us as individual advice and professional support. A designated member of staff with extensive experience is always on hand to offer advice and support.</p>
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
