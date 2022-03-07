<!-- card -->
<article class="single__row__sidebar__highlight__content__card">
    <!-- content -->
    <div class="single__row__sidebar__highlight__content__card__content">

        <!-- published -->
         <div class="single__row__sidebar__highlight__content__card__content__published mb-1">
             <p>
                 <small class="d-flex ai-center t-small l-small clr-gray-500">
                     <i class="icon-calendar mr-1"></i>
                     <?= get_the_date('j \d\e F \d\e Y'); ?>
                 </small>
             </p>
         </div>
        <!-- end of published -->

        <!-- header -->
         <header class="single__row__sidebar__highlight__content__card__content__header">
             <h4>
                 <a class="link-dark-blue-500" href="<?= get_the_permalink() ?>" title="Veja mais sobre esse artigo" target="_blank"><?= get_the_title(); ?></a>
             </h4>
         </header>
        <!-- end of header -->

    </div>
    <!-- end of content -->

</article>
<!-- end of card -->