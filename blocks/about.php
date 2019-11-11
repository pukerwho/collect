<div class="p-5 mb-10">
	<div class="relative mb-5">
		<h2 class="text-center">Про компанію</h2>
		<div class="h2-after">
			Про нас
		</div>	
	</div>
	<div class="flex items-center flex-col md:flex-row">
		<div class="w-full md:w-1/2 h-full about_img pr-0 mb-3 md:pr-5 md:mb-0">
			<img src="<?php echo carbon_get_theme_option( 'crb_about_photo' ); ?>" alt="" class="w-full h-full object-cover">
		</div>
		<div class="w-full md:w-1/2 pl-0 md:pl-5">
			<div class="text-3xl uppercase font-bold mb-5"><?php echo carbon_get_theme_option( 'crb_about_title' ); ?></div>
			<div class="text-lg mb-5">
				<?php echo carbon_get_theme_option( 'crb_about_description' ); ?>
			</div>
			<div>
				<?php 
					$list = carbon_get_theme_option( 'crb_about_list' );
					foreach ($list as $li): 
				?>
					<li><?php echo $li['crb_about_li'] ?></li>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>