<footer class="footer">

    <?php if(!is_page(['Contato', 'Blog']) && !is_single() && !is_archive()): ?>
        <!-- cta -->
         <div class="footer__cta">
             <div class="container">

                 <!-- row -->
                  <div class="footer__cta__row grid">

                      <!-- card -->
                       <div class="footer__cta__row__card bg-primary-500 radius shadow p-3">
                           <i class="icon-mail f-6 clr-white-500"></i>

                           <!-- header -->
                            <div class="footer__cta__row__card__header mt-2 mb-1">
                                <h2 class="f-3 clr-white-500">Contato</h2>
                            </div>
                           <!-- end of header -->

                           <!-- body -->
                            <div class="footer__cta__row__card__body">
                                <a rel="nofollow noopener noreferrer" class="link-white-500" href="mailto:<?= CONTACT['mail']; ?>" title="Vamos conversar por e-mail?" target="_blank"><?= CONTACT['mail']; ?></a>
                            </div>
                           <!-- end of body -->

                       </div>
                      <!-- end of card -->

                      <!-- card -->
                       <div class="footer__cta__row__card bg-primary-500 radius shadow p-3">
                           <i class="icon-mail f-6 clr-white-500"></i>

                           <!-- header -->
                            <div class="footer__cta__row__card__header mt-2 mb-1">
                                <h2 class="f-3 clr-white-500">Trabalhe conosco</h2>
                            </div>
                           <!-- end of header -->

                           <!-- body -->
                            <div class="footer__cta__row__card__body">
                                <a rel="nofollow noopener noreferrer" class="link-white-500" href="mailto:curriculo@industriasrc.com.br" title="Vamos conversar por e-mail?" target="_blank">curriculo@industriasrc.com.br</a>
                            </div>
                           <!-- end of body -->

                       </div>
                      <!-- end of card -->

                  </div>
                 <!-- end of row -->

             </div>
         </div>
        <!-- end of cta -->
    <?php endif; ?>

    <!-- content -->
    <div class="footer__content bg-dark-blue-500">
        <div class="container">

            <!-- row -->
             <div class="footer__content__row grid">

                 <!-- card -->
                  <div class="footer__content__row__card clr-white-500">
                      <img class="mb-4" src="<?= image('logo-rodape.svg', 'svg'); ?>" alt="Logo Indústrias RC">

                      <!-- social -->
                      <div class="footer__content__row__card__social">
                          <ul class="d-flex ai-center f-row gp-2">
                              <li>
                                  <a rel="nofollow noopener noreferrer" class="l-small link-white-500" href="<?= CONTACT['facebook']; ?>" title="Siga as Indústrias RC no Facebook" target="_blank">
                                      <i class="icon-facebook"></i>
                                      <span class="d-none">facebook</span>
                                  </a>
                              </li>
                              <li>
                                  <a rel="nofollow noopener noreferrer" class="l-small link-white-500" href="<?= CONTACT['instagram']; ?>" title="Siga as Indústrias RC no Instagram" target="_blank">
                                      <i class="icon-instagram"></i>
                                      <span class="d-none">instagram</span>
                                  </a>
                              </li>
                              <li>
                                  <a rel="nofollow noopener noreferrer" class="l-small link-white-500" href="<?= CONTACT['linkedin']; ?>" title="Siga as Indústrias RC no Linkedin" target="_blank">
                                      <i class="icon-linkedin"></i>
                                      <span class="d-none">linkedin</span>
                                  </a>
                              </li>
                              <li>
                                  <a rel="nofollow noopener noreferrer" class="l-small link-white-500" href="<?= CONTACT['youtube']; ?>" title="Siga as Indústrias RC no Youtube" target="_blank">
                                      <i class="icon-youtube"></i>
                                      <span class="d-none">youtube</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <!-- end of social -->
                  </div>
                 <!-- end of card -->

                 <!-- card -->
                  <div class="footer__content__row__card clr-white-500">

                      <!-- header -->
                       <div class="footer__content__row__card__header mb-3">
                           <h2 class="f-3 clr-white-500">Mapa do site</h2>
                       </div>
                      <!-- end of header -->

                      <!-- body -->
                       <div class="footer__content__row__card__body t-justify mb-3">
                           <?php wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => '')); ?>
                       </div>
                      <!-- end of body -->
                  </div>
                 <!-- end of card -->

                 <!-- card -->
                  <div class="footer__content__row__card clr-white-500">

                      <!-- header -->
                       <div class="footer__content__row__card__header mb-3">
                           <h2 class="f-3 clr-white-500">Informações</h2>
                       </div>
                      <!-- end of header -->

                      <!-- body -->
                       <div class="footer__content__row__card__body t-justify mb-3">
                           <ul class="d-flex f-column gp-1">
                               <li>
                                   <p class="d-flex ai-center l-small">
                                       <i class="icon-clock mr-1"></i>
                                       Seg-Sex: 7:00 às 17:00
                                   </p>
                               </li>

                               <li>
                                   <address class="d-flex ai-center l-small">
                                       <i class="icon-marker mr-1"></i>
                                       <a rel="nofollow noopener noreferrer" class="link-white-500" href="<?= CONTACT['addressLink']; ?>" title="Venha conhecer as Indústrias RC" target="_blank"><?= CONTACT['address']; ?></a>
                                   </address>
                               </li>

                               <li>
                                   <p class="d-flex ai-center l-small">
                                       <i class="icon-phone mr-1"></i>
                                       <a rel="nofollow noopener noreferrer" class="link-white-500" href="tel:<?= (formatPhone(CONTACT['phone']['01'])); ?>" title="Vamos conversar por telefone?" target="_blank"><?= CONTACT['phone']['01']; ?></a>
                                   </p>
                               </li>
                           </ul>
                       </div>
                      <!-- end of body -->
                  </div>
                 <!-- end of card -->


                 <!-- card -->
                  <div class="footer__content__row__card clr-white-500">

                      <!-- header -->
                       <div class="footer__content__row__card__header mb-3">
                           <h2 class="f-3 clr-white-500 d-none"><?= SITE['name']; ?></h2>
<!--                           <i class="icon-logo-irc clr-white-500"></i>-->
                           <a rel="nofollow noopener noreferrer" href="<?= CONTACT['irc']; ?>" title="Indústrias RC">
                               <img  src="<?= image('logo-irc.svg', 'svg'); ?>" alt="Indústrias RC" title="Indústrias RC" loading="lazy">
                           </a>
                       </div>
                      <!-- end of header -->

                      <!-- body -->
                       <div class="footer__content__row__card__body t-justify mb-3">
                           <p>A BBTEC faz parte do grupo Indústrias RC</p>
                       </div>
                      <!-- end of body -->
                  </div>
                 <!-- end of card -->

             </div>
            <!-- end of row -->

        </div>
    </div>
    <!-- end of content -->

    <!-- copyright -->
    <div class="footer__copyright py-1 t-center">
        <div class="container">
            <p><small>&COPY; <?= date('Y'); ?> - <?= SITE['name']; ?> - <?= (is_page('Política de privacidade') ? 'Todos os direitos reservados' : '<a class="link-neutral-500" href="' .  get_the_permalink(get_page_by_title('Política de privacidade')) . '" target="_blank" title="Conheça a nossa Política de Privacidade">Todos os direitos reservados</a>') ?></small></p>
        </div>
    </div>
    <!-- end of copyright -->

    <!-- developer -->
    <div class="footer__developer bg-primary-500 py-1">
        <div class="container">

            <!-- row -->
            <div class="footer__developer__row d-flex jc-between ai-center clr-white-500">

                <!-- agency -->
                <div class="footer__developer__row__agency">
                    <p><small>Desenvolvido por <b><a rel="nofollow noreferrer noopener" href="<?= DEV['url']; ?>" target="_blank" class="link-white-500" title="Agência Especializada em Marketing Digital"><?= DEV['name']; ?></a></b></small>
                    </p>
                </div>
                <!-- end of agency -->

                <!-- validator -->
                <?php if (!is_404()): ?>
                    <div class="footer__developer__row__validator">
                        <?php
                        $protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

                        if (is_home()) {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
                        } elseif (is_single()) {
                            $urlBase = str_replace($protocols, "", get_the_permalink());
                        } else {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
                        }
                        ?>

                        <p><small><a rel="nofollow noreferrer noopener" class="d-flex jc-center ai-center link-white-500"  href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase; ?>%2F" target="_blank" title="Tecnologia W3C"><i class="icon-html"></i>W3C Validator </a></small></p>
                    </div>
                <?php endif; ?>
                <!-- end of validator -->
            </div>
            <!-- end of row -->

        </div>
    </div>
    <!-- end of developer -->
</footer>