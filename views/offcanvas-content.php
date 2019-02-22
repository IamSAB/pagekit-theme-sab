<div class="uk-child-width-1-1" uk-grid>

    <?php if ($view->menu()->exists('offcanvas')): ?>
    <div>
        <?= $view->menu('offcanvas', 'theme-kit/nav/nav.php', [
            'form' => 'offcanvas'
        ]) ?>
    </div>
    <?php endif ?>

    <?php if ($view->position()->exists('offcanvas')): ?>
        <?= $view->position('offcanvas', 'theme-kit/position/stacked.php', ['form' => 'offcanvas']) ?>
    <?php endif ?>

</div>
