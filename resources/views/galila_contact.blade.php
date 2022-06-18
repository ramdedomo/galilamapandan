<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Galila Mapandan | About</title>
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
    <body class="d-flex flex-column h-100 bg-dark bg-opacity-5">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
                <div class="container mt-3 mb-3 px-5 ">

                    <a class="navbar-brand p-2" href="/">
                        <img src={{asset("assets/galila_logo.png")}} width="170px" alt="galila_logo sticky-top">
                    </a>

                    <button class="navbar-toggler p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span><i class="bi bi-list "></i></span></button>

                    <div class="collapse navbar-collapse float-end" id="navbarSupportedContent">
                        <div class="mb-3 mt-5"></div>
                            <ul class="nav nav-pills text-dark ms-auto mb-lg-0 nav-fill">
                                <li class="nav-item p-2">
                                  <a class="nav-link shadow-sm text-dark bg-dark bg-opacity-10" aria-current="page" href="advocacy">ADVOCACY</a>
                                </li>
                                <li class="nav-item p-2">
                                  <a class="nav-link shadow-sm text-dark bg-dark bg-opacity-10" href="activitiesandprograms">ACTIVITIES AND PROGRAMS</a>
                                </li>
                                <li class="nav-item p-2">
                                  <a class="nav-link shadow-sm text-light bg-opacity-10"  style="background-color: #03C85D;" href="about">ABOUT US</a>
                                </li>
                                <li class="nav-item p-2">
                                    <a class="nav-link shadow-sm text-dark" href="/login">LOGIN</a>
                                  </li>


                            </ul>
                    </div>
                </div>
            </nav>

            <header class="py-5">


                <div class="container px-5">
                    <div class="row gx-0">
                        <div class="col-xl-1 col-xxl-1 d-none d-xl-block my-2" style="width: 5%"><img class="img-fluid rounded-3 my-5" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                        <div class="col-lg-11 col-xl-11 col-xxl-11">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-dark mb-2 montserrat">Contact Us</h1>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container px-5 pb-5">
                    <p>
                        {{ $desc[0]->contact_desc }}
                    </p>
                </div>

                <div class="container px-5">
                        <hr/>
                </div>
    
                        
                <section class="py-3 pb-5">

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
    


                        <div class="mx-0 align-items-center justify-content-center rounded position-relative">
                            <div class="row">
    
                                <div class="col-xl-8 col-lg-8 col-md-12 pe-lg-3">
    
                                    <form action="{{ route('sendMessage')}}" method="post" class="row g-3">

                                        @csrf
                                        <div class="col-md-6">
                                            Name<br>
                                            <span style="font-size: 10px" class="text-danger">@error('sender_name'){{ "Name is Required" }}@enderror</span>
                                            <input type="text" class="form-control" name="sender_name" placeholder="Juan Cruz">
                                          </div>
                                        <div class="col-md-6">
                                            Email<br>
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
    
                                            @foreach ($socials as $socmed)
        
                                            <div class="card zoom mb-2" style="background-image: linear-gradient(to left, #03c85c42,white)">
                                                <div class="card-body">
                                                    <a  class="text-decoration-none link-dark stretched-link" href='{{ $socmed->social_link }}'><img class="me-2" src={{ asset('assets/galila_logo_small.png') }} alt="..." /> {{ ucfirst($socmed->social_name) }}</a>
                                                </div>
                                            </div>
        
                                            @endforeach
            
                                             </div>                         
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn text-light" data-bs-dismiss="modal" style="background-color: #03C85D">Close</button>
                                              </div>
                                      </div>
                                      
                                    </div>
                                  </div>
    
                                    <div class="mt-3 col-lg-4 col-md-12 d-none d-xl-block">

                                        <div class="row p-2">

                                            @php
                                            $count = 1;
                                            @endphp
        
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


                                        </div>
    
                                    </div>
                                    
    
                            </div>
    
                          
    
                        </div>
                    </div>
    
                </section>


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
            </body>
        </html>



        
        