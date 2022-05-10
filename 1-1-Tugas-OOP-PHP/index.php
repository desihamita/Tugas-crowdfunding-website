<?php
    trait Hewan {
        public $nama;
        public $darah = 50;
        public $jumlahKaki;
        public $keahlian;
        
        public function Atraksi() {
            return $this->nama . ' sedang ' . $this->keahlian;
        }
    }

    abstract class Fight {
        use Hewan;
        
        public $attackPower;
        public $defencePower;

        public function serang($hewan) 
        {
            echo $this->nama . ' sedang menyerang ' . $hewan->nama . ', ';
            $hewan->diserang($this);
        } 
        
        public function diserang($hewan) 
        {
            echo $this->nama . ' sedang diserang '. $hewan->nama;
            $this->darah = $this->darah - ($hewan->attackPower / $this->defencePower);
        }

        public function getInfo()
        {
            echo "<br>";
            echo "Nama : {$this->nama}";
            echo "<br>";
            echo "Keahlian : {$this->keahlian}";
            echo "<br>";
            echo "Attack Power : {$this->attackPower}";
            echo "<br>";
            echo "Defence Power : {$this->defencePower}";
            echo "<br>";
            echo "Darah : {$this->darah}";
            echo "<br>";
        }

        abstract function getInfoHewan();
    }

    class Elang extends Fight{
        public function __construct($nama){
            $this->nama = $nama;
            $this->jumlahKaki = 2;
            $this->keahlian = 'Terbang tinggi';
            $this->attackPower = 10;
            $this->defencePower = 5;
        }
        
        public function getInfoHewan()
        {
            echo "Jenis Hewan : Elang ";
            $this->getInfo();
        }
    } 
    
    class Harimau extends Fight{
        public function __construct($nama){
            $this->nama = $nama;
            $this->jumlahKaki = 4;
            $this->keahlian = 'Lari cepat';
            $this->attackPower = 7;
            $this->defencePower = 8;
        }

        public function getInfoHewan()
        {
            echo "Jenis Hewan : Harimau ";
            $this->getInfo();
        }
    } 

    class spasi {
        public static function tampilan()
        {
            echo "<br>";
            echo "=================";
            echo "<br>";
        }
    }
    
    $elang1 = new Elang("Elang Jawa");
    $elang1->getInfoHewan();

    spasi::tampilan();
    
    $harimau1 = new Harimau("Harimau Sumatra");
    $harimau1->getInfoHewan();

    spasi::tampilan();

    $elang1->serang($harimau1);

    spasi::tampilan();
    
    $harimau1->getInfoHewan();    
?>