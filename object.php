<?php

/*
 * Author   : jeff
 * Filename : Object.php
 * Created  : 16 Oktober 2014
 * Modified : -
 */
/**
* 
*/
class Connect extends AnotherClass
{
	
	function __construct()
	{
		mysql_connect('localhost','root','root');
		mysql_select_db('database_name');
	}
}
class Object extends Connect{
	
	function ResultObject($sql){
		$response	= array();
		$statement	= mysql_query($sql);
		while($result =  mysql_fetch_object($statement)){
			return $result;
		}
	}

}