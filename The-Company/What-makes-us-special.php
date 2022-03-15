<?php $page = "special"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - What makes us special</title>
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
        <div class="uk-background-cover uk-height-medium uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/light-bulbs.jpg);"></div>
      </div>

      <div class="my-content-container">
        <h1 class="uk-margin-medium-left">WHAT MAKES US SPECIAL</h1>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;What makes us so different from other private equity funds is that we consider reliability and your continued independence as an entrepreneur to be a priority. By providing not only fast but also more long-term support as required, we do not put our associate companies under the same pressure as traditional equity shareholders tend to.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;Your benefits:</p>
        <ul class="uk-margin-small-top uk-margin-small-bottom">
          <li class="uk-text-justify">Our decision to invest is quick and we can guarantee you a high certainty of closure.</li>
          <li class="uk-text-justify">The strategic direction to be followed is continually agreed with all the decision-makers involved. This allows us to jointly forge the future with your best interest in mind.</li>
          <li class="uk-text-justify">Without exception, all our investors come from within the circle of the Hapoalim bank group. This secure network guarantees you realistic expected returns.</li>
          <li class="uk-text-justify">There is no exit pressure. Equity released by returned investments is reinvested.</li>
          <li class="uk-text-justify">The support we can offer is by no means purely financial. Among various other elements, you will also benefit from our contacts with potential clients and suppliers.</li>
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
