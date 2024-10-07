<?php
/**
 * CTA Widget
 *
 * @package Alpha
 */

class Alpha_CTA_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'alpha_cta', // Base ID
			'Alpha CTA', // Name
		);
	}

	/**
	 * Display widget
	 *
	 * @param array $args Display arguments
	 * @param array $instance Settings for the current Alpha CTA widget instance.
	 * @return void
	 */
	public function widget( $args = array(), $instance = array() ) {
		$widget_id  = $args['widget_id'];
		$widget_acf = 'widget_' . $widget_id;
		$title      = get_field( 'title', $widget_acf );
		$content    = get_field( 'content', $widget_acf );
		$button     = get_field( 'button', $widget_acf );
		
		echo $args['before_widget'];

		?>
		<div class="widget-columns">
			<div class="widget-column">
				<?php echo $args['before_title'] . $title . $args['after_title']; ?>
				<?php echo $content; ?>
			</div>
			<?php if ( is_array( $button ) ) : ?>
			<div class="widget-column">
				<a class="btn btn-primary" href="<?php echo $button['url'] ?>" target="<?php echo $button['target'] ? $button['target'] : '_self'; ?>"><?php echo $button['title']; ?></a>
			</div>				
			<?php endif; ?>
		</div>
		
		<?php
		echo $args['after_widget'];
	}

	public function form( $instance ) {
		return $instance;
	}
}
