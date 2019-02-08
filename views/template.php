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

        <div class="uk-navbar-container">
            <div class="uk-container">
                <div uk-navbar>
                    <?= $view->menu('main', 'theme-kit/navbar-nav-center-split.php', ['content' => 'Hey, there!']) ?>
                </div>
            </div>
        </div>

        <?= $view->render('theme-kit/section.php',[
            'form' => 'top',
            'content' => $view->position('top', 'views:theme-kit/position-grid.php', ['form' => 'top'])
            ]) ?>

        <div <?= $view->values('main.section','uk-section') ?>>
            <div <?= $view->values('main.container','uk-container') ?>>
                <?= $view->render('content') ?>
            </div>
        </div>

    </body>

</html>
