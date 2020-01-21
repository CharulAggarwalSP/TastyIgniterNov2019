<?= get_script_tags(); ?>
<?= $this->theme->ga_tracking_code; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/jquery-1.11.1.min.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/move-top.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/easing.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/jquery.swipebox.min.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/owl.carousel.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/responsiveslides.min.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/wow.min.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/cookieconsent.min.js"' . '></script>'; ?>
<?php 
	/* Script file does not want to include on menu page, but we want toinclude on address book page */
	$param = explode('/',$_SERVER['REQUEST_URI']);
	
	if(count($param) > 3){		
		if($param[3] === 'address'){
			echo '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/bootstrap.min.js"' . '></script>';
		}
	}
?>
<!-- Scripts -->
<script>
	window.CookieConsent.init({
		language: {
		current: 'en',
		},
		theme: {
			barColor: '#efa52c',
			barTextColor: 'black',
			barMainButtonColor: 'black',
			barMainButtonTextColor: '#efa52c',
			modalMainButtonColor: '#4285F4',
			modalMainButtonTextColor: 'black',
		},
		categories: {
		necessary: {
			needed: true,
			wanted: true,
			checked: true,
			language: {
			locale: {
				en: {
				name: 'Strictly Necessary Cookies',
				description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu commodo est, nec gravida odio. Suspendisse scelerisque a ex nec semper.',
				},
				hu: {
				name: 'Szükséges sütik',
				description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu commodo est, nec gravida odio. Suspendisse scelerisque a ex nec semper.',
				}
			}
			}
		},
		various: {
			needed: false,
			wanted: false,
			checked: false,
			language: {
			locale: {
				en: {
				name: 'Various Cookies',
				description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
				},
				hu: {
				name: 'Egyéb sütik',
				description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu commodo est, nec gravida odio. Suspendisse scelerisque a ex nec semper.',
				}
			}
			}
		}
		},
		services: {
		facebook: {
			category: 'various',
			type: 'dynamic-script', // dynamic-script, script-tag, wrapped, localcookie
			search: 'facebook',
			language: {
			locale: {
				en: {
				name: 'Facebook'
				},
				hu: {
				name: 'Facebook'
				}
			}
			}
		},
		azalead: {
			category: 'various',
			type: 'script-tag',
			search: 'azalead',
			language: {
			locale: {
				en: {
				name: 'Azalead'
				},
				hu: {
				name: 'Azalead'
				}
			}
			}
		},
		wrapped: {
			category: 'various',
			type: 'wrapped',
			search: 'wrapped',
			language: {
			locale: {
				en: {
				name: 'Wrapped'
				},
				hu: {
				name: 'Csomagolt süti'
				}
			}
			}
		},
		localcookie: {
			category: 'various',
			type: 'localcookie',
			search: 'localcookie',
			language: {
			locale: {
				en: {
				name: 'Local cookie'
				},
				hu: {
				name: 'Helyi süti'
				}
			}
			}
		}
		}
	});
</script>
<!-- swipe box js -->
<script type="text/javascript">
	jQuery(function($) {
		$(".swipebox").swipebox();
	});
</script>
<!-- //swipe box js -->
<script>
	new WOW().init();
</script>
<!-- script-for-menu -->
<script>
	$("span.menu").click(function() {
		$(".top-menu ul").slideToggle("slow", function() {});
	});
</script>
<!-- script-for-menu -->
<script>
	$(document).ready(function() {
		var navoffeset = $(".header-bottom").offset().top;
		$(window).scroll(function() {
			var scrollpos = $(window).scrollTop();
			if (scrollpos >= navoffeset) {
				$(".header-bottom").addClass("fixed");
			} else {
				$(".header-bottom").removeClass("fixed");
			}
		});

	});
</script>
<script>
	// You can also use "$(window).load(function() {"
	$(function() {
		// Slideshow 4
		$("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			before: function() {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function() {
				$('.events').append("<li>after event fired.</li>");
			}
		});

	});
</script>
<!--banner Slider starts Here-->
<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items: 1,
			lazyLoad: true,
			autoPlay: true,
			navigation: false,
			navigationText: false,
			pagination: true,
		});
	});
</script>
<!--start-smooth-scrolling-->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		*/
		$().UItoTop({
			easingType: 'easeOutQuart'
		});
	});
</script>
<!--end-smooth-scrolling-->
<?php if (!empty($this->theme->custom_js)) { ?>
    <?= '<script type="text/javascript">'.$this->theme->custom_js.'</script>' ?>
<?php } ?>
<script type="text/javascript">
	document.addEventListener('scroll', function() {
		if ($(this).scrollTop() == 0) {
			if ($('.header-bottom').hasClass('custom-class'))
				$('.header-bottom').removeClass("custom-class")
		} else {
			if (!$('.header-bottom').hasClass('custom-class'))
				$('.header-bottom').addClass("custom-class")
		}
	})
	$(document).ready(function(){		
	        $('.delete_btn_address').on('click',function(){
	            var id = $(this).attr('data-id'); 
	            $('#deleteModal').modal('show');          
	            $('.popup_ok_delete').attr('data-id',id);
	            $('#delete_address_id').val(id);
	        });
        
	        $('.popup_cancel_delete').click(function(){            
	            $('#deleteModal').modal('hide');            
	        });
                
	});
</script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 9,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 5,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
        });
    });
</script>
