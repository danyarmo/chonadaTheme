<?php

get_header(); // header goes here
?>
<div class="container descriptionContainer">
    <div class="row justify-content-center">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();

        ?>
                <div class="col roboFont">
                    <span class="card-img-top descriptionImg"><?php the_post_thumbnail(); ?></span>
                </div>

                <div class="col-md-8 helText">
                    <div class="descriptionTextMargin">
                        <h2 class="descriptionCardTitle"><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <hr />
                        <a href="#" target="_blank" class="btn btn-primary descriptionButton"><?php echo get_post_meta($post->ID, 'name_of_site', true); ?></a>
                        <p class="descriptionPrice roboFont"><?php echo get_post_meta($post->ID, 'price', true); ?></p>
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