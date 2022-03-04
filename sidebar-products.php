<aside class="content__row__aside__sidebar">
    <!-- container -->
     <div class="content__row__aside__sidebar__container">
         <!-- header -->
         <header class="content__row__aside__sidebar__container__header d-none">
             <h3>Conheça também:</h3>
         </header>
         <!-- end of header -->

         <ul>
             <li class="<?= 'Usinagem'  == get_the_title() ? "active" : ''?>">
                 <?php if('Usinagem'  == get_the_title()): ?>
                     <p class="t-bold clr-neutral-500">Usinagem</p>
                 <?php else: ?>
                     <a class="t-bold link-neutral-500" href="<?= get_the_permalink(get_page_by_title('Usinagem')); ?>" title="Indústrias RC | Usinagem">Usinagem</a>
                 <?php endif; ?>
                 <i class="icon-arrow-forward"></i>
             </li>

             <?php
             $pages = get_pages(['sort_order' => 'ASC', 'exclude' => [9,35,33,31,5,94]]);
             foreach ($pages as $page):
                 ?>
                 <li class="<?= $page->post_title  == get_the_title() ? "active" : ''?>">
                     <?php if($page->post_title  == get_the_title()): ?>
                         <p class="t-bold clr-neutral-500"><?= $page->post_title; ?></p>
                     <?php else: ?>
                         <a class="t-bold link-neutral-500" href="<?= $page->guid; ?>" title="Indústrias RC | <?= $page->post_title; ?>"><?= $page->post_title; ?></a>
                     <?php endif; ?>
                     <i class="icon-arrow-forward"></i>
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
              <i class="icon-phone clr-blue-500 f-6"></i>
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

         <?php $baseurl = wp_get_upload_dir(); ?>

         <a href="<?= $baseurl['baseurl']  . '/2021/catalogo-digital-industrias-rc.pdf'?>" class="btn btn-block btn-primary-500 t-center d-flex ai-center jc-center l-small" title="Baixe o nosso catálogo" target="_blank">
             <i class="icon-file mr-1"></i>
             Download Catálogo
         </a>
     </div>
    <!-- end of catalogue -->
</aside>