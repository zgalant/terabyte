<?php
/**
 * @package WordPress
 * @subpackage AppMagic
 */

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));
}

$themename = "AppMagic";
$shortname = "mgk";

$options = array (

	// header
	array(	"name" => "Header",
			"type" => "title"),
			
	array(	"type" => "open"),
	
	array(	"name" => "Header Title",
			"desc" => "Enter the title you want displayed on the header (next to phone screenshots).",
			"id" => $shortname."_header_title",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Header Message",
			"desc" => "Text you'd like displayed below the heading title.",
            "id" => $shortname."_header_message",
            "type" => "textarea"),
			
	array(	"name" => "iTunes Link",
			"desc" => "Enter the url to your app on itunes.",
            "id" => $shortname."_itunes_link",
            "type" => "text"),
			
	array(	"name" => "iTunes Price",
			"desc" => "Enter the price of your App",
            "id" => $shortname."_itunes_price",
            "type" => "text"),
			
	
	// testimonial
	array(	"name" => "Testimonial",
			"type" => "title"),
			
	array(	"type" => "open"),
	
	array(  "name" => "Enable Testimonials?",
			"desc" => "To enable header testimonial inclusion, please enable this box (enabled by default).",
            "id" => $shortname."_testimonial_enabled",
            "type" => "checkbox",
            "std" => ""),
	
	array(	"name" => "Testimonial Citation",
			"desc" => "Enter the citation for the testimonial, eg 'Jason Mallagan, May 2009 - AppMagic Magazine'.",
			"id" => $shortname."_testimonial_citation",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Testimonial Content",
			"desc" => "Enter the content of your testimonial here..",
            "id" => $shortname."_testimonial_content",
            "type" => "textarea"),
	
	
	// foot boxes
	array(	"name" => "Foot Boxes",
			"type" => "title"),
			
	array(	"type" => "open"),	
	
	array(  "name" => "Enable Foot Boxes?",
			"desc" => "To enable foot boxes, please enable this box.",
            "id" => $shortname."_boxes_enable",
            "type" => "checkbox",
            "std" => ""),
	
	array(	"name" => "Foot Box 1, Title",
			"desc" => "Enter your title for the first foot box.",
			"id" => $shortname."_box1_title",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Foot Box 1, Content",
			"desc" => "Enter the content of the first foot box.",
            "id" => $shortname."_box1_content",
            "type" => "textarea"),
			
	array(	"name" => "Foot Box 2, Title",
			"desc" => "Enter your title for the second foot box.",
			"id" => $shortname."_box2_title",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Foot Box 2, Content",
			"desc" => "Enter the content of the second foot box.",
            "id" => $shortname."_box2_content",
            "type" => "textarea"),
			
	array(	"name" => "Foot Box 3, Title",
			"desc" => "Enter your title for the third foot box.",
			"id" => $shortname."_box3_title",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Foot Box 3, Content",
			"desc" => "Enter the content of the third foot box.",
            "id" => $shortname."_box3_content",
            "type" => "textarea"),

	
	
	
	// FeedBurner Email
	array(	"name" => "FeedBurner Email Subscription",
			"type" => "title"),
			
	array(	"type" => "open"),	
	
	array(  "name" => "Enable FeedBurner Email Subscription?",
			"desc" => "To enable FeedBurner email subscription, please enable this box.",
            "id" => $shortname."_feed_enable",
            "type" => "checkbox",
            "std" => ""),
	
	array(	"name" => "FeedBurner ID",
			"desc" => "Enter your FeedID here.",
			"id" => $shortname."_feed_id",
			"std" => "",
			"type" => "text"),
	
		
	array(	"type" => "close")
	
);
function magic_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }


        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }


        }
    }

    add_theme_page($themename." AppMagic", "".$themename." AppMagic ", 'edit_themes', basename(__FILE__), 'magic_admin');

}


function magic_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>


<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>

<form method="post">



<?php foreach ($options as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		?>
        <table width="100%" border="0" style="background-color:#eef5fb; padding:10px;">
		
        
        
		<?php break;
		
		case "close":
		?>
		
        </table><br />
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="background-color:#dceefc; padding:5px 10px;"><tr>
        	<td colspan="2"><h3><?php echo $value['name']; ?></h3></td>
        </tr>
                
        
		<?php break;

		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?>" /></td>
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:110px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?></textarea></td>
            
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select></td>
       </tr>
                
       <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><?php if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
                        
            <tr>
                <td><small><?php echo $value['desc']; ?></small></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            
        <?php 		break;
	
 
} 
}
?>

<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>

<?php
}

add_action('admin_menu', 'magic_add_admin'); ?>