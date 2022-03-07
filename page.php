<?php get_header(); ?>

    <!-- hero -->
<?php get_template_part('template-parts/pages/pages', 'hero'); ?>
    <!-- end of hero -->

<?php

if(is_page('Sobre nós')){
    get_template_part('template-parts/pages/pages', 'about');
    get_template_part('template-parts/pages/pages', 'pillars');
    get_template_part('template-parts/home/home', 'certification');
    get_template_part('template-parts/pages/pages', 'homologation');
}elseif(is_page('Características')){
    get_template_part('template-parts/pages/pages', 'characteristics');
    get_template_part('template-parts/pages/pages', 'advantages');
    get_template_part('template-parts/pages/pages', 'disadvantages');
    get_template_part('template-parts/pages/pages', 'applications');
}elseif(is_page('Nossos Produtos')){
    get_template_part('template-parts/home/home', 'products');
}elseif(is_page('Catálogos')){
    get_template_part('template-parts/pages/pages', 'catalogues');
}elseif(is_page('Obras')){
    get_template_part('template-parts/pages/pages', 'public');
    get_template_part('template-parts/pages/pages', 'private');
}elseif(is_page('Contato')){
    get_template_part('template-parts/pages/pages', 'contact');
}elseif(is_page('Blog')){
    get_template_part('template-parts/pages/pages', 'blog');
}elseif(is_page('Política de privacidade')){
    get_template_part('template-parts/pages/pages', 'politics');
}else{
    get_template_part('template-parts/pages/pages', 'content');
}

?>

<?php get_footer(); ?>