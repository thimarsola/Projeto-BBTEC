<!-- row -->
<div class="content__row__container__row grid mt-6">
    <?php
    $retentionList = file_get_contents(__DIR__ . "/../../includes/retention-rings.json");
    $jsonRetention = json_decode($retentionList, true);

    $baseurl = wp_get_upload_dir();

    foreach ($jsonRetention['retention'] as $item):
        ?>
        <!-- card -->
        <article class="content__row__container__row__card bg-white-500 shadow strech">
            <!-- icon -->
            <div class="content__row__container__row__card__icon t-center bg-none">
                <img src="<?= image($item['image']); ?>" alt="Conheça mais sobre este produto">
            </div>
            <!-- end of icon -->

            <!-- header -->
            <header class="content__row__container__row__card__header mt-3 mb-2 t-center">
                <h3><?= $item['title']; ?></h3>
            </header>
            <!-- end of header -->

            <!-- body -->
            <div class="content__row__container__row__card__body t-center">

                <!-- text -->
                <div class="content__row__container__row__card__body__text t-justify">
                    <?php foreach ($item['description'] as $key): ?>
                        <p class="t-small"><?= $key; ?></p>
                    <?php endforeach; ?>

                    <p class="t-small mt-2">Tipo <?= $item['type']; ?> <span class="clr-primary-500">|</span> Norma <?= $item['standard']; ?> <span class="clr-primary-500">|</span> Dimensão <?= $item['dimension']; ?></p>
                </div>
                <!-- end of text -->

                <a class="btn btn-block btn-primary-500 radius" href="<?= $baseurl['baseurl']  . '/2021/' . $item['file']; ?>" title="Confira o nosso documento técnico" target="_blank">Saiba mais</a>
            </div>
            <!-- end of body -->
        </article>
        <!-- end of card -->
    <?php endforeach; ?>
</div>
<!-- end of row -->