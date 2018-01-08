<?php
	include_once"ddb.php";
	class Connect
	{
		function acesso()
		{
			$conn = new mysqli(S_HOST, S_USER, S_PASS, S_DB);
			return $conn;
		}
	}