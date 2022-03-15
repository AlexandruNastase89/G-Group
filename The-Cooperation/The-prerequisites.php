<?php $page = "prerequisites"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - The prerequisites</title>
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
        <div class="uk-background-cover uk-height-medium uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/prerequisites.jpg);"></div>
      </div>

      <div class="my-content-container">
        <h1 class="uk-margin-medium-left">THE PREREQUISITES</h1>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;First of all, our project management needs to conduct a detailed analysis of the current state of your company. Only a thorough initial assessment can assure all parties concerned that we have a full understanding of your particular situation and that our collaboration will yield a profitable outcome.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;Crucial factors are:</p>
        <ul class="uk-margin-small-top uk-margin-small-bottom">
          <li class="uk-text-justify">Solid management.</li>
          <li class="uk-text-justify">Sustainability of your competitive position.</li>
          <li class="uk-text-justify">Well-balanced risk profile management.</li>
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
