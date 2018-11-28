//[editor Javascript]

//Project:	Aries Admin - Responsive Admin Template
//Version:  1.1
//Last change:  15/11/2017
//Primary use:   Used only for the wysihtml5 Editor 


//Add text editor
    $(function () {
    "use strict";
if($('#editor1').length >0){
    // Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace('editor1')
	//bootstrap WYSIHTML5 - text editor
	$('.editor').wysihtml5();		
}	
  });

