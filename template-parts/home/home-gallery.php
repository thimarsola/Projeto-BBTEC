<section class="gallery py-s">
    <div class="container">
        <!-- header -->
        <header class="gallery__header title">
            <h2 class="f-7 mb-3">Galeria de Fotos</h2>
            <div class="title__divider">
                <span></span>
                <span></span>
            </div>
        </header>
        <!-- end of header -->

        <!-- row -->
         <div class="gallery__row grid">
             <?php for ($i = 1; $i < 9; $i++): ?>
                 <a href="<?= image('galeria-' . str_pad($i,2, 0, STR_PAD_LEFT) . '.jpg'); ?>" class="gallery__row__card">
                     <?= picture('galeria-' . str_pad($i,2, 0, STR_PAD_LEFT), 'Conheça a nossa empresa', 'img-fluid'); ?>
                 </a>
             <?php endfor; ?>
         </div>
        <!-- end of row -->
    </div>
</section>