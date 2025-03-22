<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $matkul;
    public $nilai;

    public function __construct($nama, $nim, $matkul, $nilai) {
        $this->nama = $nama;
        $this->nama = $nim;
        $this->nama = $matkul;
        $this->nama = $nilai;
    }

    public function kelulusan(){
        return ($this->nilai >= 60) ? "LULUS" : "TIDAK LULUS"; 
    }

    public function grade(){
        if ($this->nilai >= 85) {
            return "A";
        }
        elseif ($this->nilai >= 70) {
            return "B";
        }
        elseif ($this->nilai >= 55) {
            return "C";
        }
        elseif ($this->nilai >= 40) {
            return "D";
        }
        else {
            return "E";
        }
    }
}


?>