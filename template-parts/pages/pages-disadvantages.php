<!-- disadvantages -->
<section class="disadvantages py-s">
    <div class="container">

        <!-- header -->
        <?= title('disadvantages__header', 'Conheça mais sobre as', 'Desvantagens do uso do cabeamento'); ?>
        <!-- end of header -->

        <!-- row -->
        <div class="disadvantages__row grid">
            <?php
            $jsonDisadvantages = file_get_contents(__DIR__ . '/../../includes/characteristics.json');
            $disadvantagesList = json_decode($jsonDisadvantages, true);

            foreach ($disadvantagesList['disadvantages']  as $disadvantage):
                ?>

                <!-- card -->
                <article class="disadvantages__row__card bg-white-500 shadow">
                    <!-- icon -->
                    <div class="disadvantages__row__card__icon t-center">
                        <i class="icon-dislike clr-primary-500 f-5"></i>
                    </div>
                    <!-- end of icon -->

                    <!-- header -->
                    <header class="disadvantages__row__card__header mt-3 mb-2 t-center">
                        <h3><?= $disadvantage['title']; ?></h3>
                    </header>
                    <!-- end of header -->

                    <!-- body -->
                    <div class="disadvantages__row__card__body t-center">
                        <p class="t-small mb-4"><?= $disadvantage['description']; ?></p>
                    </div>
                    <!-- end of body -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>

        </div>
        <!-- end of row -->
    </div>
</section>
<!-- end of disadvantages -->