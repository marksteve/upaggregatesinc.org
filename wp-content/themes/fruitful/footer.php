<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Fruitful theme
 * @since Fruitful theme 1.0
 */
?>
		</div>
			<div class="sixteen columns">
				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="site-info">
						<?php fruitful_get_footer_text(); ?>
					</div>
				</footer><!-- #colophon .site-footer -->
			</div>
			</div><!-- #main .site-main -->
			<div id="back-top">
				<a rel="nofollow" href="#top" title="Back to top"><i class="font-icon-arrow-simple-up"></i></a>
			</div>
		</div><!-- #page .hfeed .site -->
		<!--WordPress Development by Fruitful Code-->
<?php wp_footer(); ?>
</body>
</html>