<!-- advantages -->
<section class="advantages bg-light-gray-500 py-s">
    <div class="container">

        <!-- header -->
        <?= title('advantages__header', 'Conheça mais sobre as', 'Vantagens dos Barramentos'); ?>
        <!-- end of header -->

        <!-- row -->
        <div class="advantages__row grid">
            <?php
            $jsonAdvantages = file_get_contents(__DIR__ . '/../../includes/characteristics.json');
            $advantagesList = json_decode($jsonAdvantages, true);

            foreach ($advantagesList['advantages']  as $advantage):
                ?>

                <!-- card -->
                <article class="advantages__row__card bg-white-500 shadow">
                    <!-- icon -->
                    <div class="advantages__row__card__icon t-center">
                        <i class="icon-like clr-primary-500 f-5"></i>
                    </div>
                    <!-- end of icon -->

                    <!-- header -->
                    <header class="advantages__row__card__header mt-3 mb-2 t-center">
                        <h3><?= $advantage['title']; ?></h3>
                    </header>
                    <!-- end of header -->

                    <!-- body -->
                    <div class="advantages__row__card__body t-center">
                        <p class="t-small mb-4"><?= $advantage['description']; ?></p>
                    </div>
                    <!-- end of body -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>

        </div>
        <!-- end of row -->
    </div>
</section>
<!-- end of advantages -->