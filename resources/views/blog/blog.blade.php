<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{  asset( 'assets/css/detail-blog.css') }}">
    <title>Blog</title>
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


    <div class="position-relative overflow-hidden bg-blog blog">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <h1 class="title">BLOG</h1>
                </div>
                <div class="col" id="left-bar">
                    @foreach ($blog as $blog)
                    <h1 class="title-h1 display-7 font-weight-normal">{{ $blog->title }}</h1>
                    <img src="/freeletics_images/{{$blog->image_path}}" class="img-fluid">
                    <p class="deskripsi" style="font-size: 20px;">
                        {!! $blog['content'] !!}
                    </p>
                    @endforeach
                </div>
                <div class="sidebar-container">
                    <div class="col">
                        <div class="list-content">
                            <h3 class="right-side">NEWS UPDATE</h3>
                            <div class="line"></div>
                            @foreach ($other as $other)
                            <div class="card bg-transparent">
                                <a href="{{ route('blog',$other->id) }}"> <img class="new-blog"
                                        src="/freeletics_images/{{$other->image_path}}">
                                    <p class="desc-content">{{ $other->title }}</p>
                                    <span
                                        class="tgl">{{ \Carbon\Carbon::parse($other['updated_at'])->format('j F, Y') }}</span>
                                </a>
                            </div>
                            @endforeach
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