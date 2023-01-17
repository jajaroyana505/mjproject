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
            <a class="nav-link" href="#bg-1">Portfolio</a>
            <a class="nav-link" href="#bg-1">Gallery</a>
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
               <a href="#about">

                  <span class="material-symbols-outlined">
                     keyboard_double_arrow_down
                  </span>
               </a>
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
            <h4 class="judul">ABOUT US</h4>
            <h1 class="tagline">Do some amazing things with me</h1>
            <div class="sub-judul">
               <div class="strip"></div>Web Programer & Desainer
            </div>
            <p>I am a student of the Faculty of Informatics Engineering, Bina Sarana Informatics University. Those who have expertise in the field of web programming who master several programming and scripting languages such as PHP, Python, Javascript, HTML 5 and CSS3.</p>

            <p>I also have expertise in graphic design and product or company branding. Software that I often use to create a design include CorelDraw 2020 and Canva..</p>
            <a href="" class="btn btn-warning"><i class="fa-solid fa-download"></i> Download CV</a>
         </div>
      </div>
   </div>
</div>
<!-- <div class="container alur-kerja">
   <div class="row text-center mb-5">
      <div class="col-sm-3 p-3">
         <img src="/img/icon/003-concept.png" alt="">
         <span>your concept</span>

      </div>
      <div class="col-sm-3 p-3">
         <img src="/img/icon/004-concept-1.png" alt="">
         <span>we develop</span>

      </div>
      <div class="col-sm-3 p-3">
         <img src="/img/icon/workflow.png" alt="">
         <span>we are coding</span>

      </div>
      <div class="col-sm-3 p-3">
         <img src="/img/icon/002-tap.png" alt="">
         <span>you just use</span>

      </div>
   </div>
</div> -->
<div id="bg-1">
   <div class="container">
      <div class="row ">
         <div class="col-md-6">
            <h4 class="judul">PORTFOLIO</h4>
            <h1 class="tagline">These are the projects I've developed</h1>
            <div class="strip  mb-5"></div>

         </div>
         <div class="col-md-6 ">
            <!-- <div class="row mb-5 justify-content-center align-items-center">
               <div class="col-md-6">
                  <img src="/img/lp1.png" alt="" width="100%">
               </div>
               <div class="col-md-6">
                  <h1 class="">Furniture<span>.com</span></h1>
                  <p class="caption">Dengan desain visual yang menarik, minimalis dan elegan sehingga terlihat lebih profesional</p>
                  <a href="" class="btn btn-warning mt-5">Lihat Langsung</a>

               </div>
            </div> -->
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="/img/1a.png" class="d-block w-75 m-auto" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="/img/2a.png" class="d-block w-75 m-auto" alt=" ...">
                  </div>
                  <div class="carousel-item">
                     <img src="/img/3a.png" class="d-block w-75 m-auto" alt=" ...">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="bg-2">

</div>
<div id="bg-3">
   <div class="container">
      <div class="row justify-content-between">
         <div class="col-md-6 p-5">
            <h1 class="tagline">Have Some Questions?</h1>
            <div class="strip  mb-5"></div>
            <p class="caption"> To be able to connect with our team, you can directly contact us via social media or by directly sending a message via the contact us form</p>
            <div class="sosial-media">
               <a href="">
                  <i class="fa-brands fa-square-instagram"></i>
               </a>
               <a href="">
                  <i class="fa-brands fa-square-github"></i>
               </a>
               <a href="">
                  <i class="fa-brands fa-square-facebook"></i>
               </a>
            </div>

         </div>
         <div class="col-md-5">
            <h4 class="judul">CONTACT US</h4>
            <div class="form">
               <form action="/kirim" method="post">
                  <div class="mb-3">
                     <label for="name" class="form-label">Name</label>
                     <input name="name" type="text" class="form-control" id="name" placeholder="your name">
                  </div>
                  <div class="mb-3">
                     <label for="email" class="form-label">Email</label>
                     <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                  </div>
                  <div class="mb-3">
                     <label for="message" class="form-label">Message</label>
                     <textarea name="message" class="form-control" id="message" rows="3" placeholder="your message..."></textarea>
                  </div>
                  <div class="mt-3">
                     <button type="submit" class="btn btn-warning">Send Message</button>
                  </div>

               </form>
            </div>
         </div>

      </div>
   </div>
</div>

<div id="footer">
   <p class="text-center fs-5">copyright <i class="fa-regular fa-registered"></i> mjproject v1.1</p>
</div>

<?= $this->endSection(); ?>