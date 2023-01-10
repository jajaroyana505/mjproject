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
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
         </div>
      </div>
   </div>
</nav>
<div class="jumbotron jumbotron-fluid">
   <div class="container">

   </div>
</div>
<div class="z-1 ">
   <span class="material-symbols-outlined">
      keyboard_double_arrow_down
   </span>
</div>
<div id="bg-1">
   <div class="container">
      <div class="row justify-content-center align-items-center">
         <div class="col-md-6 ">
            <img src="/img/lp1.png" alt="" width="100%">
         </div>
         <div class="col-md-6 keterangan">
            <h1>Furniture<span>.com</span></h1>
            <p>Adalah laman web yang dirancang untuk memperkenalkan produk-produk toko pada pengunjung, dan mendorong mereka untuk melakukan tindakan seperti melihat katalog atau datang ke toko fisik.
            </p>
            <p>Element utama yang ada pada landing page toko perabot adalah: desain visual yang menarik, judul yang jelas dan ringkas, gambar-gambar perabot yang berkualitas, informasi kebijakan toko, tombol CTA (tindakan untuk melakukan transaksi) dan navigasi yang mudah. Desain harus mudah di navigasi untuk memudahkan pengunjung dalam membeli.</p>
         </div>
      </div>
   </div>
</div>
<div class="bg-color">
   <div class="container">
      <div class="row">
         <div class="col-6">
            <h1>Hahanjnjsd</h1>
         </div>
         <div class="col-6">
            <img src="/img/lp1.png" alt="" width="100%">
         </div>
      </div>
   </div>
</div>

<?= $this->endSection(); ?>