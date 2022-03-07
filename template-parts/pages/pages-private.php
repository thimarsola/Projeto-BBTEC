<!-- private -->
<section class="private py-s">
    <div class="container">

        <!-- header -->
        <?= title('private__header', 'Conheça mais sobre as nossas', 'Principais obras privadas'); ?>
        <!-- end of header -->

        <!-- row -->
        <div class="private__row grid">
            <?php

            $jsonConstruction = file_get_contents(__DIR__ . '/../../includes/constructions.json');
            $constructionsList = json_decode($jsonConstruction, true);

            foreach ($constructionsList['private'] as $item):
                ?>

                <!-- card -->
                <article class="private__row__card bg-white-500 shadow">
                    <!-- icon -->
                    <div class="private__row__card__icon t-center">
                        <i class="icon-constructions clr-primary-500 f-5"></i>
                    </div>
                    <!-- end of icon -->
                    
                    <!-- content -->
                     <div class="private__row__card__content">
                         <!-- header -->
                         <header class="private__row__card__content__header mt-3 t-center">
                             <h3><?= $item['company']; ?></h3>
                         </header>
                         <!-- end of header -->

                         <!-- body -->
                         <div class="private__row__card__content__body t-center">
                             <p class="t-small"><?= $item['place']; ?></p>
                         </div>
                         <!-- end of body -->
                     </div> 
                    <!-- end of content -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->

    </div>
</section>
<!-- end of private -->