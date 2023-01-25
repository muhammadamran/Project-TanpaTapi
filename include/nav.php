<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar" style="background: #fff;">
    <div class="container">
        <a class="navbar-brand d-xl-none d-lg-none d-md-block d-sm-block" href="/">
            <img src="<?= $logoOne; ?>" alt="Logo" class="light" style="width: 115px;">
            <img src=" <?= $logoTwo; ?>" alt="Logo" class="dark">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="probootstrap-navbar">
            <ul class="navbar-nav" style="display: contents;">
                <li class="nav-item <?= $uriSegments[2] == '' || $uriSegments[2] == '#HOME' ? 'active' : '' ?>">
                    <a class="nav-link text-uppercase pb_letter-spacing-2" href="#HOME">HOME</a>
                </li>
                <li class="nav-item <?= $uriSegments[2] == '#ABOUT-US' ? 'active' : '' ?>">
                    <a class="nav-link text-uppercase pb_letter-spacing-2" href="#ABOUT-US">ABOUT US</a>
                </li>
                <li class="nav-item logo-center d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <a class="nav-link text-uppercase pb_letter-spacing-2" href="index.php" style="margin: 0px;padding: 0px;">
                        <img src="<?= $logoOne; ?>" alt="Logo" class="light" style="width: 115px;">
                        <img src=" <?= $logoTwo; ?>" alt="Logo" class="dark">
                    </a>
                </li>
                <li class="nav-item <?= $uriSegments[2] == '#OUR-MENU' ? 'active' : '' ?>">
                    <a class="nav-link text-uppercase pb_letter-spacing-2" href="#OUR-MENU">OUR MENU</a>
                </li>
                <li class="nav-item <?= $uriSegments[2] == '#CONTACT-US' ? 'active' : '' ?>">
                    <a class="nav-link text-uppercase pb_letter-spacing-2" href="#CONTACT-US">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>