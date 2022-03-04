<!-- companies -->
<section class="companies py-s <?= (is_page('Sobre nós') ? 'bg-gradient' : null); ?>">
    <div class="container">

        <!-- header -->
        <?= title('companies__header', 'Conheça as empresas que fazem parte do', 'Grupo Indústrias RC'); ?>
        <!-- end of header -->

        <!-- row -->
         <div class="companies__row grid">
             <?php
             $companiesList = file_get_contents(__DIR__ . '/../../includes/companies.json');
             $jsonCompanies = json_decode($companiesList, true);

             foreach ($jsonCompanies['companies'] as $company => $key):
             ?>

             <!-- card -->
              <article class="companies__row__card bg-white-500 shadow">
                  <!-- brand -->
                   <div class="companies__row__card__brand d-flex jc-center ai-center">
                       <?= picture($key['logo'], 'Conheça mais sobre a empresa ' . $key['title']); ?>
                   </div>
                  <!-- end of brand -->

                  <!-- content -->
                  <div class="companies__row__card__content">
                      <!-- header -->
                      <header class="companies__row__card__content__header mb-1">
                          <h3 class="f-3"><?= $key['title']; ?></h3>
                      </header>
                      <!-- end of header -->

                      <!-- body -->
                       <div class="companies__row__card__content__body">
                           <ul>
                               <li>
                                   <address>
                                       <a rel="nofollow noreferrer noopener" class="link-neutral-500" href="<?= $key['description']['addressLink']; ?>" title="Venha conhecer a empresa <?= $key['title']; ?>" target="_blank"><?= $key['description']['address']; ?></a>
                                   </address>
                               </li>

                               <li>
                                   <p>
                                       Tel:
                                       <a rel="nofollow noreferrer noopener" class="link-neutral-500" href="tel:<?= formatPhone($key['description']['phone']); ?>" title="Ligue para a empresa <?= $key['title']; ?> a qualquer momento" target="_blank"><?= $key['description']['phone']; ?></a>
                                   </p>
                               </li>

                               <li>
                                   <p>
                                       E-mail: <br>
                                       <a rel="nofollow noreferrer noopener" class="link-neutral-500" href="mailto:<?= formatPhone($key['description']['mail']); ?>" title="Envie um e-mail para a empresa <?= $key['title']; ?>" target="_blank"><?= $key['description']['mail']; ?></a>
                                   </p>
                               </li>
                           </ul>
                       </div>
                      <!-- end of body -->
                  </div>
                  <!-- content -->
              </article>
             <!-- end of card -->

             <?php endforeach; ?>
         </div>
        <!-- end of row -->

    </div>
</section>
<!-- end of companies -->