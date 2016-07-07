<?php
// Includes javascript libraries and frameworks as specified.
function includeJS($JQUERY, $ANGULAR, $DOJO, $MOO, $SPF, $THREE, $WEBFONT){
	//JQuery Libraries
	$jQueryLibs = explode(",", preg_replace('/\s+/', '', $JQUERY));
	foreach ($jQueryLibs as $var){
		$lib = explode(":", $var, 2);
		if(strcasecmp($lib[0],"core") == 0){
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/", $lib[1],"/jquery.min.js\" defer></script>\n";
		}
		if(strcasecmp($lib[0],"ui") == 0){
			echo "	<link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/", $lib[1],"/themes/smoothness/jquery-ui.css\">\n";
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/", $lib[1],"/jquery-ui.min.js\" defer></script>\n";
		}
		if(strcasecmp($lib[0],"mobile") == 0){
			echo "	<link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jquerymobile/", $lib[1],"/jquery.mobile.min.css\">\n";
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/jquerymobile/", $lib[1],"/jquery.mobile.min.js\" defer></script>\n";
		}
	}
	unset ($var);

	//AngularJS Libraries
	$AngularLibs = explode(",", preg_replace('/\s+/', '', $ANGULAR));
	foreach ($AngularLibs as $var){
		$lib = explode(":", $var, 2);
		if(strcasecmp($lib[0],"core") == 0){
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/", $lib[1],"/angular.min.js\" defer></script>\n";
		}
		if(strcasecmp($lib[0],"animate") == 0){
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/", $lib[1],"/angular-animate.min.js\" defer></script>\n";
		}
		if(strcasecmp($lib[0],"aria") == 0){
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/", $lib[1],"/angular-aria.min.js\" defer></script>\n";
		}
		if(strcasecmp($lib[0],"messages") == 0){
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/", $lib[1],"/angular-messages.min.js\" defer></script>\n";
		}
		if(strcasecmp($lib[0],"material") == 0){
			echo "	<link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/angular_material/", $lib[1],"/angular-material.min.css\">\n";
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/angular_material/", $lib[1],"/angular-material.min.js\" defer></script>\n";
		}
	}
	unset ($var);

	//Dojo Toolkit
	if ($DOJO != ""){
		echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/dojo/", $DOJO, "/dojo/dojo.js\" async></script>\n";
	}

	//MooTools
	if ($MOO != ""){
		echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/mootools/", $MOO, "/mootools.min.js\" async></script>\n";
	}

	//SPF
	if ($SPF != ""){
		echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/spf/", $SPF, "/spf.js\" async></script>\n";
	}

	//Three.js
	if ($THREE != ""){
		echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/threejs/", $THREE, "/three.min.js\" async></script>\n";
	}

	//Web font loader
	if ($WEBFONT != ""){
		echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/webfont/", $WEBFONT, "/webfont.js\" async></script>\n";
	}
}
?>
