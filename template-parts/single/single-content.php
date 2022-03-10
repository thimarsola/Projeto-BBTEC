<!-- single -->
<section class="single py-s">
    <div class="container">

        <!-- row -->
         <div class="single__row grid">

             <!-- content -->
              <div class="single__row__content">
                  <!-- published -->
                   <div class="single__row__content__published py-3">
                       <p>
                           <small class="d-flex ai-center l-small clr-gray-500">
                               <i class="icon-calendar mr-1"></i>
                               <?= get_the_date('j \d\e F \d\e Y'); ?>
                           </small>
                       </p>
                   </div>
                  <!-- end of published -->

                  <!-- header -->
                   <header class="single__row__content__header mb-3">
                       <h2 class="f-5"><?= get_the_title(); ?></h2>
                   </header>
                  <!-- end of header -->

                  <!-- body -->
                   <div class="single__row__content__body t-justify">
                       <?php the_content(); ?>
                   </div>
                  <!-- end of body -->

                  <!-- share -->
                  <div class="single__row__content__share p-4 bg-light-gray-500 mt-8 radius">
                      <!-- links -->
                      <div class="single__row__content__share__links d-flex ai-center">
                          <p>Compartilhe:</p>

                          <ul>
                              <li>
                                  <a rel="nofollow noreferrer noopener" href="https://www.facebook.com/sharer.php?u=<?= urlencode(get_the_permalink()); ?>&t=<?= urlencode(get_the_title()); ?>" target="_blank" title="Compartilhe esse artigo no Facebook"><i class="icon-facebook"></i></a>
                              </li>
                              <li>
                                  <a rel="nofollow noreferrer noopener" href="https://twitter.com/share?text=<?= urlencode(get_the_title()); ?>&url=<?= urlencode(get_the_permalink()); ?>" target="_blank" title="Compartilhe esse artigo no Twitter"><i class="icon-twitter"></i></a>
                              </li>
                              <li>
                                  <a rel="nofollow noreferrer noopener" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode(get_the_permalink()); ?>&title=<?= urlencode(get_the_title()); ?>" target="_blank" title="Compartilhe esse artigo no Linkedin"><i class="icon-linkedin"></i></a>
                              </li>
                              <li>
                                  <a rel="nofollow noreferrer noopener" href="whatsapp://send?text=<?= urlencode("Olá gostaria de compartilhar esse artigo escrito pela Clínica BF Endodontia com você! ") . urlencode(get_the_permalink()); ?>" target="_blank" title="Compartilhe esse artigo no WhatsApp"><i class="icon-whatsapp"></i></a>
                              </li>
                          </ul>
                      </div>
                      <!-- end of links -->
                  </div>
                  <!-- end of share -->

              </div>
             <!-- end of content -->

             <!-- sidebar -->
             <aside class="single__row__sidebar">
                 <?= get_sidebar('single'); ?>
             </aside>
             <!-- end of sidebar -->

         </div>
        <!-- end of row -->

    </div>
</section>
<!-- end of single -->
