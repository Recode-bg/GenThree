<?php

// Function to connect to the DB 
function OpenCon(){
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "yohoho&aBOTTLE0R";
	$db = "genthree_new";
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
	
	return $conn;
	}
	
	function CloseCon($conn)
	{
	$conn -> close();
	}
   

// Function to check string STARTING with given substring 
function startsWith ($string, $startString) 
{ 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
}


// Function to check string ENDING with given substring 
function endsWith($string_in, $string_look){
    $length = strlen($string_look);
    if ($length == 0) {
        return true;
    }

    return (substr($string_in, -$length) === $string_look);
	}

?>