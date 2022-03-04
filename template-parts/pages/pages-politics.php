<!-- politics -->
<section class="politics py-s">
    <div class="container">

        <!-- container -->
         <div class="politics__container bg-white-500 shadow radius">

             <!-- header -->
             <?= title('politics__container__header', 'Conheça mais sobre a nossa', get_the_title()); ?>
             <!-- end of header -->

             <!-- content -->
              <div class="politics__container__content t-justify">
                  <?php the_content(); ?>
              </div>
             <!-- end of content -->
         </div>
        <!-- end of container -->

    </div>
</section>
<!-- end of politics -->
