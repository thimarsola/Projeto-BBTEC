<!-- row -->
<div class="content__row__container__row grid mt-6">

    <!-- cta -->
     <div class="content__row__container__row__cta bg-light-blue-500 p-3 t-center">
         <p class="mb-3">Clique no botão abaixo para conhecer toda a nossa linha de <?= get_the_title(); ?></p>

         <?php
         if(is_page('Molas Prato')){
             $link = 'http://www.molasprato.com/';
         }elseif (is_page('Barramento Blindado')){
             $link = 'http://www.barramentosblindados.com.br/';
         }else{
             $link = 'https://www.ksbborrachas.com.br/';
         }
         ?>

        <a rel="nofollow noreferrer noopener" href="<?= $link; ?>" class="btn btn-primary-500" title="Conheça a nossa linha de <?= get_the_title(); ?>" target="_blank">Saiba mais</a>
     </div>
    <!-- end of cta -->

</div>
<!-- end of row -->