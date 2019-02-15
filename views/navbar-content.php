
<div class="uk-navbar-left uk-hidden@s">
    <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#offcanvas" uk-toggle="target: #offcanvas"></a>
</div>

<div class="uk-navbar-center uk-visible@s">
    <?= $view->menu('main', 'theme-kit/navbar-nav-center-split.php', ['content' => $view->render('theme-kit/logo.php')]) ?>
</div>

<div class="uk-navbar-right">
    <?php if ($view->position()->exists('navbar')): ?>
    <?= $view->position('navbar', 'theme-kit/position-navbar.php') ?>
    <?php endif ?>
</div>