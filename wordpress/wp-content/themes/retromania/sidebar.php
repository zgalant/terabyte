 <!-- Sidebar -->  
 
<div class="sidebar">

<ul>

    	<li><a href="http://www.twitter.com/terabytegames"><img src="http://twitter-badges.s3.amazonaws.com/follow_me-c.png" alt="Follow terabytegames on Twitter"/></a></li>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
            <?php wp_list_categories('hide_empty=0&title_li=&exclude=1'); ?>
        <?php endif; ?>
		
        
        <!-- Start of Flickr Badge -->
        <style type="text/css">
        #flickr_badge_source_txt {padding:0; font: 11px Arial, Helvetica, Sans serif; color:#666666;}
        #flickr_badge_icon {display:block !important; margin:0 !important; border: 1px solid rgb(0, 0, 0) !important;}
        #flickr_icon_td {padding:0 5px 0 0 !important;}
        .flickr_badge_image {text-align:center !important;}
        .flickr_badge_image img {border: 1px solid black !important;}
        #flickr_www {display:block; padding:0 10px 0 10px !important; font: 11px Arial, Helvetica, Sans serif !important; color:#3993ff !important;}
        #flickr_badge_uber_wrapper a:hover,
        #flickr_badge_uber_wrapper a:link,
        #flickr_badge_uber_wrapper a:active,
        #flickr_badge_uber_wrapper a:visited {text-decoration:none !important; background:inherit !important;color:#3993ff;}
        #flickr_badge_wrapper {}
        #flickr_badge_source {padding:0 !important; font: 11px Arial, Helvetica, Sans serif !important; color:#666666 !important;}
        </style>
        <table id="flickr_badge_uber_wrapper" cellpadding="0" cellspacing="10" border="0"><tr><td><table cellpadding="0" cellspacing="10" border="0" id="flickr_badge_wrapper">
        <tr>
        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=2&display=random&size=m&layout=v&source=user&user=29728474%40N07"></script>
        </tr>
        </table>
        </td></tr></table>
        <!-- End of Flickr Badge -->
        
    
</ul>

</div>  
<div class="clear"></div>
</div>
</div>
