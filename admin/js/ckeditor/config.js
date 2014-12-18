/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config
	CKEDITOR.config.extraPlugins = 'lightbox';

	// KCFinder
	config.filebrowserBrowseUrl = '../js/kcfinder/browse.php?type=images';
	config.filebrowserImageBrowseUrl = '../js/kcfinder/browse.php?type=images';
	config.filebrowserFlashBrowseUrl = '../js/kcfinder/browse.php?type=images';
	config.filebrowserUploadUrl = '../js/kcfinder/upload.php?type=images';
	config.filebrowserImageUploadUrl = '../js/kcfinder/upload.php?type=images';
	config.filebrowserFlashUploadUrl = '../js/kcfinder/upload.php?type=images';
	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links',       groups:['Link','Unlink','Anchor','lightbox'] },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];

	

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';

	
};
