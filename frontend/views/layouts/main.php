<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Milliy taomlar</title>

        <link rel="icon" type="image/jpeg" href="/img/favicon.jpg">

        <?php $this->head() ?>
    </head>
    <body>
<?php $this->beginBody() ?>
    <!-- =========== Scroll top ========== -->

    <a href="#" class="scrolltop" id="scroll-top">
        <i class="bx bx-chevron-up scrolltop__icon"></i>
    </a>

    <!-- Header starts -->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="\" class="logo">Milliy taomlar</a>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="\" class="nav__link active">
                            <?=Yii::t("app","Home");?>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="\oshxona\menu" class="nav__link">
                            Taomlar ro'yhati
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="\oshxona\service" class="nav__link">
                            Bizning xizmatlar
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="\oshxona\about" class="nav__link">
                           <?=Yii::t("app","About"); ?>
                        </a>
                    </li>

                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>
            <?= \lajax\languagepicker\widgets\LanguagePicker::widget([
                'skin' => \lajax\languagepicker\widgets\LanguagePicker::SKIN_DROPDOWN,
                'size' => \lajax\languagepicker\widgets\LanguagePicker::SIZE_LARGE
            ]); ?>

            <div class="nav__toggle" id="nav-togge">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    <!-- Header ends -->

    <!-- =========== Home section =========== -->
    <main class="l-main">
      <?=$content;?>

    </main>

    <!-- ========== Footer content========== -->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">Tasty food</a>
                <span class="footer__description">Restaurant</span>
                <div>
                    <a href="#" class="footer__social">
                        <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="footer__social">
                        <i class="bx bxl-instagram"></i>
                    </a>
                    <a href="#" class="footer__social">
                        <i class="bx bxl-twitter"></i>
                    </a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Services</h3>
                <ul>
                    <li>
                        <a href="#" class="footer__link">Delivery</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Pricing</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Fast food</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Reserve your</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Information</h3>
                <ul>
                    <li>
                        <a href="#" class="footer__link">Event</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Contact us</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Privacy policy</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Terms of service</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Addres</h3>
                <ul>
                    <li>
                        Lima - Peru
                    </li>
                    <li>
                        Jr Union #999
                    </li>
                    <li>
                        999 - 888 - 777
                    </li>
                    <li>
                        tastyfood@email.com
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <?php $this->endBody()  ?>
    </body>

</html>
<?php $this->endPage();
