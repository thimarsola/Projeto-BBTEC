<?php get_header(); ?>

<!-- content -->
<?php
if(have_posts()){
    while (have_posts()){
        the_post();
        get_template_part('template-parts/single/single', 'content');
    }
}else{
    echo '<p>' . _e('Não existem artigos cadastrados para esta categoria no momento.') . '</p>';
}
?>
<!-- end of content -->

<?php get_footer(); ?>