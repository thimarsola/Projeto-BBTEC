<!-- applications -->
<section class="applications py-s">
    <div class="container">

        <!-- header -->
        <?= title('applications__header', 'Confira as diversas aplicações do barramento blindado', 'Aplicações dos Barramentos'); ?>
        <!-- end of header -->

        <!-- row -->
        <div class="applications__row grid">
            <?php
            $jsonApplications = file_get_contents(__DIR__ . '/../../includes/characteristics.json');
            $applicationsList = json_decode($jsonApplications, true);

            foreach ($applicationsList['applications']  as $application):
                ?>

                <!-- card -->
                <article class="applications__row__card bg-white-500">
                    <!-- content -->
                    <div class="applications__row__card__content">
                        <!-- image -->
                        <div class="applications__row__card__content__image">
                            <?= picture($application['image'], 'Aplicação dos Barramentos em ' . $application['title'], 'img-fluid'); ?>
                        </div>
                        <!-- end of image -->
                        
                        <!-- header -->
                        <header class="applications__row__card__content__header bg-primary-500">
                            <h3 class="clr-white-500"><?= $application['title']; ?></h3>
                        </header>
                        <!-- end of header -->
                    </div>
                    <!-- end of content -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>

        </div>
        <!-- end of row -->
    </div>
</section>
<!-- end of applications -->