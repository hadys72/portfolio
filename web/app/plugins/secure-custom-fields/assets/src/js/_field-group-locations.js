( function ( $, undefined ) {
	/**
	 *  locationManager
	 *
	 *  Field group location rules functionality
	 *
	 *  @date	15/12/17
	 *  @since	ACF 5.7.0
	 *
	 *  @param	void
	 *  @return	void
	 */

	var locationManager = new acf.Model( {
		id: 'locationManager',
		wait: 'ready',

		events: {
			'click .add-location-rule': 'onClickAddRule',
			'click .add-location-group': 'onClickAddGroup',
			'click .remove-location-rule': 'onClickRemoveRule',
			'change .refresh-location-rule': 'onChangeRemoveRule',
		},

		initialize: function () {
			this.$el = $( '#acf-field-group-options' );
			this.updateGroupsClass();
		},

		onClickAddRule: function ( e, $el ) {
			this.addRule( $el.closest( 'tr' ) );
		},

		onClickRemoveRule: function ( e, $el ) {
			this.removeRule( $el.closest( 'tr' ) );
		},

		onChangeRemoveRule: function ( e, $el ) {
			this.changeRule( $el.closest( 'tr' ) );
		},

		onClickAddGroup: function ( e, $el ) {
			this.addGroup();
		},

		addRule: function ( $tr ) {
			acf.duplicate( $tr );
			this.updateGroupsClass();
		},

		removeRule: function ( $tr ) {
			if ( $tr.siblings( 'tr' ).length == 0 ) {
				$tr.closest( '.rule-group' ).remove();
			} else {
				$tr.remove();
			}

			// Update h4
			var $group = this.$( '.rule-group:first' );
			$group.find( 'h4' ).text( acf.__( 'Show this field group if' ) );

			this.updateGroupsClass();
		},

		changeRule: function ( $rule ) {
			// vars
			var $group = $rule.closest( '.rule-group' );
			var prefix = $rule
				.find( 'td.param select' )
				.attr( 'name' )
				.replace( '[param]', '' );

			// ajaxdata
			var ajaxdata = {};
			ajaxdata.action = 'acf/field_group/render_location_rule';
			ajaxdata.rule = acf.serialize( $rule, prefix );
			ajaxdata.rule.id = $rule.data( 'id' );
			ajaxdata.rule.group = $group.data( 'id' );

			// temp disable
			acf.disable( $rule.find( 'td.value' ) );

			const self = this;

			// ajax
			$.ajax( {
				url: acf.get( 'ajaxurl' ),
				data: acf.prepareForAjax( ajaxdata ),
				type: 'post',
				dataType: 'html',
				success: function ( html ) {
					if ( ! html ) return;
					$rule.replaceWith( html );
				},
			} );
		},

		addGroup: function () {
			// vars
			var $group = this.$( '.rule-group:last' );

			// duplicate
			$group2 = acf.duplicate( $group );

			// update h4
			$group2.find( 'h4' ).text( acf.__( 'or' ) );

			// remove all tr's except the first one
			$group2.find( 'tr' ).not( ':first' ).remove();

			// update the groups class
			this.updateGroupsClass();
		},

		updateGroupsClass: function () {
			var $group = this.$( '.rule-group:last' );

			var $ruleGroups = $group.closest( '.rule-groups' );

			var rows_count = $ruleGroups.find( '.acf-table tr' ).length;

			if ( rows_count > 1 ) {
				$ruleGroups.addClass( 'rule-groups-multiple' );
			} else {
				$ruleGroups.removeClass( 'rule-groups-multiple' );
			}
		},
	} );
} )( jQuery );
