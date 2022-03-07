<aside class="content__row__aside__sidebar">
    <!-- container -->
    <div class="content__row__aside__sidebar__container">
        <!-- header -->
        <header class="content__row__aside__sidebar__container__header d-none">
            <h3>Conheça também:</h3>
        </header>
        <!-- end of header -->

        <ul>
            <?php
            $pages = get_pages(['sort_order' => 'ASC', 'exclude' => [6, 12, 34, 8, 36, 3, 38]]);
            foreach ($pages as $page):
                ?>
                <li class="<?= $page->post_title  == get_the_title() ? "active" : ''?>">
                    <?php if($page->post_title  == get_the_title()): ?>
                        <p class="t-bold clr-neutral-500"><?= $page->post_title; ?></p>
                    <?php else: ?>
                        <a class="t-bold link-neutral-500" href="<?= $page->guid; ?>" title="Indústrias RC | <?= $page->post_title; ?>"><?= $page->post_title; ?></a>
                        <i class="icon-arrow-forward"></i>
                    <?php endif; ?>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
    <!-- end of container -->

    <!-- cta -->
    <div class="content__row__aside__sidebar__cta mt-6 t-center">
        <p class="t-bold clr-white-500">Vamos conversar?</p>

        <!-- icon -->
        <div class="content__row__aside__sidebar__cta__icon bg-primary-500">
            <i class="icon-phone clr-white-500 f-6"></i>
        </div>
        <!-- end of icon -->

        <a rel="nofollow noopener noreferrer" class="link-white-500 f-4 t-bold" href="tel:<?= (formatPhone(CONTACT['phone']['01'])); ?>" title="Vamos conversar por telefone?"><?= CONTACT['phone']['01']; ?></a>
    </div>
    <!-- end of cta -->

    <!-- catalogue -->
    <div class="content__row__aside__sidebar__catalogue mt-6">
        <!-- header -->
        <header class="content__row__aside__sidebar__catalogue__header title">
            <h3 class="f-3 mb-1 t-left">Catálogo</h3>
            <div class="title__divider jc-start">
                <span></span>
                <span></span>
            </div>
        </header>
        <!-- end of header -->

        <?php 
            $baseurl = wp_get_upload_dir(); 
            
            $jsonCatalogues = file_get_contents(__DIR__ . '/includes/catalogues.json');
            $cataloguesList = json_decode($jsonCatalogues, true);
            
            foreach ($cataloguesList['catalogues'] as $catalogue):
        ?>

                <a href="<?= $baseurl['baseurl']  . '/2022/' . $catalogue['file']; ?>" class="btn btn-block btn-primary-500 l-small" title="Baixe o nosso catálogo" target="_blank">
                    <i class="icon-file mr-1"></i>
                    <span><?= $catalogue['title']; ?></span>
                </a>
        
        <?php endforeach; ?>
    </div>
    <!-- end of catalogue -->
</aside>