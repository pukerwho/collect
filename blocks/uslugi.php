<div class="uslugi">
	<div class="p-5">
		<div class="relative mb-5">
			<h2 class="collect-animate text-center">Послуги</h2>
			<div class="h2-after collect-animate">
				Наші послуги
			</div>	
		</div>
		<div class="w-full md:w-2/3 mx-auto">
			<?php 
				$services = carbon_get_theme_option('crb_services');
				foreach ($services as $service): 
			?>
				<details class="uslugi_item collect-animate mb-5">
				  <summary><?php echo $service['crb_service_title'] ?></summary>
				  <div class="shadow-lg px-5 py-3"><?php echo apply_filters( 'the_content', $service['crb_service_content'] ); ?></div>
				</details>		
			<?php endforeach; ?>
		</div>
	</div>
</div>