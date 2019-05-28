	$(document).ready(function() {
		<!-- Filter for the fields state and country
		$.fn.dataTable.ext.search.push(
			function( settings, data, dataIndex ) {
				var stateFilter = $('#filter-state').val();
				var countryFilter = $('#filter-country').val();
		 
				<!-- Only realize filter when one option is selected -->
				if (
					(stateFilter == data[1]  || stateFilter == 'All') &&
					(countryFilter == data[0]  || countryFilter == 'All')
				){
					return true;
				}
				
				return false;
			}
		);

		<!-- Start DataTable with configurations -->
		var table;

		table = $('#mainTable').DataTable({
			"info":     false,
			"bFilter": true,
			"lengthChange": false,
			"dom" :"tp"
		});

		<!-- Add refresh of dataTable on select change -->
		$('.filterTable').change( function() {
			table.draw();
		} );

	});