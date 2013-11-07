function json(sURL) {
	
	var sJSON = null;
	
	$.ajax( {
		
		'async': false,
		'global': false,
		'url': sURL,
		'dataType': "text",
		
		'success': function (data) {
			
			sJSON = data;
			
		}
		
	} );
	
	// Might as well use jQuery to parse the JSON so that older
	// browsers will work, too.
	
	return $.parseJSON(sJSON);

}

// This namespace contains all PHP constants and variables neatly organized
// in branches called vars and const.
var oPHP = json("assets/mod/json.php");