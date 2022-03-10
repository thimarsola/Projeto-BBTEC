<!-- card -->
<article class="blog__row__card">
    <!-- header -->
    <header class="blog__row__card__header bg-primary-500 clr-white-500 p-2">
        <h3 class="f-3 mb-1">
            <a class="link-white-500" href="<?= get_the_permalink() ?>" title="Veja mais sobre esse artigo" target="_blank"><?= get_the_title(); ?></a>
        </h3>
        <p class="t-small">Publicado em <?= get_the_date('j \d\e F \d\e Y'); ?></p>
    </header>
    <!-- end of header -->

    <!-- body -->
    <div class="blog__row__card__body bg-light-gray-500 t-justify">
        <p class="mb-3"><?= get_the_excerpt(); ?></p>

        <a class="link-neutral-500 t-uppercase t-bold" href="<?= get_the_permalink() ?>" title="Veja mais sobre esse artigo" target="_blank">Ver artigo <i class="icon-plus"></i></a>
    </div>
    <!-- end of body -->
</article>
<!-- end of card -->