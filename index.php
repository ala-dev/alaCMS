<?php

/*	ala * CMS - Home Page
 */


/*	Load Configuration
 */
	require "bin/php/config.php";


/*	Configure HTML
 */
	$title = "ala * CMS";
	$description = "Simple Content Management.";
	$content = file_get_contents("main.html");


/*	Reset HTML Configuration
 */
	$html_config["title"] = $title;
	$html_config["description"] = $description;
	$html_config["content"] = $content;


/*	Print HTML
 */
	$page = build_html($html_config);
	print $page;


?>


