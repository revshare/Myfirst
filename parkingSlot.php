<?php



class parkingSlot{
	public $smallSlot = array();


	// public function __construct(){
	// 	$this->smallSlot = array();

	// }


	public function setslots(){
		$x = 5;
		
		for($r=1;$r<=$x;$r++){
			$this->smallSlot[] = array('s'.$r => 'available');
		}

		$ctr = 1;
		foreach($this->smallSlot as $ind => $val){
			echo $val['s'.$ctr].'<br>';
			$ctr++;
		}
	}

	public function getSlot(){
		//print_r($this->smallSlot);
		 return $this->smallSlot[0]["s1"];
		// $key = 's3';
		// $ctr = 1;
		foreach($this->smallSlot as $ind => $val){
			if($key === $val['s'.$ctr]){
			echo $this->smallSlot[$ind][$key] = 'Unavailable';
			}
		}

	}

	public function park(){

		

	}

}




?>