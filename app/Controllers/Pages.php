<?php

namespace App\Controllers;

use App\Models\PesanModel;

class Pages extends BaseController
{
   protected $modelPesan;
   public function __construct()
   {
      // inisialisai model 
      $this->modelPesan = new PesanModel();
   }
   public function index()
   {
      $data = [
         'judul' => 'MJ_Project',
         'validation' => \Config\Services::validation()
      ];
      return view('pages/index', $data);
   }
   public function download()
   {
      // untuk mendowload file daeri server
      return $this->response->download('berkas/cv.pdf', null);
   }
   public function kirim_pesan()
   {
      $rules = [
         'name'     => 'required',
         'email'    => 'required|valid_email',
         'mesasge' => 'required',
      ];
      $data = [
         'nama' => $this->request->getVar('name'),
         'email' => $this->request->getVar('email'),
         'pesan' => $this->request->getVar('message'),
      ];

      if (!$this->validateData($data, $rules)) {
         $validation = \Config\Services::validation();
         // dd($validation);
         return redirect()->to('/pages')->withInput()->with('validation', $validation);
      } else {
         $this->modelPesan->save($data);
         return redirect()->to('/pages');
      }
   }
}
