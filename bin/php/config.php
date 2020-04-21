<?php

/*	PHP Configuration
 */


/* Functions and Classes
 */
	require "functions.php";


/*	Live Constants
 */
	DEFINE("RP", "/var/www/html/cms/");
	DEFINE("RP_HTML", "/cms/");


/*	SQL Constants
 */
	DEFINE("DB_HOST", $_SERVER["DB_HOST"]);
	DEFINE("DB_USER", $_SERVER["DB_USER"]);
	DEFINE("DB_PASS", $_SERVER["DB_PASS"]);
	DEFINE("DB_DATA", $_SERVER["DB_DATA"]);


/*	Default HTML Configuration
 */
	$html_config = Array();

	// Header Config
	$html_config["lang"] = "en";
	$html_config["charset"] = "utf-8";
	$html_config["title"] = "ala * CMS";
	$html_config["description"] = "Simple Content Management.";
	$html_config["robots"] = "INDEX, FOLLOW";

	// Content Config
	$html_config["page"] = file_get_contents(RP."bin/html/page.html");
	$html_config["body"] = file_get_contents(RP."bin/html/body-default.html");

	// Resets CSS/JS Cache
	$html_config["rnd_id"] = str_shuffle('abcde');
	$html_config["rnd_val"] = rand(111, 999);

	// Handles Error Messages
	$html_config["msg_class"] = "hide";
	$html_config["message"] = null;


?>
