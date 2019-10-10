<?php

class Item
{

	function __construct()
	{
		//Передается id объекта
	}
	private function init()
	{
		//Одноразовый вызов этого метода
		$query ="SELECT nsme, status FROM objects";
	}

	private $id = intval();
	private $name = "";
	private $status = intval();
	private $changed = boolval();




}





 ?>