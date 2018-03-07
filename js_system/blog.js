/*jslint vars: true, plusplus: true, devel: true, nomen: true, indent: 4, maxerr: 50 */ 
/*global define, $, jQuery, swal, usuarios, funciones, FB */
/*jslint browser: true*/
var blog = {
	
///////////////// ******** ----							 add							------ ************ //////////////////
//////// Load the view to new local
	// The parameters that can receive are:
		// div -> Div where the content is loaded
		
	add : function($objet){
		"use strict";
		console.log('==========> $objet add', $objet);
		
		$.ajax({
			data : $objet,
			url : 'views/add_blog.php',
			type : 'post',
			dataType : 'html'
		}).done(function(resp) {
			console.log('==========> done add', resp);
			
			$("#"+$objet.div).html(resp);
		}).fail(function(resp) {
			console.log('==========> fail !!! view_new', resp);
			
			alert('A ocurrido un error al cargar los datos');
		});
	},
	
///////////////// ******** ----						END add							------ ************ //////////////////

///////////////// ******** ----						list_blog					------ ************ //////////////////
//////// Check the blog and load a view
	// The parameters that can receive are:
		// div -> Div where the content is loaded
		// order -> Order SQL
		// limit -> Limit of rows
		
	list_blog : function($objet){
		"use strict";
		console.log('==========> $objet list_blog', $objet);
		
		var view = (!$objet.view) ? 'list_blog' : $objet.view;
		
		$.ajax({
			data : $objet,
			url : 'views/'+view+'.php',
			type : 'post',
			dataType : 'html'
		}).done(function(resp) {
			console.log('==========> done list_blog', resp);
			
			$("#"+$objet.div).html(resp);
		}).fail(function(resp) {
			console.log('==========> fail !!! list_blog', resp);
			
			alert('A ocurrido un error al cargar los datos');
		});
	},
	
///////////////// ******** ----						END list_blog				------ ************ //////////////////

///////////////// ******** ----						details							------ ************ //////////////////
//////// Load a details view
	// The parameters that can receive are:
		
		
	details : function($objet){
		"use strict";
		console.log('==========> $objet details', $objet);
		
		$.ajax({
			data : $objet,
			url : 'views/blog_details.php',
			type : 'post',
			dataType : 'html'
		}).done(function(resp) {
			console.log('==========> done details', resp);
			
			$("#"+$objet.div).html(resp);
		}).fail(function(resp) {
			console.log('==========> fail !!! details', resp);
			
			alert('A ocurrido un error al cargar los datos');
		});
	}
	
///////////////// ******** ----						END details						------ ************ //////////////////

};