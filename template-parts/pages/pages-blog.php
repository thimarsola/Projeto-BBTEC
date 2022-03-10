<!-- blog -->
<section class="blog py-s">
    <div class="container">

        <!-- header -->
        <header class="blog__header d-none">
            <h2>Conheça os artigos no nosso blog</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
         <div class="blog__row grid">

             <!-- container -->
              <div class="blog__row__container">
                  <!-- content -->
                  <div class="blog__row__container__content grid">
                      <?php
                      $pagedLast = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                      $categoryName = single_cat_title('', false);

                      $argBlog = [
                          'post_type' => 'post',
                          'post__not_in' => get_option('sticky_posts'),
                          'posts_per_page' => 3,
                          'order' => 'DESC',
                          'paged' => $pagedLast
                      ];

                      if(is_archive()){
                          $argBlog = [
                              'category_name' => $categoryName
                          ];
                      }

                      $theQueryBlog = new WP_Query($argBlog);

                      if ($theQueryBlog->have_posts()) {
                          while ($theQueryBlog->have_posts()) {
                              $theQueryBlog->the_post();
                              get_template_part('template-parts/pages/content', 'blog');
                          }
                      } else {
                          echo '<p>' . _e('Não existem artigos publicados no momento') . '</p>';
                      }

                      wp_reset_postdata();

                      ?>
                  </div>
                  <!-- end of content -->

                  <!-- pagination -->
                  <div class="blog__row__container__pagination mt-5">
                      <nav class="pagination__nav">
                          <h2 class="d-none">Menu de Paginação</h2>

                          <?php
                          $big = 999999999; // need an unlikely integer

                          $pages = pagination(
                              [
                                  'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                  'format' => '?paged=%#%',
                                  'current' => max(1, get_query_var('paged')),
                                  'total' => $theQueryBlog->max_num_pages,
                                  'mid_size' => 3,
                                  'end_size' => 1,
                                  'prev_text' => '<i class="icon-arrow-downward"></i>',
                                  'next_text' => '<i class="icon-arrow-forward"></i>',
                                  'type' => 'array',
                              ]
                          );

                          if (is_array($pages)) {
                              echo '<ul class="pagination__nav__list">';
                              foreach ($pages as $page) {
                                  echo "<li class='pagination__nav__list__item'>$page</li>";
                              }
                              echo '</ul>';
                          }
                          ?>
                      </nav>
                  </div>
                  <!-- end of pagination -->
              </div>
             <!-- end of container -->

             <!-- sidebar -->
              <aside class="blog__row__sidebar">
                  <?= get_sidebar(); ?>
              </aside>
             <!-- end of sidebar -->

         </div>
        <!-- end of row -->

    </div>
</section>
<!-- end of blog -->