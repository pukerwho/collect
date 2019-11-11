<div class="uslugi">
	<div class="p-5">
		<div class="relative mb-5">
			<h2 class="text-center">Послуги</h2>
			<div class="h2-after">
				Наші послуги
			</div>	
		</div>
		<div class="w-2/3 mx-auto">
			<?php 
				$services = carbon_get_theme_option('crb_services');
				foreach ($services as $service): 
			?>
				<details class="mb-5">
				  <summary><?php echo $service['crb_service_title'] ?></summary>
				  <p class="shadow-lg px-5 py-3"><?php echo $service['crb_service_content'] ?></p>
				</details>		
			<?php endforeach; ?>
		</div>
	</div>
</div>