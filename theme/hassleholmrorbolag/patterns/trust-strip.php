<?php
/**
 * Title: Faktarad
 * Slug: hassleholmrorbolag/trust-strip
 * Categories: hassleholmrorbolag-sections
 * Description: Tunn rad med de fyra sakerna en kund vill veta direkt. Ingen ikon, ingen rubrik.
 */
?>
<!-- wp:group {"align":"full","className":"ha-sec-trust","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"ink","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull ha-sec-trust has-ink-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","className":"ha-factbar","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide ha-factbar"><?php
$facts = array(
	'Fast pris skriftligt',
	'ROT-avdraget dras direkt på fakturan',
	'10 års garanti på arbetet',
	'F-skatt, försäkring & kollektivavtal',
);
foreach ( $facts as $f ) :
	?><!-- wp:paragraph {"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-small-font-size"><?php echo esc_html( $f ); ?></p>
<!-- /wp:paragraph -->

<?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
