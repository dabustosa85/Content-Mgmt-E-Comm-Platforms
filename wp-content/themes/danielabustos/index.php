<?php
get_header();
?>
	<article class="content px-3 py-5 margenpag">
        <div class="centrado meta mb-3">
            <h3>Categories</h3>
            <?php
                $categories = get_categories();
                foreach($categories as $category) {
                echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
                }
            ?>
        </div>
    
        <?php
            //si hay posts muestralos
            if( have_posts() ) {
                while( have_posts ()) {
                    the_post();
                    get_template_part('template-parts/content', 'archive');
                }
            }
        ?>
	</article>    
<?php
    get_footer();
?>
