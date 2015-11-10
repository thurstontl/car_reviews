/* JS File */

// Start Ready
$(document).ready(function() {  

	// Live Search
	// On Search Submit and Get Results
	function search() {
		var query_value = $('input#find_user').val();
		if(query_value !== ''){
			$.ajax({
				type: "POST",
				url: "search.php",
				data: { query: query_value },
				cache: false,
				success: function(html){
					$("#result").html(html);
				}
			});
		}return false;    
	}

	$("input#find_user").live("keyup", function(e) {
		// Set Timeout
		clearTimeout($.data(this, 'timer'));

		// Set Search String
		var search_string = $(this).val();

		// Do Search
		if (search_string == '') {
			$("#result").fadeOut();
		}else{
			$("#result").fadeIn();
			$(this).data('timer', setTimeout(search, 100));
		};
	});

});