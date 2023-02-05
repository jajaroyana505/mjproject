<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $judul; ?></title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/css/magnific-popup.css" />
  <link rel="stylesheet" href="/css/font-awesome.min.css" />


  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/b20261a34a.js" crossorigin="anonymous"></script>

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="/css/templatemo-style.css" />
</head>

<body>
  <!-- PRE LOADER -->
  <section class="preloader">
    <div class="spinner">
      <span class="spinner-rotate"></span>
    </div>
  </section>

  <!-- MENU -->
  <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>

        <!-- lOGO TEXT HERE -->
        <a href="index.html" class="navbar-brand">MJProject</a>
      </div>

      <!-- MENU LINKS -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-nav-first">
          <li><a href="#home" class="smoothScroll">Home</a></li>
          <li><a href="#about" class="smoothScroll">About</a></li>
          <li><a href="#blog" class="smoothScroll">Blog</a></li>
          <li><a href="#work" class="smoothScroll">Our Work</a></li>
          <li><a href="#contact" class="smoothScroll">Contacts</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="https://www.instagram.com/jajaroyana4/?hl=id"><i class="fa-brands fa-instagram"></i></a>
          </li>
          <li>
            <a href="https://github.com/jajaroyana505"><i class="fa fa-github"></i></a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/muhammad-jaja-royana-119144227/"><i class="fa-brands fa-linkedin-in"></i></a>
          </li>
          <li class="section-btn">
            <a href="#" data-toggle="modal" data-target="#modal-form">Sign in / Join</a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- HOME -->
  <section id="home" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-sm-12">
          <div class="home-info">
            <h1>We make beautiful websites for all people.</h1>
            <a href="#about" class="btn section-btn smoothScroll">Start a project</a>
            <span>
              CALL US (+62) 859-6243-6915
              <small>For any inquiry</small>
            </span>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 text-center">
          <!-- <img width="50%" src="images/logo2.png" alt="" /> -->
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-6">
          <div class="about-info">
            <div class="section-title">
              <h2>Let us introduce</h2>
              <span class="line-bar">...</span>
            </div>
            <p>I am a student of the Faculty of Informatics Engineering, Bina Sarana Informatics University. Those who have expertise in the field of web programming who master several programming and scripting languages such as PHP, Python, Javascript, HTML 5 and CSS3.</p>

            <p>I also have expertise in graphic design and product or company branding. Software that I often use to create a design include CorelDraw 2020 and Canva..</p>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="about-info skill-thumb">

            <strong>Web Design</strong>
            <span class="pull-right">60%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
            </div>
            <strong>Web Programing</strong>
            <span class="pull-right">70%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
            </div>

            <strong>Desain Grafis</strong>
            <span class="pull-right">75%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div>

            <strong>Digita Marketing</strong>
            <span class="pull-right">40%</span>
            <div class="progress">
              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12">
          <div class="about-image">
            <img src="/images/jaja.webp" class="img-responsive" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BLOG -->
  <section id="blog" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="section-title">
            <h2>Our Blog</h2>
            <span class="line-bar">...</span>
          </div>
        </div>

        <div class="col-md-6 col-sm-6">
          <!-- BLOG THUMB -->
          <div class="media blog-thumb">
            <div class="media-object media-left">
              <a href="blog-detail.html"><img src="/images/blog-image1.jpg" class="img-responsive" alt="" /></a>
            </div>
            <div class="media-body blog-info">
              <small><i class="fa fa-clock-o"></i> December 22, 2017</small>
              <h3>
                <a href="blog-detail.html">How To Find Out Beautiful Workspace.</a>
              </h3>
              <p>
                Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.
              </p>
              <a href="blog-detail.html" class="btn section-btn">Read article</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6">
          <!-- BLOG THUMB -->
          <div class="media blog-thumb">
            <div class="media-object media-left">
              <a href="blog-detail.html"><img src="/images/blog-image2.jpg" class="img-responsive" alt="" /></a>
            </div>
            <div class="media-body blog-info">
              <small><i class="fa fa-clock-o"></i> December 18, 2017</small>
              <h3><a href="blog-detail.html">woman sportwear.</a></h3>
              <p>
                Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.
              </p>
              <a href="blog-detail.html" class="btn section-btn">Read more</a>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-6 col-sm-6">
            <div class="media blog-thumb">
              <div class="media-object media-left">
                <a href="blog-detail.html"
                  ><img
                    src="images/blog-image3.jpg"
                    class="img-responsive"
                    alt=""
                /></a>
              </div>
              <div class="media-body blog-info">
                <small><i class="fa fa-clock-o"></i> December 14, 2017</small>
                <h3><a href="blog-detail.html">new creative fashion.</a></h3>
                <p>
                  Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.
                </p>
                <a href="blog-detail.html" class="btn section-btn"
                  >Read article</a
                >
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6">
            <div class="media blog-thumb">
              <div class="media-object media-left">
                <a href="blog-detail.html"
                  ><img
                    src="images/blog-image4.jpg"
                    class="img-responsive"
                    alt=""
                /></a>
              </div>
              <div class="media-body blog-info">
                <small><i class="fa fa-clock-o"></i> December 10, 2017</small>
                <h3>
                  <a href="blog-detail.html"
                    >minimalist design trend in 2018.</a
                  >
                </h3>
                <p>
                  Lorem ipsum dolor sit consectetur adipiscing morbi venenatis.
                </p>
                <a href="blog-detail.html" class="btn section-btn"
                  >View Detail</a
                >
              </div>
            </div>
          </div> -->
      </div>
    </div>
  </section>

  <!-- WORK -->
  <section id="work" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="section-title">
            <h2>Our work</h2>
            <span class="line-bar">...</span>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <!-- WORK THUMB -->
          <div class="work-thumb">
            <a href="/images/porto1.png" class="image-popup">
              <img src="/images/porto1.png" class="img-responsive" alt="Work" />

              <div class="work-info">
                <h3>Gold Reptile</h3>
                <small>Reptile Official Store</small>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <!-- WORK THUMB -->
          <div class="work-thumb">
            <a href="/images/porto2.png" class="image-popup">
              <img src="/images/porto2.png" class="img-responsive" alt="Work" />

              <div class="work-info">
                <h3>Furniture.com</h3>
                <small>Company Profile</small>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <!-- WORK THUMB -->
          <div class="work-thumb">
            <a href="/images/porto3.png" class="image-popup">
              <img src="/images/porto3.png" class="img-responsive" alt="Work" />

              <div class="work-info">
                <h3>DaifukYuu</h3>
                <small>Foods Landing Page</small>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <!-- WORK THUMB -->
          <div class="work-thumb">
            <a href="/images/porto4.png" class="image-popup">
              <img src="/images/porto4.png" class="img-responsive" alt="Work" />

              <div class="work-info">
                <h3>SIPEDES</h3>
                <small>Sistem Information</small>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-sm-8">
          <div class="section-title">
            <h2>Contact us</h2>
            <span class="line-bar">...</span>
          </div>
          <!-- CONTACT FORM HERE -->
          <form id="contact-form" role="form" action="/kirim" method="post">
            <div class="col-md-6 col-sm-6">
              <input type="text" class="form-control" placeholder="Full Name" id="cf-name" name="cf-name" required="" />
            </div>

            <div class="col-md-6 col-sm-6">
              <input type="email" class="form-control" placeholder="Your Email" id="cf-email" name="cf-email" required="" />
            </div>

            <div class="col-md-6 col-sm-6">
              <input type="tel" class="form-control" placeholder="Your Phone" id="cf-number" name="cf-number" required="" />
            </div>

            <div class="col-md-6 col-sm-6">
              <select class="form-control" id="cf-budgets" name="cf-budgets">
                <option value="">Budget Level</option>
                <option value="Rp. 200,000 - Rp. 500,000">Rp. 200,000 - Rp. 500,000 </option>
                <option value="Rp. 500,000 - Rp. 800,000">Rp. 500,000 - Rp. 800,000</option>
                <option value="Rp. 800,000 - Rp. 1,200,000">Rp. 800,000 - Rp. 1,200,000</option>
                <option value="Rp. 1,200,000 - Seterusnya">Rp. 1.200,000 - Seterusnya</option>
              </select>
            </div>

            <div class="col-md-12 col-sm-12">
              <textarea class="form-control" rows="6" placeholder="Your requirements" id="cf-message" name="cf-message" required=""></textarea>
            </div>

            <div class="col-md-4 col-sm-12">
              <input type="submit" class="form-control" name="submit" value="Send Message" />
            </div>
          </form>
        </div>
        <div class="col-md-4 col-sm-4">
          <img src="/images/robot.png" alt="robot" width="">
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-12">
          <div class="footer-thumb footer-info">
            <img src="/images/logo2.png" alt="" />
          </div>
        </div>

        <div class="col-md-2 col-sm-4">
          <div class="footer-thumb">
            <h2>Company</h2>
            <ul class="footer-link">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Read Blog</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-2 col-sm-4">
          <div class="footer-thumb">
            <h2>Services</h2>
            <ul class="footer-link">
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Support</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-3 col-sm-4">
          <div class="footer-thumb">
            <h2>Find us</h2>
            <p>
              Pabuaran 41626, <br />
              Kabupaten Subang - Jawa Barat
            </p>
          </div>
        </div>

        <div class="col-md-12 col-sm-12">
          <div class="footer-bottom">
            <div class="col-md-6 col-sm-5">
              <div class="copyright-text">
                <p>Copyright &copy; 2023 MJ-Project</p>
              </div>
            </div>
            <div class="col-md-6 col-sm-7">
              <div class="phone-contact">
                <p>Call us <span>(+62) 859-6243-6915</span></p>
              </div>
              <ul class="social-icon">
                <li>
                  <a href="https://www.instagram.com/jajaroyana4/?hl=id"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://github.com/jajaroyana505"><i class="fa fa-github"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/muhammad-jaja-royana-119144227/"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- SCRIPTS -->
  <script src="/js/jquery.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/smoothscroll.js"></script>
  <script src="/js/custom.js"></script>
</body>

</html>