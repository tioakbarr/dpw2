<?php 

	class Animal {
		public $cat, $dog, $eagle, $duck;

		public function terbang() {
			if($this->jumlah_kaki === 4) {
				echo "Tidak Bisa Terbang";
			} else {
				echo "Bisa Terbang";
			}
		}

	}

	class Kucing extends Animal {
		public function bersuara(){
			return "Meoooooooong";
		}
	}

	class Anjing extends Animal {
		public function bersuara(){
			return "GukGuk";
		}
	}

	class Elang extends Animal {
		public function bersuara(){
			return "Miiiiiiiiiiip";
		}
	}

	class Angsa extends Animal {
		public function bersuara(){
			return "Kwak Kwek Kwak Kwek";
		}
	}

	$cat = new Kucing;
	$cat->jumlah_kaki = 4;
	echo "Cat Adalah Kucing <br>";
	echo "Jumlah Kakinya Adalah ".$cat->jumlah_kaki."<br>";
	echo $cat->terbang()."<br>";
	echo "Suaranya Adalah ".$cat->bersuara()."<br>";
	echo "-------------------------------------------<br>";

	$dog = new Anjing;
	$dog->jumlah_kaki = 4;
	echo "Dog Adalah Anjing <br>";
	echo "Jumlah Kakinya Adalah ".$dog->jumlah_kaki."<br>";
	echo $dog->terbang()."<br>";
	echo "Suaranya Adalah ".$dog->bersuara()."<br>";
	echo "-------------------------------------------<br>";

	$eagle = new Elang;
	$eagle->jumlah_kaki = 2;
	echo "Eagle Adalah Elang <br>";
	echo "Jumlah Kakinya Adalah ".$eagle->jumlah_kaki."<br>";
	echo $eagle->terbang()."<br>";
	echo "Suaranya Adalah ".$eagle->bersuara()."<br>";
	echo "-------------------------------------------<br>";

	$duck = new Angsa;
	$duck->jumlah_kaki = 2;
	echo "Duck Adalah Angsa <br>";
	echo "Jumlah Kakinya Adalah ".$duck->jumlah_kaki."<br>";
	echo $duck->terbang()."<br>";
	echo "Suaranya Adalah ".$duck->bersuara()."<br>";
	echo "-------------------------------------------<br>";

?> 