<!-- catalogues -->
<section class="catalogues py-10">
    <div class="container">

        <!-- header -->
        <header class="catalogues__header d-none">
            <h2>Conheça os nossos Catálogos</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="catalogues__row grid">
            <?php
            $baseurl = wp_get_upload_dir();

            $jsonCatalogues = file_get_contents(__DIR__ . '/../../includes/catalogues.json');
            $cataloguesList = json_decode($jsonCatalogues, true);

            foreach ($cataloguesList['catalogues'] as $catalogue):
                ?>
                <!-- card -->
                <article class="catalogues__row__card bg-white-500 shadow">
                    <!-- icon -->
                    <div class="catalogues__row__card__icon t-center">
                        <i class="icon-file clr-primary-500 f-5"></i>
                    </div>
                    <!-- end of icon -->

                    <!-- header -->
                    <header class="catalogues__row__card__header mt-3 mb-2 t-center">
                        <h3><?= $catalogue['title']; ?></h3>
                    </header>
                    <!-- end of header -->

                    <!-- body -->
                    <div class="catalogues__row__card__body t-center">
                        <p class="t-small mb-4">Clique no botão abaixo para mais informações sobre esse catálogo</p>

                        <a href="<?= $baseurl['baseurl']  . '/2022/' . $catalogue['file']; ?>" class="btn btn-block btn-primary-500 radius" title="Baixe o nosso catálogo" target="_blank">
                            Saiba mais
                        </a>
                    </div>
                    <!-- end of body -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->
    </div>
</section>
<!-- end of catalogues -->