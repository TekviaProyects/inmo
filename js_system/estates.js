/*jslint vars: true, plusplus: true, devel: true, nomen: true, indent: 4, maxerr: 50 */ 
/*global define, $, jQuery, swal, usuarios, funciones, FB */
/*jslint browser: true*/
var estates = {
	
///////////////// ******** ----							 add							------ ************ //////////////////
//////// Load the view to new local
	// The parameters that can receive are:
		// div -> Div where the content is loaded
		
	add : function($objet){
		"use strict";
		console.log('==========> $objet add', $objet);
		
		$.ajax({
			data : $objet,
			url : 'views/add.php',
			type : 'post',
			dataType : 'html'
		}).done(function(resp) {
			console.log('==========> done add', resp);
			
			$("#"+$objet.div).html(resp);
		}).fail(function(resp) {
			console.log('==========> fail !!! view_new', resp);
			
			alert('A ocurrido un error al cargar los datos');
		});
	}
	
///////////////// ******** ----						END add							------ ************ //////////////////

};