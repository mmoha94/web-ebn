<?php
class stud_model extends model{
	public function getRows(){
		$sql ="SELECT * FROM tbl_studs";
		$rows= $this->getAll( $sql);
		return $rows;
	}
	public function getRowById($sid){
		$sql ="SELECT * FROM tbl_studs WHERE sid=$sid ";
		$row= $this->getRow( $sql);
		return $row;
	}	
	public function addRow($name , $avgr , $fid )
	{
		$sql="INSERT INTO tbl_studs (name,avgr,fid)VALUES('$name',$avgr,$fid); ";
		$res= $this->execQuery($sql);
		return $res;
	}
	public function editRow($sid,$name , $avgr , $fid )
	{
		$sql="UPDATE tbl_studs SET name='$name',avgr=$avgr,fid=$fid WHERE sid=$sid";
		$res= $this->execQuery($sql);
		return $res;
	}	
	public function deleteRow($sid )
	{
		$sql="DELETE FROM tbl_studs WHERE sid=$sid";
		$res= $this->execQuery($sql);
		return $res;
	}	
}
?>