<?php
namespace App\Admin;
/**
 * 
 */
class Database
{
	
	public function connect(){
		$link = mysqli_connect('localhost','root','','zoomshapertask');
		return $link;
	}

	

}

?>