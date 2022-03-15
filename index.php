<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sources.inc.php'); ?>
  </head>

  <body id="my-index-height">

    <header>
      <div class="uk-container my-container-push-top-homepage">
        <!-- Push -->
      </div>

      <!-- Navbar -->
      <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.inc.php'); ?>
    </header>

  <!-- Container -->
    <div class="uk-container uk-margin-small-top">
      <div class="uk-overlay my-logo2-container">
        <img class="my-logo2" src="/img/logo/Logo 1b.svg" alt="Company Logo">
      </div>
      <div class="uk-background-cover uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/homepage.jpg);" uk-height-viewport="offset-top: true; offset-bottom: 10"></div>
    </div>

    <div class="uk-container my-container-push-bottom-homepage">
        <!-- Push -->
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/imprint.inc.php'); ?>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.php'); ?>
    </footer>

  </body>
</html>
