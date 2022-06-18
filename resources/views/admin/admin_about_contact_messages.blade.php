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
    <body class="d-flex flex-column h-100 bg-dark bg-opacity-5">
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
                                    <a class="nav-link shadow-sm text-dark bg-dark bg-opacity-10" href="/admin/advocacy">ADVOCACY</a>
                                  </li>
                                  
                                <li class="nav-item p-2">
                                    <a class="nav-link shadow-sm text-dark bg-dark bg-opacity-10" href="/admin/activitiesandprograms">ACTIVITIES AND PROGRAMS</a>
                                </li>

                                <li class="nav-item p-2">
                                    <a class="nav-link shadow-sm text-light bg-opacity-10" style="background-color: #03C85D;" aria-current="page"  href="/admin/about">GALILA</a>
                                </li>
                                <li class="nav-item p-2">
                                    <a class="nav-link shadow-sm text-dark" href="/logout">LOGOUT</a>
                                  </li>

    
                            </ul>
                    </div>
                </div>
            </nav>



                <section class="py-3">
                    <div class="container px-5 my-5">

                        <div class="h3">Messages</div>
                        <hr class="mb-5">

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


                        <div class="row gx-5">

                            @php

                            $counter = 0;
                            $modalid = "viewMessage";
                            $btnmodalid = "#viewMessage";
                            $checkcounter = 0;
   
                            @endphp
   
                        @foreach ($desc as $messages)  
                        @php
                            $checkcounter++;
                        @endphp
                        @endforeach

                        @if($checkcounter > 0)
                        @foreach ($desc as $messages)    

                        @php
                        $a = $modalid . $counter;
                        $b = $btnmodalid . $counter;
                        @endphp

                        <div class="modal fade" id={{ $a }} tabindex="-1" aria-labelledby="viewMessageLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-5">
                              <div class="modal-content">
                                <div class="modal-header">
    
                                    <div style="width: 10%"><img width="55%"  class="img-fluid" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                                    <div>
                                        <div class="text-start float0">
                                            <div class="fs-6 fw-bolder text-dark montserrat mt-1">Message</div>
                                        </div>
                                    </div>
    
                                  <button type="button" class="btn m-0 p-0" style="border: none;" data-bs-dismiss="modal" aria-label="Close"><i class=" text-secondary fs-5 bi bi-x-circle-fill"></i></button>
                                </div>
                                <div class="modal-body p-2">

                                    <div class="p-3">
                                        <div class="row">
                                            <span class="col-2">Sender:</span>
                                            <span class="fw-bold col-10">{{ $messages->sender_name }}</span>
                                        </div>

                                        <div class="row">
                                            <span class="col-2">Date:</span>
                                            <span class="fw-bold col-10">@php $created_at = new DateTime($messages->date_sended); echo date_format($created_at, 'l jS F Y'); @endphp</span>
                                        </div>
                                    </div>

                                    <div class="p-3 pt-0">
                                        <textarea type="text" rows="15" name="eventDesc" class="form-control Message" readonly>{{ $messages->sender_message }}</textarea>
                                    </div>

                                    <div class="card zoom m-3 mt-0" style="background-image: linear-gradient(to left, #03c85c42,white)">
                                        <div class="card-body">
                                            <a  class="text-decoration-none link-dark stretched-link fw-normal" href='https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to={{ $messages->sender_email}}'><img class="me-2" src={{ asset('assets/galila_logo_small.png') }} alt="..." />Reply</a>
                                        </div>
                                    </div>

                                     </div>                         
                                    
                                    <div class="modal-footer">
                                        @if ($messages->status == 1)
                                        <button type="button" class="btn text-light bg-secondary" data-bs-dismiss="modal">Close</button>
                                        @else
                                        <button type="button" class="btn text-light" data-bs-dismiss="modal" style="background-color: #03C85D">Mark as Read</button>
                                        <button type="button" class="btn text-light bg-secondary" data-bs-dismiss="modal">Close</button>
                                        @endif
                                        
                                      </div>


                              </div>
                              
                            </div>
                          </div>

                        <div class="col-xl-4 col-lg-6 mb-5 col-md-6 zoom">
                            <div class="card shadow border-0">
                                @if ($messages->status == 1)
                                <div class="card-header fw-normal bg-secondary text-light">Read</div>
                                @else
                                <div class="card-header fw-normal text-light" style="background-color: #03C85D">Unread</div>
                                @endif
                                <div class="card-body">
                                    <a class="text-decoration-none link-dark stretched-link"  data-bs-toggle="modal" data-bs-target={{ $b }}><h5 class="card-title montserrat">{{ $messages->sender_name }}</h5></a>
                                    <p style="font-size: 12px" class="fw-normal text-dark">@php $created_at = new DateTime($messages->date_sended); echo date_format($created_at, 'g:ia \o\n l jS F Y'); @endphp</p>
                                </div>
                            </div>
                            <a  onclick="return confirm(' Are you sure to delete this Message of {{ $messages->sender_name }}?')" href={{ '/deleteMessage/' . $messages->sender_id  }} class="btn btn-secondary btn-sm float-end mt-3"><i class="bi bi-trash-fill"></i></a>
                        </div>

                        @php
                        $counter++;
                        @endphp

                        @endforeach

                        @else

                        <div>
                            <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                No Data
                            </div>
                        </div>

                        @endif

                   
        
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
                                @foreach ($socials as $socmed)
                                <a class="link-light small mx-2" href='{{ $socmed->social_link }}'><i style="font-size: 20px; color:white" class="bi bi-{{ $socmed->social_name }}"></i></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </footer>
            </body>
        </html>



        
        