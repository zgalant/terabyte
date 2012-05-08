<?php
/**
 * @package WordPress
 * @subpackage AppMagic
 */
?>

</div><!-- e: page -->
	
	<?php global $options; foreach ($options as $value) { if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); } } ?>
	
	<?php if($mgk_boxes_enable == 'true') { ?>
	
	<div id="tri">
		<div class="box1">
			<h4><?php echo $mgk_box1_title; ?></h4>
			<p><?php echo $mgk_box1_content; ?></p>
		</div>
		
		<div class="box2">
			<h4><?php echo $mgk_box2_title; ?></h4>
			<p><?php echo $mgk_box2_content; ?></p>
		</div>
		
		<div class="box3">
			<h4><?php echo $mgk_box3_title; ?></h4>
			<p><?php echo $mgk_box3_content; ?></p>
		</div>
	</div>
	
	<?php };?>
	
		
</div><!-- e: wrap -->

<div id="footer">
	<p><a href="#top">Back to Top</a>AppMagic is a product by App Magic Magic LLC | &copy; 2009, All Rights Reserved</p>
</div>

<?php wp_footer(); ?>
</body>
<!--[if lt IE 7]><script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/unitpngfix.js"></script><![endif]-->
</html>
