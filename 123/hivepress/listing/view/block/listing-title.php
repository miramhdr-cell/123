<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="hp-listing__title-row">
	<h3 class="hp-listing__title">
		<a href="<?php echo esc_url( hivepress()->router->get_url( 'listing_view_page', [ 'listing_id' => $listing->get_id() ] ) ); ?>">
			<?php echo esc_html( $listing->get_title() ); ?>
		</a>
	</h3>

	<div class="hp-listing__socials">
		Соцсети: <span class="hp-listing__socials-status">Нет</span>
	</div>
</div>
