<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
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
                    <a class="nav-link" href="#">Features </a>
                    <a class="nav-link" href="#">Pricing </a>
                    <a class="nav-link" href="#">Pricing </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- about -->
    <div class="position-relative overflow-hidden text-center bg-about">
        <div class="col-md-7 p-lg-4 mx-auto my-5">
            <h1 class="about-h1 display-7 font-weight-normal">ABOUT US</h1>
            <p class="lead font-weight-normal about-p text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aliquam cumque suscipit dolorem reprehenderit dolore expedita ullam sint hic exercitationem adipisci
                magnam, itaque eum animi odit sit dolorum illo quam dignissimos! <span class="moreText">Lorem ipsum,
                    dolor sit amet consectetur adipisicing elit.</span>
            </p><button class="btn btn-outline-warning read-more-btn" id="btn-read-more">Read More</button>
        </div>
        <div class="container author">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <h1 class="author-h1 display-7 font-weight-normal">MEET THE AUTHOR</h1>
                <div class="col-lg-4">
                    <img class="rounded author" src="{{ asset ('assets/images/author2.jpg')}}"
                        alt="Generic placeholder image" width="250" height="250">
                    <h2 class="author-h2">Wahyu Hidayat</h2>
                    <p class="author-p">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id
                        dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac,
                        vestibulum at eros. Praesent commodo cursus magna.</p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded author" src="{{ asset ('assets/images/author2.jpg')}}"
                        alt="Generic placeholder image" width="250" height="250">
                    <h2 class="author">Wahyu Hidayat</h2>
                    <p class="author">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
                        sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus
                        commodo, tortor mauris condimentum nibh.</p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded author" src="{{ asset ('assets/images/author2.jpg')}}"
                        alt="Generic placeholder image" width="250" height="250">
                    <h2 class="author">Wahyu Hidayat</h2>
                    <p class="author">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                        Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor
                        mauris condimentum nibh, ut fermentum massa justo sit
                        amet risus.</p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- End of About -->
    <!-- mask workout -->
    <div class="position-relative overflow-hidden text-center p-3 p-md-3 bg-mass">
        <div class="row align-items-start">
            <div class="col-12 text-center">
                <h1 class="display-7 font-weight-normal" id="mass-h1">MASS WORKOUT</h1>
            </div>
        </div>
        <div class="row" id="mass-date">
            <div class="col-4">
                <input type="date" class="form-control" name="birthday" id="date-mask">
            </div>
        </div>
        <div class="row align-items-start" id="mass-swipper">
            <div class="col-xl-4" id="img-swipper">
                <!-- Swiper -->
                <div class="swiper-container mySwiper" id="mask">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" id="swiper-mask">
                            <img src="{{ asset ('assets/images/author1.jpg')}}" class="img-fluid"
                                alt="image-responsive">
                        </div>
                        <div class="swiper-slide" id="swiper-mask">
                            <img src="{{ asset ('assets/images/author2.jpg')}}" class="img-fluid"
                                alt="image-responsive">
                        </div>
                        <div class="swiper-slide" id="swiper-mask">
                            <img src="{{ asset ('assets/images/author3.png')}}" class="img-fluid"
                                alt="image-responsive">
                        </div>
                    </div>
                    <div class="swiper-button-next" id="btn-mask"></div>
                    <div class="swiper-button-prev" id="btn-mask"></div>
                </div>
                <!-- End of Swiper -->
            </div>
            <div class="col">
                <p class="lead font-weight-normal text-center mass-p">Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit.
                    Aliquam cumque suscipit dolorem reprehenderit dolore expedita ullam sint hic exercitationem adipisci
                    magnam, itaque eum animi odit sit dolorum illo quam dignissimos! Lorem ipsum dolor sit amet Lorem
                    ipsum dolor sit amet consectetur adipisicing elit.
                    inventore atque ea.<span class="moreText">accusamus itaque eum repudiandae distinctio reprehenderit
                        fuga
                        ducimus. Beatae accusamus quae veniam perferendis aliquam magni alias illum voluptatem
                        laudantium!</span>
                </p><button class="btn btn-outline-warning read-more-btn text-center" id="btn-read-more-mass">Read
                    More</button>
            </div>
        </div>
    </div>

    <!-- fun run -->
    <div class="position-relative overflow-hidden text-center bg-funrun">
        <div class="col-md-7 p-lg-4 mx-auto my-5">
            <h1 class="about-h1 display-4 font-weight-normal">FUN RUN</h1>
        </div>
        <!-- <div class="d-flex justify-content-start">
            <input type="date" class="form-control" name="birthday" id="date-funrun">
        </div> -->
        <div class="col">
        </div>
        <!-- Swipper  -->
        <div class="d-flex justify-content-center">
            <div class="box" id="box-fun"></div>
        </div>
        <div class="swiper-container h-56 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events mySwiperr"
            id="swiper-container-run">
            <div class="swiper-wrapper">
                <div class="swiper-slide " id="swiper-slide-run">
                    <img src="{{ asset ('assets/images/week1.png')}}" class="img-fluid">
                </div>
                <div class="swiper-slide " id="swiper-slide-run">
                    <img src="{{ asset ('assets/images/week2.png')}}" class="img-fluid">
                </div>
                <div class="swiper-slide " id="swiper-slide-run">
                    <img src="{{ asset ('assets/images/week3.png')}}" class="img-fluid">
                </div>
                <div class="swiper-slide " id="swiper-slide-run">
                    <img src="{{ asset ('assets/images/week1.png')}}" class="img-fluid">
                </div>
                <div class="swiper-slide " id="swiper-slide-run">
                    <img src="{{ asset ('assets/images/week2.png')}}" class="img-fluid">
                </div>
                <div class="swiper-slide " id="swiper-slide-run">
                    <img src="{{ asset ('assets/images/week3.png')}}" class="img-fluid">
                </div>
            </div>
            <div class="swiper-button-next" id="btn-week"></div>
            <div class="swiper-button-prev" id="btn-week"></div>
        </div>
        <!--  End of Swipper -->
        <div class="col">
            <p class="lead font-weight-normal text" id="funrun-p">Lorem ipsum dolor sit, amet consectetur adipisicing
                elit. Aliquam cumque suscipit dolorem reprehenderit dolore expedita ullam sint hic exercitationem
                adipisci magnam, itaque eum animi odit sit dolorum illo quam dignissimos! <span class="moreText">Lorem
                    ipsum,
                    dolor sit amet consectetur adipisicing elit.</span>
            </p><button class="btn btn-outline-warning read-more-btn" id="btn-read-more-fun">Read More</button>
        </div>
    </div>
    <!-- fun run -->

    <!-- 12 weeks -->
    <div class="position-relative overflow-hidden text-center weeks">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <h1 class="judul-week text-center">12 WEEKS</h1>
                    <p class="caption-week text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium modi nulla distinctio incidunt! Quae, accusamus dolorem optio laboriosam soluta sit
                        consequatur nisi! Incidunt pariatur voluptatem veritatis expedita, consectetur corporis commodi.
                        <span class="moreText">Natus commodi saepe perferendis fuga incidunt delectus soluta, aliquam ex
                            veniam optio ea consequuntur? Accusamus, veritatis non.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus officia magnam in Lorem
                            ipsum, dolor sit amet consectetur adipisicing elit.</span>
                        <button class="btn btn-outline-warning read-more-btn" id="btn-read-more-week">Read More</button>
                    </p>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="box-lg" id="box-week"></div>
                </div>
                <!-- Swiper -->
                <!-- <div class="d-flex justify-content-start">
                    <input type="date" class="form-control" name="birthday" id="date-week">
                </div> -->
                <div class="swiper-container h-56 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events mySwiperrr"
                    id="swiper-container-week">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" id="swiper-slide-week">
                            <img src="{{ asset ('assets/images/week1.png')}}" class=" img-fluid">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-week">
                            <img src="{{ asset ('assets/images/week2.png')}}" class=" img-fluid">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-week">
                            <img src="{{ asset ('assets/images/week3.png')}}" class=" img-fluid">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-week">
                            <img src="{{ asset ('assets/images/week1.png')}}" class=" img-fluid">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-week">
                            <img src="{{ asset ('assets/images/week2.png')}}" class=" img-fluid">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-week">
                            <img src="{{ asset ('assets/images/week3.png')}}" class=" img-fluid">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-week">
                            <img src="{{ asset ('assets/images/week1.png')}}" class=" img-fluid">
                        </div>
                    </div>
                    <div class="swiper-button-next" id="btn-week"></div>
                    <div class="swiper-button-prev" id="btn-week"></div>
                </div>
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
                <div class="col-lg-3">
                    <div class="event-img text-center">
                        <img src="{{ asset ('assets/images/event.png')}}" class="img-fluid">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum reiciendis itaque
                            voluptatibus! Qui, sapiente. Fuga voluptatum, ex voluptatem excepturi placeat sit maiores.
                            Quod assumenda numquam minima est recusandae eius libero.</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-warning">See More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="event-img text-center">
                        <img src="{{ asset ('assets/images/event.png')}}" class="img-fluid">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum reiciendis itaque
                            voluptatibus! Qui, sapiente. Fuga voluptatum, ex voluptatem excepturi placeat sit maiores.
                            Quod assumenda numquam minima est recusandae eius libero.</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-warning">See More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="event-img text-center">
                        <img src="{{ asset ('assets/images/event.png')}}" class="img-fluid">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum reiciendis itaque
                            voluptatibus! Qui, sapiente. Fuga voluptatum, ex voluptatem excepturi placeat sit maiores.
                            Quod assumenda numquam minima est recusandae eius libero.</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-warning">See More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="event-img text-center">
                        <img src="{{ asset ('assets/images/event.png')}}" class="img-fluid">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum reiciendis itaque
                            voluptatibus! Qui, sapiente. Fuga voluptatum, ex voluptatem excepturi placeat sit maiores.
                            Quod assumenda numquam minima est recusandae eius libero.</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-warning">See More</button>
                        </div>
                    </div>
                </div>
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
                <div class="col-md-4">
                    <div class="blog-img text-center">
                        <p>Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</p>
                        <div class="d-flex justify-content-end">
                            <a href="">Read more ></a>
                        </div>
                        <img src="{{ asset ('assets/images/blog.png')}}" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-img text-center">
                        <p>Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</p>
                        <div class="d-flex justify-content-end">
                            <a href="">Read more ></a>
                        </div>
                        <img src="{{ asset ('assets/images/blog.png')}}" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-img text-center">
                        <p>Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</p>
                        <div class="d-flex justify-content-end">
                            <a href="">Read more ></a>
                        </div>
                        <img src="{{ asset ('assets/images/blog.png')}}" class="img-fluid">
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-img text-center">
                        <p>Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</p>
                        <div class="d-flex justify-content-end">
                            <a href="">Read more ></a>
                        </div>
                        <img src="{{ asset ('assets/images/blog.png')}}" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-img text-center">
                        <p>Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</p>
                        <div class="d-flex justify-content-end">
                            <a href="">Read more ></a>
                        </div>
                        <img src="{{ asset ('assets/images/blog.png')}}" class="img-fluid" id="blog-img">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-img text-center">
                        <p>Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="">Read more ></a>
                        <div class="d-flex justify-content-end">
                        </div>
                        <img src="{{ asset ('assets/images/blog.png')}}" class="img-fluid">
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
                <div class="col-lg-3">
                    <div class="testi-img text-center">
                        <img src="{{ asset ('assets/images/jungkook.jpg')}}">
                        <h2>Alex Jr</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime molestias earum repellat
                            cumque ullam, nulla ab magni fuga unde harum inventore iusto deserunt voluptatibus maiores
                            incidunt distinctio, doloremque delectus sint.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testi-img text-center">
                        <img src="{{ asset ('assets/images/jungkook.jpg')}}">
                        <h2>Alex Jr</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime molestias earum repellat
                            cumque ullam, nulla ab magni fuga unde harum inventore iusto deserunt voluptatibus maiores
                            incidunt distinctio, doloremque delectus sint.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testi-img text-center">
                        <img src="{{ asset ('assets/images/jungkook.jpg')}}">
                        <h2>Alex Jr</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime molestias earum repellat
                            cumque ullam, nulla ab magni fuga unde harum inventore iusto deserunt voluptatibus maiores
                            incidunt distinctio, doloremque delectus sint.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testi-img text-center">
                        <img src="{{ asset ('assets/images/jungkook.jpg')}}">
                        <h2>Alex Jr</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime molestias earum repellat
                            cumque ullam, nulla ab magni fuga unde harum inventore iusto deserunt voluptatibus maiores
                            incidunt distinctio, doloremque delectus sint.</p>
                    </div>
                </div>
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
                        <div class="swiper-slide" id="swiper-slide-sponsor">
                            <img src="{{ asset ('assets/images/s1.png')}}">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-sponsor">
                            <img src="{{ asset ('assets/images/s2.png')}}">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-sponsor">
                            <img src="{{ asset ('assets/images/s3.png')}}">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-sponsor">
                            <img src="{{ asset ('assets/images/s1.png')}}">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-sponsor">
                            <img src="{{ asset ('assets/images/s2.png')}}">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-sponsor">
                            <img src="{{ asset ('assets/images/s3.png')}}">
                        </div>
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
    --
>

</body>


</html