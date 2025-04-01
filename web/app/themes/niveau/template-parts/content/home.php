<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer niveau-home__k__1MCYzfcZN-outer niveau-local-362-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner niveau-home__k__1MCYzfcZN-inner niveau-local-362-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container niveau-home__k__baLWB4dRKjp-container niveau-local-363-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-3 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner niveau-home__k__baLWB4dRKjp-inner niveau-local-363-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-3 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container niveau-home__k__kxeqsSpdy-n-container niveau-local-364-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner niveau-home__k__kxeqsSpdy-n-inner niveau-local-364-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align niveau-home__k__kxeqsSpdy-n-align niveau-local-364-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container niveau-home__k__CtKC_EuIZL-container niveau-local-365-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container niveau-home__k__vrf0UGkWrN-container niveau-local-366-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:true,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner niveau-home__k__vrf0UGkWrN-inner niveau-local-366-inner h-row">
										<?php niveau_theme()->get('archive-loop')->render(array (
  'view' => 'content/home/loop-item',
)); ?>
									</div>
								</div>
								<?php if(niveau_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container niveau-home__k__vD7AVCTELY-container niveau-local-377-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner niveau-home__k__vD7AVCTELY-inner niveau-local-377-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container niveau-home__k__tBYU0uM8Xx-container niveau-local-378-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner niveau-home__k__tBYU0uM8Xx-inner niveau-local-378-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align niveau-home__k__tBYU0uM8Xx-align niveau-local-378-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(niveau_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing niveau-home__k__ELgmeRXRD--spacing niveau-local-379-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer niveau-home__k__ELgmeRXRD--outer niveau-local-379-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link niveau-home__k__ELgmeRXRD--link niveau-local-379-link h-w-100 h-global-transition" href="<?php niveau_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text niveau-home__k__ELgmeRXRD--text niveau-local-379-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'niveau'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container niveau-home__k__P2OarhUKUK-container niveau-local-380-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner niveau-home__k__P2OarhUKUK-inner niveau-local-380-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align niveau-home__k__P2OarhUKUK-align niveau-local-380-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer niveau-home__k__tRiQFlrj8q-outer niveau-local-381-outer" data-kubio="kubio/pagination-numbers">
														<?php niveau_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container niveau-home__k__2nd5yuWmz9-container niveau-local-382-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner niveau-home__k__2nd5yuWmz9-inner niveau-local-382-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align niveau-home__k__2nd5yuWmz9-align niveau-local-382-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(niveau_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing niveau-home__k__ACSe8L2gsX-spacing niveau-local-383-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer niveau-home__k__ACSe8L2gsX-outer niveau-local-383-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link niveau-home__k__ACSe8L2gsX-link niveau-local-383-link h-w-100 h-global-transition" href="<?php niveau_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text niveau-home__k__ACSe8L2gsX-text niveau-local-383-text kubio-inherit-typography">
																	<?php esc_html_e('Next', 'niveau'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
