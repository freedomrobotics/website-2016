<?php
// Includes javascript libraries and frameworks as specified.
function includeJS($JQUERY, $ANGULAR, $DOJO, $MOO, $SPF, $THREE, $WEBFONT){
	//JQuery Libraries
	$jQueryLibs = explode(",", preg_replace('/\s+/', '', $JQUERY));
	foreach ($jQueryLibs as $var){
		$lib = explode(":", $var, 2);
		if(strcasecmp($lib[0],"core") == 0){
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/", $lib[1],"/jquery.min.js\"></script>\n";
		}
		if(strcasecmp($lib[0],"ui") == 0){
			echo "	<link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/", $lib[1],"/themes/smoothness/jquery-ui.css\">\n";
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/", $lib[1],"/jquery-ui.min.js\"></script>\n";
		}
		if(strcasecmp($lib[0],"mobile") == 0){
			echo "	<link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jquerymobile/", $lib[1],"/jquery.mobile.min.css\">\n";
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/jquerymobile/", $lib[1],"/jquery.mobile.min.js\"></script>\n";
		}
	}
	unset ($var);

	//AngularJS Libraries
	$AngularLibs = explode(",", preg_replace('/\s+/', '', $ANGULAR));
	foreach ($AngularLibs as $var){
		$lib = explode(":", $var, 2);
		if(strcasecmp($lib[0],"core") == 0){
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/", $lib[1],"/angular.min.js\"></script>\n";
		}
		if(strcasecmp($lib[0],"material") == 0){
			echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/angular_material/", $lib[1],"/angular-material.min.js\"></script>\n";
		}
	}
	unset ($var);

	//Dojo Toolkit
	if ($DOJO != ""){
		echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/dojo/", $DOJO, "/dojo/dojo.js\"></script>\n";
	}

	//MooTools
	if ($MOO != ""){
		echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/mootools/", $MOO, "/mootools.min.js\"></script>\n";
	}

	//SPF
	if ($SPF != ""){
		echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/spf/", $SPF, "/spf.js\"></script>\n";
	}

	//Three.js
	if ($THREE != ""){
		echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/threejs/", $THREE, "/three.min.js\"></script>\n";
	}

	//Web font loader
	if ($WEBFONT != ""){
		echo "	<script src=\"https://ajax.googleapis.com/ajax/libs/webfont/", $WEBFONT, "/webfont.js\"></script>\n";
	}
}
?>
