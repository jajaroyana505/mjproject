<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<nav class="z-1 navbar navbar-expand-lg ">
   <div class="container">
      <a class="navbar-brand" href="#"><img src="/img/logo2.png" alt="logo" width="150px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav">
            <a class="nav-link" href="#">Home</a>
            <a class="nav-link" href="#about">About</a>
            <a class="nav-link" href="#">Pricing</a>
         </div>
      </div>
   </div>
</nav>
<div class="jumbotron jumbotron-fluid">
   <div class="container">
      <div class="row ">
         <div class="col-md-7">
            <div class="jumbotron-content">
               <h1 class="display-1 fw-bolder"><span>I AM </span>WEB<br> PROGRAMER</h1>
               <p>create your dream website with us</p>
               <span class="material-symbols-outlined">
                  keyboard_double_arrow_down
               </span>
            </div>
         </div>
      </div>

   </div>
</div>
<div id="about">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-5 foto">
            <img src="/img/jajaroyana.jpg" alt="" width="350px">
         </div>
         <div class="col-md-7 p-5">
            <h4>ABOUT US</h4>
            <h1>Do some amazing things with me</h1>
            <div class="sub-judul">
               <div class="strip"></div>Web Programer & Desainer
            </div>
            <p>Saya adalah mahasiswa Fakultas Teknik Informatika Universitas Bina Sarana Informatika. Yang memiliki keahlian dibidang web programing yang menguasai beberapa bahasa pemograman dan scripting seperti PHP, Python, Javascript, HTML 5 dan CSS3</p>

            <p>Saya juga memiliki keahlian dibidang desain grafis dan branding produk ataupun perusahaan. Software yang sering saya gunakan untuk membuat sebuah desain diantaranya CorelDraw 2020 dan Canva.</p>
            <a href="" class="btn btn-warning">Download CV</a>
         </div>
      </div>
   </div>
</div>
<div id="bg-1">
   <div class="container">
      <div class="row justify-content-center align-items-center">
         <div class="col-md-6 ">
            <img src="/img/lp1.png" alt="" width="100%">
         </div>
         <div class="col-md-6 keterangan p-5">
            <h1>Furniture<span>.com</span></h1>
            <p>Adalah laman web yang dirancang untuk memperkenalkan produk-produk toko pada pengunjung, dan mendorong mereka untuk melakukan tindakan seperti melihat katalog atau datang ke toko fisik.
            </p>
            <p>Element utama yang ada pada landing page toko perabot adalah: desain visual yang menarik, judul yang jelas dan ringkas, gambar-gambar perabot yang berkualitas, informasi kebijakan toko, tombol CTA (tindakan untuk melakukan transaksi) dan navigasi yang mudah. Desain harus mudah di navigasi untuk memudahkan pengunjung dalam membeli.</p>
         </div>
      </div>
   </div>
</div>
<div id="bg-2">
   <div class="container">
      <div class="row">
         <div class="col-md-6 keterangan text-center p-5">
            <h1><span>Daifuk</span>Yuu</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat molestiae suscipit aliquid quo laudantium totam voluptatibus eaque deserunt ratione veritatis!</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis soluta ipsa, cum dolorem ex, explicabo error aperiam id iusto quo voluptatum sapiente quae assumenda et dignissimos. Cumque architecto aspernatur laborum.

            </p>
         </div>
         <div class="col-md-6">
            <img src="/img/lp2.png" alt="" width="100%">
         </div>
      </div>
   </div>
</div>

<?= $this->endSection(); ?>