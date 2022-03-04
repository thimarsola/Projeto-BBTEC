<section id="sobre-nos" class="about py-s">
    <div class="container">
        <!-- row -->
         <div class="about__row grid">

             <!-- image -->
              <div class="about__row__image">

                  <!-- years -->
                   <div class="about__row__image__years bg-primary-500 clr-white-500">
                       <p class="mb-2">
                           <b><?= (date('Y') - 2001); ?></b>
                       </p>
                       <p>Anos de experiência de trabalho no segmento</p>
                   </div>
                  <!-- end of years -->

              </div>
             <!-- end of image -->

             <!-- content -->
             <div class="about__row__content py-4">
                 <!-- header -->
                 <header class="about__row__content__header mb-3">
                     <h2 class="f-7">Conheça mais sobre as <span class="clr-primary-500">Indústrias RC</span></h2>
                 </header>
                 <!-- end of header -->

                 <!-- body -->
                  <div class="about__row__content__body t-justify">
                      <p>As Indústrias RC fornecem usinagem para aplicação na indústria em geral, borracha e metal x borracha; barramentos blindados; estampados e soluções para elementos de fixação. Atendendo aos requisitos e às normas de qualidade dos clientes e que regem o mercado. Buscando o aumento da satisfação dos clientes através do aperfeiçoamento contínuo dos nossos produtos, processos e do sistema de gestão da qualidade.</p>

                      <!-- certification -->
                       <div class="about__row__content__body__certification mt-5 mb-8">
                           <p class="l-small"><strong class="d-flex ai-center"><i class="icon-check clr-primary-500 f-3 mr-1"></i>Empresas Certificadas ISO 9001</strong></p>
                       </div>
                      <!-- end of certification -->

                      <!-- cta -->
                       <div class="about__row__content__body__cta d-flex f-row gp-2">

                           <!-- phone -->
                            <div class="about__row__content__body__cta__phone">

                                <!-- icon -->
                                 <div class="about__row__content__body__cta__phone__icon bg-blue-500">
                                     <i class="icon-phone f-3 clr-white-500"></i>
                                 </div>
                                <!-- end of icon -->

                                <!-- link -->
                                 <div class="about__row__content__body__cta__phone__link">
                                     <a rel="nofollow noreferrer noopener" class="link-dark-blue-500 f-3 t-bold" href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>"><?= CONTACT['phone']['01']; ?></a>
                                     <p class="t-small">Ligue a qualquer momento</p>
                                 </div>
                                <!-- end of link -->

                            </div>
                           <!-- end of phone -->

                           <a href="<?= get_the_permalink(get_page_by_title('Sobre nós')) ?>" class="btn btn-primary-500 radius" target="_blank">Descubra mais</a>

                       </div>
                      <!-- end of cta -->
                  </div>
                 <!-- end of body -->
             </div>
             <!-- end of content -->

         </div>
        <!-- end of row -->
    </div>
</section>