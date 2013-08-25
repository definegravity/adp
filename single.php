<?php
/**
 * The template for displaying a single post and its related content as well as author boxes. Uses
 * get_post_format to render the appropriate template based on the post's format.
 *
 * @package Standard
 * @since 	3.0
 * @version	3.1
 */
?>
<?php get_header(); ?>

  <body <?php body_class(); ?>>

  	  <div class="container">

  	  	<?php adp_header(); ?>

        <?php adp_navigation(); ?>

        <?php get_template_part( 'loop', get_post_format() ); ?>


      </div>


	<?php get_footer(); ?>


  </body>
</html>