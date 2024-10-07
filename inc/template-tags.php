<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Alpha
 */

if ( ! function_exists( 'alpha_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function alpha_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'alpha' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'alpha_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function alpha_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'alpha' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'alpha_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function alpha_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'alpha' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'alpha' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'alpha' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'alpha' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'alpha' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'alpha' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'alpha_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function alpha_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() { //phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound
		do_action( 'wp_body_open' ); //phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
	}
endif;

if ( ! function_exists( 'alpha_button' ) ) :
	/**
	 * Display button
	 *
	 * @param array  $button ACF Link array.
	 * @param string $style Button style
	 * @param string $icon Button icon (don't display if empty)
	 * @return void
	 */
	function alpha_button( $button = array(), $style = 'primary', $icon = '' ) {
		if ( ! isset( $button['url'] ) || ! isset( $button['title'] ) ) {
			return _doing_it_wrong( 'alpha_button', __( '$button should contain url and title.', 'alpha' ), ALPHA_VERSION );
		}

		$class_name = 'btn';
		if ( ! empty( $style ) ) {
			$class_name .= ' btn-' . (string) $style;
		}

		?>
			<a class="<?php echo esc_attr( $class_name ); ?>" href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo $button['target'] ? esc_attr( $button['target'] ) : '_self'; ?>">
				<?php if ( ! empty( $icon ) ) : ?>
					<span class="aicon-<?php echo esc_attr( $icon ); ?>">
				<?php endif; ?>
				<?php echo esc_html( $button['title'] ); ?>
				<?php if ( ! empty( $icon ) ) : ?>
					</span>
				<?php endif; ?>
			</a>
		<?php
	}
endif;

if ( ! function_exists( 'has_reusable_block' ) ) {

	/**
	 * Determine whether a $post or a string contains a specific block type in reusable blocks.
	 *
	 * This test optimizes for performance rather than strict accuracy, detecting
	 * the block type exists but not validating its structure. For strict accuracy,
	 * you should use the block parser on post content.
	 *
	 * @param string                  $block_name Full Block type to look for.
	 * @param int|string|WP_Post|null $post Optional. Post content, post ID, or post object. Defaults to global $post.
	 * @return bool Whether the post content contains the specified block.
	 */
	function has_reusable_block( $block_name, $post = null ) {
		$post = get_post( $post );

		if ( $post ) {

			if ( has_block( 'block', $post ) ) {

				// Check reusable blocks.
				$content = get_post_field( 'post_content', $post );
				$blocks  = parse_blocks( $content );

				if ( ! is_array( $blocks ) || empty( $blocks ) ) {
					return false;
				}

				foreach ( $blocks as $block ) {
					if ( $block['blockName'] === 'core/block' && ! empty( $block['attrs']['ref'] ) ) {
						if ( has_block( $block_name, $block['attrs']['ref'] ) ) {
							return true;
						}
					}
				}
			}
		}

		return false;
	}
}
