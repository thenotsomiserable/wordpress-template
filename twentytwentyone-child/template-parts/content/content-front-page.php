<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( ! is_front_page() ) : ?>
		<header class="entry-header">
			<?php get_template_part( 'template-parts/header/entry-header-front-page' ); ?>
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php elseif ( has_post_thumbnail() ) : ?>
		<header class="entry-header">
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div>
  <div class="container-two-columns">
    <div class="column-text">
      <h2>Example heading</h2>
      <h3>Two lines of subheading</h3>
      <p>Employing the right people will give your business the advantage it needs to succeed. Whether you are looking for new employees or want to build up a new team: our consultants will guide you throughout the strategy for your business.</p>
      <div class="button-area">
        <div class="cta-button cta-button-main">
          <p><a href="#">CTA Button</a></p>
        </div>
        <div class="cta-button cta-button-inverse">
          <p><a href="#">CTA Button</a></p>
        </div>
      </div>
    </div>
    <div class="column-image">
      <img src="https://live.staticflickr.com/65535/51852722164_fdb2b203e7_c_d.jpg">
    </div>
  </div>

  <div class="container-two-columns">
    <div class="column-image">
      <img src="https://live.staticflickr.com/65535/51852722164_fdb2b203e7_c_d.jpg">
    </div>
    <div class="column-text">
      <h2>Example heading</h2>
      <h3>Two lines of subheading</h3>
      <p>Employing the right people will give your business the advantage it needs to succeed. Whether you are looking for new employees or want to build up a new team: our consultants will guide you throughout the strategy for your business.</p>
      <div class="button-area">
        <div class="cta-button cta-button-main">
          <p><a href="#">CTA Button</a></p>
        </div>
        <div class="cta-button cta-button-inverse">
          <p><a href="#">CTA Button</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
