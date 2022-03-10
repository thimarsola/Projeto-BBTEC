<!-- header -->
<header class="single__row__sidebar__header d-none">
    <h2>Menu Lateral</h2>
</header>
<!-- end of header -->

<!-- highlight -->
<div class="single__row__sidebar__highlight p-4 bg-light-gray-500 radius mb-7">

    <!-- header -->
    <header class="single__row__sidebar__highlight__header title">
        <h3 class="f-3 t-left">Publicações Recentes</h3>
        <div class="title__divider jc-start">
            <span></span>
            <span></span>
        </div>
    </header>
    <!-- end of header -->

    <!-- content -->
    <div class="single__row__sidebar__highlight__content">
        <?php
        $argHighlights = [
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post__in' => get_option('sticky_posts'),
            'ignore_sticky_posts' => 1,
            'order' => 'DESC'
        ];

        $theQueryHighlights = new WP_Query($argHighlights);

        if($theQueryHighlights->have_posts()){
            while ($theQueryHighlights->have_posts()){
                $theQueryHighlights->the_post();
                get_template_part('template-parts/single/content', 'highlight');
            }

        }else{
            echo '<p>' . _e('Não existem artigos cadastrados para esta categoria no momento.') . '</p>';
        }
        wp_reset_postdata();
        ?>
    </div>
    <!-- end of content -->

</div>
<!-- end of highlight -->

<!-- categories -->
<div class="single__row__sidebar__categories p-4 bg-light-gray-500 radius mb-7">
    <!-- header -->
    <header class="single__row__sidebar__categories__header title">
        <h3 class="f-3 mb-1 t-left">Lista de Categorias</h3>
        <div class="title__divider jc-start">
            <span></span>
            <span></span>
        </div>
    </header>
    <!-- end of header -->

    <!-- content -->
    <div class="single__row__sidebar__categories__content">
        <ul>
            <?php

            wp_list_categories([
                'title_li' => '',
                'orderby' => 'name',
            ]);
            ?>
        </ul>
    </div>
    <!-- end of content -->
</div>
<!-- end of categories -->

<!-- social -->
<div class="single__row__sidebar__social p-4 bg-light-gray-500 radius">
    <!-- header -->
    <header class="single__row__sidebar__social__header title">
        <h3 class="f-3 mb-1 t-left">Mídias Sociais</h3>
        <div class="title__divider jc-start">
            <span></span>
            <span></span>
        </div>
    </header>
    <!-- end of header -->

    <!-- content -->
    <div class="single__row__sidebar__social__content">
        <ul class="d-flex ai-center f-row gp-1">
            <li>
                <a rel="nofollow noopener noreferrer" class="l-small" href="<?= CONTACT['facebook']; ?>" title="Siga as Indústrias RC no Facebook" target="_blank">
                    <i class="icon-facebook"></i>
                    <span class="d-none">facebook</span>
                </a>
            </li>
            <li>
                <a rel="nofollow noopener noreferrer" class="l-small" href="<?= CONTACT['instagram']; ?>" title="Siga as Indústrias RC no Instagram" target="_blank">
                    <i class="icon-instagram"></i>
                    <span class="d-none">instagram</span>
                </a>
            </li>
            <li>
                <a rel="nofollow noopener noreferrer" class="l-small" href="<?= CONTACT['linkedin']; ?>" title="Siga as Indústrias RC no Linkedin" target="_blank">
                    <i class="icon-linkedin"></i>
                    <span class="d-none">linkedin</span>
                </a>
            </li>
            <li>
                <a rel="nofollow noopener noreferrer" class="l-small" href="<?= CONTACT['youtube']; ?>" title="Siga as Indústrias RC no Youtube" target="_blank">
                    <i class="icon-youtube"></i>
                    <span class="d-none">youtube</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end of content -->
</div>
<!-- end of categories -->