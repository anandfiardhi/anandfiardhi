<?php 
class Student { 
	var $nama; 
	var $nilai; 
	function setData($nam, $nil) { 
		$this->nama = $nam; 
		$this->nilai = $nil; } //GETTER 
		function getHasil() { 
			switch ($this->nilai){ 
				case (($this->nilai >= 91) && ($this->nilai <= 100)): 
				return 'A'; 
				break; 
				case (($this->nilai >= 81) && ($this->nilai <= 90)): 
				return 'B'; 
				break; 
				case (($this->nilai >= 71) && ($this->nilai <= 80)): 
				return 'C+'; 
				break; 
				case (($this->nilai >= 61) && ($this->nilai <= 70)): 
				return 'C'; 
				break; 
				default: 
				return 'D'; 
				break; 
				} 
				} 
				} 
				$murid = new Student; 
				$murid->setData('Anand Fiardhi', 68); 
				echo "<h1 style='color:blue; font-size:24px; font-weight:bold;'>hasil studi mahasiswa : ".$murid->getHasil()."</h1>"; 
                echo "<h1 style='color:blue; font-size:24px; font-weight:bold;'>nilai studi : (68) ".$murid->getHasil()."</h1>"; 
                echo "<h1 style='color:blue; font-size:24px; font-weight:bold;'>nilai akhir  : ".$murid->getHasil()."</h1>"; 
                echo "<h1 style='color:blue; font-size:24px; font-weight:bold;'>status kelulusan : Lulus ".$murid->getHasil()."</h1>"; 
?>   

