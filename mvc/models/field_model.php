<?php
class field_model extends model{
	public function getRows(){
		$sql ="SELECT * FROM tbl_fields";
		$rows= $this->getAll( $sql);
		return $rows;
	}
	public function getRowById($id){
		$sql ="SELECT * FROM tbl_fields WHERE fid=$id";
		$row= $this->getRow( $sql);
		return $row;
	}	
	public function addRow($fname )
	{
		$sql="INSERT INTO tbl_fields (fname)VALUES('$fname'); ";
		$res= $this->execQuery($sql);
		return $res;
	}
	public function editRow($fid,$fname )
	{
		$sql="UPDATE tbl_fields SET fname='$fname' WHERE fid=$fid";
		$res= $this->execQuery($sql);
		return $res;
	}	
	public function deleteRow($fid )
	{
		$sql="DELETE FROM tbl_fields WHERE fid=$fid";
		$res= $this->execQuery($sql);
		return $res;
	}	
}
?>