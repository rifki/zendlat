<?php

class RentalVcdController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function tambahAction()
    {
        $kategori = array (
            "Drama",
            "Musical",
            "Remaja",
            "Action",
            "Anak-anak",
            "Romance"
        );
        $this->view->kategorivcd = $kategori;
    }

    public function hapusAction()
    {
        // action body
    }

    public function updateAction()
    {
        // action body
    }

    public function cariAction()
    {
       $dataPelanggan = array(
            'Anggun Pribadi',
            'Muhammad Faris',
            'Andri Stefanus',
            'Muhamad Rifki',
            'Raya Ismayadi',
            'Egi Boy'
        );
       $dataMahasiswa = array(
            'Anggun',
            'Faris',
            'Andri',
            'Rifki',
            'Raya',
            'Boy'
        );
       
       $music = array(
           'title' => 'Bon Jovi', 'artist' => 'Andi Bonjovi',
           'title' => 'Slank', 'artist' => 'Kaka slank'
       );
       $data_music = $this->view->assign('musics', $music);
       
       // looping $dataMahasiswa
       for ($i=0; $i<count($dataMahasiswa)-1; $i++){
           
           if ($dataMahasiswa[$i] == 'Andri'){
               $indexAndri = $i;;
           }
       }
       // looping $dataPelanggan
       for ($i=0; $i<count($dataPelanggan)-1; $i++) {
           
           if ($dataPelanggan[$i] == 'Muhamad Rifki'){
               $indexRifki = $i;
           }
       }
       // pelanggan
       $banyakPelanggan = array('bykPelanggan' => count($dataPelanggan));
       $posisiRifki     = array('posisi' => $indexRifki);
       $this->view->assign('pelanggan', $dataPelanggan);
       $this->view->assign($banyakPelanggan);
       $this->view->assign($posisiRifki);
       
        // mahasiswa
       $bayakMahasiswa = array('bykMahasiswa' => count($dataMahasiswa));
       $posisiAndri    = array('posisiMhs' => $indexAndri);
       $this->view->assign('mahasiswa', $dataMahasiswa);
       $this->view->assign($bayakMahasiswa);
       $this->view->assign($posisiAndri);
    }


}









