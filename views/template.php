<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:app/bundle/theme.js') ?>
    </head>

    <body id="top">

        <?php if ($view->position()->exists('cover')): ?>
            <?= $view->render('theme-kit/cover.php',[
                'form' => 'cover',
                'content' => $view->render('views:navbar-transparent.php') . $view->position('cover', 'theme-kit/position/cover.php')
            ]); ?>
        <?php else: ?>
            <?= $view->render('views:navbar.php') ?>
        <?php endif ?>

        <?php if ($view->position()->exists('top')): ?>
        <?= $view->render('theme-kit/section.php',[
            'form' => 'top',
            'content' => $view->position('top', 'theme-kit/position/grid-card.php', ['form' => 'top'])
            ]) ?>
        <?php endif ?>


        <?= $view->render('theme-kit/section.php',[
            'form' => 'main',
            'content' => $view->render('views:main-content.php')
            ]) ?>

        <?php if ($view->position()->exists('bottom')): ?>
        <?= $view->render('theme-kit/section.php',[
            'form' => 'bottom',
            'content' => $view->position('bottom', 'theme-kit/position/grid-card.php', ['form' => 'bottom'])
            ]) ?>
        <?php endif ?>

        <div class="uk-section uk-section-secondary uk-preserve-color">
            <div class="uk-text-center uk-padding">
                <?= $view->values("footer.footer.content") ?>
            </div>
            <div class="uk-flex uk-flex-center">
                <?= $view->menu('footer', 'theme-kit/nav/subnav.php', [
                    'form' => 'footer'
                ]) ?>
            </div>
            <div class="uk-text-center">
                <?php if ($view->values("footer.footer.totop", true)): ?>
                <a href="#top" uk-totop uk-scroll></a>
                <?php endif ?>
                <div class="uk-padding-small">
                    <?= $view->values("footer.footer.copyright") ?>
                </div>
            </div>
        </div>

        <?= $view->render('theme-kit/offcanvas.php', [
            'id' => 'offcanvas',
            'form' => 'offcanvas',
            'content' => $view->menu('offcanvas', 'views:offcanvas-content.php', [
                'form' => 'menu'
            ])
        ]) ?>

    </body>

</html>
