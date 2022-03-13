(function ($) {
    $(document).ready(function () {
		
		$(".searchForm #searchsubmit").click(function(e){
			e.preventDefault();
			$.ajax({
			  method: "GET",
			  url: ajaxurl,
			  data: { action: "get_search_ajax", search: $(".searchForm #searchform input").val() }
			})
			  .done(function( data ) {
				$("#search_result_ajax").empty().append(data);
			  });
		})

		 $('.sec-archiurba .projet-bloc .projet-popup-wrapper').mouseenter(function(){
			$(this).find('#contentPopup').addClass('popup-active');
		});
		
		$('.sec-archiurba .projet-bloc .projet-popup-wrapper .projet-popup .logo-wrapper button#logoClose').click(function(){
			$(this).parent('.logo-wrapper').parent('.popup-active').removeClass('popup-active') 
		}); 
		
		$('a img.loupe').click(function(){
			if($('.searchForm').hasClass('active')){
				$('.full-menu .leftColumnMenu').css('align-items', 'end');
				$('.searchForm').removeClass('active');
				$('.full-menu .leftColumnMenu .menuItemFP').css('display', 'block')
			}
			else{
				$('.full-menu .leftColumnMenu').css('align-items', 'start');
				$('.searchForm').addClass('active');
				$('.full-menu .leftColumnMenu .menuItemFP').css('display', 'none')
			}
		});
		
		$('.contentWrapperProjet .galleryWrapper').slick();
		$('.single-explorations .galleryWrapper').slick();
        $('.sec-equipe .galleryWrapper').slick();
		
		$(".slick-next").text("");
		$(".slick-prev").html("");
		
		$('.galleryWrapper .single-slide-image .zoom-image').click(function(){
			$('.zoom-image-slider').css('display', 'block');
			$('.zoom-image-slider img').attr('src', $(this).parent('.single-slide-image').find('img').attr('src'));
		});
		
		$('.zoom-image-slider .div-zoom span.close').click(function(){
			$('.zoom-image-slider').css('display', 'none');
		})
		

    });
 })(jQuery);

document.addEventListener('DOMContentLoaded', function () {

    //met a jour le background color du menu et les elements de la navbar
    if (document.querySelector('.home div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "white";
    } else if (document.querySelector('.post-type-archive-projets div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "white";
        document.querySelector('.menu-item-381 a').classList.add("activePage");
    } else if (document.querySelector('.post-type-archive-actualites div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "white";
        document.querySelector('.menu-item-418 a').classList.add("activePage");
    } else if (document.querySelector('.post-type-archive-explorations div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "white";
        document.querySelector('.menu-item-382 a').classList.add("activePage");
    } else if (document.querySelector('.single-projets div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "transparent";
        document.querySelector('.menu-item-383 a').classList.add("inactivePage3");
        document.querySelector('.menu-item-382 a').classList.add("inactivePage3");
        document.querySelector('.menu-item-381 a').classList.add("inactivePage4");
        document.querySelector('.menu-item-418 a').classList.add("inactivePage3");
    } else if (document.querySelector('.single-actualites div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "rgb(244,244,244)";
    } else if (document.querySelector('.single-explorations div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "rgb(244,244,244)";
        document.querySelector('footer').style.display = "none";
        document.querySelector('.menu-item-383 a').classList.add("inactivePage3");
        document.querySelector('.menu-item-382 a').classList.add("activePage");
        document.querySelector('.menu-item-381 a').classList.add("inactivePage3");
        document.querySelector('.menu-item-418 a').classList.add("inactivePage3");
    } else if (document.querySelector('.single-post div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "rgb(244,244,244)";
        document.querySelector('footer').style.display = "none";
        document.querySelector('.menu-item-383 a').classList.add("inactivePage");
        document.querySelector('.menu-item-382 a').classList.add("inactivePage");
        document.querySelector('.menu-item-381 a').classList.add("inactivePage");
        document.querySelector('.menu-item-418 a').classList.add("activePage");
    } else if (document.querySelector('.archives-projets div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "rgb(244,244,244)";
        document.querySelector('.menu-item-383 a').classList.add("inactivePage");
        document.querySelector('.menu-item-382 a').classList.add("inactivePage");
        document.querySelector('.menu-item-381 a').classList.add("inactivePage");
        document.querySelector('.menu-item-418 a').classList.add("activePage");
    } else if (document.querySelector('.page-template-template-agence div#sideNavWrapper')) {
        document.querySelector('.menu-item-383 a').classList.add("activePage");

    }
  




})


var i
function prog()
{
  document.getElementById("d1").innerHTML=""; document.getElementById("d2").style.width=0; i=0;
  progBar();
}
 
function progBar()
{
   if (i<=(300))
   {
        if (i>0){document.getElementById("d1").innerHTML=parseInt(i/3)+"%";}
      document.getElementById("d2").style.width=i+"px";
      var j=0;     
      while (j<=100)
        j++; 
        setTimeout("progBar();", 20);
        i++;  
   }
}





document.addEventListener('DOMContentLoaded', function () {
    //met a jour le background color du menu et les elements de la navbar
    if (document.querySelector('.home div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "white";
    } else if (document.querySelector('.post-type-archive-projets div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "white";
        document.querySelector('.menu-item-381 a').classList.add("activePage");
    } else if (document.querySelector('.post-type-archive-actualites div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "white";
        document.querySelector('.menu-item-418 a').classList.add("activePage");
    } else if (document.querySelector('.post-type-archive-explorations div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "white";
        document.querySelector('.menu-item-382 a').classList.add("activePage");
    } else if (document.querySelector('.single-projets div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "transparent";
        document.querySelector('.menu-item-383 a').classList.add("inactivePage3");
        document.querySelector('.menu-item-382 a').classList.add("inactivePage3");
        document.querySelector('.menu-item-381 a').classList.add("inactivePage4");
        document.querySelector('.menu-item-418 a').classList.add("inactivePage3");
    } else if (document.querySelector('.single-actualites div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "rgb(244,244,244)";
    } else if (document.querySelector('.single-explorations div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "rgb(244,244,244)";
        document.querySelector('footer').style.display = "none";
        document.querySelector('.menu-item-383 a').classList.add("inactivePage3");
        document.querySelector('.menu-item-382 a').classList.add("activePage");
        document.querySelector('.menu-item-381 a').classList.add("inactivePage3");
        document.querySelector('.menu-item-418 a').classList.add("inactivePage3");
    } else if (document.querySelector('.single-post div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "rgb(244,244,244)";
        document.querySelector('footer').style.display = "none";
        document.querySelector('.menu-item-383 a').classList.add("inactivePage");
        document.querySelector('.menu-item-382 a').classList.add("inactivePage");
        document.querySelector('.menu-item-381 a').classList.add("inactivePage");
        document.querySelector('.menu-item-418 a').classList.add("activePage");
    } else if (document.querySelector('.archives-projets div#sideNavWrapper')) {
        document.querySelector('div#sideNavWrapper').style.backgroundColor = "rgb(244,244,244)";
        document.querySelector('.menu-item-383 a').classList.add("inactivePage");
        document.querySelector('.menu-item-382 a').classList.add("inactivePage");
        document.querySelector('.menu-item-381 a').classList.add("inactivePage");
        document.querySelector('.menu-item-418 a').classList.add("activePage");
    } else if (document.querySelector('.page-template-template-agence div#sideNavWrapper')) {
        document.querySelector('.menu-item-383 a').classList.add("activePage");
    }
})





element = document.querySelector('.logoOuvrir');
console.log (element);
cross = document.querySelector('.logoOuvrir img');
element.addEventListener('click', function() { 
    if ( document.querySelector('.ficheTechnique').style.display === "none") {
        document.querySelector('.ficheTechnique').style.display = "flex"; 
        document.querySelector('.ficheTechnique').style.animation = "windowDown 0.2s ease"
        cross.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_menu_burguer-fermer.svg";
    }
    else {
        document.querySelector('.ficheTechnique').style.display = "none";
        cross.src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_plus_ouvrir.svg";

    }

 }, false);
