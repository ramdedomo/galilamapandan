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
                                    <a class="nav-link shadow-sm text-dark bg-dark bg-opacity-10" href="/admin/about">GALILA</a>
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

                        <div class="h3">Carousel Settings</div>
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
                            $counteractive = 0;
                            $modalid = "viewItem";
                            $btnmodalid = "#viewItem";

                            $modalid_update = "updateItem";
                            $showmodalid_update = "#updateItem";

                            $design_update = 'design_update';
                            $desc_update = 'desc_update';
                            $header_update = 'header_update';
                            $url_update = 'url_update';
                            $buttonname_update = 'buttonname_update';
                            $sizebox_update = 'sizebox_update';
                            $words1_update = 'words1_update';
                            $words2_update = 'words2_update';
                            $words3_update = 'words3_update';
                            $active_update = 'active_update';

                            @endphp
   

                        @foreach ($desc as $items)    

                        
                        @php
                        $a = $modalid . $counter;
                        $b = $btnmodalid . $counter;

                        $c = $modalid_update . $counter;
                        $d = $showmodalid_update . $counter;

                        $design = $design_update . $items->carousel_item_id;
                        $desc = $desc_update . $items->carousel_item_id;
                        $header = $header_update . $items->carousel_item_id;
                        $url = $url_update . $items->carousel_item_id;
                        $buttonname = $buttonname_update . $items->carousel_item_id;
                        $sizebox = $sizebox_update . $items->carousel_item_id;
                        $words1 = $words1_update . $items->carousel_item_id;
                        $words2 = $words2_update . $items->carousel_item_id;
                        $words3 = $words3_update . $items->carousel_item_id;
                        $active = $active_update . $items->carousel_item_id;


                        @endphp


                        <div class="modal fade" id="{{$c}}" tabindex="-1" aria-labelledby="createAdvocacyLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-5">
                              <div class="modal-content">
                                <div class="modal-header">
    
                                    <div style="width: 10%"><img width="55%"  class="img-fluid" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                                    <div>
                                        <div class="text-start float0">
                                            <div class="fs-6 fw-bolder text-dark montserrat mt-1">Update</div>
                                        </div>
                                    </div>
    
                                  <button type="button" class="btn m-0 p-0" style="border: none;" data-bs-dismiss="modal" aria-label="Close"><i class=" text-secondary fs-5 bi bi-x-circle-fill"></i></button>
                                    </div>

                                            <div class="modal-body p-2">
                                                <form action="/updateItem/{{$items->carousel_item_id}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="bg-dark rounded p-2 bg-opacity-10">
                                        
                                                        <select name="{{$design}}" id="{{$design}}" class="form-select" aria-label="Default select example">

                                                            <option value="@if($items->carousel_item_design == 1)1 @elseif ($items->carousel_item_design == 2)2 @else 3 @endif">
                                                                Current:
                                                                @if ($items->carousel_item_design == 1)
                                                                Design 1 - With Logo
                                                                @elseif ($items->carousel_item_design == 2)
                                                                Design 2 - No Logo
                                                                @else
                                                                Image Only
                                                                @endif
                                                            </option>

                                                            <option value="1">Design 1 - With Logo</option>
                                                            <option value="2">Design 2 - No Logo</option>
                                                            <option value="3">Image Only</option>
                                                        </select>


                                                        <div class="col-12 mt-2">
    
                                                            <span style="font-size: 10px" class="text-danger">
                                                                @error($header){{ $message }}
                                                                <script>
                                                                    $(function() {
                                                                        $('{{$d}}').modal('show');
                                                                    });
                                                                </script>
                                                                
                                                                @enderror
                                                            </span>
            
                                                            <span id="{{$words1}}" style="font-size: 10px" class="">Recommended Words: <b>3 to 5 Words</b></span>
                                                            <input value="{{$items->carousel_item_header}}" type="text" id="{{$header}}" name="{{$header}}" placeholder="Title" class="form-control">
                                                        </div>


                                                        <div class="col-12 mt-2">
    
                                                            <span style="font-size: 10px" class="text-danger">
                                                                @error($desc){{ $message }}
            
                                                                <script>
                                                                    $(function() {
                                                                        $('{{$d}}').modal('show');
                                                                    });
                                                                </script>
                                                                
                                                                @enderror
                                                            </span>
        
                                                                
                                                            <span id="{{$words2}}" style="font-size: 10px" class="">Recommended Words: <b>50 to 60 Words</b></span>
                                                            <textarea value="{{$items->carousel_item_desc}}" type="text" id="{{$desc}}" name="{{$desc}}" placeholder="Description" class="form-control">{{$items->carousel_item_desc}}</textarea>
                                                          </div>


                                                        <div id="sizebox" style="height: 20px"></div>
      
      
                                                        <div class="col-12 mt-2">
          
                                                          <span style="font-size: 10px" class="text-danger">
                                                              @error($buttonname){{ $message }}
          
                                                              <script>
                                                                  $(function() {
                                                                      $('{{$d}}').modal('show');
                                                                  });
                                                              </script>
                                                              
                                                              @enderror
                                                          </span>
                                                          
                                                          <input value="{{$items->carousel_item_button_name}}" type="text" id="{{$buttonname}}" name="{{$buttonname}}" placeholder="Button Name" class="form-control">
                                                        </div>

                                                        <div class="col-12 mt-2">
    
                                                            <span style="font-size: 10px" class="text-danger">
                                                                @error($url){{ $message }}
            
                                                                <script>
                                                                    $(function() {
                                                                        $('{{$d}}').modal('show');
                                                                    });
                                                                </script>
                                                                
                                                                @enderror
                                                            </span>
                                                            
                                                            <input value="{{$items->carousel_item_url}}" type="text" id="{{$url}}" name="{{$url}}" placeholder="URL" class="form-control">
                                                          </div>


                                                          <div class="mt-3">
                                                            <span id="words4" style="font-size: 10px" class="text-dark">Current Photo:</span>
                                                            <img style="width: 100%;" class="rounded shadow" src="{{ 'data:image/png;base64,' . $items->carousel_item_bg }}" alt="...">
                                                          </div>

                                                       
                                                            
                                                            <div class="col-12 mt-2"> 

                                                                <span style="font-size: 10px" class="text-danger">
                                                                    @error('file'){{ $message }}
                
                                                                    <script>
                                                                        $(function() {
                                                                            $('{{$d}}').modal('show');
                                                                        });
                                                                    </script>
                                                                    
                                                                    @enderror
                                                                </span>

                                                                <span id="words3" style="font-size: 10px" class="text-dark">Recommended Size: <b>16:9 Ratio</b></span>
                                                                <input type="file" name="file" class="form-control mb-4">
                                                            </div>
        

                                                    </div>
                                            </div>


                                            <script>

                                                $( document ).ready(function() {


                                                    if($( "#{{$design}} option:selected" ).val() == 3){
                                                        $("#{{$desc}}").hide();
                                                        $("#{{$header}}").hide();
                                                        $("#{{$url}}").hide();
                                                        $("#{{$buttonname}}").hide();
                                                        $("#{{$sizebox}}").hide();
                                                        $("#{{$words1}}").hide();
                                                        $("#{{$words2}}").hide();
                                                    }else{
                                                        $("#{{$desc}}").show();
                                                        $("#{{$header}}").show();
                                                        $("#{{$url}}").show();
                                                        $("#{{$buttonname}}").show();
                                                        $("#{{$sizebox}}").show();
                                                        $("#{{$words1}}").show();
                                                        $("#{{$words2}}").show();
                                                    }


                                                    $( "#{{$design}}" ).change(function() {
                                                    console.log("asd");
                                                    console.log($( "#{{$design}} option:selected" ).text());
                                                    console.log($( "#{{$design}} option:selected" ).val());
                                    
                                                    if($( "#{{$design}} option:selected" ).val() == 3){
                                                        $("#{{$desc}}").hide();
                                                        $("#{{$header}}").hide();
                                                        $("#{{$url}}").hide();
                                                        $("#{{$buttonname}}").hide();
                                                        $("#{{$sizebox}}").hide();
                                                        $("#{{$words1}}").hide();
                                                        $("#{{$words2}}").hide();
                                                    }else{
                                                        $("#{{$desc}}").show();
                                                        $("#{{$header}}").show();
                                                        $("#{{$url}}").show();
                                                        $("#{{$buttonname}}").show();
                                                        $("#{{$sizebox}}").show();
                                                        $("#{{$words1}}").show();
                                                        $("#{{$words2}}").show();
                                                    }
                                    
                                                    });
                                    
                                                });
                                    
                                            </script>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" style="background-color:#03C85D; color: white" class="btn">Update</button>
                                              </div>
                                            </form>

                                        </div>
                                     </div>                         
                              </div>
                            


                        <div class="col-xl-4 col-lg-6 mb-5 col-md-6 zoom">
                            <div class="card shadow border-0">
                                @if ($items->carousel_item_active == 1)
                                @php
                                    $counteractive++;
                                @endphp
                                <div class="card-header fw-normal text-light" style="background-color: #03C85D">Active - First to Show</div>
                                @else
                                <div class="card-header fw-normal bg-secondary text-light">Not Active</div>
                                @endif


                                <div class="card-body">

                                    @if ($items->carousel_item_design == 1)
                                    <span class="badge mb-3" style="background-color: #03C85D">Design 1 - With Logo</span>
                                    @elseif ($items->carousel_item_design == 2)
                                    <span class="badge mb-3" style="background-color: #03C85D">Design 2 - No Logo</span>
                                    @else
                                    <span class="badge mb-3" style="background-color: #03C85D">Image Only</span>
                                    @endif

                                    @if (($items->carousel_item_design) != 3)
                                    <a class="text-decoration-none link-dark"><h5 class="card-title montserrat">{{ $items->carousel_item_header }}</h5></a>
                                    <p style="font-size: 12px" class="fw-normal text-dark">{{ $items->carousel_item_desc }}</p>
                                    @endif

                                    <a data-bs-toggle="modal" data-bs-target="{{$d}}" class="text-decoration-none stretched-link"></a>
                                </div>
                            </div>

                            @if ($items->carousel_item_active == 1)
                            <div class="fw-normal text-dark float-end mt-3" style="font-size: 10px">To Delete this you need to assign new active item</div>
                            @else
                             <a href={{ '/deleteItem/' . $items->carousel_item_id  }} class="btn btn-secondary btn-sm float-end mt-3"><i class="bi bi-trash-fill"></i></a>
                             <a href={{ '/activeItem/' . $items->carousel_item_id  }} style="background-color: #03C85D" class="btn btn-sm float-end mt-3 me-2"><i class="bi bi-bookmark-fill text-light"></i></a>
                            
                            @endif

                        </div>

                        @php
                        $counter++;
                        @endphp

                        @endforeach


                        
                        <div class="modal fade" id="createItem" tabindex="-1" aria-labelledby="createAdvocacyLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-5">
                              <div class="modal-content">
                                <div class="modal-header">
    
                                    <div style="width: 10%"><img width="55%"  class="img-fluid" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                                    <div>
                                        <div class="text-start float0">
                                            <div class="fs-6 fw-bolder text-dark montserrat mt-1">New Item</div>
                                        </div>
                                    </div>
    
                                  <button type="button" class="btn m-0 p-0" style="border: none;" data-bs-dismiss="modal" aria-label="Close"><i class=" text-secondary fs-5 bi bi-x-circle-fill"></i></button>
                                </div>
                                <div class="modal-body p-2">
      
                                    <form action="{{ route('addItem') }}" method="post" enctype="multipart/form-data">

                                        @csrf
                                        <div class="bg-dark rounded p-2 bg-opacity-10">
                                            <div class="row">

                                                <div class="col-12 mt-2">
    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('design'){{ $message }}
    
                                                        <script>
                                                            $(function() {
                                                                $('#createItem').modal('show');
                                                            });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>
                                                    
                                                    <select name="design" id="design" class="form-select" aria-label="Default select example">
                                                        <option value="1">Design 1 - With Logo</option>
                                                        <option value="2">Design 2 - No Logo</option>
                                                        <option value="3">Image Only</option>
                                                    </select>
                                                  </div>


                                                <div class="col-12 mt-2">
    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('header'){{ $message }}
    
                                                        <script>
                                                            $(function() {
                                                                $('#createItem').modal('show');
                                                            });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>
    
                                                    <span id="words1" style="font-size: 10px" class="">Recommended Words: <b>3 to 5 Words</b></span>
                                                    <input type="text" id="header" name="header" placeholder="Title" class="form-control">
                                                </div>
      
                                                <div class="col-12 mt-2">
    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('descrition'){{ $message }}
    
                                                        <script>
                                                            $(function() {
                                                                $('#createItem').modal('show');
                                                            });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>

                                                        
                                                    <span id="words2" style="font-size: 10px" class="">Recommended Words: <b>50 to 60 Words</b></span>
                                                    <textarea type="text" id="desc" name="description" placeholder="Description" class="form-control"></textarea>
                                                  </div>

                                                  <div id="sizebox" style="height: 20px">

                                                  </div>


                                                  <div class="col-12 mt-2">
    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('buttonname'){{ $message }}
    
                                                        <script>
                                                            $(function() {
                                                                $('#createItem').modal('show');
                                                            });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>
                                                    
                                                    <input type="text" id="buttonname" name="buttonname" placeholder="Button Name" class="form-control">
                                                  </div>


                                                  <div class="col-12 mt-2">
    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('url'){{ $message }}
    
                                                        <script>
                                                            $(function() {
                                                                $('#createItem').modal('show');
                                                            });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>
                                                    
                                                    <input type="text" id="url" name="url" placeholder="URL" class="form-control">
                                                  </div>



                                                  <div class="col-12 mt-2">
    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('active'){{ $message }}
    
                                                        <script>
                                                            $(function() {
                                                                $('#createItem').modal('show');
                                                            });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>

                                                    @if($counteractive > 0)     
                                                        <span id="words3" style="font-size: 10px" class="">Active:</span>
                                                        <select disabled name="active" id="active" class="form-select" aria-label="Default select example">
                                                            <option>There is current active Item</option>
                                                        </select>
                                                    @else
                                                        <select name="active" id="active" class="form-select" aria-label="Default select example">
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    @endif


                                                  </div>

                                                  

                                                  <div class="col-12 mt-2"> 

                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('file'){{ $message }}
    
                                                        <script>
                                                             $(function() {
                                                                $('#createItem').modal('show');
                                                            });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>

                                                    <span id="words3" style="font-size: 10px" class="text-dark">Recommended Size: <b>16:9 Ratio</b></span>
                                                    <input type="file" name="file" class="form-control mb-4">
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
                    <button data-bs-toggle="modal" data-bs-target="#createItem" style="background-color:#03C85D; color: white" class="btn"><i class="bi bi-plus-square"></i> Create</button>
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


        <script>

            $( document ).ready(function() {


                $( "#design" ).change(function() {
                console.log("asd");
                console.log($( "#design option:selected" ).text());
                console.log($( "#design option:selected" ).val());

                if($( "#design option:selected" ).val() == 3){
                    $("#desc").hide();
                    $("#header").hide();
                    $("#url").hide();
                    $("#buttonname").hide();
                    $("#sizebox").hide();
                    $("#words1").hide();
                    $("#words2").hide();
                }else{
                    $("#desc").show();
                    $("#header").show();
                    $("#url").show();
                    $("#buttonname").show();
                    $("#sizebox").show();
                    $("#words1").show();
                    $("#words2").show();
                }

                });


            });

        </script>



        
        