<div class="uk-section uk-section-secondary uk-preserve-color uk-light">
    <div class="uk-text-center uk-padding">
        <?= $view->values("$form.footer.content") ?>
    </div>
    <div class="uk-flex uk-flex-center">
        <?= $view->menu('footer', 'theme-kit/nav/subnav.php', [
            'form' => $form
        ]) ?>
    </div>
    <div class="uk-text-center">
        <?php if ($view->values("$form.footer.totop", true)): ?>
        <a href="#top" uk-totop uk-scroll></a>
        <?php endif ?>
        <div class="uk-padding-small">
            <?= $view->values("$form.footer.copyright") ?>
        </div>
    </div>
</div>
