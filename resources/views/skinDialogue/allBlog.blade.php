<!DOCTYPE html>
   
<head>
        <title>Daftar Blog | SKIN DIA/LO/GUE</title>
  <style>
  .navbar{
    width: auto;
    height: 75px;
  }
  .page-item{
      margin-left: 0.25rem;
      margin-right: 0.25rem;
  }
  li{
      display: list-item;
      text-align: -webkit-match-parent;
  }
  #theme-pagination
  .page-item.active .page-link{
    background-color: rgb(234, 136, 135) !important;
  }
  .page-item.active .page-link{
    z-index: 3;
    color: #fff;
    border-color: #377dff;
  }
  .page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 0.3125rem;
    border-bottom-left-radius: 0.3125rem;
  }
  .page-item .page-link {
    border-top-right-radius: 0.3125rem;
    border-bottom-right-radius: 0.3125rem;
  }
  .page-link {
    cursor: pointer;
    text-align: center;
    min-width: 2.25rem;
  }
  .page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: 0;
    line-height: 1.25;
    color: #677788;
    background-color: #fff;
    border: 0 solid #e7eaf3;
  }
  
  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Open Reseller Produk Kecantikan, Skincare & Healthcare | SKIN DIA/LO/GUE Official">
    <meta name="keywords" content="Platform ini dikembangkan dengan semangat ingin membantu para Beauty Blogger dan Healthy Blogger agar bisa mendapatkan penghasilan dari penjualan produk, hanya dengan membuat story telling, dan posting content di social media atau chat group.">
    <meta name="og:type" property="og:type" content="website">
    <meta name="og:title" property="og:title" content="Open Reseller Produk Kecantikan, Skincare & Healthcare | SKIN DIA/LO/GUE Official"/>
    <meta name="og:site_name" property="og:site_name" content="SKIN DIA/LO/GUE Official">
    <meta name="og:description" propert="og:description" content="SKIN DIA/LO/GUE adalah platform sistem pemasaran produk (barang dan jasa) dengan menggunakan skema Reseller – Distributor."/>
    <meta name="og:url" property="og:url" content="https://skindialogue.id"/>
    <meta name="og:keyword" property="og:keyword" content="SKIN DIA/LO/GUE adalah platform sistem pemasaran produk (barang dan jasa) dengan menggunakan skema Reseller – Distributor.">
    <meta name="og:image" property="og:image" content="https://skindialogue.id/images/OgWelcome.jpg">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/skinDialogue/css/css.css">
    <link href="{{url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&display=swap')}}" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    
</head>
<body>
<header id="headerWithBSDropdown" class="header header-box-shadow-on-scroll header-abs-top header-show-hide">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
            <div class="container-fluid">
            <img class="logo-header" src="assets/skinDialogue/img/LogoHeader_Small.png" alt="Logo">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <form class="d-flex mr-12">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link main-link mr-1 font-size" role="button" href="/" aria-haspopup="true" aria-expanded="false">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link main-link mr-1 font-size" role="button" href="/product" aria-haspopup="true" aria-expanded="false">Produk</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link main-link mr-3 font-size" role="button" href="/blog" aria-haspopup="true" aria-expanded="false">Blog</a>
                  </li>
                  <li class="nav-item navbar-nav-last-item">
                    <a class="btn btn-sm main-btn mr-3 transition-3d-hover" href="https://my.skindialogue.id/index.php/auth/login">Login</a>
                  </li>
                  <li class="nav-item navbar-nav-last-item">
                    <a class="btn btn-sm transition-3d-hover register-reseller-btn" href="https://my.skindialogue.id/index.php/auth/register">Daftar Reseller</a>
                  </li> 
                </ul>
              </div>
            </form>
            </div>
         </div>
      </nav>
</header>

  <div class="main-content">
    <div class="bg-white">
<div class="container py-5">
  <div class="row">
    <div class="col-md-12 col-12 my-5">
      <h1 class="text-center text-uppercase font-weight-bold" style="font-size:40px;">Blog</h1>
    </div>


      <div class="row justify-content-lg-between align-items-lg-center mb-7">

                        <!-- Tags -->
    @foreach($article as $a)
    <!-- Post -->
          <div class="col-md-4 my-2">
      <div class="card">
        <div class="card-img-top position-relative">
                      <a href="/blogs/read/catatan-penting-cara-membersihkan-kulit-berminyak">
            <img class="card-img blog-image-size" widht="100%" src="{{url('data_file/'.$a->image)}}" alt="Image Description">
          </a>
          <figure class="ie-curved-y position-absolute right-0 bottom-0 left-0 mb-n1">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
          
            </svg>
          </figure>
                    </div>
        <div class="card-body">
          <h5 class="card-title mb-1" style="height: 44px">
            <a class="blog-title" href="/blogs/read/catatan-penting-cara-membersihkan-kulit-berminyak">
                                {{$a->title}}
                            </a>
          </h5>
          <p class="card-text pt-1" style="height: 125px; overflow: hidden">{{$a->description}}</p>
          <p class="card-text text-right"><small class="text-muted">{{$a->release_date}}</small></p>
        </div>
      </div>
    </div>
    @endforeach
          




          <!-- End Post -->

    <!-- <div class="col-md-12 col-12 my-5">
      <div class="d-flex justify-content-between">
        <h3>Latest Month</h3>
        <a class="blog-link" href="#">View All <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>

    <div class="col-md-4 my-2">
      <div class="card">
        <img class="card-img-top" src="/images/blog2.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Kiat memilih kosmetik aman bagi kulit sensitif</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text text-right"><small class="text-muted">Juni 20</small></p>
        </div>
      </div>
    </div>

    <div class="col-md-4 my-2">
      <div class="card">
        <img class="card-img-top" src="/images/blog1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Bisakah virus corona bertahan pada produk kosmetik ?</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text text-right"><small class="text-muted">Juni 20</small></p>
        </div>
      </div>
    </div>

    <div class="col-md-4 my-2">
      <div class="card">
        <img class="card-img-top" src="/images/blog3.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Kiat memilih kosmetik aman bagi kulit sensitif</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text text-right"><small class="text-muted">Juni 20</small></p>
        </div>
      </div>
    </div> -->
            </div>
                <div class="col-md-12 d-flex justify-start mt-5">
                {{ $article->fragment('foo')->links() }}
                                    <!-- <nav id="theme-pagination">
                                        <ul class="pagination">
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="">1</a>
                                        </li>
                                        <li class="page-item" aria-current="page">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                        </ul>
                                    </nav> -->
                                </div>
                            </div>
                        </div>
                       

<footer class="block-theme">
  <div class="container">
    <div class="row justify-content-lg-between space-top-2 space-bottom-lg-2">
      <div class="col-lg-5 col-12 mb-5">
        <div class="">
          <a href="/">
            <img class="footer-logo mt-3" src="assets/skinDialogue/img/LogoFooter_Small.png" style="width: auto;
    height: 37px; vertical-align: middle; border-style: none;"/>
          </a>
          <p class="mt-3 desc" style="font-size: 0.9rem;">
            SKIN DIA/LO/GUE adalah platform sistem pemasaran produk (barang dan jasa) dengan menggunakan skema Reseller – Distributor.<br/><br/>

            Platform ini dikembangkan dengan semangat ingin membantu para Beauty Blogger dan Healthy Blogger agar bisa mendapatkan penghasilan dari penjualan produk, hanya dengan membuat story telling, dan posting content di social media atau chat group.</p>

            <table>
        <tr>
          <td class="pr-5">
            <span class="text-white text-uppercase font-weight-bold">Ikuti kami : </span>
          </td>
          <td class="pr-2">
            <a href="https://www.facebook.com/skin.dialogue" target="_blank" class="btn-social">
                <i class="fa fa-facebook-square" style="box-sizing: border-box; padding: 5px;"></i>
              </a>
            </td>
            <td class="pr-2">
              <a href="https://www.instagram.com/skin.dialogue/" target="_blank" class="btn-social">
                <i class="fa fa-instagram"></i>
              </a>
              </td>
              <td class="pr-2">
                <a href="#" target="_blank" class="btn-social">
                  <i class="fa fa-youtube"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-2 mb-5 mb-lg-0 mr-lg-3 ml-lg-3">
        <h5 class="text-light footer-underline mb-3 no-wrap text-uppercase">Layanan Pelanggan</h5>

        <!-- Nav Link -->
        <ul class="nav nav-sm nav-x-0 flex-column">
          <li class="nav-item"><a class="nav-link text-light py-1 font-size-small" href="https://my.skindialogue.id/index.php/auth/login">Login</a></li>
          <li class="nav-item"><a class="nav-link text-light py-1 font-size-small" href="https://my.skindialogue.id/index.php/auth/register">Pendaftaran Member</a></li>
          <li class="nav-item"><a class="nav-link text-light py-1 font-size-small" href="/reseller">Cara Menjadi Reseller</a></li>
          <li class="nav-item"><a class="nav-link text-light py-1 font-size-small" href="#">Lacak Pesanan</a></li>
          <li class="nav-item"><a class="nav-link text-light py-1 no-wrap font-size-small" href="#">Kamus SKIN DIA/LO/GUE</a></li>
        </ul>
        <!-- End Nav Link -->
      </div>

      <div class="col-12 col-md-4 col-lg-2 mb-5 ml-lg-auto mb-lg-0">
        <h5 class="text-light footer-underline mb-3 text-uppercase">Perusahaan</h5>

        <!-- Nav Link -->
        <ul class="nav nav-sm nav-x-0 flex-column">
          <li class="nav-item"><a class="nav-link text-light py-1 font-size-small" href="/tentang-kami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link text-light py-1 font-size-small" href="/products">Produk</a></li>
          <li class="nav-item"><a class="nav-link text-light py-1 font-size-small" href="/reseller">Reseller</a></li>
          <li class="nav-item"><a class="nav-link text-light py-1 font-size-small" href="/blogs">Blog</a></li>
          <li class="nav-item">
            <a class="nav-link text-light py-1" href="/contact">
              <span class="media align-items-center">
                <span class="media-body">Hubungi Kami</span>
              </span>
            </a>
          </li>
        </ul>
        <!-- End Nav Link -->
      </div>

      <div class="col-12 col-md-4 col-lg-2 mb-5 mb-lg-0">
        <ul class="nav nav-sm nav-x-0 flex-column">
          <li class="nav-item mt-2">
            <a class="nav-link text-light py-1" href="https://wa.me/+6281292945677" target="_blank">
              <div class="d-flex">
                <img style="width: 50px; height: 50px" src="assets/skinDialogue/img/Callcenter.png"/>
                <div class="pl-2 d-flex flex-column align-items-center">
                  <span style="font-family: 'Montserrat', sans-serif; white-space: nowrap; align-self: start" class="font-weight-bold">Call Center</span>
                  <span style="align-self: start; white-space: nowrap" class="media-body">081 292 945 677</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>

      <div class="col-md-4 col-lg-2 mb-5 mb-lg-0 d-none">
        <h5 class="text-light footer-underline mb-3">Opsi Perngiriman</h5>

        <!-- Nav Link -->
        <div id="couriers">
          <img src="/images/ICON JNE.jpg"/>
          <img src="/images/ICON J&T.jpg"/>
          <img src="/images/ICON NINJA EXPRESS.jpg"/>
          <img src="/images/ICON POS IND.jpg"/>
          <img src="/images/ICON SICEPAT.jpg"/>
        </div>
        <!-- End Nav Link -->


        <!-- End Nav Link -->
      </div>
      </div>
  </div>

  <div class="copyright">
    <div class="container py-3">
      <div class="row">
        <div class="col-12">
          <p class="font-size-small mb-0 copyright-text">Copyright ©️ 2020 PT. Dialogue Estetika Indonesia | All Right Reserved | Web E-Commerce & Application Development by. <a class="developer" href="http://www.imedis.co.id/">iMedis</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="{{asset('assets/skinDialogue/js/scriprt.js')}}"></script>
</html>