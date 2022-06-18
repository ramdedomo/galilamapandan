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
                <div class="container mt-3 mb-3 px-5">

                    <a class="navbar-brand p-2" href="/admin">
                        <img src={{asset("assets/galila_logo_admin.png")}} width="170px" alt="galila_logo">
                    </a>

                    <button class="navbar-toggler p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span><i class="bi bi-list "></i></span></button>

                    <div class="collapse navbar-collapse float-end" id="navbarSupportedContent">
                        <div class="mb-3 mt-5"></div>
                            <ul class="nav nav-pills text-dark ms-auto mb-lg-0 nav-fill">
                                <li class="nav-item p-2">
                                    <a class="nav-link shadow-sm text-light bg-opacity-10" style="background-color: #03C85D;" aria-current="page" href="/admin/advocacy">ADVOCACY</a>
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


            <header class="pt-5">


                <div class="container px-5">
                    <div class="row gx-0">
                        <div class="col-xl-1 col-xxl-1 d-none d-xl-block my-2" style="width: 5%"><img class="img-fluid rounded-3 my-5" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                        <div class="col-lg-11 col-xl-11 col-xxl-11">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-dark mb-2 montserrat">Advocacy</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="{{ route('updateAdvocacydesc') }}" method="post">
                 @csrf
                <div class="container px-5 pb-5">
                    
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

                    <span style="font-size: 10px" class="text-danger">@error('advocacydescription'){{ $message }} @enderror</span>
                    <div>
                        <textarea style="border: none" rows="8" type="text" class="form-control" @if(isset($desc2[0])){{'value="' . $desc2[0]->advocacy_desc . '"'}}@endif" name="advocacydescription" placeholder="Advocacy Description">@if(isset($desc2[0])) {{ $desc2[0]->advocacy_desc }} @endif</textarea>
                    </div>
                    <div class="mt-2">
                        <button type="submit" value="Submit" style="background-color:#03C85D; color: white" class="btn mt-2">Update Changes</button>
                    </div>
                </div>
                 </form>


                <div class="container px-5">
                        <hr/>
                </div>



    
    
                <!-- Features section-->
                <section class="py-3">
                    <div class="container px-5 my-5">

                        <!-- adding -->

                        @if(Session::get('success_modal'))
                        <div class="alert alert-success">
                        {{ Session::get('success_modal') }}
                        </div>  
                        @endif

                        @if(Session::get('fail_modal'))
                                <div class="alert alert-danger">
                                {{ Session::get('fail_modal') }}
                                </div>
                        @endif

                        <!-- delete -->


                        @if(Session::get('success_delete'))
                        <div class="alert alert-success">
                        {{ Session::get('success_delete') }}
                        </div>
                        @endif
            
                        @if(Session::get('fail_delete'))
                                <div class="alert alert-secondary">
                                {{ Session::get('fail_delete') }}
                                </div>
                        @endif

                        <div class="row gx-5">
                            
                            @if(isset($desc))
                            @foreach ($desc as $advocacy)

                            <div class="col-lg-6 mb-5 col-md-12 zoom">
                                <div class="card shadow border-0 p-3">

                                    <div style="position: relative;">
                                        <img src="{{ 'data:image/png;base64,' . $advocacy->display_picture }}" class="card-img-top d-none d-sm-block imagesFitBanner" alt="...">
                                    </div>
                                    
                                    <div class="card-body p-4">
                                        <div class="badge bg-galila rounded-pill mb-2">Advocacy</div>
                                        <a class="text-decoration-none link-dark stretched-link" href={{"advocacy/" . $advocacy->campaign_id}}><h1 class="card-title mb-3">{{ $advocacy->campaign_name }}</h1></a>
                                        <p class="card-text mb-0">{!! Str::words($advocacy->campaign_desc, 20, ' ...') !!}</p>
                                    </div>
                                </div>
                                <a onclick="return confirm('All campaigns/featured under this Advocacy will be deleted. Are you sure to delete this advocacy?')" href={{'/deleteAdvocacy/' . $advocacy->campaign_id }} class="btn btn-secondary btn-sm float-end mt-3"><i class="bi bi-file-x-fill"></i></a>
                            </div>

                            @endforeach
                            @endif
                         
                 
                        </div>

            
 
                        


                        <div class="modal fade" id="createAdvocacy" tabindex="-1" aria-labelledby="createAdvocacyLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-5">
                              <div class="modal-content">
                                <div class="modal-header">

                                    <div style="width: 10%"><img width="55%"  class="img-fluid" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                                    
                                    <div>
                                        <div class="text-start float0">
                                            <div class="fs-6 fw-bolder text-dark montserrat mt-1">New Advocacy</div>
                                        </div>
                                    </div>

                                  <button type="button" class="btn m-0 p-0" style="border: none;" data-bs-dismiss="modal" aria-label="Close"><i class=" text-secondary fs-5 bi bi-x-circle-fill"></i></button>
                                </div>
                                <div class="modal-body p-2">


                                    <form action="{{ route('addAdvocacy') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="bg-dark rounded p-2 bg-opacity-10">
                                            <div class="row">
                                                <div class="col-6">

                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('advocacytitle'){{ $message }}

                                                        <script>
                                                            $(function() {
                                                                $('#createAdvocacy').modal('show');
                                                            });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>


                                                    <input type="text" name="advocacytitle" placeholder="Title" class="form-control">
                                                </div>
                                                <div class="col-6">
                                                    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('advocacyest'){{ $message }}

                                                        <script>
                                                            $(function() {
                                                                $('#createAdvocacy').modal('show');
                                                            });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>


                                                  <input type="date" name="advocacyest" placeholder="Established" class="form-control" ">
                                                </div>
                                                <div class="col-12 mt-3">

                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('advocacydesc'){{ $message }}

                                                        <script>
                                                            $(function() {
                                                                $('#createAdvocacy').modal('show');
                                                            });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>
                                                    
                                                    <textarea type="text" name="advocacydesc" placeholder="Description" class="form-control"></textarea>
                                                  </div>


                                                  <div class="col-12"> 
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('file'){{ $message }}
        
                                                        <script>
                                                                    $(function() {
                                                                        $('#createAdvocacy').modal('show');
                                                                    });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>
        
                                                    <span style="font-size: 10px" class="text-dark">Upload Background Photo</span>
                                                    <input type="file" name="file" class="form-control">
                                                </div>


                                            </div>
                                        </div>
                                     </div>                         
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" style="background-color:#03C85D; color: white" class="btn">Create</button>
                                      </div>
                                    </form>
                              </div>
                              
                            </div>
                          </div>

                                                
                        <button data-bs-toggle="modal" data-bs-target="#createAdvocacy" style="background-color:#03C85D; color: white" class="btn"><i class="bi bi-plus-square"></i> New Advocacy</button>
                    </div>
                </section>

            </header>





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



   
