<?php $page = "company"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - The Company</title>
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
        <div class="uk-background-cover uk-height-medium uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/company.jpg);"></div>
      </div>

      <div class="my-content-container">
        <h1 class="uk-margin-medium-left">THE COMPANY</h1>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;GRAUBERGER GROUP is the investment arm of the private bank group of Israel and is one of Israel’s leading private equity funds, managing a volume of 250 million dollars. As an evergreen fund with an indefinite term, we are able to provide long-term stability and a solid foundation for future success, which is particularly relevant for an increasing number of medium-sized companies facing a growing need for equity.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;The benefits of private equity:</p>
        <ul class="uk-margin-small-top uk-margin-small-bottom">
          <li class="uk-text-justify">No personal liability of the partners.</li>
          <li class="uk-text-justify">No securities to weigh you down.</li>
          <li class="uk-text-justify">Greater risk capacity.</li>
        </ul>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;Since its founding in 1994, GRAUBERGER GROUP has already invested equity and mezzanine capital in more than 140 companies in a wide variety of sectors. Currently, 100 companies in Israel, United States and Europe trust in our expertise and benefit from our support in operational, commercial, and strategic matters.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;Whatever situation you find yourself in as a company and whatever problem you are seeking a custom-made solution to, be assured that you will always find us to be a highly experienced and reliable partner.</p>
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
