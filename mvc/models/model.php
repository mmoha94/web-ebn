<?php
class model 
{ 
    protected $conn; 
	public function __construct() 
	{ 
		$this->conn = mysqli_connect(DB_HOST.':3308' , DB_USER , DB_PASS );
		mysqli_select_db($this->conn, DB_NAME );
		mysqli_query($this->conn,"SET NAMES ".DB_COLL );
	} 
	public function execQuery($sql)
	{  
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	public function getAll($sql) 
	{ 
		$res = mysqli_query( $this->conn,$sql );
        $rows=array();
		while ( $row=mysqli_fetch_assoc($res))
		     $rows[]=$row;
		return $rows;	 
	} 

	public function getRow($sql) 
	{ 
		$res = mysqli_query(  $this->conn,$sql);
		$row=mysqli_fetch_assoc($res);
		return $row;
	} 	
}
?>