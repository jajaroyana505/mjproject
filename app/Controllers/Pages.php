<?php

namespace App\Controllers;

class Pages extends BaseController
{
   public function index()
   {
      return view('pages/index');
   }
   public function kirim_pesan()
   {
      $data = [
         'nama' => $this->request->getVar('name'),
         'email' => $this->request->getVar('email'),
         'pesan' => $this->request->getVar('message'),
      ];
      echo "pesan terkirim";
      var_dump($data);
   }
}
