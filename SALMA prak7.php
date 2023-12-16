<?php


// Class utama
class Kendaraan
{
    public $jenis;
    public $warna;

    // Constructor
    public function __construct($jenis, $warna)
    {
        $this->jenis = $jenis;
        $this->warna = $warna;
        echo "Sebuah {$this->jenis} {$this->warna} kendaraan telah diciptakan. <br>";
    }

    // Destructor
    public function __destruct()
    {
        echo "Kendaraan {$this->jenis} {$this->warna} telah dihancurkan. <br>";
    }
}

// Class turunan yang mewarisi Kendaraan
class Mobil extends Kendaraan
{
    public $roda;

    public function __construct($jenis, $warna, $roda)
    {
        parent::__construct($jenis, $warna);
        $this->roda = $roda;
        echo "Mobil {$this->jenis} {$this->warna} dengan {$this->roda} roda telah dibuat. <br>";
    }

    public function belok()
    {
        echo "Mobil {$this->jenis} {$this->warna} sedang belok. <br>";
    }
}

// Membuat objek dari class Mobil
$mobil = new Mobil('Sedan', 'Biru', 4);
$mobil->belok();

// Memanggil destructor secara otomatis ketika objek tidak lagi digunakan