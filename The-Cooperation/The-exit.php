<?php $page = "exit"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - The exit</title>
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
        <div class="uk-background-cover uk-height-medium uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/exit.jpg);"></div>
      </div>

      <div class="my-content-container">
        <h1 class="uk-margin-medium-left">EXIT</h1>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;Many entrepreneurs wish that their families should retain ownership of the company or that shares will be handed over to selected successors in the long term. Carmel Investments will provide for a return of the investment in accordance with your wishes and interests.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;The table below summarizes the repayment options.</p>

        <table class="uk-margin-small-top uk-margin-remove-bottom uk-table uk-table-striped uk-table-middle uk-table-small uk-table-responsive">
          <thead>
            <tr uk-height-match>
              <th><b>Repayment method</b></th>
              <th></th>
              <th><b>Frequency</b></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><b>Repayment by the company</b></td>
              <td>The company itself repays GRAUBERGER GROUP.<br>Typically, this is financed by free cash flow.</td>
              <td>• • • •</td>
            </tr>
            <tr>
              <td><b>Sale of shares to a partner</b></td>
              <td>A partner acquires the shares held by GRAUBERGER GROUP.<br>This often involves the use of put and call options.</td>
              <td>• • •</td>
            </tr>
            <tr>
              <td><b>Trade sale</b></td>
              <td>Sale of the company (or parts thereof) to a strategic investor (for example, to a partner company).</td>
              <td>• • •</td>
            </tr>
            <tr>
              <td><b>Secondary purchase</b></td>
              <td>Sale of the company (or parts thereof) to a financial investor (for example, to a private equity fund).</td>
              <td>•</td>
            </tr>
            <tr>
              <td><b>Initial public offering (IPO)</b></td>
              <td>Going public (listing on an Israel or European stock exchange, such as the TA Finance or London Stock Exchange).</td>
              <td>•</td>
            </tr>
          </tbody>
        </table>
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
