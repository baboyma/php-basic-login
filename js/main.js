/*
 * Partner's page
 */

jQuery(function($) {

	//logout ==> call this function to logout or load this url: ./?action=exit
	var signOut = function() {
		$.ajax({
			type: "post",
			url: "./",
			data: {
				action: "exit"
			}
			dataType: "json",
			success: function(data) {
				console.log("Logged out.");
			},
			error: function() {
				console.log("Error logging out.");
			}
		})
	};

});

