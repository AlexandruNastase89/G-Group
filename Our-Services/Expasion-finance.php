<?php $page = "expansion"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - Expansion finance</title>
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
        <div class="uk-background-cover uk-height-medium uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/expansion.jpg);"></div>
      </div>

      <div class="my-content-container">
        <h1 class="uk-margin-medium-left">EXPANSION FINANCE</h1>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;With optimal planning and guidance, growth offers the opportunity for further success. This is the reason why GRAUBERGER GROUP supports small and medium-sized companies with big ambitions. We can offer an attractive alternative and/or provide an additional source of credit in particular when banks are unable to provide finance in full or on attractive terms.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;Whether you seek to grow organically or by acquiring other companies, we are ready to invest in your ambitious enterprise and support you on your journey into the future.</p>
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
