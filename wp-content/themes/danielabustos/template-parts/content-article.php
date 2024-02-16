<div class="container margenpag">
    <header class="content-header ">
        <div class="meta mb-3">
        <h3><?= get_the_title(); ?></h3>
            DATE:
            <?php echo get_the_date(); ?>
            - CATEGORY:
            <?php
            $categories = get_categories();
            foreach($categories as $category) {
            echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
            }
            ?>
        </div>
    </header>
    <?php
    the_content();
    ?>
</div>
