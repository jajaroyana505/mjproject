<?php

namespace App\Controllers;

use App\Models\PesanModel;
use CodeIgniter\Throttle\ThrottlerInterface;

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
         'judul' => 'MJ Project',
      ];
      return view('pages/index1', $data);
   }
   public function download()
   {
      // untuk mendowload file daeri server
      return $this->response->download('berkas/cv.pdf', null);
   }
   public function kirim_pesan()
   {
      $this->send_mail();
      return redirect('/');
   }
   private function send_mail()
   {
      $email_tujuan = 'muhammadjajaroyana4@gmail.com';
      $email_pengirim = $this->request->getVar('cf-email');
      $nama_pengirim = $this->request->getVar('cf-name');

      $subject = 'Pengunjung web';
      $pesan =  $this->request->getVar('cf-message');
      $budgets =  $this->request->getVar('cf-budgets');

      // memanggil servicce email
      $email = service('email');

      // set email tujuan
      $email->setTo($email_tujuan);

      // set email pengirim 
      $email->setFrom($email_pengirim, $nama_pengirim);

      // set subject email
      $email->setSubject($subject);
      $email->setMessage("Budgets  : $budgets, $pesan");
      $email->send();
   }
}
