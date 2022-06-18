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
                        <img src={{asset("assets/galila_logo.png")}} width="170px" alt="galila_logo">
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

            <header class="pt-5">


                <div class="container px-5">
                    <div class="row gx-0">
                        <div class="col-xl-1 col-xxl-1 d-none d-xl-block my-2" style="width: 5%"><img class="img-fluid rounded-3 my-5" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                        <div class="col-lg-11 col-xl-11 col-xxl-11">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-dark mb-2 montserrat">About Us</h1>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container px-5 pb-5">
                    <p>
                        {{ $desc[0]->about_desc }}
                    </p>
                </div>

                <div class="container px-5">
                        <hr/>
                </div>
    
    
                          <!-- Features section-->
                          <section class="py-3">
                            <div class="container px-5 my-5">
                                <div class="row gx-5">

                                    <div class="col-lg-6 mb-5 col-md-12 zoom">
                                        <div class="card shadow border-0 p-3">
                                            {{-- <img style="object-fit: cover;" width="600px" height="200px" src="https://images.pexels.com/photos/207896/pexels-photo-207896.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top mb-2 rounded shadow" alt="..."> --}}
                                            <div class="card-body">
                                                <a class="text-decoration-none link-dark stretched-link" href="theteam"><h1 class="card-title mb-3">THE TEAM</h1></a>
                                                {{ $desc[0]->the_team_desc }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-5 col-md-12 zoom">
                                        <div class="card shadow border-0 p-3">
                                            {{-- <img style="object-fit: cover;" width="600px" height="200px" src="https://images.pexels.com/photos/207896/pexels-photo-207896.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top mb-2 rounded shadow" alt="..."> --}}
                                            <div class="card-body">
                                                <a class="text-decoration-none link-dark stretched-link" href="contact"><h1 class="card-title mb-3">CONTACT US</h1></a>
                                                {{ $desc[0]->contact_desc }}
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
