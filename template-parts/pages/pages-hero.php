<?php

$image = null;

if(is_page('Sobre nós')){
    $image = 'hero__about';
}elseif(is_page('Empresas')){
    $image = 'hero__companies';
}elseif(is_page('Contato')){
    $image = 'hero__contact';
}elseif(is_page('Blog') || is_single() || is_archive()){
    $image = 'hero__blog';
}else{
    $image = 'hero__page';
}

?>

<div class="hero <?= $image; ?>">
    <div class="container">

        <!-- content -->
        <div class="hero__content clr-white-500 t-center">
            <!-- header -->
            <div class="hero__header mb-2">
                <p class="t-bold f-7 l-small"><?= (is_archive() ? single_cat_title() : get_the_title()); ?></p>
            </div>
            <!-- end of header -->

            <!-- body -->
            <div class="hero__body">
                <ul class="hero__body__breadcrumb d-flex jc-center ai-center gp-1 t-uppercase">
                    <li>
                        <a class="link-white-500 t-bold l-small" href="<?= get_home_url(); ?>">
                            <i class="icon-home mr-1"></i>
                            Home
                        </a>
                    </li>

                    <?php

                    $page = get_queried_object();
                    $parent = get_post($page->post_parent);

                    if($page->post_parent != 0):
                        if($parent->post_parent != 0):
                            ?>
                            <li>
                                <i class="icon-arrow-forward l-small"></i>
                            </li>

                            <li>
                                <a class="link-white-500 t-bold l-small" href="<?= get_the_permalink($parent->post_parent); ?>"><?= get_the_title($parent->post_parent) ?></a>
                            </li>

                        <?php endif; ?>

                        <li>
                            <i class="icon-arrow-forward l-small"></i>
                        </li>

                        <li>
                            <a class="link-white-500 t-bold l-small" href="<?= get_the_permalink($page->post_parent); ?>"><?= get_the_title($page->post_parent) ?></a>
                        </li>

                    <?php endif; ?>

                    <li>
                        <i class="icon-arrow-forward l-small"></i>
                    </li>

                    <li>
                        <p class="t-bold l-small"><?= (is_archive() ? single_cat_title() : get_the_title()); ?></p>
                    </li>
                </ul>

            </div>
            <!-- end of body -->
        </div>
        <!-- end of content -->

    </div>
</div>