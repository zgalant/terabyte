Cufon.replace('#splash h1', { fontFamily: 'advent pro Bd3' });
Cufon.replace('.post h2', { fontFamily: 'nevis' });
Cufon.replace('.newsletter h3', { fontFamily: 'nevis' });
Cufon.replace('.widget h3', { fontFamily: 'nevis' });
Cufon.replace('#nav li a', { fontFamily: 'nevis' });
Cufon.replace('#tri h4', { fontFamily: 'nevis' });
Cufon.replace('#image-bar strong', { fontFamily: 'nevis' });
Cufon.replace('#comwrap h3', { fontFamily: 'nevis' });
Cufon.replace('.entry h1', { fontFamily: 'nevis' });
Cufon.replace('.entry h2', { fontFamily: 'nevis' });
Cufon.replace('.entry h3', { fontFamily: 'nevis' });
Cufon.replace('.entry h4', { fontFamily: 'nevis' });
Cufon.replace('.entry h5', { fontFamily: 'nevis' });
Cufon.replace('.entry h6', { fontFamily: 'nevis' });

$(document).ready(function(){		
	$("#screen-nav li").click(function () {						
		$(".active-screen").removeClass("active-screen");			
		$(this).addClass("active-screen");			
		$(".phone").fadeOut();			
		var content_show = $(this).attr("rel");
		$("#"+content_show).fadeIn();		  
	});	
});
