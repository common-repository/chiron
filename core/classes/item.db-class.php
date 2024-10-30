<?php


class chiron_item_db{
	
	public function url_exists($url){
		global $chiron_db;
		$query = "SELECT count(url) FROM ".$chiron_db->prefix."chiron_item WHERE url='".$chiron_db->connection->real_escape_string($url)."'";  
	    $chiron_db->query($query) or print("Query failed: ".mysqli_error()." Query:".$query);
	    return $chiron_db->fetch_array();
	}
	
	public function item_add($source, $date, $title, $text, $url){
		global $chiron_db;
		$query = "INSERT INTO `".$chiron_db->prefix."chiron_item` (`id`, `id_source` ,  `timestamp` , `title` ,  `text` ,  `url` ) VALUES (NULL, '".$source."', '".$date."', '".addslashes($title)."', '".addslashes($text)."', '".$chiron_db->connection->real_escape_string($url)."' );";
	    return $chiron_db->query($query) or print("Query failed: ".mysqli_error()." Query:".$query);
	}
	
}


?>