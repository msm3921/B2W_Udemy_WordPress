<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<?php wp_footer(); ?>

<!-- Took this portion from Brad's static site -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>
    
    <script src="<?php bloginfo('template_directory')?>/assets/js/main.js"></script>
    
    <script type="<?php bloginfo('template_directory')?>/text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
	<script type="<?php bloginfo('template_directory')?>/text/javascript">try{Typekit.load();}catch(e){}</script>

</body>
</html>
