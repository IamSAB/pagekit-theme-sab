<div uk-grid>

    <aside <?= $view->values()->class("main.sidebar:width,position") ?>>
        <div class="uk-child-width-1-1" uk-grid>
            <?= $view->position('sidebar', 'theme-kit/position-stacked.php') ?>
        </div>
    </aside>

    <main id="tm-main" class="uk-width-expand" uk-height-viewport="expand: true">

        <div class="uk-container uk-container-expand">
            <?= $view->render('content') ?>
        </div>

    </main>

</div>