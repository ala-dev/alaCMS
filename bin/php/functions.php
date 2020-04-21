<?php

/*	CMS - Functions
 */


/*	Build HTML
 */
	function build_html($config) {

		$html = $config["page"];
		$html = str_replace("%body%", $config["body"], $html);

		$html = arr_replace($config, $html);
		$html = str_replace("%RP%", RP_HTML, $html);

		return $html;

	}



/*	Array Replace
 */
	function arr_replace($array, $string) {
		foreach($array as $key => $value)
			$string = str_replace("%$key%", $value, $string);
		return $string;
	}


/*	Refine String
 */
	function refine($string) {
		$string = trim($string);
		$string = preg_replace("/\n|\t/", "", $string);
		return $string;
	}


/*	Sanitize String
 */
	function sanitize($string) {
		$string = preg_replace("/[^a-zA-Z0-9\s]/", "", $string);
		return $string;
	}


/*	Format Date
 */
	function format_date($date) {
		$date = date("l, F j", strtotime($date));
		return $date;
	}

/*	Format Date Short
 */
	function format_date_short($date) {
		$date = date("D, M j", strtotime($date));
		return $date;
	}


/*	Format Time
 */
	function format_time($time) {
		$time = date("g:i A", strtotime($time));
		return $time;
	}


/*	SQL_CONNECT()
 */
	function SQL_CONNECT() {
		$CON = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATA) or 
			die("Connection Failed");
		return $CON;
	}


?>

