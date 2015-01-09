CKEDITOR.editorConfig = function( config )
{
	config.allowedContent = true;
	config.disableNativeSpellChecker = false;

	config.toolbar_default = [
		['Source'],
		['Styles', 'Format', 'RemoveFormat'],
		['PasteText','PasteFromWord'],
		['Bold','Italic','Underline','StrikeThrough','-'],
		['NumberedList','BulletedList','-'],
		['Image','Link','Unlink','Anchor'],
		['Table','HorizontalRule','SpecialChar'],
		['Maximize']
	];

	config.toolbar_basic =[
		['Source'],
		['Styles', 'Format'],
		['Bold','Italic'],
		['NumberedList','BulletedList','-'],
		['RemoveFormat']
	];
	
	config.toolbar_default = config.toolbar_basic;

	var customStyles = [
		{name:'Lead (first paragraph)',element:'p',attributes:{'class':'lead'}},
	];

	config.stylesSet = customStyles;
};