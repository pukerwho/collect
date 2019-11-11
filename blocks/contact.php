<div class="contact p-5 mb-10">
	<div class="relative mb-5">
		<h2 class="text-center">КОНТАКТИ</h2>
		<div class="h2-after">
			Зв'язатися з нами
		</div>	
	</div>
	<div class="container mx-auto">
		<div class="w-full md:w-3/5 mx-auto">
			<div class="flex items-center mb-5">
				<div class="flex items-center font-semibold">
					<img src="<?php bloginfo('template_url') ?>/img/smartphone.svg" alt="" width="25px" class="mr-3">
					<div>Телефон для зв'язку з питань заборгованості: </div>
				</div> 
				<div>
					<?php echo carbon_get_theme_option( 'crb_contact_phone_zadolzh' ); ?>
				</div>
			</div>
			<div class="flex items-center mb-5">
				<div class="flex items-center font-semibold">
					<img src="<?php bloginfo('template_url') ?>/img/smartphone.svg" alt="" width="25px" class="mr-3">
					<div>Телефон для зв'язку з питань співробітництва: </div>
				</div> 
				<div>
					<?php echo carbon_get_theme_option( 'crb_contact_phone_sotr' ); ?>
				</div>
			</div>
			<div class="flex items-center mb-5">
				<div class="flex items-center font-semibold">
					<img src="<?php bloginfo('template_url') ?>/img/address.svg" alt="" width="25px" class="mr-3">
					<div>Адреса: </div>
				</div> 
				<div>
					<?php echo carbon_get_theme_option( 'crb_contact_address' ); ?>
				</div>
			</div>
			<div class="flex items-center mb-5">
				<div class="flex items-center font-semibold">
					<img src="<?php bloginfo('template_url') ?>/img/email.svg" alt="" width="25px" class="mr-3">
					<div>Email: </div>
				</div> 
				<div>
					<?php echo carbon_get_theme_option( 'crb_contact_email' ); ?>
				</div>
			</div>
			<div class="shadow-lg">
				<div class="bg-gray-400 text-xl font-semibold text-center uppercase py-3">
					Зворотній зв'язок	
				</div>
				<div class="p-4">
					Текст
					<?php echo carbon_get_theme_option( 'crb_contact_beforeform' ); ?>
				</div>
				<div class="p-4">
					<?php echo do_shortcode('[contact-form-7 id="11" title="Обратная связь"]') ?>
				</div>
			</div>
		</div>
	</div>
</div>