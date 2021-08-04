<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Gallery</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" /> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css"
        rel="stylesheet">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js">
    </script>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('assets/css/gallery-2.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/gallery-more.css')}}" rel="stylesheet" />


</head>

<body id="page-top">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset ('assets/images/logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">HOME</a>
                    <a class="nav-link" href="{{ route('home') }}">ABOUT US</a>
                    <a class="nav-link" href="{{ route('home') }}">MASSWORKOUT</a>
                    <a class="nav-link" href="{{ route('home') }}">FUNRUN</a>
                    <a class="nav-link" href="{{ route('home') }}">12 WEEKS</a>
                    <a class="nav-link" href="{{ route('getevent',1) }}">EVENT</a>
                    <a class="nav-link" href="{{ route('getevent',2) }}">BLOG</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- Portfolio Grid-->
    <section class="page-section " id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">GALLERY</h2>
                <div class="row">
                    <!-- <ul id="pagination-demo" class="pagination-lg pull-right"></ul> -->
                    <div class="col-4">
                        <form action="{{ route('datepicker') }}" method="GET">
                            <input type="hidden" name="id" value=<?php echo $id ?>>
                            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"
                                rel="stylesheet" />
                            <select class="form-control" name="datepicker" id="datepicker"
                                onchange="this.form.submit();">
                                <option value="0" selected="selected">&#xf078 Pilih Bulan </option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </form>
                    </div>
                    <form class="search"></form>
                </div>
            </div>
            <div class="row">
                @foreach ($photo as $photos)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item port" id="port">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <img class="img-fluid" src="/freeletics_images/{{$photos->file_path}}" alt="..." />
                        </a>
                    </div>
                </div>
                @endforeach
                <!-- <div class="see-more text-center">
                <button type="button" class="btn btn-outline-warning" id="see-more">SEE MORE</button>
            </div> -->
            </div>
    </section>





    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://www.solodev.com/assets/pagination/jquery.twbsPagination.js"></script>
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
    <script src="{{ asset('assets/js/date.js')}}"></script>
    <script src="{{ asset('assets/js/paging.js')}}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>