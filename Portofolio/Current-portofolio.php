<?php $page = "current"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - Current portfolio</title>
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
        <div class="uk-background-cover uk-height-medium uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/portfolio.jpg);"></div>
      </div>

      <div class="my-content-container">
        <h1 class="uk-margin-medium-left">CURRENT PORTFOLIO</h1>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;Businesses appreciate reliable investment partners. Below is a summary of the companies that have put their faith in us.</p>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;Our current investment portfolio comprises the sectors of engine and plant construction, industrial goods, service providers, consumer goods and trade.</p>

        <div id="my-portfolio" uk-grid>
          <img class="uk-align-center" src="/img/portfolio/current/asamer_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/bauer_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/carbones_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/Christof-Group_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/Collin_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/e-tec_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/Flad-flad_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/Global-Hydro_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/GT_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/Lenzing-Plastics_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/libropsd_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/Marinomed_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/MARK_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/Pagro_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/parat_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/RadarServices_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/SpeechProcessingSolutions_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/SPL-Tele_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/Steuber_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/Tech-Masters_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/Teufelberger_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/TTI-Austria_logo.jpg" alt="">
          <img class="uk-align-center" src="/img/portfolio/current/Westcam_logo.jpg" alt="">
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
