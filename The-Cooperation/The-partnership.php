<?php $page = "partnership"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - The partnership</title>
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
        <div class="uk-background-cover uk-height-medium uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/partnership.jpg);"></div>
      </div>

      <div class="my-content-container">
        <h1 class="uk-margin-medium-left">THE PARTNERSHIP</h1>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;GRAUBERGER GROUP considers itself to be a part owner that makes a positive contribution to the development of your company. You therefore retain your independence but can still enjoy all the benefits of a healthy partnership.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;Your benefits:</p>
        <ul class="uk-margin-small-top uk-margin-small-bottom">
          <li class="uk-text-justify">We act as your sparring partner when important decisions need to be made.</li>
          <li class="uk-text-justify">We provide excellent contacts with potential suppliers and clients.</li>
          <li class="uk-text-justify">You gain access to our professional network of tax consultants, lawyers, and management experts.</li>
          <li class="uk-text-justify">We optimize the sale of company shares on your behalf.</li>
          <li class="uk-text-justify">You receive regular reports on current economic trends and developments.</li>
          <li class="uk-text-justify">Your right of veto ensures your active involvement in all fundamental issues.</li>
          <li class="uk-text-justify">We support you with our expertise across a wide variety of sectors and in any number of situations your company may face and assist you in operational, commercial, and strategic matters.</li>
        </ul>
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
