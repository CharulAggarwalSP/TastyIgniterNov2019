<?= get_script_tags(); ?>
<?= $this->theme->ga_tracking_code; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/jquery-1.11.1.min.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/move-top.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/easing.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/jquery.swipebox.min.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/owl.carousel.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/responsiveslides.min.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/wow.min.js"' . '></script>'; ?>
<?= '<script type="text/javascript" src="' . assets_url() . '/vd-theme/js/bootstrap.min.js"' . '></script>'; ?>
<!--/script-->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 900);
		});
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
	<?= '<script type="text/javascript">' . $this->theme->custom_js . '</script>' ?>
<?php } ?>
<script>
	$(document).ajaxStart(function() {
		alert("fghfj");
		console.log("hi");
		$('#cookingLoader').show();
	})

	$(document).ajaxComplete(function() {
		console.log("bye");
		$('#cookingLoader').hide();
	})
</script>
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
</script>