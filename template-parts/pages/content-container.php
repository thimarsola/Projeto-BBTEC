<div class="content__row__container">

    <!-- header -->
     <header class="content__row__container__header mb-4">
         <h2 class="f-6"><?= get_the_title(); ?></h2>
     </header>
    <!-- end of header -->

    <!-- image -->
     <div class="content__row__container__image mb-6">
         <?= get_the_post_thumbnail(get_the_ID(), 'large'); ?>
     </div>
    <!-- end of image -->

    <!-- body -->
     <div class="content__row__container__body t-justify">
         <?php the_content(); ?>
     </div>
    <!-- end of body -->

</div>