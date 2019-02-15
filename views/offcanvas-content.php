<div class="uk-child-width-1-1" uk-grid>

    <div>
        <?= $view->menu('offcanvas', 'theme-kit/menu.php', [
            'form' => 'offcanvas'
        ]) ?>
    </div>

    <?php if ($view->position()->exists('offcanvas')): ?>
        <?= $view->position('offcanvas', 'theme-kit/position-stacked.php', ['form' => 'offcanvas']) ?>
    <?php endif ?>

</div>