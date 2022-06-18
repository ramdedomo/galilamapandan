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

            <!-- Header-->
            <header>

                
                <div class="pt-3 shadow-sm"
                style="
                height: 100%;
                background: linear-gradient(hsla(0, 0%, 100%, 0.8), hsla(0, 0%, 100%, 0.8)), url(data:image/png;base64,{{ $desc[0]->display_picture }}) no-repeat;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                ">

                  <div class="modal fade" id="changePhoto" tabindex="-1" aria-labelledby="changePhotoLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-5">
                      <div class="modal-content">
                        <div class="modal-header">

                            <div style="width: 10%"><img width="55%"  class="img-fluid" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                            <div>
                                <div class="text-start float0">
                                    <div class="fs-6 fw-bolder text-dark montserrat mt-1">Change Background Photo</div>
                                </div>
                            </div>

                          <button type="button" class="btn m-0 p-0" style="border: none;" data-bs-dismiss="modal" aria-label="Close"><i class=" text-secondary fs-5 bi bi-x-circle-fill"></i></button>
                        </div>
                        <div class="modal-body p-2">

                            
                            <form action="{{'/updateAdvocacyPhoto' . "/" . $desc[0]->campaign_id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="bg-dark rounded p-2 bg-opacity-10">
                                    <div class="row">


                                        <div class="col-12"> 
                                            <img class="card-img-top d-none d-sm-block shadow mb-3" src="{{ 'data:image/png;base64,' . $desc[0]->display_picture }}" alt="..." />


                                            <span style="font-size: 10px" class="text-danger">
                                                @error('file'){{ $message }}

                                                <script>
                                                            $(function() {
                                                                $('#changePhoto').modal('show');
                                                            });
                                                </script>
                                                
                                                @enderror
                                            </span>

                                            <span style="font-size: 10px" class="text-dark">Upload New Background Photo</span>
                                            <input type="file" name="file" class="form-control">
                                        </div>



                                    </div>
                                </div>
                             </div>                         
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" style="background-color:#03C85D; color: white" class="btn">Update</button>
                              </div>
                            </form>
                      </div>
                      
                    </div>
                  </div>


                <div class="px-4">
                    <button data-bs-toggle="modal" data-bs-target="#changePhoto" style="background-color:#03C85D; color: white" class="btn mt-2 shadow-sm d-none d-xl-block"><i class="bi bi-image-fill"></i></button>
                </div>
            
                <form action="{{'/updateAdvocacycampaigns' . "/" . $desc[0]->campaign_id}}" method="post">
                    @csrf


                <div class="container px-5">
                        <div class="col-lg-12 col-xl-12 col-xxl-12  p-0">
                            <div class="my-5 text-xl-start">
                                <div class="mb-3">
                                    <a class="text-decoration-none shadow-sm" href="/admin/advocacy"><div class="badge bg-galila rounded-pill mb-2">Galila Mapandan Advocacy</div></a> - <div class="badge text-dark rounded-pill mb-2">{{ $desc[0]->campaign_name }}</div>
                                </div>
                                <input style="border: none" name="advocacyTitle" class="col-12 display-5 fw-bolder shadow-sm text-dark mb-2 montserrat" type="text" value="{{ $desc[0]->campaign_name }}">
                                <input name="advocacyTitleest" class="shadow-sm px-2 bg-dark rounded bg-opacity-10 col-12" style="border: none" value="{{ $desc[0]->campaign_established }}" type="date">
                            </div>
                        </div>
                </div>

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
   
                       <span style="font-size: 10px" class="text-danger">@error('advocacyTitledesc'){{ $message }} @enderror</span>
                       <div>
                           <textarea style="border: none" rows="8" type="text" class="shadow-sm form-control" value="{{ $desc[0]->campaign_desc }}" name="advocacyTitledesc" placeholder="Advocacy Description">{{ $desc[0]->campaign_desc }}</textarea>
                       </div>
                       <div class="mt-2">
                           <button type="submit" value="Submit" style="background-color:#03C85D; color: white" class="btn mt-2 shadow-sm">Update Changes</button>
                       </div>
                   </div>

                </div>

                </form>

    
    
                <!-- Features section-->
                <section class="py-3">
                    <div class="container px-5 my-5">

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
                            
                            @if($status != 1)
                                @foreach ($desc as $campaigns)

                                <div class="col-lg-6 mb-5 col-md-12 zoom">
                                    <div class="card shadow border-0 p-3">
                                        <div class="card-body p-4">
                                            <div class="badge bg-galila rounded-pill mb-2">{{ $desc[0]->campaign_name }}</div>
                                            <a class="text-decoration-none link-dark stretched-link" href='{{$campaigns->campaign_id . "/" . $campaigns->featured_id}}'><h1 class="card-title mb-3">{{ $campaigns->featured_name }}</h1></a>
                                            <p class="card-text mb-0">{!! Str::words($campaigns->featured_desc, 20, ' ...') !!}</p>
                                        </div>
                                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                            <div class="d-flex align-items-end justify-content-between">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <a onclick="return confirm('All campaigns/featured under {{ $desc[0]->campaign_name }} will be deleted. Are you sure to delete this?')" href={{'/deleteCampaigns/' . $campaigns->featured_id }} class="btn btn-secondary btn-sm float-end mt-3"><i class="bi bi-file-x-fill"></i></a>
                                </div>   

                                @endforeach
                            @else

                            <div class="mb-5">
                                <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                    No Data
                                </div>
                            </div>

                            @endif


                            
                                <div class="modal fade" id="createCampaigns" tabindex="-1" aria-labelledby="createAdvocacyLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-5">
                                      <div class="modal-content">
                                        <div class="modal-header">
        
                                            <div style="width: 10%"><img width="55%"  class="img-fluid" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                                            
                                            <div>
                                                <div class="text-start float0">
                                                    <div class="fs-6 fw-bolder text-dark montserrat mt-1">New {{ $desc[0]->campaign_name }}</div>
                                                </div>
                                            </div>
        
                                          <button type="button" class="btn m-0 p-0" style="border: none;" data-bs-dismiss="modal" aria-label="Close"><i class=" text-secondary fs-5 bi bi-x-circle-fill"></i></button>
                                        </div>
                                        <div class="modal-body p-2">
        
                                            
                                            <form action={{'/addCampaigns' . "/" . $desc[0]->campaign_id}} method="post">
                                                @csrf
                                                <div class="bg-dark rounded p-2 bg-opacity-10">
                                                    <div class="row">
                                                        <div class="col-6">
        
                                                            <span style="font-size: 10px" class="text-danger">
                                                                @error('campaignname'){{ $message }}
        
                                                                <script>
                                                                    $(function() {
                                                                        $('#createCampaigns').modal('show');
                                                                    });
                                                                </script>
                                                                
                                                                @enderror
                                                            </span>
        
        
                                                            <input type="text" name="campaignname" placeholder="Name" class="form-control">
                                                        </div>
                                                        <div class="col-6">
                                                            
                                                            <span style="font-size: 10px" class="text-danger">
                                                                @error('campaignest'){{ $message }}
        
                                                                <script>
                                                                    $(function() {
                                                                        $('#createCampaigns').modal('show');
                                                                    });
                                                                </script>
                                                                
                                                                @enderror
                                                            </span>
        
        
                                                          <input type="date" name="campaignest" placeholder="Established" class="form-control" ">
                                                        </div>
                                                        <div class="col-12 mt-3">
        
                                                            <span style="font-size: 10px" class="text-danger">
                                                                @error('campaigndesc'){{ $message }}
        
                                                                <script>
                                                                    $(function() {
                                                                        $('#createCampaigns').modal('show');
                                                                    });
                                                                </script>
                                                                
                                                                @enderror
                                                            </span>
                                                            
                                                            <textarea type="text" name="campaigndesc" placeholder="Description" class="form-control"></textarea>
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


                        </div>
                        <button data-bs-toggle="modal" data-bs-target="#createCampaigns" style="background-color:#03C85D; color: white" class="btn"><i class="bi bi-plus-square"></i> New {{ $desc[0]->campaign_name }}</button>
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
                        @foreach ($socials as $socmed)
                        <a class="link-light small mx-2" href='{{ $socmed->social_link }}'><i style="font-size: 20px; color:white" class="bi bi-{{ $socmed->social_name }}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </footer>


    </body>
</html>
