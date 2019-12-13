---
title: 'main::lang.home.title'
permalink: /
description: ''
layout: default

'[slider]': { }

<!--  '[localSearch]':
    hideSearch: 0
    menusPage: local/menus 

'[featuredItems]':
    items: ['76', '77', '78', '79']
    limit: 3
    itemsPerRow: 3
    itemWidth: 400
    itemHeight: 300 -->

'[contact]':

---
<?php
function onInit()
{
}

function onStart()
{
}

function onEnd()
{
}
?>
---
<!--?= component('slider'); ?-->

<!--?= component('localSearch'); ?-->

<!--?= component('featuredItems'); ?-->

<!--start-content section-->
	<!--start about section-->
	<div class="about" id="about">
		<div class="container">
			<!--/about-section-->
			<div class="about-section">
				<div class="col-md-7 ab-left">
					<div class="grid">
						<div class="h-f wow slideInLeft" data-wow-duration="1s" data-wow-delay=".2s">
							<figure class="effect-jazz">
								<img src=<?= '"' . assets_url(); ?>/vd-theme/images/s4.jpg" alt="img25" />
								<figcaption>
								<!--h4>Masala <span>Dosa</span></h4-->
								<!--h4><?= sprintf(lang('main::lang.home.honest')) ?> <span><?= sprintf(lang('main::lang.home.food')) ?></span></h4>
								<p><?= sprintf(lang('main::lang.home.section_data')) ?></p-->
								</figcaption>
							</figure>

						</div>
						<div class="h-f wow slideInLeft" data-wow-duration="1s" data-wow-delay=".2s">
							<figure class="effect-jazz">
							<img src=<?= '"' . assets_url(); ?>/vd-theme/images/2.jpg" alt="img25" />
							<figcaption>
								<!--h4>Fish <span>Curry</span></h4-->
								<!--h4><?= sprintf(lang('main::lang.home.honest')) ?> <span><?= sprintf(lang('main::lang.home.food')) ?></span></h4>
								<p><?= sprintf(lang('main::lang.home.section_data')) ?></p-->
							</figcaption>
							</figure>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-5 ab-text">
				<h3 class="tittle wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s"><?= sprintf(lang('main::lang.home.welcome')) ?></h3>
				<div class="arrows-two wow slideInDown" data-wow-duration="1s" data-wow-delay=".5s"><img src=<?= '"' . assets_url(); ?>/vd-theme/images/border.png" alt="border" /></div>
				<p class="wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s"><?= sprintf(lang('main::lang.home.first_section_side_paragraph')) ?></p>
				<div class="start wow flipInX" data-wow-duration="1s" data-wow-delay=".3s">
					<a href="<?= restaurant_url('local/menus'); ?>" class="hvr-bounce-to-bottom"><?= lang('main::lang.menu_menu'); ?></a>
				</div>

				</div>
				<div class="clearfix"> </div>
			</div>
			<!--//about-section-->
			<!--/about-section2-->
			<div class="about-section">
				<div class="col-md-5 ab-text two">
				<h3 class="tittle wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s"><?= lang('main::lang.menu_reservation'); ?></h3>
				<div class="arrows-two wow slideInDown" data-wow-duration="1s" data-wow-delay=".5s"><img src=<?= '"' . assets_url(); ?>/vd-theme/images/border.png" alt="border" /></div>
				<p class="wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s"> <?= sprintf(lang('main::lang.home.second_section_side_paragraph')) ?></p>
				<div class="start wow flipInX" data-wow-duration="1s" data-wow-delay=".3s">
					<a href="<?= page_url('reservation/reservation'); ?>" class="hvr-bounce-to-bottom"><?= lang('main::lang.menu_reservation'); ?></a>
				</div>

				</div>
				<div class="col-md-7 ab-left">
					<div class="grid">
						<div class="h-f  wow slideInRight" data-wow-duration="1s" data-wow-delay=".2s">
						<figure class="effect-jazz">
							<img src=<?= '"' . assets_url(); ?>/vd-theme/images/s1.jpg" alt="img25" />
							<figcaption>
								<!--h4>Chicken <span>Pakora</span></h4-->
								<!--h4><?= sprintf(lang('main::lang.home.honest')) ?> <span><?= sprintf(lang('main::lang.home.food')) ?></span></h4>
								<p><?= sprintf(lang('main::lang.home.section_data')) ?></p-->
							</figcaption>
						</figure>

						</div>
						<div class="h-f  wow slideInRight" data-wow-duration="1s" data-wow-delay=".2s">
						<figure class="effect-jazz">
							<img src=<?= '"' . assets_url(); ?>/vd-theme/images/s3.jpg" alt="img25" />
							<figcaption>
								<!--h4>Vegetable <span>Biryani</span></h4-->
								<!--h4><?= sprintf(lang('main::lang.home.honest')) ?> <span><?= sprintf(lang('main::lang.home.food')) ?></span></h4>
								<p><?= sprintf(lang('main::lang.home.section_data')) ?></p-->
							</figcaption>
						</figure>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--//about-section2-->
		</div>
	</div>
	<!--//end about section-->
	<!-- start service section -->
	<div class="service" id="services">
		<div class="container">
		<h3 class="tittle"><?= sprintf(lang('main::lang.services.our_services')) ?></h3>
		<div class="arrows-serve"><img src=<?= '"' . assets_url(); ?>/vd-theme/images/border.png" alt="border"></div>
		<div class="inst-grids">
			<div class="col-md-3 services-gd text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="<?= restaurant_url('local/menus'); ?>" class="hi-icon"><img src=<?= '"' . assets_url(); ?>/vd-theme/images/serve1.png" alt=" " /></a>
				</div>
				<h4><?= sprintf(lang('main::lang.services.view_our_menu')) ?></h4>
				<p><?= sprintf(lang('main::lang.services.view_our_menu_text')) ?></p>
			</div>
			<div class="col-md-3 services-gd text-center wow slideInDown" data-wow-duration="1s" data-wow-delay=".2s">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="<?= page_url('reservation/reservation'); ?>" class="hi-icon"><img src=<?= '"' . assets_url(); ?>/vd-theme/images/serve2.png" alt=" " /></a>
				</div>
				<h4><?= sprintf(lang('main::lang.services.reservation')) ?></h4>
				<p><?= sprintf(lang('main::lang.services.reservation_text')) ?></p>
			</div>
			<div class="col-md-3 services-gd text-center wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="#contact" class="hi-icon scroll"><img src=<?= '"' . assets_url(); ?>/vd-theme/images/serve3.png" alt=" " /></a>
				</div>
				<h4><?= sprintf(lang('main::lang.services.fine_recipes')) ?></h4>
				<p><?= sprintf(lang('main::lang.services.fine_recipes_text')) ?></p>
			</div>
			<div class="col-md-3 services-gd text-center wow slideInRight" data-wow-duration="1s" data-wow-delay=".3s">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="#contact" class="hi-icon scroll"><img src=<?= '"' . assets_url(); ?>/vd-theme/images/serve4.png" alt=" " /></a>
				</div>
				<h4><?= sprintf(lang('main::lang.services.spicy_recipes')) ?></h4>
				<p><?= sprintf(lang('main::lang.services.spicy_recipes_text')) ?></p>
			</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<!-- // end service section -->
	<!--start-team section -->
	<!--div class="team-section" id="team">
	 	  <div class="container">
		  <h3 class="tittle"><?= sprintf(lang('main::lang.chefs.our_chefs')) ?></h3>
		  <div class="arrows-serve"><img src=<?= '"' . assets_url(); ?>/vd-theme/images/border.png" alt="border"></div>
	 		<div class="box2">
	 		    <div class="col-md-3 s-1 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s">
				    <a href="#">
		 		   	    <div class="view view-fifth">
		                    <img src=<?= '"' . assets_url(); ?>/vd-theme/images/chef1.jpg" alt="chef">
		                    <div class="mask">
		                        <h4><?= sprintf(lang('main::lang.chefs.first_chef_title')) ?></h4>
		                        <p><?= sprintf(lang('main::lang.chefs.first_chef_para_one')) ?></p>
		                         <p class="p2"><?= sprintf(lang('main::lang.chefs.first_chef_para_two')) ?></p>
		                     </div>                   

						</div>
					</a>
					<h3>Wilson</h3>
				</div>
				<div class="col-md-3 s-2 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s">
					<a href="#">
				 		   	<div class="view view-fifth">
			                      <img src=<?= '"' . assets_url(); ?>/vd-theme/images/chef2.jpg" alt="chef">
			                       <div class="mask">
			                        <h4><?= sprintf(lang('main::lang.chefs.second_chef_title')) ?></h4>
			                        <p><?= sprintf(lang('main::lang.chefs.second_chef_para_one')) ?></p>
			                         <p class="p2"><?= sprintf(lang('main::lang.chefs.second_chef_para_two')) ?></p>
			                     </div>

						</div>
					</a>
					<h3>Victoria</h3>
				</div>
				<div class="col-md-3 s-3 wow slideInRight" data-wow-duration="1s" data-wow-delay=".3s">
					<a href="#">
			 		   	<div class="view view-fifth">
		                     <img src=<?= '"' . assets_url(); ?>/vd-theme/images/chef3.jpg" alt="chef">
		                    <div class="mask">
		                        <h4><?= sprintf(lang('main::lang.chefs.third_chef_title')) ?></h4>
		                        <p><?= sprintf(lang('main::lang.chefs.third_chef_para_one')) ?></p>
		                         <p class="p2"><?= sprintf(lang('main::lang.chefs.third_chef_para_two')) ?></p>
		                     </div>

						</div>
					</a>
					<h3>Mr.jazz</h3>
				</div>
				<div class="col-md-3 s-4 wow slideInRight" data-wow-duration="1s" data-wow-delay=".3s">
					<a href="#">
			 		   	 <div class="view view-fifth">
		                      <img src=<?= '"' . assets_url(); ?>/vd-theme/images/chef4.jpg" alt="chef">
		                    <div class="mask">
		                        <h4><?= sprintf(lang('main::lang.chefs.fourth_chef_title')) ?></h4>
		                        <p><?= sprintf(lang('main::lang.chefs.fourth_chef_para_one')) ?></p>
		                         <p class="p2"><?= sprintf(lang('main::lang.chefs.fourth_chef_para_two')) ?></p>
		                     </div>

						</div>
					</a>
					<h3>Rosie Wilson</h3>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div-->
	<!--end-team section-->		
	<!--Gallery web-->
	<div class="gallery d-none d-md-block" id="gallery"> 
		<div class="container">
		<h3 class="tittle"><?= sprintf(lang('main::lang.local.text_tab_gallery')) ?></h3>
		<div class="arrows-serve"><img src=<?= '"' . assets_url(); ?>/vd-theme/images/border.png" alt="border"></div>
		<div class="gallery-grids">
			<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/g1.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/g1.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.first_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.first_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/g2.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/g2.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.second_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.second_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/c1.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/c1.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.third_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.third_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/c2.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/c2.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.fourth_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.fourth_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/c3.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/c3.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.fifth_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.fifth_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/c4.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/c4.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.sixth_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.sixth_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/g7.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/g7.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.seventh_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.seventh_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/g8.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/g8.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.eighth_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.eighth_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--Gallery mobile-->
	<div class="gallery gallery_mobile d-block d-md-none" id="gallery1">
		<div class="container">
		<h3 class="tittle"><?= sprintf(lang('main::lang.local.text_tab_gallery')) ?></h3>
		<div class="arrows-serve"><img src=<?= '"' . assets_url(); ?>/vd-theme/images/border.png" alt="border"></div>
		<div class="gallery-grids owl-carousel owl-theme">
			<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/g1.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/g1.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.first_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.first_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/g2.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/g2.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.second_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.second_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/c1.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/c1.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.third_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.third_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/c2.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/c2.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.fourth_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.fourth_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/c3.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/c3.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.fifth_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.fifth_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/c4.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/c4.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.sixth_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.sixth_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/g7.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/g7.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.seventh_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.seventh_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
				<a href=<?= '"' . assets_url(); ?>/vd-theme/images/g8.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="gal-spin-effect vertical ">
						<img src=<?= '"' . assets_url(); ?>/vd-theme/images/g8.jpg" alt=" " />
						<div class="gal-text-box">
							<div class="info-gal-con">
								<!--h4><?= sprintf(lang('main::lang.gallery.eighth_image_title')) ?></h4-->
								<!--span class="separator"></span>
								<p><?= sprintf(lang('main::lang.gallery.eighth_image_text')) ?></p>
								<span class="separator"></span-->

							</div>
						</div>
					</div>
				</a>
			</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	<!-- //gallery -->	
	<!--start bottom section-->
	<div class="bottom">
		<div class="container">
			<div class="bottom-top">
			<h3 class=" wow flipInX" data-wow-duration="1s" data-wow-delay=".3s"><?= sprintf(lang('main::lang.contact.we_are_sharing')) ?></h3>
			<span><?= sprintf(lang('main::lang.contact.delicious_treats')) ?></span>
			<!--p class="wow slideInDown" data-wow-duration="1s" data-wow-delay=".5s"><?= sprintf(lang('main::lang.contact.contact_us_text')) ?></p-->
			<div class="start wow flipInX" data-wow-duration="1s" data-wow-delay=".3s">
				<a href="<?= site_url('contact'); ?>" class="hvr-bounce-to-bottom"><?= lang('main::lang.menu_contact'); ?></a>
			</div>
			</div>
		</div>
	</div>
	<!--end bottom section-->
	<!--/contact-->
	<div class="section-contact" id="contact">
		<div class="container">
			<div class="contact-main" id="contact-main">
				<div class="col-md-6 contact-grid wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
					<h3 class="tittle wow bounceIn" data-wow-duration=".8s" data-wow-delay=".2s"><?= sprintf(lang('main::lang.menu_contact')) ?></h3>
					<div class="arrows-three"><img src=<?= '"' . assets_url(); ?>/vd-theme/images/border.png" alt="border"></div>
					<p class="wel-text wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".4s"><?= lang('igniter.frontend::default.contact.text_summary'); ?></p>
					<!-- start contact form section-->						
                    <?= component('contact'); ?>
					<!-- end contact form section-->	
				</div>
			<div class="col-md-6 contact-in wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
				<!--h4 class="info"><?= sprintf(lang('main::lang.contact.our_info')) ?> </h4>
						<p class="para1"><?= sprintf(lang('main::lang.contact.info_text')) ?>  </p-->
				<?php if ($contactLocation = $contact->location) { ?>
					<div class="con-top">
						<!--h4>Dosa North & South Indian Restaurant</h4-->
						<h4><?= $contactLocation->getName(); ?></h4>
						<ul>
							<li><?= format_address($contactLocation->getAddress()); ?></li>
							<li>Phone : <?= $contactLocation->getTelephone(); ?> </li>
							<li>Fax : 020-6895073</li>
						</ul>
					</div>
				<?php } ?>
			</div>

				<div class="clearfix"> </div>
			</div>
			<!--map-->
			<div class="map wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".5s">
				<!--iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1675115.8258740564!2d-98.4671417929578!3d34.91371150021706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1434956093308"></iframe-->
				<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=1054%20HS%20Amsterdam%20Netherlands&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			</div>
			<!--//map-->
		</div>
	</div>
	<!--//contact-->
	<!--end-content section-->
	<script type="text/javascript">
		window.onload = function(){
			if("<?= session()->has('errors') ?>")
				document.getElementById("contact-main").scrollIntoView()
		}
	</script>