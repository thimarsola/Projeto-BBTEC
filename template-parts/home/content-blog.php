<!-- card -->
 <article class="blog__row__card">
     <!-- thumb -->
      <div class="blog__row__card__thumb">
          <a href="<?= get_the_permalink() ?>" title="Veja mais sobre esse artigo" target="_blank">
              <?= get_the_post_thumbnail(get_the_ID(), 'large'); ?>
          </a>

          <!-- published -->
           <div class="blog__row__card__thumb__published t-uppercase t-center">
               <!-- body -->
                <div class="blog__row__card__thumb__published__body bg-white-500 clr-dark-blue-500">
                   <p class="t-bold"> <?= get_the_date('d'); ?></p>
                </div>
               <!-- end of body -->

               <!-- body -->
                <div class="blog__row__card__thumb__published__body bg-primary-500 clr-dark-blue-500">
                   <p class="t-bold"> <?= get_the_date('M'); ?></p>
                </div>
               <!-- end of body -->
           </div>
          <!-- end of published -->
      </div>
     <!-- end of thumb -->

      <!-- header -->
     <header class="blog__row__card__header mt-7">
         <h3 class="f-3">
             <a class="link-dark-blue-500" href="<?= get_the_permalink() ?>" title="Veja mais sobre esse artigo" target="_blank"><?= get_the_title(); ?></a>
         </h3>
     </header>
      <!-- end of header -->

     <!-- body -->
      <div class="blog__row__card__body mt-3 t-justify">
          <p class="mb-3"><?= get_the_excerpt(); ?></p>

          <a class="link-neutral-500 t-uppercase t-bold" href="<?= get_the_permalink() ?>" title="Veja mais sobre esse artigo" target="_blank">Ver artigo <i class="icon-plus"></i></a>
      </div>
     <!-- end of body -->
 </article>
<!-- end of card -->