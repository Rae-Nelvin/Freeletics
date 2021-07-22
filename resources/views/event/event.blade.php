<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{  asset( 'assets/css/detail-event.css') }}">
    <title>Event</title>
</head>

<body>
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
                    <a class="nav-link active" aria-current="page" href="#">Home </a>
                    <a class="nav-link" href="#">About Us</a>
                    <a class="nav-link" href="#">MaskWorkout</a>
                    <a class="nav-link" href="#">Funrun</a>
                    <a class="nav-link" href="#">12 Week</a>
                    <a class="nav-link" href="#">Event</a>
                    <a class="nav-link" href="#">Blog</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->


    <div class="position-relative overflow-hidden bg-event">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <h1 class="title">EVENT</h1>
                </div>
                @foreach ($blog as $blog)
                <div class=" col-9" id="left-bar">
                    <h1 class="title-h1 display-7 font-weight-normal">{!! $blog['title'] !!}</h1>
                    <img src="/freeletics_images/{{$blog->image_path}}" class="img-fluid">
                    <p class="deskripsi"> {{ $blog->subtitle }}</p>
                </div>
                @endforeach
                <div class="sidebar-container">
                    <div class="list-content">
                        <h3 class="right-side">NEWS UPDATE</h3>
                        <div class="line"></div>
                        <div class="card bg-transparent">
                            <a href="{{url('/gallery')}}"> <img class="new-event"
                                    src="{{ asset ('assets/images/blog.png')}}">
                                <p class="desc-content">Next event bulan depan juli</p>
                                <span class="tgl">12 july 2021</span>
                            </a>
                        </div>
                        <div class="card bg-transparent">
                            <a href="{{url('/home')}}"> <img class="new-event-2"
                                    src="{{ asset ('assets/images/blog.png')}}">
                                <p class="desc-content">Next event bulan depan juli</p>
                                <span class="tgl">12 july 2021</span>
                            </a>
                        </div>
                        <div class="card bg-transparent">
                            <a href="{{url('/home')}}"> <img class="new-event-3"
                                    src="{{ asset ('assets/images/blog.png')}}">
                                <p class="desc-content">Next event bulan depan juli</p>
                                <span class="tgl">12 july 2021</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>













    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>