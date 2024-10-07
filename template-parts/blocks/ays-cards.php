<?php
/**
 * Stats Block
 *
 * @package Alpha
 */

$block_id = 'alpha-ays-cards-' . $block['id'];


// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-ays-cards';

if ( get_field( 'cards' ) ) {
	$cards = get_field( 'cards' );
}

$i = 0;

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="container">
		
		<?php foreach($cards as $card){ ?>
			<div class="ays-card ays-card-<?php echo $i; ?>">
				<div class="ays-card-bg ays-card-bg-<?php echo $card['background']; ?>"></div>
				<div class="ays-content">
					<h3><?php echo $card['title']; ?></h3>
					<p><?php echo $card['content']; ?></p>
				</div>
				<!-- <img src="<?php echo $card['image']['url'] ?>" />  -->
				<picture>
				   <source 
				      media="(min-width: 1022px)"
				      srcset="<?php echo $card['image']['url'] ?>">
				   <source 
				      media="(min-width: 465px)"
				      srcset="<?php echo $card['mobile_image']['url'] ?>">
				   <img src="<?php echo $card['image']['url'] ?>" 
				   alt="<?php echo $card['image']['alt'] ?>">
				</picture>
			</div>
			<?php $i++; ?>
		<?php } ?>
		

	</div>
</section>
