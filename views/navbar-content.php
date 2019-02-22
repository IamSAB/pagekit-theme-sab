<div class="uk-navbar-left uk-hidden@s">
    <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#offcanvas" uk-toggle="target: #offcanvas"></a>
</div>

<div class="uk-navbar-center">
    <div class="uk-navbar-item uk-hidden@s">
        <?= $view->render('theme-kit/logo.php') ?>
    </div>
    <div class="uk-visible@s">
        <?= $view->menu('main', 'theme-kit/nav/navbar-center-split.php', ['content' => $view->render('theme-kit/logo.php')]) ?>
    </div>
</div>

<div class="uk-navbar-right">
    <?php if ($view->position()->exists('navbar')): ?>
    <?= $view->position('navbar', 'theme-kit/position/navbar.php') ?>
    <?php else: ?>
    <div class="uk-navbar-item uk-invisible">...</div>
    <?php endif ?>
</div>
