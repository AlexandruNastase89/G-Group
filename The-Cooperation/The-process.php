<?php $page = "process"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - The process</title>
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
        <div class="uk-background-cover uk-height-medium uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/circuit.jpg);"></div>
      </div>

      <div class="my-content-container">
        <h1 class="uk-margin-medium-left">THE PROCESS</h1>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;Time is the key to success. That is why we will inform you of our investment decision as fast as we can and process new investments as efficiently as possible. As a rule, a maximum of 3 months is required from the initial detailed analysis to finalization of the investment.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;We guarantee a high certainty of closure once a positive investment decision has been made. All subsequent steps taken are continually agreed upon with all the decision-makers involved.</p>

        <div class="uk-grid-collapse uk-child-width-1-5@s" uk-grid>
          <div class="uk-flex uk-flex-column uk-text-center">
            <div class="my-table-header">
              <p>Getting to know you</p>
            </div>
            <div class="my-table-content">
              <p class="uk-margin-small-top"><b>Business Plan</b></p>
              <p class="uk-margin-small-top"><b>Presentation</b></p>
              <p class="uk-margin-small-top"><b>Site visit</b></p>
              <p class="uk-margin-small-top">&emsp;</p>
            </div>
          </div>
          <div class="uk-flex uk-flex-column uk-text-center">
            <div class="my-table-header">
              <div>Agreement on fundamental issues</div>
            </div>
            <div class="my-table-content">
              <p class="uk-margin-small-top"><b>Structuring</b></p>
              <p class="uk-margin-small-top"><i>commercial<br>legal<br>tax</i></p>
              <p class="uk-margin-small-top">&emsp;</p>
            </div>
          </div>
          <div class="uk-flex uk-flex-column uk-text-center">
            <div class="my-table-header">
              <p>Detailed examination</p>
            </div>
            <div class="my-table-content">
              <p class="uk-margin-small-top"><b>Due diligence</b></p>
              <p class="uk-margin-small-top"><i>legal<br>financial<br>tax</i></p>
              <p class="uk-margin-small-top">&emsp;</p>
            </div>
          </div>
          <div class="uk-flex uk-flex-column uk-text-center">
            <div class="my-table-header">
              <p>Contracts</p>
            </div>
            <div class="my-table-content">
              <p class="uk-margin-small-top"><b>Contracts</b></p>
              <p class="uk-margin-small-top"><i>active participation<br>option rights<br>contract of sale</i></p>
              <p class="uk-margin-small-top">&emsp;</p>
            </div>
          </div>
          <div class="uk-flex uk-flex-column uk-text-center">
            <div class="my-table-header">
              <p>Closure</p>
            </div>
            <div class="my-table-content my-table-border-right">
              <p class="uk-margin-small-top"><b>Resolution by the Investment Committee and the Supervisory Board</b></p>
              <p class="uk-margin-small-top"><b>Signing</b></p>
              <p class="uk-margin-small-top"><b>Payment</b></p>
            </div>
          </div>
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
