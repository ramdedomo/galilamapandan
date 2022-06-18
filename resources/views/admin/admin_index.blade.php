<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Galila Mapandan | Administrator</title>
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
    </head>
    <body class="d-flex flex-column h-100"></body>
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
                <div class="container mt-3 mb-3 px-5 ">

                    <a class="navbar-brand p-2" href="/admin">
                        <img src={{asset("assets/galila_logo_admin.png")}} width="170px" alt="galila_logo">
                    </a>

                    <button class="navbar-toggler p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span><i class="bi bi-list "></i></span></button>

                    <div class="collapse navbar-collapse float-end" id="navbarSupportedContent">
                        <div class="mb-3 mt-5"></div>
                            <ul class="nav nav-pills text-dark ms-auto mb-lg-0 nav-fill">
                                <li class="nav-item p-2">
                                  <a class="nav-link shadow-sm text-dark bg-dark bg-opacity-10"  aria-current="page" href="/admin/advocacy">ADVOCACY</a>
                                </li>
                                <li class="nav-item p-2">
                                  <a class="nav-link shadow-sm text-dark bg-dark bg-opacity-10" href="/admin/activitiesandprograms">ACTIVITIES AND PROGRAMS</a>
                                </li>
                                <li class="nav-item p-2">
                                  <a class="nav-link shadow-sm text-dark bg-dark bg-opacity-10" href="/admin/about">GALILA</a>
                                </li>
                                <li class="nav-item p-2">
                                    <a class="nav-link shadow-sm text-dark" href="/logout">LOGOUT</a>
                                  </li>
                            </ul>
                    </div>
                </div>
            </nav>

            <!-- Header-->
   <!-- Header-->
            <header class="py-5 bg-wave">

                <div class="container px-5">

                    <div class="text-dark text-end col-12">
                        <?php
                            date_default_timezone_set('Asia/Manila');
                            echo date("Y-m-d") ;
                            echo " / ";
                            echo "<span style='color: #03C85D;'><b>";
                            echo date("h:i l");
                            {{"</b></span>";}}
                        ?>
                    </div>
                    
                    <hr class="mt-3 d-none d-sm-block">

                        <div id="carouselExampleControls" class="carousel slide d-none d-sm-block" data-bs-ride="carousel">
                            <div class="carousel-inner">

                           @if(isset($items))
                            @foreach ($items as $a => $itm)  

                            
                            @if (($itm->carousel_item_active) == 1)
                            <div class="carousel-item p-3 active">
                            @else
                            <div class="carousel-item p-3">
                            @endif


                            @if (($itm->carousel_item_design) == 1)
                                <div class="row gx- my-lg-5 py-lg-5 align-items-center justify-content-center rounded p-5"
                                style="
                                
                                height: 580px;
                                background: linear-gradient(hsla(0, 0%, 100%, 0.8), hsla(0, 0%, 100%, 0.8)), url(data:image/png;base64,{{ $itm->carousel_item_bg }}) no-repeat;
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;
                                
                                ">
                                    <div class="col-xl-4 col-xxl-4 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src={{ asset('assets/galila_logo300x300.png') }} alt="..." /></div>
                                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                                        <div class="my-5 text-center text-xl-start">
                                            <h1 class="display-5 fw-bolder text-dark mb-2 montserrat">{{ $itm->carousel_item_header }}</h1>
                                            <p class="fw-normal text-dark-50 mb-4">{{ $itm->carousel_item_desc }}</p>
                                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                                <a class="mb-4 btn text-light btn-lg px-4 me-sm-3" style="border-style: none; background-color:#03C85D" href="{{ $itm->carousel_item_url }}">{{ $itm->carousel_item_button_name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @elseif ($itm->carousel_item_design == 2)

                                <div class="row gx- my-lg-5 py-lg-5 align-items-center justify-content-center rounded p-5 carouselBG"

                                    style="
                                    height: 580px;
                                    background: linear-gradient(hsla(0, 0%, 100%, 0.8), hsla(0, 0%, 100%, 0.8)), url(data:image/png;base64,{{ $itm->carousel_item_bg }}) no-repeat;
                                    background-size: cover;
                                    background-position: center;
                                    background-repeat: no-repeat;
                                    ">

                                    <div class="col-lg-8 col-xl-8 col-xxl-8 carouselContent">
                                        <div class="my-5 text-center text-xl-start">
                                            <h1 class="display-5 fw-bolder text-dark mb-2 montserrat">{{ $itm->carousel_item_header }}</h1>
                                            <p class="fw-normal text-dark-50 mb-4">{{ $itm->carousel_item_desc }}</p>
                                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                                <a class="mb-4 btn text-light btn-lg px-4 me-sm-3" style="border-style: none; background-color:#03C85D" href="{{ $itm->carousel_item_url }}">{{ $itm->carousel_item_button_name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @else

                                <div class="my-lg-5 py-lg-5 rounded p-5 zoom carouselBG2"

                                style="
                                height: 580px;
                                background-image: url(data:image/png;base64,{{ $itm->carousel_item_bg }});
                                background-position: center;
                                background-size: cover;
                                background-repeat: no-repeat;
                                ">

                                </div>
                            </div>
                                
                            @endif
                            @endforeach
                            @endif


                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>


                        </div>


                        <a href="/admin/carouselsettings" style="background-color:#03C85D; color: white" class="btn btn-sm float-end d-none d-sm-block"><i class="bi bi-pencil-square"></i></a>
                    </div>
             

            </header>



             <!-- Header Line -->
            <div class="container px-5">
                <div class="hrdivider">
                    <hr/>
                        <span>
                            <div class="d-flex align-items-center">
                                <img class="me-3" src={{ asset('assets/galila_logo_small.png') }} alt="..." />
                                ACTIVITIES AND PROGRAMS
                            </div>
                        </span>
                  </div>
            </div>


            <section class="py-3">
                <div class="container px-5 my-5">

                    @if(Session::get('success_update'))
                    <div class="alert alert-success">
                    {{ Session::get('success_update') }}
                    </div>
                    @endif
        
                    @if(Session::get('fail_update'))
                            <div class="alert alert-secondary">
                            {{ Session::get('fail_update') }}
                            </div>
                    @endif


                    <div class="row gx-5">
                        @if(isset($desc))
                        @foreach ($desc as $activities)

                        @if($activities->home_featured == 1)
                        <div class="col-lg-6 mb-5 col-md-12 zoom">
                            <div class="card-header fw-normal" style="background-color:#03C85D; color: white">Featured</div>
                            <div class="card shadow border-0 p-3">
                                <div style="position: relative;">
                                    <img class="card-img-top d-none d-sm-block imagesFitBanner" src="{{ 'data:image/png;base64,' . $activities->display_picture }}" alt="..." />
                                </div>
                                <div class="card-body p-4">
                                    <div class="badge bg-galila rounded-pill mb-2">Activities and Programs</div>
                                    <a class="text-decoration-none link-dark stretched-link" href='{{'/admin/activitiesandprograms/' . $activities->year_id }}'><h1 class="card-title mb-3 montserrat">{{ $activities->year }}</h1></a>
                                    <p class="fw-normal text-dark mb-4">{!! Str::words($activities->year_desc, 20, ' ...') !!}</p>
                                </div>
                            </div>
                            <a href={{ 'makeActivityUnfeatured/' . $activities->year_id }} class="btn btn-secondary btn-sm float-end mt-3"><i class="bi bi-bookmark-x-fill"></i></a>
                        </div>
                        @else
                        <div class="col-lg-6 mb-5 col-md-12 zoom">
                            <div class="card-header fw-normal bg-secondary text-light">Non-Featured</div>
                            <div class="card shadow border-0 p-3">
                                <div style="position: relative;">
                                    <img class="card-img-top d-none d-sm-block imagesFitBanner" src="{{ 'data:image/png;base64,' . $activities->display_picture }}" alt="..." />
                                </div>
                                <div class="card-body p-4">
                                    <div class="badge bg-galila rounded-pill mb-2">Activities and Programs</div>
                                    <a class="text-decoration-none link-dark stretched-link" href='{{'/admin/activitiesandprograms/' . $activities->year_id }}'><h1 class="card-title mb-3 montserrat">{{ $activities->year }}</h1></a>
                                    <p class="fw-normal text-dark mb-4">{!! Str::words($activities->year_desc, 20, ' ...') !!}</p>
                                </div>
                            </div>

                                <a href={{ 'makeActivityFeatured/' . $activities->year_id }} style="background-color:#03C85D; color: white" class="btn btn-sm float-end mt-3"><i class="bi bi-bookmark-fill"></i></a>
  
                        </div>
                        @endif

                        @endforeach
                        @endif
                            
                        

                    </div>
                    <div class="float-end">
                        <a class="text-decoration-none" href="/admin/activitiesandprograms">
                        <div style="color:#03C85D">Activites and Programs  <span><i class="bi bi-arrow-right-circle-fill"></i></span></div>
                        </a>
                    </div>
                </div>
            </section>

                         <!-- Header Line -->
            <div class="container px-5">
                <div class="hrdivider">
                    <hr/>
                        <span>
                            <div class="d-flex align-items-center">
                                <img class="me-3" src={{ asset('assets/galila_logo_small.png') }} alt="..." />
                                ADVOCACY
                            </div>
                        </span>
                  </div>
            </div>

            <section class="py-3">
                <div class="container px-5 my-5">



                    @if(Session::get('success_advocacy_update'))
                    <div class="alert alert-success">
                    {{ Session::get('success_advocacy_update') }}
                    </div>
                    @endif
        
                    @if(Session::get('fail_advocacy_update'))
                            <div class="alert alert-secondary">
                            {{ Session::get('fail_advocacy_update') }}
                            </div>
                    @endif



                    <div class="row gx-5">
                        @if(isset($desc2))
                        @foreach ($desc2 as $campaigns)

                        @if($campaigns->home_featured_camp == 1)
                        <div class="col-lg-6 mb-5 col-md-12 zoom">
                            <div class="card-header fw-normal" style="background-color:#03C85D; color: white">Featured</div>
                            <div class="card shadow border-0 p-3">

                                <div style="position: relative;">
                                    <img src="{{ 'data:image/png;base64,' . $campaigns->display_picture }}" class="card-img-top d-none d-sm-block imagesFitBanner" alt="...">
                                </div>
                                
                                <div class="card-body p-4">
                                    <div class="badge bg-galila rounded-pill mb-2">Advocacy</div>
                                    <a class="text-decoration-none link-dark stretched-link" href='{{'/admin/advocacy/' . $campaigns->campaign_id }}'><h1 class="card-title mb-3 montserrat">{{ $campaigns->campaign_name }}</h1></a>
                                    <p class="fw-normal text-dark mb-4">{!! Str::words($campaigns->campaign_desc, 20, ' ...') !!}</p>
                                </div>
                            </div>
                            <a href={{ 'makeAdvocacyUnfeatured/' . $campaigns->campaign_id }} class="btn btn-secondary btn-sm float-end mt-3"><i class="bi bi-bookmark-x-fill"></i></a>
                        </div>
                        @else
                        <div class="col-lg-6 mb-5 col-md-12 zoom">
                            <div class="card-header fw-normal bg-secondary text-light">Non-Featured</div>
                            <div class="card shadow border-0 p-3">
                                <div style="position: relative;">
                                    <img src="{{ 'data:image/png;base64,' . $campaigns->display_picture }}" class="card-img-top d-none d-sm-block imagesFitBanner" alt="...">
                                </div>
                                <div class="card-body p-4">
                                    <div class="badge bg-galila rounded-pill mb-2">Advocacy</div>
                                    <a class="text-decoration-none link-dark stretched-link" href='{{'/admin/advocacy/' . $campaigns->campaign_id }}'><h1 class="card-title mb-3 montserrat">{{ $campaigns->campaign_name }}</h1></a>
                                    <p class="fw-normal text-dark mb-4">{!! Str::words($campaigns->campaign_desc, 20, ' ...') !!}</p>
                                </div>
                            </div>
                            <a href={{ 'makeAdvocacyFeatured/' . $campaigns->campaign_id }} class="btn btn-secondary btn-sm float-end mt-3"><i class="bi bi-bookmark-x-fill"></i></a>
                        </div>
                        @endif

                        @endforeach
                        @endif

             
                    </div>
                    <div class="float-end">
                        <a class="text-decoration-none" href="/admin/advocacy">
                        <div style="color:#03C85D">Advocacy <span><i class="bi bi-arrow-right-circle-fill"></i></span></div>
                        </a>
                    </div>
                </div>
            </section>



            <div class="container px-5">
                <div class="hrdivider">
                    <hr/>
                        <span>
                            <div class="d-flex align-items-center">
                                <img class="me-3" src={{ asset('assets/galila_logo_small.png') }} alt="..." />
                                THE TEAM
                            </div>
                        </span>
                  </div>
            </div>

            <!-- Blog preview section-->
            <section class="pb-3">
                <div class="container px-5 my-5 pb-5 rounded">
                    <div class="row justify-content-center mb-5 pt-5">
                        <div class="col-md-7 text-center">
                        <h3 class="mb-3">Galila Mapandan Team</h3>
                        </div>
                        <h6 class="subtitle text-center">@if(isset($desc4[0])){{ $desc4[0]->the_team_desc }}@endif</h6>
                    </div>

                    <div class="row gx-5 mb-5" style="margin-top: 100px">
                        @if(isset($desc3))
                        @foreach ($desc3 as $team)

                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 zoom">
                            <div>
                                <img class="card-img-top imagesFit" src="{{ 'data:image/png;base64,' . $team->display_picture }}" alt="..." />
                            </div>

                            <div class="col-md-12 text-center p-2">
                                <div>
                                  <h5 class="mt-2 fw-bold mb-0 fs-6">{{ $team->member_name  }}</h5>
                                  <h6 class="mb-3 fs-6">{{ $team->member_position  }}</h6>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                        @endif



                    </div>
                    <div class="float-end">
                        <a class="text-decoration-none" href="theteam">
                        <div style="color:#03C85D">The Team  <span><i class="bi bi-arrow-right-circle-fill"></i></span></div>
                        </a>
                    </div>
                </div>
            </section>



            <section class="py-3 pb-5 bg-wave2">

                <div class="container px-5">


                    @if(Session::get('success'))
                    <div class="alert alert-success">
                    {{ Session::get('success') }}
                    </div>
                    @endif
        
                    @if(Session::get('fail'))
                            <div class="alert alert-secondary">
                            {{ Session::get('fail') }}
                            </div>
                    @endif


                    <div class="mx-0 my-lg-5 py-lg-5 align-items-center justify-content-center rounded p-5 bg-dark text-light position-relative">
                        <h3 class="mb-3">Contact Us</h3>
                        <p class="fw-normal">@if(isset($desc4[0])){{ $desc4[0]->contact_desc }}@endif</p>

                        <hr class="mt-3">

                        <div class="row pt-4">

                            <div class="col-xl-8 col-lg-12 col-md-12 pe-lg-3">


                                <form action="{{ route('sendMessage')}}" method="post" class="row g-3">

                                    @csrf
                                    <div class="col-md-6">
                                        <span style="font-size: 10px" class="text-danger">@error('sender_name'){{ "Name is Required" }}@enderror</span>
                                        <input type="text" class="form-control" name="sender_name" placeholder="Juan Cruz">
                                      </div>
                                    <div class="col-md-6">
                                        <span style="font-size: 10px" class="text-danger">@error('sender_email'){{ "Email is Required" }}@enderror</span>
                                        <input type="email" class="form-control" name="sender_email" placeholder="example@email.com">
                                    </div>

                                    <div class="col-md-12">

                                        <span style="font-size: 10px" class="text-danger">@error('sender_message'){{ "Message is Required" }}@enderror</span>

                                    <textarea rows="5" class="form-control Message" name="sender_message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="col-12">
                                      <button style="border-style: none; background-color:#03C85D" type="submit" class="btn text-light">Submit</button>
                                    </div>

                                  </form>
                                  
                            </div>

                            
                            <div class="modal fade" id="moreSocial" tabindex="-1" aria-labelledby="moreSocialLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-5">
                                  <div class="modal-content">
                                    <div class="modal-header">
        
                                        <div style="width: 10%"><img width="55%"  class="img-fluid" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                                        <div>
                                            <div class="text-start float0">
                                                <div class="fs-6 fw-bolder text-dark montserrat mt-1">Our Social Medias</div>
                                            </div>
                                        </div>
        
                                      <button type="button" class="btn m-0 p-0" style="border: none;" data-bs-dismiss="modal" aria-label="Close"><i class=" text-secondary fs-5 bi bi-x-circle-fill"></i></button>
                                    </div>
                                    <div class="modal-body p-2">
                                        @if(isset($socials))
                                        @foreach ($socials as $socmed)
    
                                        <div class="card zoom mb-2" style="background-image: linear-gradient(to left, #03c85c42,white)">
                                            <div class="card-body">
                                                <a  class="text-decoration-none link-dark stretched-link" href='{{ $socmed->social_link }}'><img class="me-2" src={{ asset('assets/galila_logo_small.png') }} alt="..." /> {{ ucfirst($socmed->social_name) }}</a>
                                            </div>
                                        </div>
    
                                        @endforeach
                                        @endif
        
                                         </div>                         
                                        
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          </div>
                                  </div>
                                  
                                </div>
                              </div>

                                <div class="col-lg-4 col-md-12 d-none d-xl-block">

                                    @php
                                        $count = 1;
                                    @endphp
                                    @if(isset($socials))
                                    @foreach ($socials as $socmed)

                                    @if ($count == 3)
                                        <div class="card zoom mb-2" style="background-image: linear-gradient(to left, #03c85c42,white)">
                                            <div class="card-body">
                                                <a data-bs-toggle="modal" data-bs-target="#moreSocial" class="text-decoration-none link-dark stretched-link"><i class="bi bi-three-dots"></i></a>
                                            </div>
                                        </div>
                                        @break 
                                    @endif

                                    <div class="card zoom mb-2" style="background-image: linear-gradient(to left, #03c85c42,white)">
                                        <div class="card-body">
                                            <a  class="text-decoration-none link-dark stretched-link" href='{{ $socmed->social_link }}'><img class="me-2" src={{ asset('assets/galila_logo_small.png') }} alt="..." /> {{ ucfirst($socmed->social_name) }}</a>
                                        </div>
                                    </div>
 
                                      @php
                                          $count++;
                                      @endphp

                                    @endforeach
                                    @endif


                                </div>
                                

                        </div>

                      

                    </div>
                </div>

            </section>




 



        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <div class="small m-0 text-white">&copy; Copyright <img class="mx-2" width="15px" src={{ asset('assets/galila_logo_small.png') }} alt="..." /> Galila Mapandan 2022  <a class="link-light small mx-2" href="/logout"><i style="font-size: 13px; color:white" class="bi bi-box-arrow-right"></i></a></div>   
                    </div>
                    <div class="col-auto">
                        @if(isset($socials))
                        @foreach ($socials as $socmed)
                        <a class="link-light small mx-2" href='{{ $socmed->social_link }}'><i style="font-size: 20px; color:white" class="bi bi-{{ $socmed->social_name }}"></i></a>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </footer>



    </body>
</html>
