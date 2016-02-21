<?php
class DB_driver
{
	private $__cont;

	function connect(){
		echo "ham connect";
		if(!$this -> __cont)
		{
			$this -> __cont = mysqli_connect( 'localhost' , 'root' , '123456') or die( 'loi ket noi !' );
			mysqli_query( $this ->__cont , "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
			echo "thanh cmn cong !!!";
		}
	}

	function disconnect()
	{
		if( $this -> __cont )
		{
			mysql_close( $this ->__cont );
		}
	}

	function insert( $table , $data ){}

	function update( $table , $data , $where){}

	function remove( $table , $where ){}

	function getList( $table , $select , $where ){}

	function getRow( $table , $select , $where ){}
}


?>