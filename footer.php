<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
            <p>© 2017 Solution Riposte Bretagne | <a href="https://solutionripostebretagne.bzh/wp-admin/">Connexion admin</a> | <a href="https://www.solutionripostebretagne.bzh/mentions-legales/ ">Mentions légales</a> | <a href="https://www.facebook.com/ripostebretagne/ " target="_blank">Facebook</a> | Création : B. GUIRIEC</p>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
