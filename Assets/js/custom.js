$(document).ready(function(){
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $("#header").addClass("darkHeader");
    } else {
        $("#header").removeClass("darkHeader");
    }
});
 $(" .navbar-toggle").click(function(){
             $(".sidenav-1").toggleClass("sidebar");
             $(this).children(".bar").toggleClass("change-bar");
           });
		});
$(document).ready(function(){
$("ul.nav.nav-tabs.venture-ul.pr-0 li:nth-child(1) a").addClass("active");
	
 // var previous="#viginty"
	// 	$('ul.venture-ul li a').click(function(e) 
	// 	    {  
	// 	       //previw remove
	// 	       $('ul.venture-ul li a').removeClass("active");
	// 	       //
	// 	       $(this).addClass("active");

	// 	    //Picher Image Logic
	// 	      $(previous).removeClass("active")
	// 	      $(previous).addClass("fade")
	// 	     $($(this).attr("href")).removeClass("fade")
	// 	     $($(this).attr("href")).addClass("active");
	// 	       previous=$(this).attr("href");
	// 	    });
			});
