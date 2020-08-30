<?php 
	$mysql = new mysql("localhost", "root", "", "wargaming");
	$mysql->query ("SET NAMES 'utf8'");
	$mysql->close ();
 ?>