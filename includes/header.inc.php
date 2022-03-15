
<!-- Navbar Desktop -->

<div class="uk-container my-desktop-navbar">
  <nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
      <ul class="uk-navbar-nav">
        <li>
          <a class="my-navbar-height uk-button-text" id="<?php if($page == "company" || $page == "special" || $page == "success"){echo "my-active-menu";} ?>" href="/index.php">GRAUBERGER GROUP</a>
          <div class="uk-navbar-dropdown">
            <ul class="uk-nav uk-navbar-dropdown-nav">
              <li><a id="<?php if($page == "company"){echo "my-active-submenu";} ?>" href="/The-Company/The-company.php">The Company</a></li>
              <li><a id="<?php if($page == "special"){echo "my-active-submenu";} ?>" href="/The-Company/What-makes-us-special.php">What makes us special</a></li>
              <li><a id="<?php if($page == "success"){echo "my-active-submenu";} ?>" href="/The-Company/The-basis-for-success.php">The basis for success</a></li>
            </ul>
          </div>
        </li>

        <li>
          <a class="my-navbar-height uk-button-text" id="<?php if($page == "prerequisites" || $page == "process" || $page == "partnership" || $page == "exit"){echo "my-active-menu";} ?>" href="#">THE COOPERATION</a>
          <div class="uk-navbar-dropdown">
            <ul class="uk-nav uk-navbar-dropdown-nav">
              <li><a id="<?php if($page == "prerequisites"){echo "my-active-submenu";} ?>" href="/The-Cooperation/The-prerequisites.php">The prerequisites</a></li>
              <li><a id="<?php if($page == "process"){echo "my-active-submenu";} ?>" href="/The-Cooperation/The-process.php">The process</a></li>
              <li><a id="<?php if($page == "partnership"){echo "my-active-submenu";} ?>" href="/The-Cooperation/The-partnership.php">The partnership</a></li>
              <li><a id="<?php if($page == "exit"){echo "my-active-submenu";} ?>" href="/The-Cooperation/The-exit.php">The exit</a></li>
            </ul>
          </div>
        </li>

        <li>
          <a class="my-navbar-height uk-button-text" id="<?php if($page == "finance" || $page == "expansion" || $page == "buy-outs" || $page == "situations"){echo "my-active-menu";} ?>" href="#">OUR SERVICES</a>
          <div class="uk-navbar-dropdown">
            <ul class="uk-nav uk-navbar-dropdown-nav">
              <li><a id="<?php if($page == "finance"){echo "my-active-submenu";} ?>" href="/Our-Services/Finance.php">Finance</a></li>
              <li><a id="<?php if($page == "expansion"){echo "my-active-submenu";} ?>" href="/Our-Services/Expasion-finance.php">Expansion finance</a></li>
              <li><a id="<?php if($page == "buy-outs"){echo "my-active-submenu";} ?>" href="/Our-Services/Management-buy-outs.php">Management buy-outs</a></li>
              <li><a id="<?php if($page == "situations"){echo "my-active-submenu";} ?>" href="/Our-Services/Special-situations.php">Special situations</a></li>
            </ul>
          </div>
        </li>

        <li>
          <a class="my-navbar-height uk-button-text" id="<?php if($page == "staff" || $page == "committee" || $page == "supervisory" || $page == "governance"){echo "my-active-menu";} ?>" href="#">TEAM</a>
          <div class="uk-navbar-dropdown">
            <ul class="uk-nav uk-navbar-dropdown-nav">
              <li><a id="<?php if($page == "staff"){echo "my-active-submenu";} ?>" href="/Team/The-staff.php">The staff</a></li>
              <li><a id="<?php if($page == "committee"){echo "my-active-submenu";} ?>" href="/Team/Investment-Committee.php">Investment Committee</a></li>
              <li><a id="<?php if($page == "supervisory"){echo "my-active-submenu";} ?>" href="/Team/The-Supervisory-Board.php">The Supervisory Board</a></li>
              <li><a id="<?php if($page == "governance"){echo "my-active-submenu";} ?>" href="/Team/Corporate-Governance.php">Corporate Governance</a></li>
            </ul>
          </div>
        </li>

        <li>
          <a class="my-navbar-height uk-button-text" id="<?php if($page == "current" || $page == "former"){echo "my-active-menu";} ?>" href="#">PORTFOLIO</a>
          <div class="uk-navbar-dropdown">
            <ul class="uk-nav uk-navbar-dropdown-nav">
              <li><a id="<?php if($page == "current"){echo "my-active-submenu";} ?>" href="/Portofolio/Current-portofolio.php">Current portfolio</a></li>
              <li><a id="<?php if($page == "former"){echo "my-active-submenu";} ?>" href="/Portofolio/Former-potofolio-investments.php">Former portfolio investments</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>

    <div class="uk-navbar-right">
      <ul class="uk-navbar-nav">
        <li><a class="my-navbar-height uk-button-text" id="<?php if($page == "contact"){echo "my-active-menu";} ?>" href="/contact.php">Contact</a></li>
        <li><a class="my-navbar-height uk-button-text" uk-toggle="target: #modal-center">Imprint</a></li>
      </ul>
    </div>
  </nav>
</div>

<!-- Navbar Mobile -->

<div class="uk-container my-mobile-navbar">
  <div class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
      <ul class="uk-navbar-nav">
        <li>
          <a class="uk-navbar-toggle" id="my-mobile-navbar-format" href="#" uk-toggle="target: #offcanvas-nav-primary">
            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="uk-navbar-right">
      <ul class="uk-navbar-nav">
        <li>
          <a id="my-mobile-navbar-format" href="/contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Offcanvas menu -->

<div id="offcanvas-nav-primary" class="uk-overlay-primary" uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar uk-flex uk-flex-column">

    <div class="uk-align-center uk-margin-remove-bottom">
      <ul class="uk-navbar-nav">
        <li><a id="my-offcanvas-logo" href="/index.php"><img class="my-logo2" src="/img/logo/Logo 1b.svg" alt="Company Logo"></a></li>
      </ul>
    </div>
    <!-- Menu links -->
    <ul class="uk-nav-primary uk-nav-parent-icon my-margin-auto-vertical" uk-nav>
      <li class="uk-parent">
        <a href="#">GRAUBERGER GROUP</a>
        <ul class="uk-nav-sub">
          <li><a href="/The-Company/The-company.php">The Company</a></li>
          <li><a href="/The-Company/What-makes-us-special.php">What makes us special</a></li>
          <li><a href="/The-Company/The-basis-for-success.php">The basis for success</a></li>
        </ul>
      </li>
      <li class="uk-parent">
        <a href="#">THE COOPERATION</a>
        <ul class="uk-nav-sub">
          <li><a href="/The-Cooperation/The-prerequisites.php">The prerequisites</a></li>
          <li><a href="/The-Cooperation/The-process.php">The process</a></li>
          <li><a href="/The-Cooperation/The-partnership.php">The partnership</a></li>
          <li><a href="/The-Cooperation/The-exit.php">The exit</a></li>
        </ul>
      </li>
      <li class="uk-parent">
        <a href="#">OUR SERVICES</a>
        <ul class="uk-nav-sub">
          <li><a href="/Our-Services/Finance.php">Finance</a></li>
          <li><a href="/Our-Services/Expasion-finance.php">Expansion finance</a></li>
          <li><a href="/Our-Services/Management-buy-outs.php">Management buy-outs</a></li>
          <li><a href="/Our-Services/Special-situations.php">Special situations</a></li>
        </ul>
      </li>
      <li class="uk-parent">
        <a href="#">TEAM</a>
        <ul class="uk-nav-sub">
          <li><a href="/Team/The-staff.php">The staff</a></li>
          <li><a href="/Team/Investment-Committee.php">Investment Committee</a></li>
          <li><a href="/Team/The-Supervisory-Board.php">The Supervisory Board</a></li>
          <li><a href="/Team/Corporate-Governance.php">Corporate Governance</a></li>
        </ul>
      </li>
      <li class="uk-parent">
        <a href="#">PORTFOLIO</a>
        <ul class="uk-nav-sub">
          <li><a href="/Portofolio/Current-portofolio.php">Current portfolio</a></li>
          <li><a href="/Portofolio/Former-potofolio-investments.php">Former portfolio investments</a></li>
        </ul>
      </li>
      <li class="my-parent-offcanvas">
        <hr class="uk-divider-small">
        <a uk-toggle="target: #modal-center">IMPRINT</a>
      </li>
    </ul>
  </div>
</div>
