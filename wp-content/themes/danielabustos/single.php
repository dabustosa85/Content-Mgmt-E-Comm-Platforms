<?php
get_header();
?>
	<article class="content px-3 py-5 p-md-5">
    
        <?php
            //si hay posts muestralos
            if( have_posts() ) {
                while( have_posts ()) {
                    the_post();
                    get_template_part('template-parts/content', 'article');
                }
            }
        ?>
	</article>    
<?php
    get_footer();
?>
