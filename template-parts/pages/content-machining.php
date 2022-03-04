<!-- row -->
<div class="content__row__container__row__gallery grid mt-6">
    <?php for ($i = 1; $i < 11; $i++): ?>
        <a href="<?= image('usinagem-' . str_pad($i,2, 0, STR_PAD_LEFT) . '.jpg'); ?>" class="content__row__container__row__gallery__card">
            <?= picture('usinagem-' . str_pad($i,2, 0, STR_PAD_LEFT), 'Conheça a nossa empresa', 'img-fluid'); ?>
        </a>
    <?php endfor; ?>
</div>
<!-- end of row -->