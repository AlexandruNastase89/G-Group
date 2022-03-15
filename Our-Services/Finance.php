<?php $page = "finance"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - Finance</title>
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
        <div class="uk-background-cover uk-height-medium uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/consulting.jpg);"></div>
      </div>

      <div class="my-content-container">
        <h1 class="uk-margin-medium-left">FINANCE</h1>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;GRAUBERGER GROUP specializes in the structuring and flexible financing of growth opportunities, mergers and acquisitions, management buy-outs, and carve-outs.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;Investment is in the form of equity and mezzanine capital, a cross between equity and debt capital.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;Your benefits:</p>
        <ul class="uk-margin-small-top uk-margin-small-bottom">
          <li class="uk-text-justify">No securities are required.</li>
          <li class="uk-text-justify">Optimal structuring can be guaranteed from both a legal and a tax point of view.</li>
          <li class="uk-text-justify">GRAUBERGER GROUP partly bears your business risk.</li>
          <li class="uk-text-justify">The financing is long-term (up to 10 years).</li>
          <li class="uk-text-justify">The return is dependent on profit realization.</li>
        </ul>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;It is our objective to create the space for growth and new developments with modern and successful finance solutions.</p>
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
