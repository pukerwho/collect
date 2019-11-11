<div class="welcome collect-animate mb-10">
	<div class="swiper-container swiper-welcome-container">
		<div class="swiper-wrapper">
			<?php 
			$welcome_sliders = carbon_get_theme_option('crb_main_sliders');
			foreach( $welcome_sliders as $welcome_slider ): ?>
			<div class="swiper-slide">
				<div class="welcome__item welcome__item-<?php echo $welcome_slider['crb_main_slider_position'] ?>" style="background: url(<?php echo $welcome_slider['crb_main_slider_img'] ?>); -webkit-background-size: cover; background-size: cover; background-position: top; ">
					<div class="container table-col mx-auto">
						<div class="welcome__item-title table">
							<?php echo $welcome_slider['crb_main_slider_title'] ?>
						</div>
						<div class="welcome__item-subtitle table">
							<?php echo $welcome_slider['crb_main_slider_subtitle'] ?>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
			<div class="swiper-button-next swiper-welcome-next"></div>
			<div class="swiper-button-prev swiper-welcome-prev"></div>
		</div>
	</div>
</div>