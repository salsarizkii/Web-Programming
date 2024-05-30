<!-- 
Nama = Salsa Rizki Saputri
NIM = L0122147
Kelas = D Informatika 
-->

<?php
class Mhs {
    // Properties
    public $NIM;
    public $IPK;
    public $nama;
    public $prodi;
    public $ttl;
    public $alamat;
  
    // Methods
    function set_IPK($IPK) {
      $this->IPK = $IPK;
    }
    function get_IPK() {
      return $this->IPK;
    }
  }

  class Dosen {
    // Properties
    public $NIP;
    public $nama;
    public $prodi; 
    public $ttl;
    public $alamat;

  
    // Methods
    function set_nama($nama) {
      $this->nama = $nama;
    }
    function get_nama() {
      return $this->nama;
    }
  }

$mahasiswa1 = new Mhs();
$dosen1 = new Dosen();
$dosen2 = new Dosen();

$mahasiswa1->nama='Putri Anggraeni';
$mahasiswa1->prodi='Informatika';
$mahasiswa1->ttl='2003-06-31';
$mahasiswa1->alamat='Surakarta';
$mahasiswa1->NIM='M0521981';
$mahasiswa1->set_IPK('3.98');

echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Student and Teacher Information</title>";
echo "<link rel='preconnect' href='https://fonts.googleapis.com'>";
echo "<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>";
echo "<link href='https://fonts.googleapis.com/css2?family=Jersey+25+Charted&display=swap' rel='stylesheet'>";
echo "</head>";
echo "<body style='background-color:#495E57; color:#E8EFCF; font-size: 40px; display:flex, align-items:center; align-content:center; font-family:\"Jersey 25 Charted\"'>";

echo "Mahasiswa : " . $mahasiswa1->NIM;
echo " | ";
echo $mahasiswa1->nama;
echo " | ";
echo $mahasiswa1->prodi;
echo " | ";
echo $mahasiswa1->ttl;
echo " | ";
echo $mahasiswa1->alamat;
echo " | ";
echo "IPK: " . $mahasiswa1->get_IPK();

echo "<br>";

$dosen1->NIP='198508312012121004';
$dosen1->prodi='Informatika';
$dosen1->ttl='1973-09-25';
$dosen1->alamat='Karanganyar';
$dosen1->set_nama('Adi Nugroho');

echo "Dosen : " . $dosen1->NIP;
echo " | ";
echo $dosen1->get_nama();
echo " | ";
echo $dosen1->prodi;
echo " | ";
echo $dosen1->ttl;
echo " | ";
echo $dosen1->alamat;
echo " | ";

echo "<br>";
echo "<hr>";

echo "IPK : " . $mahasiswa1->get_IPK();
echo "<br>";

$dosen2->set_nama('Dwi Utomo');

echo "Nama dosen baru: " . $dosen2->get_nama();

echo "</body>";
?>
