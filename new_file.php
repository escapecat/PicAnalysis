<?php testReturn(); function testReturn() {  $array = array("point"=>array(      array("x"=>100, "y"=>100),      array("x"=>100, "y"=>50),      ),      "temp"=>array("max"=>20, "min" =>10),      );  echo json_encode($array); }?>
