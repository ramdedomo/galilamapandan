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
            <header class="pt-5">

                <form action="{{'/updateCampaignscampaign' . "/" . $desc[0]->featured_id}}" method="post">
                    @csrf

                <div class="container px-5">
                    <div class="col-lg-12 col-xl-12 col-xxl-12  p-0">
                            <div class="my-5 text-xl-start">
                                <div class="mb-3">
                                    <a class="text-decoration-none" href="/admin/advocacy"><div class="badge bg-galila rounded-pill mb-2">Galila Mapandan Advocacy</div></a> - 
                                    <a class="text-decoration-none" href=@php echo "/admin/advocacy/" . $desc[0]->campaign_id . "/" @endphp><div class="badge bg-galila rounded-pill mb-2">{{ $desc[0]->campaign_name }}</div></a> -
                                    <div class="badge text-dark rounded-pill mb-2">{{ $desc[0]->featured_name }}</div>
                                </div>

                                <input style="border: none" name="campaignTitle" class="col-12 display-5 fw-bolder text-dark mb-2 montserrat" type="text" value="{{ $desc[0]->featured_name }}">
                                <input name="campaignTitleest" class="px-2 bg-dark rounded bg-opacity-10 col-12" style="border: none" value="{{ $desc[0]->date_established }}" type="date">
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

                    <span style="font-size: 10px" class="text-danger">@error('campaignTitledesc'){{ $message }} @enderror</span>
                    <div>
                        <textarea style="border: none" rows="8" type="text" class="form-control" value="{{ $desc[0]->featured_desc }}" name="campaignTitledesc" placeholder="Advocacy Description">{{ $desc[0]->featured_desc }}</textarea>
                    </div>
                    <div class="mt-2">
                        <button type="submit" value="Submit" style="background-color:#03C85D; color: white" class="btn mt-2">Update Changes</button>
                    </div>
                </div>
            </form>
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
