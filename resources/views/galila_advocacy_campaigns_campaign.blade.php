<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Galila Mapandan | Advocacy</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href={{asset("assets/favicon.png")}} />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
        
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />



    </head>
    <body class="d-flex flex-column h-100 bg-dark bg-opacity-5">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
                <div class="container mt-3 mb-3 px-5 ">

                    <a class="navbar-brand p-2" href="/">
                        <img src={{asset("assets/galila_logo.png")}} width="170px" alt="galila_logo">
                    </a>

                    <button class="navbar-toggler p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span><i class="bi bi-list "></i></span></button>

                    <div class="collapse navbar-collapse float-end" id="navbarSupportedContent">
                        <div class="mb-3 mt-5"></div>
                            <ul class="nav nav-pills text-dark ms-auto mb-lg-0 nav-fill">
                                <li class="nav-item p-2">
                                  <a class="nav-link shadow-sm text-light bg-opacity-10" style="background-color: #03C85D;" aria-current="page" href="/advocacy">ADVOCACY</a>
                                </li>
                                <li class="nav-item p-2">
                                  <a class="nav-link shadow-sm text-dark bg-dark bg-opacity-10" href="/activitiesandprograms">ACTIVITIES AND PROGRAMS</a>
                                </li>
                                <li class="nav-item p-2">
                                  <a class="nav-link shadow-sm text-dark bg-dark bg-opacity-10" href="/about">ABOUT US</a>
                                </li>
                                <li class="nav-item p-2">
                                    <a class="nav-link shadow-sm text-dark" href="/login">LOGIN</a>
                                  </li>
                            </ul>
                    </div>
                </div>
            </nav>

            <!-- Header-->
            <header class="pt-5">

                <div class="container px-5">
                    <div class="col-lg-12 col-xl-12 col-xxl-12  p-0">
                            <div class="my-5 text-xl-start">
                                <div class="mb-3">
                                    <a class="text-decoration-none" href="/advocacy"><div class="badge bg-galila rounded-pill mb-2">Galila Mapandan Advocacy</div></a> - 
                                    <a class="text-decoration-none" href=@php echo "/advocacy/" . $desc[0]->campaign_id . "/" @endphp><div class="badge bg-galila rounded-pill mb-2">{{ $desc[0]->campaign_name }}</div></a> -
                                    <div class="badge text-dark rounded-pill mb-2">{{ $desc[0]->featured_name }}</div>
                                </div>

                                <h1 class="display-5 fw-bolder text-dark mb-2 montserrat">{{ $desc[0]->featured_name }}</h1>
                                <div class="px-2 bg-dark rounded bg-opacity-10">{{ $desc[0]->date_established }}</div>
                            </div>
                        </div>
                </div>


                <div class="container px-5 pb-5">
                    <p>
                        {{ $desc[0]->featured_desc }}
                    </p>
                </div>




                
                <div class="container pb-5">

                    <div class="site-section bg-left-half mb-5">
                    <div class="container owl-2-style">
                        <div class="owl-carousel owl-2 owl-theme">

                            @foreach ($images as $img)
                            <div style="position: relative;">
                                <a href="{{ 'data:image/png;base64,' .  $img->display_image }}" data-fancybox="gallery" data-caption="{{$img->display_image_desc}}">
                                    <img class="card-img-top rounded imagesFitBanner" src="{{ 'data:image/png;base64,' .  $img->display_image }}" alt="..." />
                                </a> 
                            </div>
                            @endforeach
                 

                        </div>
                    </div>
                    </div>

                </div>
                
                

            </header>



        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <div class="small m-0 text-white">&copy; Copyright <img class="mx-2" width="15px" src={{ asset('assets/galila_logo_small.png') }} alt="..." /> Galila Mapandan 2022 <a class="link-light small mx-2" href="/login"><i style="font-size: 13px; color:white" class="bi bi-shield-lock-fill"></i></a></div>   
                    </div>
                    <div class="col-auto">
                        @foreach ($socials as $socmed)
                        <a class="link-light small mx-2" href='{{ $socmed->social_link }}'><i style="font-size: 20px; color:white" class="bi bi-{{ $socmed->social_name }}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </footer>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



        <script>

            if ( $('.owl-2').length > 0 ) {
                  $('.owl-2').owlCarousel({
                      center: false,
                      items: 1,
                      loop: true,
                      stagePadding: 0,
                      margin: 20,
                      smartSpeed: 1000,
                      autoplay: true,
                      nav: true,
                      navText : ['',''],
                      dots: true,
                      pauseOnHover: true,
                      responsive:{
                            0:{
                                margin: 20,
                              nav: true,
                            items: 1,
                            loop:false
                            },
                          600:{
                              margin: 20,
                              nav: true,
                            items: 2,
                            loop:false
                          },
                          1000:{
                              margin: 20,
                              stagePadding: 0,
                              nav: true,
                            items: 3,
                            loop:false
                          }
                      }
                  });            
              }
    
      
          </script>

    </body>
</html>
