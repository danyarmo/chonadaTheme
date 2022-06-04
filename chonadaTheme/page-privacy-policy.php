<?php

get_header(); // header goes here
?>
<div class="container descriptionContainer">
    <div class="row justify-content-center">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();

        ?>

                <div class="col-md-8 helText">
                <h2 class="descriptionCardTitle"><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
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