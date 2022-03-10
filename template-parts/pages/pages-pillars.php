<!-- pillars -->
 <section class="pillars bg-light-blue-500 py-10">
     <div class="container">

         <!-- header -->
          <?= title('pillars__header', 'Conheça mais sobre os', 'Pilares do Grupo Indústrias RC'); ?>
         <!-- end of header -->

         <!-- row -->
          <div class="pillars__row grid">
              <?php
              $jsonPillars = file_get_contents(__DIR__ . '/../../includes/pillars.json');
              $pillarsList = json_decode($jsonPillars, true);

              foreach ($pillarsList['pillars'] as $pillar):
                  ?>

                  <!-- card -->
                  <article class="pillars__row__card bg-white-500 shadow">
                      <!-- icon -->
                      <div class="pillars__row__card__icon t-center">
                          <i class="icon-<?= $pillar['icon']; ?> clr-primary-500 f-8"></i>
                      </div>
                      <!-- end of icon -->

                      <!-- header -->
                      <header class="pillars__row__card__header mt-3 mb-2 t-center">
                          <h3><?= $pillar['title']; ?></h3>
                      </header>
                      <!-- end of header -->

                      <!-- body -->
                      <div class="pillars__row__card__body t-center">
                          <p class="t-small mb-4"><?= $pillar['description']; ?></p>
                      </div>
                      <!-- end of body -->
                  </article>
                  <!-- end of card -->

              <?php endforeach; ?>
          </div>
         <!-- end of row -->

     </div>
 </section>
<!-- end of pillars -->