<section class="products py-s <?= (is_home() ? 'bg-light-blue-500' : ''); ?>">
    <div class="container">

        <!-- header -->
        <?= title('products__header', 'Conheça mais sobre os', 'Nossos Produtos') ?>
        <!-- end of header -->

        <!-- row -->
         <div class="products__row grid">
             <?php
             $jsonProducts = file_get_contents(__DIR__ . '/../../includes/products.json');
             $productsList = json_decode($jsonProducts, true);

             foreach ($productsList['products'] as $product):
             ?>

             <!-- card -->
              <article class="products__row__card bg-white-500 shadow">
                  <!-- icon -->
                   <div class="products__row__card__icon t-center">
                       <i class="icon-<?= $product['icon']; ?> clr-primary-500 f-8"></i>
                   </div>
                  <!-- end of icon -->

                  <!-- header -->
                   <header class="products__row__card__header mt-3 mb-2 t-center">
                       <h3><?= $product['title']; ?></h3>
                   </header>
                  <!-- end of header -->

                  <!-- body -->
                   <div class="products__row__card__body t-center">
                       <p class="t-small mb-4">Clique no botão abaixo para maiores informações sobre essa linha de produtos</p>

                       <a class="btn btn-primary-500 radius" href="<?= get_the_permalink(get_page_by_title($product['title'])); ?>" title="Conheça essa nossa linha de produto" target="_blank">Saiba mais</a>
                   </div>
                  <!-- end of body -->
              </article>
             <!-- end of card -->

             <?php endforeach; ?>
         </div>
        <!-- end of row -->

    </div>
</section>