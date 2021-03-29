<?php
class mahasiswa_model extends CI_Model {
  public function get_data(){
    $data_mahasiswa = [
        ['Nama'=>'Muhammad','Prodi'=>'TIF'],
        ['Nama'=>'Zilhanim','Prodi'=>'MIF'],
        ['Nama'=>'Hilma','Prodi'=>'TKK']
      ];
    return $data_mahasiswa;
  }
}