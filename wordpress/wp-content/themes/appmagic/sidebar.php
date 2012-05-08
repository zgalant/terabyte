<?php
/**
 * @package WordPress
 * @subpackage AppMagic
 */
?>		
		
		<div id="sidebar">			
		<?php global $options; foreach ($options as $value) { if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); } } ?>		
			
			<?php if($mgk_feed_enable == 'true') { ?>		
			<div class="newsletter">
				<form target="_blank" action="http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $mgk_feed_id;?>" method="post">
				<h3>Get Updates.</h3>
				<p>Enter your email address below to receive news, updates, and notifications from our feed.</p>
				<p><input type="text" class="text" /></p>
				<p><input type="submit" class="submit" value="Subscribe" /></p>
				</form>
			</div>	<!-- e: newsletter -->
			<?php };?>
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : endif; ?>
			
			
		</div><!-- e: sidebar -->