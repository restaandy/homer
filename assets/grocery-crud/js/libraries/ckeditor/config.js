CKEDITOR.editorConfig = function( config )
{
  // Define changes to default configuration here. For example:
  // config.language = 'fr';
  config.uiColor = '#AADC6E';
  config.removePlugins = 'anchor,image,elementspath,enterkey,entities,forms,pastefromword,htmldataprocessor,specialchar,horizontalrule,wsc' ;
  config.toolbar_Full = [
  ['Styles','Format','Font','FontSize'],
  '/',
  ['Bold','Italic','Underline','StrikeThrough','-','Undo','Redo','-','Cut','Copy','Paste','Find','Replace','-','Outdent','Indent','-','Print'],
  '/',
  ['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
  ['Image','Table','-','Link','Flash','Smiley','TextColor','BGColor','Source']
  ] ;
 
};