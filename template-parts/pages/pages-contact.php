<!-- contact -->
<section class="contact py-10">
    <div class="container">

        <!-- container -->
        <div class="contact__container p-10 bg-white-500 shadow">
            <!-- row -->
            <div class="contact__container__row grid">

                <!-- form -->
                <div class="contact__container__row__form">
                    <!-- header -->
                    <header class="contact__container__row__form__header mb-5">
                        <h2 class="f-5">Envie uma mensagem</h2>
                    </header>
                    <!-- end of header -->

                    <!-- content -->
                     <div class="contact__container__row__form__content">
                         <form id="form" class="grid" method="POST" enctype="multipart/form-data" autocomplete="off">

                             <!-- group -->
                              <div class="contact__container__row__form__content__group">
                                  <label for="name" class="d-none">Nome</label>
                                  <input type="text" id="name" name="name" placeholder="Nome">
                              </div>
                             <!-- end of group -->

                             <!-- group -->
                              <div class="contact__container__row__form__content__group">
                                  <label for="email" class="d-none">E-mail</label>
                                  <input type="email" id="email" name="email" placeholder="E-mail">
                              </div>
                             <!-- end of group -->

                             <!-- group -->
                              <div class="contact__container__row__form__content__group">
                                  <label for="phone" class="d-none">Telefone</label>
                                  <input type="tel" id="phone" name="phone" placeholder="Telefone">
                              </div>
                             <!-- end of group -->

                             <!-- group -->
                              <div class="contact__container__row__form__content__group">
                                  <label for="message" class="d-none">Escreva sua mensagem</label>
                                  <textarea name="message" id="message" cols="30" rows="10" placeholder="Escreva a sua mensagem"></textarea>
                              </div>
                             <!-- end of group -->

                             <!-- status -->
                             <div class="contact__container__row__form__content__status mb-1 d-none">
                                 <div class="contact__container__row__form__content__status--loading t-center f-5 a-rotate">
                                     <i class="icon-spinner clr-primary-500"></i>
                                 </div>
                             </div>
                             <!-- end of status -->

                             <!-- button -->
                             <div class="contact__container__row__form__content__button">
                                 <button id="button-contact" class="btn btn-primary-500" type="submit" name="submit" value="submit">Enviar mensagem <i class="icon-send"></i></button>
                             </div>
                             <!-- end of button -->

                         </form>
                     </div>
                    <!-- end of content -->
                </div>
                <!-- end of form -->

                <!-- information -->
                 <div class="contact__container__row__information">
                     <!-- card -->
                      <article class="contact__container__row__information__card">

                          <!-- icon -->
                           <div class="contact__container__row__information__card__icon d-flex jc-center ai-center radius">
                               <i class="icon-map f-4 clr-primary-500"></i>
                           </div>
                          <!-- end of icon -->

                          <!-- content -->
                           <div class="contact__container__row__information__card__content">

                               <!-- header -->
                                <header class="contact__container__row__information__card__content__header mb-2">
                                    <h2 class="f-3">Localização</h2>
                                </header>
                               <!-- end of header -->

                               <!-- body -->
                                <div class="contact__container__row__information__card__content__body">
                                    <a rel="nofollow noopener noreferrer" class="link-neutral-500 l-small" href="<?= CONTACT['addressLink']; ?>" title="Venha conhecer as Indústrias RC" target="_blank">
                                        <address>
                                            <small><?= CONTACT['address']; ?></small>
                                        </address>
                                    </a>
                                </div>
                               <!-- end of body -->

                           </div>
                          <!-- end of content -->

                      </article>
                     <!-- end of card -->

                     <!-- card -->
                      <article class="contact__container__row__information__card">

                          <!-- icon -->
                           <div class="contact__container__row__information__card__icon d-flex jc-center ai-center radius">
                               <i class="icon-phone f-4 clr-primary-500"></i>
                           </div>
                          <!-- end of icon -->

                          <!-- content -->
                           <div class="contact__container__row__information__card__content">

                               <!-- header -->
                                <header class="contact__container__row__information__card__content__header mb-2">
                                    <h2 class="f-3">Faça uma ligação</h2>
                                </header>
                               <!-- end of header -->

                               <!-- body -->
                                <div class="contact__container__row__information__card__content__body">
                                    <a rel="nofollow noopener noreferrer" class="link-neutral-500" href="tel:<?= (formatPhone(CONTACT['phone']['01'])); ?>" title="Vamos conversar por telefone?">
                                        <small><?= CONTACT['phone']['01']; ?></small>
                                    </a>
                                </div>
                               <!-- end of body -->

                           </div>
                          <!-- end of content -->

                      </article>
                     <!-- end of card -->

                     <!-- card -->
                      <article class="contact__container__row__information__card">

                          <!-- icon -->
                           <div class="contact__container__row__information__card__icon d-flex jc-center ai-center radius">
                               <i class="icon-mail f-4 clr-primary-500"></i>
                           </div>
                          <!-- end of icon -->

                          <!-- content -->
                           <div class="contact__container__row__information__card__content">

                               <!-- header -->
                                <header class="contact__container__row__information__card__content__header mb-2">
                                    <h2 class="f-3">Envie um e-mail</h2>
                                </header>
                               <!-- end of header -->

                               <!-- body -->
                                <div class="contact__container__row__information__card__content__body">
                                    <a rel="nofollow noopener noreferrer" class="link-neutral-500 l-small" href="mailto:<?= CONTACT['mail']; ?>" title="Podemos conversar por e-mail?" target="_blank">
                                        <address> <small><?= CONTACT['mail']; ?></small></address>
                                    </a>
                                </div>
                               <!-- end of body -->

                           </div>
                          <!-- end of content -->

                      </article>
                     <!-- end of card -->
                 </div>
                <!-- end of information -->

            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->

    </div>
</section>
<!-- end of contact -->

<!-- map -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.2825466696295!2d-46.61817758501961!3d-23.701602084613448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4460d2577cb5%3A0x93b5848bb3a9dede!2sBBTEC%20-%20Barramentos%20Blindados%20%22BusWay%22!5e0!3m2!1spt-BR!2sbr!4v1646392913710!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
</div>
<!-- end of map -->