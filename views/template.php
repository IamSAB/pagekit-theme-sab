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

        <?= $view->render('theme-kit/navbar.php', [
            'form' => 'navbar',
            'content' => $view->render('views:navbar-content.php')
        ]) ?>

        <?= $view->render('theme-kit/offcanvas.php', [
            'id' => 'offcanvas',
            'form' => 'menu',
            'content' => $view->menu('offcanvas', 'views:offcanvas-content.php', [
                'form' => 'menu'
            ])
        ]) ?>

        <?php if ($view->position()->exists('cover')): ?>
        <?= $view->render('theme-kit/cover.php',[
            'form' => 'cover',
            'content' => $view->position('cover', 'theme-kit/position-cover.php')
            ]) ?>
        <?php endif ?>

        <?php if ($view->position()->exists('top')): ?>
        <?= $view->render('theme-kit/section.php',[
            'form' => 'top',
            'content' => $view->position('top', 'theme-kit/position-grid.php', ['form' => 'top'])
            ]) ?>
        <?php endif ?>


        <?= $view->render('theme-kit/section.php',[
            'form' => 'main',
            'content' => $view->render('views:main-content.php')
            ]) ?>

        <?php if ($view->position()->exists('bottom')): ?>
        <?= $view->render('theme-kit/section.php',[
            'form' => 'bottom',
            'content' => $view->position('bottom', 'theme-kit/position-grid.php', ['form' => 'bottom'])
            ]) ?>
        <?php endif ?>

        <?php if ($view->position()->exists('foot')): ?>
        <?= $view->render('theme-kit/section.php',[
            'form' => 'foot',
            'content' => $view->render('views:foot-content.php')
            ]) ?>
        <?php endif ?>

    </body>

</html>
