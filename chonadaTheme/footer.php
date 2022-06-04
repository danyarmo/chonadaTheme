<footer>
    <div id="disclaimerBackground">
        <div class="container-fluid" style="width:95.5%">
            <nav id="disclaimer">
                <?php 
                
                $args = array(
                    'theme_location' => 'footer'
                );

                ?>
                <?php wp_nav_menu( $args); ?>
            </nav>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>