<div <?= $view->values()->attr('uk-sticky','navbar.sticky enable ? true:offset,top,animation,showOnUp', false, 'sel-target:.uk-navbar-container;cls-active:uk-navbar-sticky;') ?> style="z-index: 1000;">
    <nav class="uk-navbar-container" <?= $view->values()->attr('uk-navbar', "navbar.navbar") ?>>
        <?= $view->render('views:navbar-content.php') ?>
    </nav>
</div>
