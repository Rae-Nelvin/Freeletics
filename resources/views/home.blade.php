<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/maskworkout.css"> -->
    <link rel="stylesheet" type="text/css" href="{{  asset( 'assets/css/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset( 'assets/css/testimonal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset( 'assets/css/sponsor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset( 'assets/css/funrun-2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset( 'assets/css/mask-2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset( 'assets/css/12weeks.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{  asset( 'assets/css/style.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{  asset( 'assets/css/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  asset( 'assets/css/event.css') }}">
    <title>Freeletics</title>
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
                    <a class="nav-link" href="#">Mass Workout</a>
                    <a class="nav-link" href="#">Funrun</a>
                    <a class="nav-link" href="#">12 Week</a>
                    <a class="nav-link" href="#">Event</a>
                    <a class="nav-link" href="#">Blog</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- about -->
    <div class="position-relative overflow-hidden text-center bg-about">
        <div class="col-md-7 p-lg-4 mx-auto my-5">
            <h1 class="about-h1 display-7 font-weight-normal">ABOUT US</h1>
            <p class="lead font-weight-normal about-p text">
                @foreach($caption_author as $caption)
                    {!! $caption['captions'] !!}
                @endforeach
            </p>
        </div>
        <div class="container author">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <h1 class="author-h1 display-7 font-weight-normal">MEET THE AUTHOR</h1>
                @foreach ($author1 as $author1)
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <img class="rounded author" src="/freeletics_images/{{$author1->file_path}}"
                        alt="Generic placeholder image" width="250" height="250">
                    <h2 class="author-h2">{{ $author1['caption'] }}</h2>
                    <p class="author-p">{!! $author1['subtitle'] !!}</p>
                </div>
                @endforeach
            </div>
            <div class="row">
                @foreach ($author2 as $author2)
                <div class="col-lg-4">
                    <img class="rounded author" src="/freeletics_images/{{$author2->file_path}}"
                        alt="Generic placeholder image" width="250" height="250">
                    <h2 class="author-h2">{{ $author2['caption'] }}</h2>
                    <p class="author-p">{!! $author2['subtitle'] !!}</p>
                </div>
                <!-- /.col-lg-4 -->
                @endforeach
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- End of About -->
    <!-- Mass workout -->
    <div class="position-relative overflow-hidden text-center p-3 p-md-3 bg-mass">
        <div class="row align-items-start">
            <div class="col-12 text-center">
                <h1 class="display-7 font-weight-normal" id="mass-h1">MASS WORKOUT</h1>
            </div>
        </div>
        <div class="row align-items-start" id="mass-swipper">
            <div class="col-xl-4" id="img-swipper">
                <!-- Swiper -->
                <div class="swiper-container mySwiper" id="mask">
                    <div class="swiper-wrapper">
                        @foreach ($massworkout as $massworkout)
                        <div class="swiper-slide" id="swiper-mask">
                            <img src="/freeletics_images/{{$massworkout->file_path}}" class="img-fluid"
                                alt="image-responsive">
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next" id="btn-mask"></div>
                    <div class="swiper-button-prev" id="btn-mask"></div>
                </div>
                <!-- End of Swiper -->
            </div>
            <div class="col">
                <p class="lead font-weight-normal text-center mass-p">
                    @foreach ($caption_funrun as $caption)
                        {!! $caption['captions'] !!}
                    @endforeach
                </p>
            </div>
        </div>
        <div class="see-more text-center">
            <a href="{{ route('gallery') }}"><button type="button" class="btn btn-outline-warning" id="see-more">SEE MORE</button></a>
        </div>
    </div>

    <!-- fun run -->
    <div class="position-relative overflow-hidden text-center bg-funrun">
        <div class="container">
            <div class="col-md-7 p-lg-4 mx-auto my-5">
                <h1 class="about-h1 display-4 font-weight-normal">FUN RUN</h1>
            </div>
            <div class="col">
            </div>
            <!-- Swipper  -->
            <div class="d-flex justify-content-center">
                <div class="box" id="box-fun"></div>
            </div>
            <div class="swiper-container h-56 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events mySwiperr"
                id="swiper-container-run">
                <div class="swiper-wrapper">
                    @foreach ($funrun as $funrun)
                    <div class="swiper-slide" id="swiper-slide-run">
                        <figure>
                            <div class="wrapper">
                                <img src="/freeletics_images/{{$funrun->file_path}}" class=" img-fluid">
                                <h5 class="title-img">Workout at Home</h5>
                                <span class="tgl"><i class="fa fa-calendar-o"></i> 12 july 2021</span>
                            </div>
                        </figure>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next" id="btn-funrun"></div>
                <div class="swiper-button-prev" id="btn-funrun"></div>
            </div>
            <!--  End of Swipper -->
            <div class="col">
                <p class="lead font-weight-normal text" id="funrun-p">
                    @foreach($caption_funrun as $caption)
                        {!! $caption['captions'] !!}
                    @endforeach
                </p>
            </div>
            <div class="see-more text-center">
                <a href="{{ route('gallery') }}"><button type="button" class="btn btn-outline-warning" id="see-more-funrun">SEE MORE</button></a>
            </div>
        </div>
    </div>
    <!-- fun run -->

    <!-- 12 weeks -->
    <div class="position-relative overflow-hidden text-center weeks">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <h1 class="judul-week text-center">12 WEEKS</h1>
                    <p class="lead font-weight-normal caption-week">
                    @foreach ($caption_weeks12 as $caption)    
                        {!! $caption['captions'] !!}
                    @endforeach
                    </p>
                </div>
                <!-- Swiper -->
                <!-- <div class="d-flex justify-content-start">
                    <input type="date" class="form-control" name="birthday" id="date-week">
                </div> -->
                <div class="d-flex justify-content-center">
                    <div class="box" id="box-week"></div>
                </div>
                <div class="swiper-container h-56 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events mySwiperrr"
                    id="swiper-container-week">
                    <div class="swiper-wrapper">
                        @foreach ($weeks12 as $weeks12)
                        <div class="swiper-slide" id="swiper-slide-week">
                            <figure>
                                <div class="wrapper">
                                    <img src="/freeletics_images/{{$weeks12->file_path}}" class=" img-fluid">
                                    <h5 class="title-img">Workout at Home</h5>
                                    <span class="tgl"><i class="fa fa-calendar-o"></i> 12 july 2021</span>
                                </div>
                            </figure>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next" id="btn-week"></div>
                    <div class="swiper-button-prev" id="btn-week"></div>
                </div>
            </div>
            <div class="see-more text-center">
                <a href="{{ route('gallery') }}"><button type="button" class="btn btn-outline-warning" id="see-more-week">SEE MORE</button></a>
            </div>
        </div>
    </div>
    <!-- 12 weeks -->

    <!-- event -->
    <section class="event">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <h1 class="judul-event">
                        EVENT
                    </h1>
                </div>
                @foreach ($event as $event)
                <div class="col-lg-3">
                    <div class="event-img text-center">
                        <img src="/freeletics_images/{{$event->image_path}}" class="img-fluid">
                        <h3>{{ $event['title'] }}</h3>
                        <p>{!! $event['subtitle'] !!}</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-warning">See More</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- event -->

    <!-- blog -->
    <section class="blog">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h1 class="judul-blog">BLOG</h1>
            </div>
            <div class="row">
                @foreach ($blog as $blog)
                <div class="col-md-4">
                    <div class="blog-img text-center">
                        <p>{!! $blog['title'] !!}</p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ $blog->subtitle }}">Read more ></a>
                        </div>
                        <img src="{{ asset ('assets/images/blog.png')}}" class="img-fluid">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- blog -->

    <!-- testimonal -->
    <section class="testi">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <h1>TESTIMONAL</h1>
                </div>
                @foreach ($testimonial as $testimonial)
                <div class="col-lg-3">
                    <div class="testi-img text-center">
                        <img src="/freeletics_images/{{$testimonial->file_path}}">
                        <h2>{{ $testimonial['caption'] }}</h2>
                        <p>{!! $testimonial['subtitle'] !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- testimonal -->

    <!-- sponsor -->
    <section class="position-relative overflow-hidden text-center sponsor">
        <div class="container">
            <div class="row">
                <h1>SPONSORSHIP</h1>
                <div class="swiper-container mySwipper" id="swiper-container-sponsor">
                    <div class="swiper-wrapper">
                        @foreach ($sponsor as $sponsor)
                        <div class="swiper-slide" id="swiper-slide-sponsor">
                            <a href="{!! $sponsor->subtitle !!}"><img
                                    src="/freeletics_images/{{$sponsor->file_path}}"></a>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next" id="btn-sponsor"></div>
                    <div class="swiper-button-prev" id="btn-sponsor"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- sponsor -->





    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- Initialize Swiper -->
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/funrun.js')}}"></script>
    <script src="{{ asset('assets/js/12weeks.js')}}"></script>
    <script src="{{ asset('assets/js/sponsor.js')}}"></script>
    <script src="{{ asset('assets/js/mask.js')}}"></script>

    <!-- Initialize Swiper -->
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <!--
-->
</body>
</html>