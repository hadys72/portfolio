<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> niveau-front-header__k__Gp3qTlxXlu-outer niveau-local-88-outer" data-kubio="kubio/navigation" id="navigation">
	<?php niveau_theme()->get('front-top-bar')->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav niveau-front-header__k__xLwdIMLPC_l-nav niveau-local-104-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:false,&quot;overlap&quot;:false}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section niveau-front-header__k__xLwdIMLPC_l-nav-section niveau-local-104-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer niveau-front-header__k__DqcL_YF9LKJ-outer niveau-local-105-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container niveau-front-header__k__MqErEXZ17Jm-container niveau-local-106-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-2 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner niveau-front-header__k__MqErEXZ17Jm-inner niveau-local-106-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-2 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container niveau-front-header__k__SFXC9Ze09eu-container niveau-local-107-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner niveau-front-header__k__SFXC9Ze09eu-inner niveau-local-107-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align niveau-front-header__k__SFXC9Ze09eu-align niveau-local-107-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php niveau_theme()->get('logo')->render(array (
  'wrapper_class' => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row niveau-front-header__k__0xSC3AT64-container niveau-local--container',
  'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  niveau-front-header__k__0xSC3AT64-image niveau-local--image',
  'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   niveau-front-header__k__0xSC3AT64-alternateImage niveau-local--alternateImage',
  'logo_text_class' => 'position-relative wp-block-kubio-logo__text  niveau-front-header__k__0xSC3AT64-text niveau-local--text',
)); ?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container niveau-front-header__k__DJ3dK9XoVZ-container niveau-local-109-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner niveau-front-header__k__DJ3dK9XoVZ-inner niveau-local-109-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align niveau-front-header__k__DJ3dK9XoVZ-align niveau-local-109-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container niveau-front-header__k__mRmagmI3LJv-container niveau-local-110-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container niveau-front-header__k__ZEkYpBrx7RA-container niveau-local-111-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner niveau-front-header__k__ZEkYpBrx7RA-inner niveau-local-111-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align niveau-front-header__k__ZEkYpBrx7RA-align niveau-local-111-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php niveau_theme()->get('header-menu')->render(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
