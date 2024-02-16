<?php

namespace App\Controllers;
use App\Models\KomikModel;

class Komik extends BaseController
{
  protected $komikModel;
  public function __construct()
  {
    $this->komikModel = new KomikModel();
  }
  
  public function index()
  {
    /*$komik = $this->komikModel->findAll();*/
    $data = [
      "tittle" => "Daftar Komik",
      "komik" => $this->komikModel->getKomik()
    ];

    /*$db = \Config\Database::connect();
    $komik = $db->query("SELECT*FROM komik");
    dd($komik);*/
   
    /*$komikModel = new \App\Models\KomikModel();*/
    
    
    return view("komik/index", $data);
  }
  public function detail($slug)
  {
    $data = [
      'tittle' => 'Detail Komik',
      'komik' => $this->komikModel->getKomik($slug)
      ];
      
      if(empty($data['komik']))
      {
        throw new \Codeigniter\Exceptions\PageNotFoundException('Judul komik'.$slug.'tidak ditemukan.');
      }
      
      return view('komik/detail',$data);
  }
  public function create()
  {
    $data = [
        'tittle' => 'Form Tambah Data Komik'
      ];
    
    return view('komik/create', $data);
  }
  public function save() //mengelola inputan dari create utk disimpan ke db
  { 
    
    $slug = url_title($this->request->getVar('judul'), '-',true);
    $this->komikModel->save([
      'Judul' => $this->request->getVar('judul'),
      'Slug' => $slug,
      'Penulis' => $this->request->getVar('penulis'),
      'Penerbit' => $this->request->getVar('penerbit'),
      'Sampul' => $this->request->getVar('sampul')
      ]);
       
       $session = \Config\Services::session();
      session()->setFlashData('pesan', 'data berhasil ditambahkan');
       dd($session);
      return redirect()->to(base_url().'/komik');
  }
}
