<?php if ($view->position()->exists('outerMainTop')): ?>
<?= $view->position('outerMainTop', 'theme-kit/position/grid-card.php', ['form' => 'outerMainTop']) ?>
<?php endif ?>

<div uk-grid>

    <aside id="sidebar" <?= $view->values()->class('sidebar.sidebar') ?>>
        <div <?= $view->values()->attr('uk-sticky', "sidebar.sticky enable ? true:offset,top,animation,showOnUp,media", false, 'bottom:true;') ?>>
            <div class="uk-child-width-1-1" uk-grid>
                <div>
                    <?php if ($view->menu()->exists('sidebar')): ?>
                    <?= $view->menu('sidebar', 'theme-kit/nav/nav.php', ['form' => 'sidebar']) ?>
                    <?php endif ?>
                </div>
                <?= $view->position('sidebar', 'theme-kit/position/stacked.php') ?>
            </div>
        </div>
    </aside>

    <main class="uk-width-expand" uk-height-viewport="expand: true" uk-grid>

        <?php if ($view->position()->exists('innerMainTop')): ?>
        <?= $view->position('innerMainTop', 'theme-kit/position/grid-card.php', ['form' => 'innerMainTop']) ?>
        <?php endif ?>

        <div>
            <?= $view->render('content') ?>
        </div>

        <?php if ($view->position()->exists('innerMainBottom')): ?>
        <?= $view->position('innerMainBottom', 'theme-kit/position/grid-card.php', ['form' => 'innerMainBottom']) ?>
        <?php endif ?>

    </main>

</div>

<?php if ($view->position()->exists('outerMainBottom')): ?>
<?= $view->position('outerMainBottom', 'theme-kit/position/grid-card.php', ['form' => 'outerMainBottom']) ?>
<?php endif ?>
