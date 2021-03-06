/*
*      Robo Gallery     
*      Version: 1.0
*      By Robosoft
*
*      Contact: https://robosoft.co/robogallery/ 
*      Created: 2015
*      Licensed under the GPLv2 license - http://opensource.org/licenses/gpl-2.0.php
*
*      Copyright (c) 2014-2020, Robosoft. All rights reserved.
*      Available only in  https://robosoft.co/robogallery/ 
*/

const roboGalleryOpenInformation = function(){
	window.open("https://robosoft.co/go.php?product=gallery&task=gopro",'_blank');
}

jQuery(function(){
	jQuery('.rbs_getproversion_blank').click( function(event ){
		event.preventDefault();
		window.open("https://robosoft.co/go.php?product=gallery&task=gopro",'_blank');
		if( jQuery(this).is(".rbs_close_dialog") ) window['roboGalleryDialog'].dialog("close");
	});
	jQuery('.rbs_getproversionfree_blank').click( function(event ){
		event.preventDefault();
		window.open("https://robosoft.co/go.php?product=gallery&task=goprofree",'_blank');
		if( jQuery(this).is(".rbs_close_dialog") ) window['roboGalleryDialog'].dialog("close");
	});
	jQuery('.rbs_getproversiontrans_blank').click( function(event ){
		event.preventDefault();
		window.open("https://robosoft.co/go.php?product=gallery&task=goprotrans",'_blank');
		if( jQuery(this).is(".rbs_close_dialog") ) window['roboGalleryDialog'].dialog("close");
	});
});