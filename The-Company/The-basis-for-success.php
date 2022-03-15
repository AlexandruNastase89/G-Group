<?php $page = "success"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - The basis for success</title>
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
        <div class="uk-background-cover uk-height-medium uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/phone.jpg);"></div>
      </div>

      <div class="my-content-container">
        <h1 class="uk-margin-medium-left">THE BASIS FOR SUCCESS</h1>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;Long-term stability, solid profitability, sustainable growth, and an equity ratio of over 99% - these are the features that make GRAUBERGER GROUP a strong and successful partner.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;Our sector neutrality gives us additional stability, and our staff’s extensive experience provides the expertise required to invest across different sectors. As we do not focus on any particular sectors, the overall impact of negative developments in any one sector is kept to a minimum.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;All these qualities benefit one party in particular - our client!</p>
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
