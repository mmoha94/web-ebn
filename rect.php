<?php

class Rect{
    private $tool;
    private $arz;
    public function __construct( $t , $a )
    {
        $this->tool = $t;
        $this->arz  = $a;
    }
    public function mohit()
    {
        $m = ($this->tool + $this->arz ) * 2; 
        return $m;
    }
    public static function mohit2($t , $a )
    {
        $m = ($t + $a ) * 2; 
        return $m;  
    }
}

$r1 = new Rect(15 , 6 );
$mo = $r1->mohit();
echo $mo;


$m = Rect::mohit2( 23, 20 );



