<?php

get_header(); // header goes here
?>
<div class="container mainContainer">
    <div class="card-columns">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();

        ?>
                <div class="card h-100">
                    <a class="card-img-top" href="#"><?php the_post_thumbnail(); ?> </a>
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-light" href="<?php the_permalink(); ?> "> <?php the_title(); ?></a></h5>
                        <span class="card-text"> <?php the_excerpt(); ?> </span> <!-- have to use span here because <p></p> doesn't load card-text font -->
                        <hr />
                        <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" target="_blank" class="btn btn-primary"><?php echo get_post_meta($post->ID, 'name_of_site', true); ?></a>
                        <p class="price"><?php echo get_post_meta($post->ID, 'price', true); ?></p>
                    </div>
                </div>

        <?php endwhile;

        else :
            echo '<p>No content found</p>';

        endif;
        ?>
    </div>
</div>
<?php
get_footer();

?>