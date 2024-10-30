<?php
function MadChat_register_options_page() {
	add_submenu_page('options-general.php',__('MadChat Affiliates', MadChat_TEXT_DOMAIN), __('MadChat Affiliates', MadChat_TEXT_DOMAIN), 'manage_options', MadChat_TEXT_DOMAIN.'-banners', 'MadChat_banners_page');
}
add_action('admin_menu', 'MadChat_register_options_page');

function MadChat_banners_page() {
?>
<div id="MadChat-affiliates">
	<h2><?php _e("MadChat Affiliate Program", MadChat_TEXT_DOMAIN); ?></h2>
	<div class="MadChat-page">
		<?php settings_fields('MadChat_options'); ?>
		<h3><?php _e("Shortcode Usage", MadChat_TEXT_DOMAIN); ?></h3>
		<p><?php _e("You may add following short code to your post or using the Text widget as sidebar.", MadChat_TEXT_DOMAIN); ?></p>
		<div>
						<div class="shortcode_quoteby">
						<div class="shortcode_quotebyauthor">Map</div>
						<center>
						<?php echo do_shortcode( '[MadChat type="map" refid="0" width="medium"]' ); ?><br />
						<textarea class="webmastercode">[MadChat type="map" refid="YOURID" width="medium"]</textarea><br />
						</center></div>
			<div class="padding-bottom"></div>
						<div class="shortcode_quoteby">
						<div class="shortcode_quotebyauthor">Girls</div>
						<center>
						<?php echo do_shortcode( '[MadChat type="girls" refid="0" width="300"]' ); ?><br />
						<textarea class="webmastercode">[MadChat type="girls" refid="YOURID" width="300"]</textarea><br />
						</center></div>
			<div class="padding-bottom"></div>
						<div class="shortcode_quoteby">
						<div class="shortcode_quotebyauthor">Roulette</div>
						<center>
						<?php echo do_shortcode( '[MadChat type="roulette" refid="0" width="small"]' ); ?><br />
						<textarea class="webmastercode">[MadChat type="roulette" refid="YOURID" width="small"]</textarea><br />
						</center></div>
		</div>
	</div>
</div>
<?php
}
?>