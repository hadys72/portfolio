<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-hero  position-relative wp-block-kubio-hero__outer niveau-front-header__k__J6FPNZyUrn-outer niveau-local-159-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/hero" id="hero">
	<?php $component->printBackground(); ?><?php $component->printSeparator(); ?>
	<div class="position-relative wp-block-kubio-hero__inner niveau-front-header__k__J6FPNZyUrn-inner niveau-local-159-inner h-navigation-padding h-section-grid-container h-section-boxed-container">
		<script type='text/javascript'>
			(function () {
				// forEach polyfill
				if (!NodeList.prototype.forEach) {
					NodeList.prototype.forEach = function (callback) {
						for (var i = 0; i < this.length; i++) {
							callback.call(this, this.item(i));
						}
					}
				}
				var navigation = document.querySelector('[data-colibri-navigation-overlap="true"], .h-navigation_overlap');
				if (navigation) {
					var els = document
						.querySelectorAll('.h-navigation-padding');
					if (els.length) {
						els.forEach(function (item) {
							item.style.paddingTop = navigation.offsetHeight + "px";
						});
					}
				}
			})();
		</script>
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container niveau-front-header__k__bgnhUSaQMl-container niveau-local-160-container gutters-row-lg-3 gutters-row-v-lg-0 gutters-row-md-3 gutters-row-v-md-0 gutters-row-3 gutters-row-v-3" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner niveau-front-header__k__bgnhUSaQMl-inner niveau-local-160-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-3 gutters-col-v-lg-0 gutters-col-md-3 gutters-col-v-md-0 gutters-col-3 gutters-col-v-3">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container niveau-front-header__k__9IGHpldIpw-container niveau-local-161-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner niveau-front-header__k__9IGHpldIpw-inner niveau-local-161-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-3 v-inner-md-0 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align niveau-front-header__k__9IGHpldIpw-align niveau-local-161-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
							<?php niveau_theme()->get('front-title')->render(); ?><?php niveau_theme()->get('front-subtitle')->render(); ?><?php niveau_theme()->get('buttons')->render(); ?>
						</div>
					</div>
				</div>
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container niveau-front-header__k__ZI-RHK7pR-container niveau-local-170-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner niveau-front-header__k__ZI-RHK7pR-inner niveau-local-170-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-3 v-inner-md-0 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align niveau-front-header__k__ZI-RHK7pR-align niveau-local-170-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<?php niveau_theme()->get('front-image')->render(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
