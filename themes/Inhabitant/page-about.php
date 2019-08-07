<?php get_header(); ?>

<?php if( have_posts() ) :
//The Wordpress Loop: Loads poat content
    while( have_posts() ) :
        echo 'About page';
        the_post(); ?>
        

     <h2><?Php the_title(); ?></h2>
     <!-- //adds the author -->
     <h3><?php the_author(); ?> </h3>

     <?php the_content(); ?>

     <!-- loop Ends    -->
    <?php endwhile;?>   

     <?php the_posts_navigation(); ?>

     <?php else : ?>
        <p>No Posts found</p>
    <?php endif;?>


<?php get_footer(); ?>