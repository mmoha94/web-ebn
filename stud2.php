<?php

class Stud {
    private $name;
    private $family;
    private $avgr;
    public static $num_studs=0;
    public function __construct($name='',$family='',$avgr=0)
    {
        $this->name = $name;
        $this->family = $family;
        $this->avgr = $avgr;
        Self::$num_studs++;
    }

    public function setInfo($name,$family,$avgr)
    {
        $this->name = $name;
        $this->family = $family;
        $this->avgr = $avgr;
    }

    public function ShowInfo()
    {
        echo "<br>NAME:".$this->name;
        echo "<br>FAMILY:".$this->family;
        echo "<br>AVERGAE:".$this->avgr;
    }

    public static function search()
    {

    }
}

$s1= new Stud();
$s2= new Stud();
$s3= new Stud();
echo '<br>studs:'.Stud::$num_studs;
$s3= new Stud();
echo '<br>studs:'.Stud::$num_studs;

Stud::search();






?>