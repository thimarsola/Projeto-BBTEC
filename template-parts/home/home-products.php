<section class="products py-s <?= (is_home() ? 'bg-light-gray-500' : ''); ?>">
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
                    <!-- image -->
                    <div class="products__row__card__image <?= ($product['release'] == true ? 'bg-release-500': ''); ?>">
                        <?php

                        if(!$product['image'] == false){
                            echo picture('imagem-' . $product['image'], 'Conheça essa nossa linha de produtos - ' . $product['title'], 'img-fluid');
                        }

                        if ($product['release'] == true):
                            ?>

                            <!-- release -->
                            <div class="products__row__card__image__release bg-primary-500 clr-white-500 p-1 t-small">
                                <p class="t-uppercase">
                                    <b>Breve lançamento</b>
                                </p>
                            </div>
                            <!-- end of release -->

                        <?php endif; ?>
                    </div>
                    <!-- end of image -->
                    
                    <!-- content -->
                     <div class="products__row__card__content">
                         <!-- header -->
                         <header class="products__row__card__content__header mt-3 mb-2 t-center">
                             <h3><?= $product['title']; ?></h3>
                             <h4>(<?= $product['subtitle']; ?>)</h4>
                         </header>
                         <!-- end of header -->

                         <?php if ($product['release'] == false): ?>
                             <!-- body -->
                             <div class="products__row__card__content__body t-center">
                                 <p class="t-small mb-4">Clique no botão abaixo para maiores informações sobre essa linha de produtos</p>

                                 <a class="btn btn-primary-500 radius" href="<?= get_the_permalink(get_page_by_title($product['link'])); ?>" title="Conheça essa nossa linha de produto" target="_blank">Saiba mais</a>
                             </div>
                             <!-- end of body -->
                         <?php endif; ?>
                     </div> 
                    <!-- end of content -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->

    </div>
</section>