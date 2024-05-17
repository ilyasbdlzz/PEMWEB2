<?php

class Lingkaran {
    //Property / variabel
    private $jari;
    const PHI = 3.14;
    

    //Method / Function
    function __construct($r){
        $this->jari=$r ;                           //cara panggil property di class atas pakai $this->namavariabel
    }
    function getLuas(){
        return self::PHI * $this->jari * $this->jari;
    }
    function getKeliling(){
        return 2 * self ::PHI * $this->jari;
    }
}

//Instance Object
$lingkaran1 = new Lingkaran(10);
echo 'Luas Lingkaran1 = ' . $lingkaran1->getLuas();
echo '<br>';
// $lingkaran2 = new Lingkaran(20);
echo 'Keliling Lingkaran2= ' . $lingkaran1->getKeliling();
