<?php include($_SERVER['DOCUMENT_ROOT'].'/form_handler.php'); ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grauberger Group - Contact</title>
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
        <div class="uk-background-cover uk-height-medium uk-background-center uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/img/contact.jpg);"></div>
      </div>

      <div class="my-content-container">
        <h1 class="uk-margin-medium-left">CONTACT</h1>
        <p class="uk-text-justify uk-margin-small-bottom">&emsp;We make every effort to answer online inquiries as quickly as possible. If you have any questions or suggestions, you can also contact us by telephone on <a href="tel:+972.55.966.1915">+972 55 966 1915</a>.</p>
        <p class="uk-text-justify uk-margin-small-top uk-margin-small-bottom">&emsp;Please note that all fields marked with <span class="uk-text-bold">*</span> are mandatory.</p>
        <hr>

        <form class="uk-form-horizontal uk-margin-large uk-margin-small-bottom" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

          <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-select">Form of address <span class="uk-text-bold">*</span></label>
            <div class="uk-form-controls">
              <select class="uk-select" id="form-horizontal-select" name="options">
                <option value="">Please select:</option>
                <option value="Mr." <?php if(isset($_POST['options']) && $_POST['options'] == 'Mr.') { echo 'selected= "selected"'; } ?>>Mr.</option>
                <option value="Ms." <?php if(isset($_POST['options']) && $_POST['options'] == 'Ms.') { echo 'selected= "selected"'; } ?>>Ms.</option>
              </select>
              <div class="uk-alert-danger uk-margin-small-top"><?php echo $optionsErr; ?></div>
            </div>
          </div>

          <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Title</label>
            <div class="uk-form-controls">
              <input class="uk-input" id="form-horizontal-text" type="text" name="title" value="<?php echo $title; ?>">
            </div>
          </div>

          <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">First name <span class="uk-text-bold">*</span></label>
            <div class="uk-form-controls">
              <input class="uk-input" id="form-horizontal-text" type="text" name="firstname" value="<?php echo $firstName; ?>">
              <div class="uk-alert-danger uk-margin-small-top"><?php echo $firstNameErr; ?></div>
            </div>
          </div>

          <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Last name <span class="uk-text-bold">*</span></label>
            <div class="uk-form-controls">
              <input class="uk-input" id="form-horizontal-text" type="text" name="lastname" value="<?php echo $lastName; ?>">
              <div class="uk-alert-danger uk-margin-small-top"><?php echo $lastNameErr; ?></div>
            </div>
          </div>

          <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Company</label>
            <div class="uk-form-controls">
              <input class="uk-input" id="form-horizontal-text" type="text" name="company" value="<?php echo $company; ?>">
            </div>
          </div>

          <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Telephone</label>
            <div class="uk-form-controls">
              <input class="uk-input" id="form-horizontal-text" type="text" name="telephone" value="<?php echo $telephone; ?>">
            </div>
          </div>

          <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">E-mail <span class="uk-text-bold">*</span></label>
            <div class="uk-form-controls">
              <input class="uk-input" id="form-horizontal-text" type="text" name="email" value="<?php echo $email; ?>">
              <div class="uk-alert-danger uk-margin-small-top"><?php echo $emailErr; ?></div>
            </div>
          </div>

          <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Message <span class="uk-text-bold">*</span></label>
            <div class="uk-form-controls">
              <textarea class="uk-textarea" rows="4" name="message"><?php echo $message; ?></textarea>
              <div class="uk-alert-danger uk-margin-small-top"><?php echo $messageErr; ?></div>
            </div>
          </div>

          <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Anti-spam check <span class="uk-text-bold">*</span></label>
            <div class="uk-form-controls">

              <div class="uk-grid-match" uk-grid>
                <div class="uk-width-1-2@s">
                  <img class="uk-width-1-1" id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image"/>
                </div>
                <div class="uk-width-1-2@s" id="my-margin-small-top-s">
                  <div class="uk-inline uk-width-1-1@s">
                    <div class="">
                      <a class="uk-form-icon uk-form-icon-flip" id="captcha-refresh" href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false"><span class="uk-form-icon-flip" uk-icon="refresh"></span></a>
                      <input class="uk-input" type="text" name="captcha_code" maxlength="6" />
                    </div>
                    <div class="uk-alert-<?php echo $alertStatus; ?> uk-margin-small-top my-alert-height"><?php echo $securimageErr; ?></div>
                    <button class="uk-margin-small-top uk-button uk-button-secondary uk-width-1-1" type="submit" name="submit">Contact Us</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

        <div class="uk-margin-small-top uk-margin-large-bottom">
          <div class="uk-alert-<?php echo $status; ?> uk-margin-small-top"><?php echo $mailSent; ?></div>
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
