
    <title>
         Blog | SKIN DIA/LO/GUE Official
        </title>
@include('skinDialogue.navbar')

  <div class="main-content">
    <div class="bg-white">
<div class="container py-5">
  <div class="row">
    <div class="col-md-12 col-12 my-5">
      <h1 class="text-center text-uppercase font-weight-bold">Blog</h1>
    </div>

    <div class="col-md-12 col-12 my-5">
      <div class="row justify-content-lg-between align-items-lg-center mb-7">
        <div class="col-lg-6 mb-5 mb-lg-0">
                        <!-- Tags -->
            <div class="d-sm-flex align-items-sm-center text-center text-sm-left">
        
              <span class="d-block mr-sm-3 mb-2 mb-sm-1">Tags:</span>
              @foreach($categories as $c)
                                <a class="text-capitalize btn btn-xs btn-soft-secondary btn-pill mx-sm-1 mb-1" href="{{url('categories',$c->nama_categories)}}">{{ $c->nama_categories }}</a>
                                @endforeach

                            </div>
            <!-- End Tags -->
                    </div>

        <div class="col-lg-4">
          <!-- Input -->
          <form class="input-group input-group-sm input-group-merge input-group-flush">
            <input type="search" class="form-control" placeholder="Search articles" aria-label="Search articles" aria-describedby="searchLabel">
            <div class="input-group-append">
              <div class="input-group-text" id="searchLabel">
                <i class="fa fa-search"></i>
              </div>
            </div>
          </form>
          <!-- End Input -->
        </div>
      </div>
    </div>

          <div class="col-md-12 col-12">
      <article class="card mb-11">
        <div class="row no-gutters">
          <div class="col-lg-8">
            <div class="position-relative">
                              <a href="/blogs/read/klinik-kecantikan-aura-kasih">
                <img class="card-img blog-image-highlight" src="assets/skinDialogue/img/2020AugSun073310.jpeg" alt="Image Description">
              </a>
                              <figure class="d-none d-lg-block">
                <svg class="ie-curved-x position-absolute top-0 right-0 bottom-0" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100.1 1920" height="100%">
               
                </svg>
              </figure>
              <figure class="d-lg-none mb-n1">
                <svg class="ie-curved-y position-absolute right-0 bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
               
                </svg>
              </figure>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card-body d-flex flex-column h-100 p-4 p-lg-5">
              <h2><a class="blog-title text-inherit" href="/blogs/read/klinik-kecantikan-aura-kasih">Klinik Kecantikan Aura Kasih</a></h2>
              <p>Penyanyi sekaligus entepreneur Aura Kasih mengatakan slogan &quot;Beauty is Pain&quot; sudah ketinggalan zaman, dan mulai ditinggalkan oleh perempuan modern.</p>
              <div class="media align-items-center mt-auto">
                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                  Aug 09
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
    </div>
    
          <div class="col-md-12 col-12 my-5">
      <div class="d-flex justify-content-between">
        <h3>Latest News</h3>
        <a class="blog-link" href="/allBlog">View All <i class="fa fa-chevron-right"></i></a>
      </div>
    </div>
    
    <!-- Post -->
    @foreach($article as $a)
          <div class="col-md-4 my-2">
      <div class="card">
        <div class="card-img-top position-relative">
                      <a href="/blogs/read/catatan-penting-cara-membersihkan-kulit-berminyak">
            <img class="card-img blog-image-size" src="{{ url ('data_file/'. $a->image) }}" alt="Image Description">
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
         

    <div class="col-md-12 col-12 d-flex justify-start mt-5">
      
    </div>
</div>
</div>
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
       data-hs-go-to-options='{
         "offsetTop": 700,
         "position": {
           "init": {
             "right": 15
           },
           "show": {
             "bottom": 15
           },
           "hide": {
             "bottom": -15
           }
         },
         "targetSelector": "body"
       }'>
      <i class="fas fa-angle-up"></i>
    </a>
  </div>
  @include('skinDialogue.footer')