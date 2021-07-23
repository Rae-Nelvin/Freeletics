<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Gallery</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('assets/css/gallery-2.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/gallery-detail.css')}}" rel="stylesheet">
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
                    <a class="nav-link" aria-current="page" href="{{ route('index') }}">Home </a>
                    <a class="nav-link" href="{{ route('index') }}">About Us</a>
                    <a class="nav-link" href="{{ route('index') }}">Mass Workout</a>
                    <a class="nav-link" href="{{ route('index') }}">Fun Run</a>
                    <a class="nav-link" href="{{ route('index') }}">12 Week</a>
                    <a class="nav-link" href="{{ route('index') }}">Event</a>
                    <a class="nav-link" href="{{ route('index') }}">Blog</a>
                </div>
            </div>
    </nav>
    <!-- end navbar -->
    <!-- Portfolio Grid-->
    <section class="page-section " id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase" id="title">GALLERY</h2>
                <h3 class="section-subheading ">@foreach ($caption as $captions)
                    {!! $captions['captions'] !!}
                    @endforeach
                </h3>
            </div>
            <div class="row">
                @foreach ($photo as $photos)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <img class="img-fluid" src="/freeletics_images/{{$photos->file_path}}" alt="..." />
                        </a>
                    </div>

                </div>
                @endforeach
            </div>
            <div class="see-more text-center">
                <a href="{{ route('gallerymore',$id) }}"><button type="button" class="btn btn-outline-warning"
                        id="see-more" style="border-radius: 20px;">SEE MORE</button></a>
            </div>
        </div>
    </section>



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>