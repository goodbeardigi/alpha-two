<?php 
if ( get_field( 'content' ) ) {
  $content = get_field( 'content' );
}
if ( get_field( 'divide_graphic' ) ) {
  $divide_graphic = get_field( 'divide_graphic' );
}
?>

<div class="ticker-tape-container">
  <div class="ticker-tape">
    <span><?php echo $content; ?></span>
    <span><img src="<?php echo $divide_graphic['url']; ?>" /></span>
  </div>
  <div class="ticker-tape" aria-hidden="true">
    <span><?php echo $content; ?></span>
    <span><img src="<?php echo $divide_graphic['url']; ?>" /></span>
  </div>
  <div class="ticker-tape" aria-hidden="true">
    <span><?php echo $content; ?></span>
    <span><img src="<?php echo $divide_graphic['url']; ?>" /></span>
  </div>
  <div class="ticker-tape" aria-hidden="true">
    <span><?php echo $content; ?></span>
    <span><img src="<?php echo $divide_graphic['url']; ?>" /></span>
  </div>
  <div class="ticker-tape" aria-hidden="true">
    <span><?php echo $content; ?></span>
    <span><img src="<?php echo $divide_graphic['url']; ?>" /></span>
  </div>
  <div class="ticker-tape" aria-hidden="true">
    <span><?php echo $content; ?></span>
    <span><img src="<?php echo $divide_graphic['url']; ?>" /></span>
  </div>
  <div class="ticker-tape" aria-hidden="true">
    <span><?php echo $content; ?></span>
    <span><img src="<?php echo $divide_graphic['url']; ?>" /></span>
  </div>
  <div class="ticker-tape" aria-hidden="true">
    <span><?php echo $content; ?></span>
    <span><img src="<?php echo $divide_graphic['url']; ?>" /></span>
  </div>
  <div class="ticker-tape" aria-hidden="true">
    <span><?php echo $content; ?></span>
    <span><img src="<?php echo $divide_graphic['url']; ?>" /></span>
  </div>
</div>