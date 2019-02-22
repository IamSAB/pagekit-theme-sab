<div class="uk-position-top">
    <div <?= $view->values()->attr('uk-sticky', 'navbar.sticky enable ? true:offset,top,animation,showOnUp', false, 'sel-target:.uk-navbar-container;cls-active:uk-navbar-sticky;cls-inactive:uk-navbar-transparent uk-light;') ?> style="z-index: 1000;">
        <nav class="uk-navbar-container uk-navbar-transparent" <?= $view->values()->attr('uk-navbar', "navbar.ukNavbar", false) ?>>
            <?= $view->render('views:navbar-content.php') ?>
        </nav>
    </div>
</div>
