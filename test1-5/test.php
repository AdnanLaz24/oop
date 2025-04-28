<?php

// EPISODE 2

// class Mahasiswa
// {
//     public  $nama = "Nama",
//         $nim = "Nim";
// }


// $mahasiswa1 = new Mahasiswa();
// $mahasiswa2 = new Mahasiswa();

// $mahasiswa1->nama = "Muhamad Adnan Lazuardi";
// $mahasiswa1->nim = "124200066";
// echo "Nama : $mahasiswa1->nama, Nim : $mahasiswa1->nim";

// echo "<hr>";

// $mahasiswa2->nama = "Fadilah Akbar";
// $mahasiswa2->nim = "124200017";
// echo "Nama : $mahasiswa2->nama, Nim : $mahasiswa2->nim";


// EPISODE 3

// class Mahasiswa
// {
//     public  $nama = "Nama",
//         $nim = "Nim";

//     public function getInfo()
//     {
//         return "Nama : {$this->nama}, Nim : {$this->nim}";
//     }
// }


// $mahasiswa1 = new Mahasiswa();
// $mahasiswa2 = new Mahasiswa();

// $mahasiswa1->nama = "Muhamad Adnan Lazuardi";
// $mahasiswa1->nim = "124200066";
// echo $mahasiswa1->getInfo();

// echo "<hr>";

// $mahasiswa2->nama = "Fadilah Akbar";
// $mahasiswa2->nim = "124200017";
// echo "$mahasiswa2->nama, $mahasiswa2->nim";


// EPISODE 4

// class Mahasiswa
// {
//     public  $nama = "Nama",
//         $nim = "Nim";

//     public function __construct($nama, $nim)
//     {
//         $this->nama = $nama;
//         $this->nim = $nim;
//     }

//     public function getInfo()
//     {
//         return "Nama : {$this->nama}, Nim : {$this->nim}";
//     }
// }


// $mahasiswa1 = new Mahasiswa("Muhamad Adnan Lazuardi", "124200066");
// $mahasiswa2 = new Mahasiswa("Fadilah Akbar", "124200066");

// echo $mahasiswa1->getInfo();

// echo "<hr>";

// echo $mahasiswa2->getinfo();


// EPISODE 5

class Mahasiswa
{
    public  $nama = "Nama",
        $nim = "Nim",
        $jurusan;

    public function __construct($nama, $nim, Jurusan $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function getInfo()
    {
        return "Nama : {$this->nama}, Nim : {$this->nim}, Jurusan : {$this->jurusan->nama}";
    }
}

class Jurusan
{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }
}

$infoJurusan = new Jurusan("Sistem Informasi");
$mahasiswa1 = new Mahasiswa("Muhamad Adnan Lazuardi", "124200066", $infoJurusan);
$mahasiswa2 = new Mahasiswa("Fadilah Akbar", "124200017", $infoJurusan);



echo $mahasiswa1->getInfo();

echo "<hr>";

echo $mahasiswa2->getInfo();
