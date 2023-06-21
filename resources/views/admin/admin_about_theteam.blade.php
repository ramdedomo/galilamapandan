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


            <!-- Blog preview section-->
            <header class="py-5">
               


                    <div class="container px-5">
                        <div class="row gx-0">
                            <div class="col-xl-1 col-xxl-1 d-none d-xl-block my-2" style="width: 5%"><img class="img-fluid rounded-3 my-5" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                            <div class="col-lg-11 col-xl-11 col-xxl-11">
                                <div class="my-5 text-center text-xl-start">
                                    <h1 class="display-5 fw-bolder text-dark mb-2 montserrat">The Team</h1>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form action="{{ route('theteamdescUpdate') }}" method="get">
                        @csrf
                       <div class="container px-5 pb-5">
                           
                        @if(Session::get('success_update_desc'))
                        <div class="alert alert-success">
                        {{ Session::get('success_update_desc') }}
                        </div>
                        @endif
        
                        @if(Session::get('fail_update_desc'))
                                <div class="alert alert-secondary">
                                {{ Session::get('fail_update_desc') }}
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
       
                           <span style="font-size: 10px" class="text-danger">@error('theteamdescription'){{ $message }} @enderror</span>
                           <div>
                                <textarea style="border: none" rows="5" type="text" class="form-control" value="{{ $desc2[0]->the_team_desc }}" name="theteamdescription" placeholder="The Team Description">{{ $desc2[0]->the_team_desc }}</textarea>
                           </div>
                           <div class="mt-2">
                                <button type="submit" value="Submit" style="background-color:#03C85D; color: white" class="btn mt-2">Update Changes</button>
                           </div>
                       </div>
                        </form>


    
                    <div class="container px-5">
                            <hr/>
                    </div>
        

                    
    
                    <section class="py-3">
                        <div class="container px-5 my-5">


                            @if(Session::get('success_modal'))
                            <div class="alert alert-success">
                            {{ Session::get('success_modal') }}
                            </div>
                            @endif
                
                            @if(Session::get('fail_modal'))
                                <div class="alert alert-secondary">
                                {{ Session::get('fail_modal') }}
                                </div>
                            @endif

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

                         @php

                         $counter = 0;
                         $modalid = "newMember";
                         $btnmodalid = "#newMember";

                         @endphp


                        <style>
                            .btnEditmember {
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                -ms-transform: translate(-50%, -50%);
                                color: white;
                                font-size: 16px;
                                padding: 12px 24px;
                                border: none;
                                cursor: pointer;
                                border-radius: 5px;
                            }

                            .btnEditmember:hover{
                                background-color: #03C85D;
                                box-shadow: 0 0 10px #0000004f;
                            }

                        </style>


                        @foreach ($desc->sortBy('member_order') as $team)

                        @php
                        $a = $modalid . $counter;
                        $b = $btnmodalid . $counter;
                        @endphp

      

                            <div class="col-lg-12 col-xl-6 col-md-12 mb-5 mt-2">
                                <div class="row">

                                    <div class="col-4 col-sm-5 col-lg-2 col-xl-3 col-md-3 d-none d-md-block">
                                        <div style="position: relative;">
                                            <img class="card-img-top rounded" src="{{ 'data:image/png;base64,' . $team->display_picture }}" alt="..." />
                                            <button data-bs-toggle="modal" data-bs-target={{ $b }}  class="btnEditmember btn text-light"><i class="bi bi-pencil-fill"></i></button>
                                        </div>
                                        <div class="text-center mt-3">
                                            <a class="text-dark" href="@foreach ($member_socials as $msocial)@if($msocial->member_social_id == $team->member_social_id) {{$msocial->facebook}} @endif @endforeach"><i class="bi bi-facebook mx-2"></i></a>
                                            <a class="text-dark" href="@foreach ($member_socials as $msocial)@if($msocial->member_social_id == $team->member_social_id){{$msocial->instagram}}@endif @endforeach"><i class="bi bi-instagram mx-2"></i></a>
                                            <a class="text-dark" href="@foreach ($member_socials as $msocial)@if($msocial->member_social_id == $team->member_social_id){{$msocial->twitter}}@endif @endforeach"><i class="bi bi-twitter mx-2"></i></a>
                                       
                                        </div>
                                        
                                    </div>

                                    <div class="col-sm-12 col-lg-10 col-xl-9  col-md-9 col-12">

                                        <div class="row">
                                            <div class="col-3 d-block d-md-none">
                                                <img class="card-img-top rounded" src="{{ 'data:image/png;base64,' . $team->display_picture }}" alt="..." />
                                            </div>
                                            <div class="col-9 col-md-12">
                                                <h4 class="montserrat me-xl-5 p-0 m-0">{{ $team->member_name }}</h4>
                                                <div class="d-flex align-items-center">
                                                    <img style="width: 15px;" class="me-2" src={{ asset('assets/galila_logo_small.png') }} alt="..." />
                                                    {{ $team->member_position }}
                                                </div>
                                            </div>

                                        </div>


                                        <div class="mt-3 me-xl-5">
                                            {{ $team->member_bio }}
                                        </div>

                                        <div class="mt-3 p-0 d-block d-md-none">

                                            <a class="text-dark" href="@foreach ($member_socials as $msocial)@if($msocial->member_social_id == $team->member_social_id){{$msocial->facebook}}@endif @endforeach"><i class="bi bi-facebook mx-2"></i></a>
                                            <a class="text-dark" href="@foreach ($member_socials as $msocial)@if($msocial->member_social_id == $team->member_social_id){{$msocial->instagram}}@endif @endforeach"><i class="bi bi-instagram mx-2"></i></a>
                                            <a class="text-dark" href="@foreach ($member_socials as $msocial)@if($msocial->member_social_id == $team->member_social_id){{$msocial->twitter}}@endif @endforeach"><i class="bi bi-twitter mx-2"></i></a>
                                       
                                        </div>

                                    </div>
                                    

                                </div>
                            </div>
 

{{-- 
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 zoom">
                            <div style="position: relative;">
                                <img class="card-img-top imagesFit" src="{{ 'data:image/png;base64,' . $team->display_picture }}" alt="..." />
                                <button data-bs-toggle="modal" data-bs-target={{ $b }}  class="btnEditmember btn text-light"><i class="bi bi-pencil-fill"></i></button>
                            </div>
                            <div class="col-md-12 text-center p-2">
                                <div>
                                <h5 class="mt-2 fw-bold mb-0 fs-6">{{ $team->member_name  }}</h5>
                                <h6 class="mb-3 fs-6">{{ $team->member_position  }}</h6>
                                </div>
                            </div>
                        </div> --}}



                        <div class="modal fade" id={{ $a }} tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-5">
                              <div class="modal-content">
                                <div class="modal-header">
    
                                    <div style="width: 10%"><img width="55%"  class="img-fluid" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                                    <div>
                                        <div class="text-start float0">
                                            <div class="fs-6 fw-bolder text-dark montserrat mt-1">{{ $team->member_name }} Info</div>
                                        </div>
                                    </div>
    
                                  <button type="button" class="btn m-0 p-0" style="border: none;" data-bs-dismiss="modal" aria-label="Close"><i class=" text-secondary fs-5 bi bi-x-circle-fill"></i></button>
                                </div>
                                <div class="modal-body p-2">
       
                                    <form action={{'/updateMember' . "/" . $team->member_id }} method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="bg-dark rounded p-2 bg-opacity-10">
                                            <div class="row">

                                                <span style="font-size: 10px" class="text-dark">Current Photo</span>
                                                <div class="col-12"> 
                                                    <img class="card-img-top d-none d-sm-block shadow" src="{{ 'data:image/png;base64,' . $team->display_picture }}" alt="..." />

                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('file'){{ $message }}
    
                                                        <script>
                                                        var jobs = @json($b);
                                                            $(function() {
                                                                $(jobs).modal('show');
                                                            });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>

                                                    <input type="file" name="file" class="form-control mt-2 mb-4" >
                                                </div>

    
                                                <div class="col-12">

                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('memberName'){{ $message }}
    
                                                        <script>
                                                            var jobs = @json($b);
                                                            $(function() {
                                                                $(jobs).modal('show');
                                                            });
                                                        </script>
                                                        
                                                        @enderror
                                                    </span>

                                                    <span style="font-size: 10px" class="text-dark">Name</span>
                                                    <input type="text" name="memberName" value='{{ $team->member_name }}' placeholder="Name" class="form-control">
                                                </div>
    
                                                
                                                <div class="col-6 mt-2">
    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('memberPosition'){{ $message }}
    
                                                        <script>
                                                            var jobs = @json($b);
                                                                $(function() {
                                                                    $(jobs).modal('show');
                                                                });
                                                            </script>
                                                        
                                                        @enderror
                                                    </span>
    
                                                    <span style="font-size: 10px" class="text-dark">Member Position</span>
                                                    <input type="text" value='{{ $team->member_position }}' name="memberPosition" placeholder="Position" class="form-control">
                                                </div>


                                                <div class="col-6 mt-2">
    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('memberOrder'){{ $message }}
    
                                                        <script>
                                                            var jobs = @json($b);
                                                                $(function() {
                                                                    $(jobs).modal('show');
                                                                });
                                                            </script>
                                                        
                                                        @enderror
                                                    </span>
    
                                                    <span style="font-size: 10px" class="text-dark">Member Order</span>
                                                    <input type="number" value='{{ $team->member_order }}' name="memberOrder" placeholder="Order" class="form-control">
                                                </div>



                                                <div class="col-12 mt-2">
    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('bio'){{ $message }}
    
                                                        <script>
                                                            var jobs = @json($b);
                                                                $(function() {
                                                                    $(jobs).modal('show');
                                                                });
                                                            </script>
                                                        
                                                        @enderror
                                                    </span>
    
                                                    <span style="font-size: 10px" class="text-dark">Bio</span>
                                                    <textarea type="text" value="{{$team->member_bio}}" name="memberBio" class="form-control">{{$team->member_bio}}</textarea>
                                                </div>


                                                <div id="sizebox" style="height: 20px"></div>
    
                                                <div class="col-12 mt-4">
    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('facebook'){{ $message }}
    
                                                        <script>
                                                            var jobs = @json($b);
                                                                $(function() {
                                                                    $(jobs).modal('show');
                                                                });
                                                            </script>
                                                        
                                                        @enderror
                                                    </span>
    
                                                    <span style="font-size: 10px" class="text-dark">Facebook</span>
                                                    <input type="text" value="@foreach($member_socials as $msocial)@if($msocial->member_social_id == $team->member_social_id){{$msocial->facebook}}@endif{{trim(" ");}}@endforeach" name="facebook" placeholder="Facebook" class="form-control">
                                                </div>


                                                <div class="col-12 mt-1">
    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('instagram'){{ $message }}
    
                                                        <script>
                                                            var jobs = @json($b);
                                                                $(function() {
                                                                    $(jobs).modal('show');
                                                                });
                                                            </script>
                                                        
                                                        @enderror
                                                    </span>
    
                                                    <span style="font-size: 10px" class="text-dark">Instagram</span>
                                                    <input type="text" value="@foreach($member_socials as $msocial)@if($msocial->member_social_id == $team->member_social_id){{$msocial->instagram}}@endif{{trim(" ");}}@endforeach" name="instagram" placeholder="Instagram" class="form-control">
                                                </div>


                                                <div class="col-12 mt-1">
    
                                                    <span style="font-size: 10px" class="text-danger">
                                                        @error('twitter'){{ $message }}
    
                                                        <script>
                                                            var jobs = @json($b);
                                                                $(function() {
                                                                    $(jobs).modal('show');
                                                                });
                                                            </script>
                                                        
                                                        @enderror
                                                    </span>
    
                                                    <span style="font-size: 10px" class="text-dark">Twitter</span>
                                                    <input type="text" value="@foreach($member_socials as $msocial)@if($msocial->member_social_id == $team->member_social_id){{$msocial->twitter}}@endif{{trim(" ");}}@endforeach" name="twitter" placeholder="Twitter" class="form-control">
                                                </div>


    
     
                                            </div>
                                        </div>
                                     </div>                         
                                    
                                    <div class="modal-footer">
                                        <a href={{'/removeMember/' . $team->member_id }} onclick="return confirm('Are you sure to remove this member?')" type="button" class="btn btn-danger"><i class="bi bi-file-minus"></i></a>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" style="background-color:#03C85D; color: white" class="btn">Update</button>
                                      </div>
                                    </form>
                              </div>
                              
                            </div>
                          </div>


                        @php
                        $counter++;
                        @endphp


                        @endforeach

                  

                   
                        </div>
                    </div>
                </section>
                    
            

                <div class="container">

                    <div class="modal fade" id="newMember" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable p-5">
                          <div class="modal-content">
                            <div class="modal-header">

                                <div style="width: 10%"><img width="55%"  class="img-fluid" src={{ asset('assets/galila_logo40x40.png') }} alt="..." /></div>
                                <div>
                                    <div class="text-start float0">
                                        <div class="fs-6 fw-bolder text-dark montserrat mt-1">New Member</div>
                                    </div>
                                </div>

                              <button type="button" class="btn m-0 p-0" style="border: none;" data-bs-dismiss="modal" aria-label="Close"><i class=" text-secondary fs-5 bi bi-x-circle-fill"></i></button>
                            </div>
                            <div class="modal-body p-2">


                                <form action={{'/addMember'}} method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="bg-dark rounded p-2 bg-opacity-10">
                                        <div class="row">


                                            <div class="col-12">

                                                <span style="font-size: 10px" class="text-danger">
                                                    @error('fileadd'){{ $message }}

                                                    <script>
                                                        $(function() {
                                                            $('#newMember').modal('show');
                                                        });
                                                    </script>
                                                    
                                                    @enderror
                                                </span>

                                                <input type="file" name="fileadd" class="form-control mt-2 mb-4" >
                                            </div>


                                            <div class="col-12">

                                                <span style="font-size: 10px" class="text-danger">
                                                    @error('memberNameadd'){{ $message }}

                                                    <script>
                                                        $(function() {
                                                            $('#newMember').modal('show');
                                                        });
                                                    </script>
                                                    
                                                    @enderror
                                                </span>

                                                <input type="text" name="memberNameadd" placeholder="Name" class="form-control">
                                            </div>

                                            
                                            <div class="col-6 mt-2">

                                                <span style="font-size: 10px" class="text-danger">
                                                    @error('memberPositionadd'){{ $message }}

                                                    <script>
                                                        $(function() {
                                                            $('#newMember').modal('show');
                                                        });
                                                    </script>
                                                    
                                                    @enderror
                                                </span>


                                                <input type="text" name="memberPositionadd" placeholder="Position" class="form-control">
                                            </div>


                                            <div class="col-6 mt-2">

                                                <span style="font-size: 10px" class="text-danger">
                                                    @error('memberOrderadd'){{ $message }}

                                                    <script>
                                                        $(function() {
                                                            $('#newMember').modal('show');
                                                        });
                                                    </script>
                                                    
                                                    @enderror
                                                </span>


                                                <input type="number" name="memberOrderadd" placeholder="Order" class="form-control">
                                            </div>


                                            <div class="col-12 mt-2">
    
                                                <span style="font-size: 10px" class="text-danger">
                                                    @error('memberBioadd'){{ $message }}

                                                    <script>
                                                        $(function() {
                                                            $('#newMember').modal('show');
                                                        });
                                                    </script>
                                                    
                                                    @enderror
                                                </span>


                                                <textarea type="text"  name="memberBioadd" placeholder="Bio" class="form-control"></textarea>
                                            </div>


                                            <div id="sizebox" style="height: 20px"></div>


                                            <div class="col-12 mt-4">
    
                                                <span style="font-size: 10px" class="text-danger">
                                                    @error('facebook'){{ $message }}

                                                    <script>
                                                        $(function() {
                                                            $('#newMember').modal('show');
                                                        });
                                                    </script>
                                                    
                                                    @enderror
                                                </span>

                                                <span style="font-size: 10px" class="text-dark">Facebook URL:</span>
                                                <input type="text" name="facebook" placeholder="Facebook" class="form-control">
                                            </div>


                                            <div class="col-12 mt-1">

                                                <span style="font-size: 10px" class="text-danger">
                                                    @error('instagram'){{ $message }}

                                                    <script>
                                                        $(function() {
                                                            $('#newMember').modal('show');
                                                        });
                                                    </script>
                                                    
                                                    @enderror
                                                </span>

                                                <span style="font-size: 10px" class="text-dark">Instagram URL:</span>
                                                <input type="text" name="instagram" placeholder="Instagram" class="form-control">
                                            </div>


                                            <div class="col-12 mt-1">

                                                <span style="font-size: 10px" class="text-danger">
                                                    @error('twitter'){{ $message }}

                                                    <script>
                                                        $(function() {
                                                            $('#newMember').modal('show');
                                                        });
                                                    </script>
                                                    
                                                    @enderror
                                                </span>

                                                <span style="font-size: 10px" class="text-dark">Twitter URL:</span>
                                                <input type="text"  name="twitter" placeholder="Twitter" class="form-control">
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


                        <button  data-bs-toggle="modal" data-bs-target="#newMember" style="background-color:#03C85D; color: white" class="btn mx-4 mt-5 mb-5"><i class="bi bi-plus-square"></i> New Member</button>
                   
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

                               
                            