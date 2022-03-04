<!-- card -->
<article class="blog__row__container__content__card">
    <!-- thumb -->
    <div class="blog__row__container__content__card__thumb radius">
        <a href="<?= get_the_permalink() ?>" title="Veja mais sobre esse artigo" target="_blank">
            <?= get_the_post_thumbnail(get_the_ID(), 'large'); ?>
        </a>
    </div>
    <!-- end of thumb -->

    <!-- published -->
    <div class="blog__row__container__content__card__published my-3">
        <p>
            <small class="d-flex ai-center l-small clr-gray-500">
                <i class="icon-calendar mr-1"></i>
                <?= get_the_date('j \d\e F \d\e Y'); ?>
            </small>
        </p>
    </div>
    <!-- end of published -->

    <!-- header -->
    <header class="blog__row__container__content__card__header">
        <h3 class="f-5">
            <a class="link-dark-blue-500" href="<?= get_the_permalink() ?>" title="Veja mais sobre esse artigo" target="_blank"><?= get_the_title(); ?></a>
        </h3>
    </header>
    <!-- end of header -->

    <!-- body -->
    <div class="blog__row__container__content__card__body mt-3 t-justify">
        <p class="mb-5"><?= get_the_excerpt(); ?></p>

        <a class="btn btn-primary-500 t-uppercase radius" href="<?= get_the_permalink() ?>" title="Veja mais sobre esse artigo" target="_blank">Ler artigo</a>
    </div>
    <!-- end of body -->
</article>
<!-- end of card -->