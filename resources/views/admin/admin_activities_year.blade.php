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
                                    <a class="nav-link shadow-sm text-light bg-opacity-10" style="background-color: #03C85D;" aria-current="page" href="/admin/activitiesandprograms" >ACTIVITIES AND PROGRAMS</a>
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
     <header class="">


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

                            
                            <form action="{{'/updateYearPhoto' . "/" . $desc[0]->year_id }}" method="post" enctype="multipart/form-data">
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

     <form action="{{'/updateYear' . "/" . $desc[0]->year_id }}" method="post">
            @csrf

            <div class="container px-5">
                <div class="col-lg-12 col-xl-12 col-xxl-12  p-0">
                    <div class="my-5 text-xl-start">
                        <div class="mb-3">
                            <a class="text-decoration-none shadow-sm" href="/admin/activitiesandprograms"><div class="badge bg-galila rounded-pill mb-2">Galila Mapandan Activities and Programs</div></a> - <div class="badge text-dark rounded-pill mb-2">{{ $desc[0]->year }}</div>
                        </div>
                        <span style="font-size: 10px" class="text-danger">@error('year'){{ $message }}@enderror
                        </span>
                        <input style="border: none" name="year" class="col-12 display-5 shadow-sm fw-bolder text-dark mb-2 montserrat" type="text" value="{{ $desc[0]->year }}">
                    </div>
                </div>
            </div>

      





            <div class="container px-5 pb-5">

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

                <span style="font-size: 10px" class="text-danger">@error('yeardescription'){{ $message }} @enderror</span>
                <div>
                    <span style="font-size: 10px" class="text-danger">@error('year'){{ $message }}@enderror
                    <textarea style="border: none" rows="8" type="text" class="form-control shadow-sm" value="{{ $desc[0]->year_desc }}" name="yeardescription" placeholder="{{ $desc[0]->year }} Description">{{ $desc[0]->year_desc }}</textarea>
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


            <div class="modal fade" id="createEvent" tabindex="-1" aria-labelledby="createAdvocacyLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-5">
                          <div class="modal-content">
                            <div class="modal-header">

                                <div style="width: 10%"><img width="55%"  class="img-fluid" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                                <div>
                                    <div class="text-start float0">
                                        <div class="fs-6 fw-bolder text-dark montserrat mt-1">New Event</div>
                                    </div>
                                </div>

                              <button type="button" class="btn m-0 p-0" style="border: none;" data-bs-dismiss="modal" aria-label="Close"><i class=" text-secondary fs-5 bi bi-x-circle-fill"></i></button>
                            </div>
                            <div class="modal-body p-2">

                                
                                <form action="{{'/addEvent' . "/" . $desc[0]->year_id}}" method="post">
                                    @csrf
                                    <div class="bg-dark rounded p-2 bg-opacity-10">
                                        <div class="row">



                                            <div class="col-6">

                                                <span style="font-size: 10px" class="text-danger">
                                                    @error('eventTitle'){{ $message }}

                                                    <script>
                                                        $(function() {
                                                            $('#createEvent').modal('show');
                                                        });
                                                    </script>
                                                    
                                                    @enderror
                                                </span>


                                                <input type="text" name="eventTitle" placeholder="Title" class="form-control">

                                            </div>

                                            <div class="col-6">

                                                <span style="font-size: 10px" class="text-danger">
                                                    @error('eventDate'){{ $message }}

                                                    <script>
                                                        $(function() {
                                                            $('#createEvent').modal('show');
                                                        });
                                                    </script>
                                                    
                                                    @enderror
                                                </span>


                                                <input type="date" name="eventDate" placeholder="Title" class="form-control">

                                            </div>


  
                                            <div class="col-12 mt-2">

                                                <span style="font-size: 10px" class="text-danger">
                                                    @error('eventDesc'){{ $message }}

                                                    <script>
                                                        $(function() {
                                                            $('#createEvent').modal('show');
                                                        });
                                                    </script>
                                                    
                                                    @enderror
                                                </span>
                                                
                                                <textarea type="text" name="eventDesc" placeholder="Description" class="form-control"></textarea>
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



            <button data-bs-toggle="modal" data-bs-target="#createEvent" style="background-color:#03C85D; color: white" class="btn mb-4"><i class="bi bi-plus-square"></i></button>
                
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


                    @if ($status == 0)
                        <div>
                            <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                No Data
                            </div>
                        </div>
                    @else

                    @php
                    //count for counter
                    $count = 0;

                    $months = [$jan, $feb, $mar, $apr, $may, $june, $july, $aug, $sept, $oct, $nov, $dec];
                    $counter = [$count_jan = 0, $count_feb = 0, $count_mar = 0,
                    $count_apr = 0, $count_may = 0, $count_june = 0, $count_july = 0, $count_aug = 0,
                    $count_sept = 0, $count_oct = 0, $count_nov = 0, $count_dec = 0,];

                    //loop through months
                    foreach ($months as $mon) {
                        //loop through events in a month
                        foreach ($mon as $date){
                            //echo $date->year_id;
                            //increment for every month
                            $counter[$count]++;
                        }
                        $count++;
                    }

                    echo "<br>";

                    // $counts = 0;
                    
                    // for($a = 0; $a < count($counter); $a++){
                    //     echo $counter[$a];
                    // }


                    $i = 1;
                    @endphp

                         @if(!$counter[0] == 0)
                        <div><div class="row">
                        @if($counter[0] > 1)
                        <div class="mb-1">
                            <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">January</h5>
                        </div>      
                        @foreach ($jan as $a)
                            @if(($counter[0] % 2 != 0) && ($counter[0] == $i))
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'1'.'/' .  $a->jan_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->jan_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->jan_event_title) }}</span>
                                            <p>{{ $a->jan_event_description }}</p>
                                        </div>
                                    </div>
                            @else
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'1'.'/' .  $a->jan_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->jan_event_date)) }} 
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->jan_event_title) }}</span>
                                            <p>{{  $a->jan_event_description }}</p>
                                        </div>
                                    </div>  
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endforeach
                        @else
                            @foreach ($jan as $a)
                            <div class="mb-1">
                                <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">January</h5>
                            </div>   
                                        <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                            <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'1'.'/' .  $a->jan_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                            <div class="numberCircle me-3 fw-bold text-dark">
                                                {{  date('d', strtotime($a->jan_event_date)) }}
                                            </div>
                                            <div>
                                                <span class="fw-bold">{{  strtoupper($a->jan_event_title) }}</span>
                                                <p>{{  $a->jan_event_description }}</p>
                                            </div>
                                        </div>
                            @endforeach
                        @endif
                        </div></div>
                        @else
                        <div class="mt-5"><div class="row">
                            <div>
                                <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                    No Events Occured in january
                                </div>
                            </div>
                        </div></div>
                        @endif


 
                            @php
                                $i = 1;
                            @endphp

                   @if(!$counter[1] == 0)
                            <div class="mt-5"><div class="row">
                            @if($counter[1] > 1)
                            <div class="mb-1">
                                <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">February</h5>
                            </div>           
                            @foreach ($feb as $a)
                                @if(($counter[1] % 2 != 0) && ($counter[1] == $i))
                                        <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                            <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'2'.'/' .  $a->feb_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                            <div class="numberCircle me-3 fw-bold text-dark">
                                                {{  date('d', strtotime($a->feb_event_date)) }}
                                            </div>
                                            <div>
                                                <span class="fw-bold">{{  strtoupper($a->feb_event_title) }}</span>
                                                <p>{{  $a->feb_event_description }}</p>
                                            </div>
                                        </div>
                                @else
                                        <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">
                                            <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'2'.'/' .  $a->feb_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                            <div class="numberCircle me-3 fw-bold text-dark">
                                                {{  date('d', strtotime($a->feb_event_date)) }}
                                            </div>
                                            <div>
                                                <span class="fw-bold">{{  strtoupper($a->feb_event_title) }}</span>
                                                <p>{{  $a->feb_event_description }}</p>
                                            </div>
                                        </div>  
                                @endif
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                            @else
                                @foreach ($feb as $a)
                                <div class="mb-1">
                                    <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">February</h5>
                                </div>   
                                            <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                                <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'2'.'/' .  $a->feb_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                                <div class="numberCircle me-3 fw-bold text-dark">
                                                    {{  date('d', strtotime($a->feb_event_date)) }}
                                                </div>
                                                <div>
                                                    <span class="fw-bold">{{  strtoupper($a->feb_event_title) }}</span>
                                                    <p>{{  $a->feb_event_description }}</p>
                                                </div>
                                            </div>
                                @endforeach
                            @endif
                            </div></div>
                            @else
                            <div class="mt-5"><div class="row">
                                <div>
                                    <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                        No Events Occured in February
                                    </div>
                                </div>
                            </div></div>
                            @endif




                        @php
                        $i = 1;
                        @endphp

                   @if(!$counter[2] == 0)
                        <div class="mt-5"><div class="row">
                        @if($counter[2] > 1)
                        <div class="mb-1">
                            <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">March</h5>
                        </div>           
                        @foreach ($mar as $a)
                            @if(($counter[2] % 2 != 0) && ($counter[2] == $i))
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'3'.'/' .  $a->mar_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->mar_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->mar_event_title) }}</span>
                                            <p>{{  $a->mar_event_description }}</p>
                                        </div>
                                    </div>
                            @else
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'3'.'/' .  $a->mar_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->mar_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->mar_event_title) }}</span>
                                            <p>{{  $a->mar_event_description }}</p>
                                        </div>
                                    </div>  
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endforeach
                        @else
                            @foreach ($mar as $a)
                            <div class="mb-1">
                                <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">March</h5>
                            </div>   
                                        <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                            <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'3'.'/' .  $a->mar_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                            <div class="numberCircle me-3 fw-bold text-dark">
                                                {{  date('d', strtotime($a->mar_event_date)) }}
                                            </div>
                                            <div>
                                                <span class="fw-bold">{{  strtoupper($a->mar_event_title) }}</span>
                                                <p>{{  $a->mar_event_description }}</p>
                                            </div>
                                        </div>
                            @endforeach
                        @endif
                        </div></div>
                        @else
                        <div class="mt-5"><div class="row">
                            <div>
                                <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                    No Events Occured in March
                                </div>
                            </div>
                        </div></div>
                        @endif




                        @php
                        $i = 1;
                        @endphp

                   @if(!$counter[3] == 0)
                        <div class="mt-5"><div class="row">
                        @if($counter[3] > 1)
                        <div class="mb-1">
                            <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">April</h5>
                        </div>           
                        @foreach ($apr as $a)
                            @if(($counter[3] % 2 != 0) && ($counter[3] == $i))
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'4'.'/' .  $a->apr_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->apr_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->apr_event_title) }}</span>
                                            <p>{{  $a->apr_event_description }}</p>
                                        </div>
                                    </div>
                            @else
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'4'.'/' .  $a->apr_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->apr_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->apr_event_title) }}</span>
                                            <p>{{  $a->apr_event_description }}</p>
                                        </div>
                                    </div>  
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endforeach
                        @else
                            @foreach ($apr as $a)
                            <div class="mb-1">
                                <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">April</h5>
                            </div>   
                                        <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                            <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'4'.'/' .  $a->apr_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                            <div class="numberCircle me-3 fw-bold text-dark">
                                                {{  date('d', strtotime($a->apr_event_date)) }}
                                            </div>
                                            <div>
                                                <span class="fw-bold">{{  strtoupper($a->apr_event_title) }}</span>
                                                <p>{{  $a->apr_event_description }}</p>
                                            </div>
                                        </div>
                            @endforeach
                        @endif
                        </div></div>
                        @else
                        <div class="mt-5"><div class="row">
                            <div>
                                <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                    No Events Occured in April
                                </div>
                            </div>
                        </div></div>
                        @endif






                        @php
                        $i = 1;
                        @endphp

                   @if(!$counter[4] == 0)
                        <div class="mt-5"><div class="row">
                        @if($counter[4] > 1)
                        <div class="mb-1">
                            <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">May</h5>
                        </div>           
                        @foreach ($may as $a)
                            @if(($counter[4] % 2 != 0) && ($counter[4] == $i))
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'5'.'/' .  $a->may_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->may_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->may_event_title) }}</span>
                                            <p>{{  $a->may_event_description }}</p>
                                        </div>
                                    </div>
                            @else
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'5'.'/' .  $a->may_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->may_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->may_event_title) }}</span>
                                            <p>{{  $a->may_event_description }}</p>
                                        </div>
                                    </div>  
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endforeach
                        @else
                            @foreach ($may as $a)
                            <div class="mb-1">
                                <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">May</h5>
                            </div>   
                                        <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                            <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'5'.'/' .  $a->may_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                            <div class="numberCircle me-3 fw-bold text-dark">
                                                {{  date('d', strtotime($a->may_event_date)) }}
                                            </div>
                                            <div>
                                                <span class="fw-bold">{{  strtoupper($a->may_event_title) }}</span>
                                                <p>{{  $a->may_event_description }}</p>
                                            </div>
                                        </div>
                            @endforeach
                        @endif
                        </div></div>
                        @else
                        <div class="mt-5"><div class="row">
                            <div>
                                <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                    No Events Occured in May
                                </div>
                            </div>
                        </div></div>
                        @endif



                        @php
                        $i = 1;
                        @endphp

                   @if(!$counter[5] == 0)
                        <div class="mt-5"><div class="row">
                        @if($counter[5] > 1)
                        <div class="mb-1">
                            <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">June</h5>
                        </div>           
                        @foreach ($june as $a)
                            @if(($counter[5] % 2 != 0) && ($counter[5] == $i))
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'6'.'/' .  $a->june_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->june_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->june_event_title) }}</span>
                                            <p>{{  $a->june_event_description }}</p>
                                        </div>
                                    </div>
                            @else
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'6'.'/' .  $a->june_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->june_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->june_event_title) }}</span>
                                            <p>{{  $a->june_event_description }}</p>
                                        </div>
                                    </div>  
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endforeach
                        @else
                            @foreach ($june as $a)
                            <div class="mb-1">
                                <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">June</h5>
                            </div>   
                                        <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                            <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'6'.'/' .  $a->june_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                            <div class="numberCircle me-3 fw-bold text-dark">
                                                {{  date('d', strtotime($a->june_event_date)) }}
                                            </div>
                                            <div>
                                                <span class="fw-bold">{{  strtoupper($a->june_event_title) }}</span>
                                                <p>{{  $a->june_event_description }}</p>
                                            </div>
                                        </div>
                            @endforeach
                        @endif
                        </div></div>
                        @else
                        <div class="mt-5"><div class="row">
                            <div>
                                <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                    No Events Occured in June
                                </div>
                            </div>
                        </div></div>
                        @endif


      

                        @php
                        $i = 1;
                        @endphp

                   @if(!$counter[6] == 0)
                        <div class="mt-5"><div class="row">
                        @if($counter[6] > 1)
                        <div class="mb-1">
                            <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">July</h5>
                        </div>           
                        @foreach ($july as $a)
                            @if(($counter[6] % 2 != 0) && ($counter[6] == $i))
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'7'.'/' .  $a->july_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->july_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->july_event_title) }}</span>
                                            <p>{{  $a->july_event_description }}</p>
                                        </div>
                                    </div>
                            @else
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'7'.'/' .  $a->july_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->july_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->july_event_title) }}</span>
                                            <p>{{  $a->july_event_description }}</p>
                                        </div>
                                    </div>  
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endforeach
                        @else
                            @foreach ($july as $a)
                            <div class="mb-1">
                                <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">July</h5>
                            </div>   
                                        <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                            <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'7'.'/' .  $a->july_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                            <div class="numberCircle me-3 fw-bold text-dark">
                                                {{  date('d', strtotime($a->july_event_date)) }}
                                            </div>
                                            <div>
                                                <span class="fw-bold">{{  strtoupper($a->july_event_title) }}</span>
                                                <p>{{  $a->july_event_description }}</p>
                                            </div>
                                        </div>
                            @endforeach
                        @endif
                        </div></div>
                        @else
                        <div class="mt-5"><div class="row">
                            <div>
                                <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                    No Events Occured in July
                                </div>
                            </div>
                        </div></div>
                        @endif





                        @php
                        $i = 1;
                        @endphp

                   @if(!$counter[7] == 0)
                        <div class="mt-5"><div class="row">
                        @if($counter[7] > 1)
                        <div class="mb-1">
                            <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">August</h5>
                        </div>           
                        @foreach ($aug as $a)
                            @if(($counter[7] % 2 != 0) && ($counter[7] == $i))
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'8'.'/' .  $a->aug_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->aug_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->aug_event_title) }}</span>
                                            <p>{{  $a->aug_event_description }}</p>
                                        </div>
                                    </div>
                            @else
                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">
                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'8'.'/' .  $a->aug_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                        <div class="numberCircle me-3 fw-bold text-dark">
                                            {{  date('d', strtotime($a->aug_event_date)) }}
                                        </div>
                                        <div>
                                            <span class="fw-bold">{{  strtoupper($a->aug_event_title) }}</span>
                                            <p>{{  $a->aug_event_description }}</p>
                                        </div>
                                    </div>  
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endforeach
                        @else
                            @foreach ($aug as $a)
                            <div class="mb-1">
                                <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">August</h5>
                            </div>   
                                        <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                            <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'8'.'/' .  $a->aug_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                            <div class="numberCircle me-3 fw-bold text-dark">
                                                {{  date('d', strtotime($a->aug_event_date)) }}
                                            </div>
                                            <div>
                                                <span class="fw-bold">{{  strtoupper($a->aug_event_title) }}</span>
                                                <p>{{  $a->aug_event_description }}</p>
                                            </div>
                                        </div>
                            @endforeach
                        @endif
                        </div></div>
                        @else
                        <div class="mt-5"><div class="row">
                            <div>
                                <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                    No Events Occured in August
                                </div>
                            </div>
                        </div></div>
                        @endif




                        @php
                        $i = 1;
                        @endphp



                   @if(!$counter[8] == 0)
                        <div class="mt-5"><div class="row">
                            @if($counter[8] > 1)
                            <div class="mb-1">
                                <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">September</h5>
                            </div>           
                            @foreach ($sept as $a)
                                @if(($counter[8] % 2 != 0) && ($counter[8] == $i))
                                        <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                            <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'9'.'/' .  $a->sept_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                            <div class="numberCircle me-3 fw-bold text-dark">
                                                {{  date('d', strtotime($a->sept_event_date)) }}
                                            </div>
                                            <div>
                                                <span class="fw-bold">{{  strtoupper($a->sept_event_title) }}</span>
                                                <p>{{  $a->sept_event_description }}</p>
                                            </div>
                                        </div>
                                @else
                                        <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">
                                            <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'9'.'/' .  $a->sept_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                            <div class="numberCircle me-3 fw-bold text-dark">
                                                {{  date('d', strtotime($a->sept_event_date)) }}
                                            </div>
                                            <div>
                                                <span class="fw-bold">{{  strtoupper($a->sept_event_title) }}</span>
                                                <p>{{  $a->sept_event_description }}</p>
                                            </div>
                                        </div>  
                                @endif
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                            @else
                                @foreach ($sept as $a)
                                <div class="mb-1">
                                    <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">September</h5>
                                </div>   
                                            <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                                <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'9'.'/' .  $a->sept_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                                <div class="numberCircle me-3 fw-bold text-dark">
                                                    {{  date('d', strtotime($a->sept_event_date)) }}
                                                </div>
                                                <div>
                                                    <span class="fw-bold">{{  strtoupper($a->sept_event_title) }}</span>
                                                    <p>{{  $a->sept_event_description }}</p>
                                                </div>
                                            </div>
                                @endforeach
                            @endif
                            </div></div>
                            @else
                            <div class="mt-5"><div class="row">
                                <div>
                                    <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                        No Events Occured in September
                                    </div>
                                </div>
                            </div></div>
                            @endif





                            @php
                            $i = 1;
                            @endphp
    
    
    
                       @if(!$counter[9] == 0)
                            <div class="mt-5"><div class="row">
                                @if($counter[9] > 1)
                                <div class="mb-1">
                                    <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">October</h5>
                                </div>           
                                @foreach ($oct as $a)
                                    @if(($counter[9] % 2 != 0) && ($counter[9] == $i))
                                            <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                                <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'10'.'/' .  $a->oct_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                                <div class="numberCircle me-3 fw-bold text-dark">
                                                    {{  date('d', strtotime($a->oct_event_date)) }}
                                                </div>
                                                <div>
                                                    <span class="fw-bold">{{  strtoupper($a->oct_event_title) }}</span>
                                                    <p>{{  $a->oct_event_description }}</p>
                                                </div>
                                            </div>
                                    @else
                                            <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">
                                                <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'10'.'/' .  $a->oct_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                                <div class="numberCircle me-3 fw-bold text-dark">
                                                    {{  date('d', strtotime($a->oct_event_date)) }}
                                                </div>
                                                <div>
                                                    <span class="fw-bold">{{  strtoupper($a->oct_event_title) }}</span>
                                                    <p>{{  $a->oct_event_description }}</p>
                                                </div>
                                            </div>  
                                    @endif
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                                @else
                                    @foreach ($oct as $a)
                                    <div class="mb-1">
                                        <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">October</h5>
                                    </div>   
                                                <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                                    <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'10'.'/' .  $a->oct_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                                    <div class="numberCircle me-3 fw-bold text-dark">
                                                        {{  date('d', strtotime($a->oct_event_date)) }}
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold">{{  strtoupper($a->oct_event_title) }}</span>
                                                        <p>{{  $a->oct_event_description }}</p>
                                                    </div>
                                                </div>
                                    @endforeach
                                @endif
                                </div></div>
                                @else
                                <div class="mt-5"><div class="row">
                                    <div>
                                        <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                            No Events Occured in October
                                        </div>
                                    </div>
                                </div></div>
                                @endif




                                @php
                                $i = 1;
                                @endphp
        
        
        
                           @if(!$counter[10] == 0)
                                <div class="mt-5"><div class="row">
                                    @if($counter[10] > 1)
                                    <div class="mb-1">
                                        <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">November</h5>
                                    </div>           
                                    @foreach ($nov as $a)
                                        @if(($counter[10] % 2 != 0) && ($counter[10] == $i))
                                                <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                                    <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'11'.'/' .  $a->nov_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                                    <div class="numberCircle me-3 fw-bold text-dark">
                                                        {{  date('d', strtotime($a->nov_event_date)) }}
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold">{{  strtoupper($a->nov_event_title) }}</span>
                                                        <p>{{  $a->nov_event_description }}</p>
                                                    </div>
                                                </div>
                                        @else
                                                <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">
                                                    <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'11'.'/' .  $a->nov_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                                    <div class="numberCircle me-3 fw-bold text-dark">
                                                        {{  date('d', strtotime($a->nov_event_date)) }}
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold">{{  strtoupper($a->nov_event_title) }}</span>
                                                        <p>{{  $a->nov_event_description }}</p>
                                                    </div>
                                                </div>  
                                        @endif
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                    @else
                                        @foreach ($nov as $a)
                                        <div class="mb-1">
                                            <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">November</h5>
                                        </div>   
                                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'11'.'/' .  $a->nov_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div> 
                                                        <div class="numberCircle me-3 fw-bold text-dark">
                                                            {{  date('d', strtotime($a->nov_event_date)) }}
                                                        </div>
                                                        <div>
                                                            <span class="fw-bold">{{  strtoupper($a->nov_event_title) }}</span>
                                                            <p>{{  $a->nov_event_description }}</p>
                                                        </div>
                                                    </div>
                                        @endforeach
                                    @endif
                                    </div></div>
                                    @else
                                    <div class="mt-5"><div class="row">
                                        <div>
                                            <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                                No Events Occured in November
                                            </div>
                                        </div>
                                    </div></div>
                                    @endif




                                    @php
                                    $i = 1;
                                    @endphp
            
            
            
                               @if(!$counter[11] == 0)
                                    <div class="mt-5"><div class="row">
                                        @if($counter[11] > 1)
                                        <div class="mb-1">
                                            <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">December</h5>
                                        </div>           
                                        @foreach ($dec as $a)
                                            @if(($counter[11] % 2 != 0) && ($counter[11] == $i))
                                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'12'.'/' .  $a->dec_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                                        <div class="numberCircle me-3 fw-bold text-dark">
                                                            {{  date('d', strtotime($a->dec_event_date)) }}
                                                        </div>
                                                        <div>
                                                            <span class="fw-bold">{{  strtoupper($a->dec_event_title) }}</span>
                                                            <p>{{  $a->dec_event_description }}</p>
                                                        </div>
                                                    </div>
                                            @else
                                                    <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mt-4">
                                                        <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'12'.'/' .  $a->dec_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                                        <div class="numberCircle me-3 fw-bold text-dark">
                                                            {{  date('d', strtotime($a->dec_event_date)) }}
                                                        </div>
                                                        <div>
                                                            <span class="fw-bold">{{  strtoupper($a->dec_event_title) }}</span>
                                                            <p>{{  $a->dec_event_description }}</p>
                                                        </div>
                                                    </div>  
                                            @endif
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach
                                        @else
                                            @foreach ($dec as $a)
                                            <div class="mb-1">
                                                <h5 class="montserrat bg-dark p-2 px-3 rounded bg-opacity-10">December</h5>
                                            </div>   
                                                        <div class="d-flex col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 mb-5">
                                                            <div class="height: auto;"><a onclick="return confirm('Are you sure to delete this Event?')" href={{'/deleteEvent/' .'12'.'/' .  $a->dec_event_id }} class="btn btn-sm"><i class="bi bi-file-x-fill"></i></a></div>
                                                            <div class="numberCircle me-3 fw-bold text-dark">
                                                                {{  date('d', strtotime($a->dec_event_date)) }}
                                                            </div>
                                                            <div>
                                                                <span class="fw-bold">{{  strtoupper($a->dec_event_title) }}</span>
                                                                <p>{{  $a->dec_event_description }}</p>
                                                            </div>
                                                        </div>
                                            @endforeach
                                        @endif
                                        </div></div>
                                        @else
                                        <div class="mt-5"><div class="row">
                                            <div>
                                                <div class="text-center bg-dark rounded bg-opacity-10 p-2">
                                                    No Events Occured in December
                                                </div>
                                            </div>
                                        </div></div>
                                        @endif


    
                        


                    @endif
                    {{-- end if for check if it has data --}}


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
