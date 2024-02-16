<div class="container">
    <div class="post mb-5">
		<div class="media">
            
            <a href="<?php the_permalink(); ?>">
                <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
            </a>
			
            <div class="media-body">
                <h3 class="title mb-1">
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a>
                </h3>
				
                <div class="meta mb-1">
                    <span>
                        <?php the_date(); ?>
                    </span>                           
                </div>
                
                <div>
                    <?php the_excerpt(); ?>
                </div>

                <div>
                    <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
                </div>
   
			 </div> 
		</div>
	</div>
</div>
