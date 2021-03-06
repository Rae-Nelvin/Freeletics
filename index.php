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
    <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/about.css">
    <!-- <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/maskworkout.css"> -->
    <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/testimonal.css">
    <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/sponsor.css">
    <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/funrun.css">
    <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/maskworkout.css">
    <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/12weeks.css">
    <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/event.css">
    <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/blog.css">
    <title>Freeletics</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../Freeletics/assets/images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home </a>
                    <a class="nav-link" href="#">Features </a>
                    <a class="nav-link" href="#">Pricing </a>
                    <a class="nav-link" href="#">Cart </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- about -->
    <div class="position-relative overflow-hidden p-3 p-md-3 text-center bg-about">
        <div class="col-md-7 p-lg-4 mx-auto my-5">
            <h1 class="about-h1 display-4 font-weight-normal">ABOUT US</h1>
            <p class="lead font-weight-normal text" id="about-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam cumque suscipit dolorem reprehenderit dolore expedita ullam sint hic exercitationem adipisci magnam, itaque eum animi odit sit dolorum illo quam dignissimos! <span class ="moreText">Lorem ipsum,
                dolor sit amet consectetur adipisicing elit.</span>
            </p><button class="btn btn-outline-warning read-more-btn">Read More</button>
            <h1 class="about-h1 display-4 font-weight-normal">MEET THE AUTHOR</h1>       
        </div>
        <div class="container author">
            <!-- Three columns of text below the carousel -->
            <div class="row">
              <div class="col-lg-4">
                <img class="rounded author" src="../Freeletics/assets/images/author1.jpg" alt="Generic placeholder image" width="250" height="250">
                <h2 class="author">Wahyu Hidayat</h2>
                <p class="author">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded author" src="../Freeletics/assets/images/author2.jpg" alt="Generic placeholder image" width="250" height="250">
                <h2 class="author">Wahyu Hidayat</h2>
                <p class="author">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded author" src="../Freeletics/assets/images/author3.png" alt="Generic placeholder image" width="250" height="250">
                <h2 class="author">Wahyu Hidayat</h2>
                <p class="author">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
    </div>
    <!-- End of About -->

    <!-- Mass workout -->
    <div class="position-relative overflow-hidden p-3 p-md-3 bg-mass">
        <div class="row align-items-start">
            <div class="col-12 text-center">
                <h1 class="display-4 font-weight-normal" id="mass-h1">MASS WORKOUT</h1>
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
                            <img src="../Freeletics/assets/images/author2.jpg" class="img-fluid" alt="image-responsive">
                        </div>
                        <div class="swiper-slide" id="swiper-mask">
                            <img src="../Freeletics/assets/images/author1.jpg" class="img-fluid" alt="image-responsive">
                        </div>
                        <div class="swiper-slide" id="swiper-mask">
                            <img src="../Freeletics/assets/images/jungkook.jpg" class="img-fluid" alt="image-responsive">
                        </div>
                    </div>
                    <div class="swiper-button-next" id="btn-mask"></div>
                    <div class="swiper-button-prev" id="btn-mask"></div>
                    <div class="swiper-pagination" id="btn-mask"></div>
                </div>
          <!-- End of Swiper -->
            </div>
            <div class="col-xl-1">
            </div>
            <div class="col-xl-6">
                <p class="lead font-weight-normal text mass-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam cumque suscipit dolorem reprehenderit dolore expedita ullam sint hic exercitationem adipisci magnam, itaque eum animi odit sit dolorum illo quam dignissimos! <span class ="moreText">Lorem ipsum,
                    dolor sit amet consectetur adipisicing elit.</span>
                </p><button class="btn btn-outline-warning read-more-btn mass-p">Read More</button>
            </div>
        </div>
        
    </div>
    <!-- End of mass workout -->

    <!-- Fun Run -->
    <div class="position-relative overflow-hidden p-3 p-md-3 text-center bg-funrun">
        <div class="col-md-7 p-lg-4 mx-auto my-5">
            <h1 class="about-h1 display-4 font-weight-normal">FUN RUN</h1>
        </div>
        <div class="col-xl-3">
            <input type="date" class="form-control" name="birthday" id="date-funrun">
        </div>
        <!-- Swipper  -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="position-relative overflow-hidden bg-carousel-funrun">
                    <div class="carousel-item active">
                        <div class="row row-funrun">
                            <div class="col-lg-4"><img src="../Freeletics/assets/images/run1.png" class="d-block w-100 phone-funrun" alt="..."></div>
                            <div class="col-lg-4"><img src="../Freeletics/assets/images/run2.png" class="d-block w-100" alt="..."></div>
                            <div class="col-lg-4"><img src="../Freeletics/assets/images/run3.png" class="d-block w-100" alt="..."></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row row-funrun">
                            <div class="col-lg-4"><img src="../Freeletics/assets/images/run1.png" class="d-block w-100 phone-funrun" alt="..."></div>
                            <div class="col-lg-4"><img src="../Freeletics/assets/images/run2.png" class="d-block w-100" alt="..."></div>
                            <div class="col-lg-4"><img src="../Freeletics/assets/images/run3.png" class="d-block w-100" alt="..."></div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev btn-funrun" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next btn-funrun" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--  End of Swipper -->
        <div class="col">
            <p class="lead font-weight-normal text" id="funrun-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam cumque suscipit dolorem reprehenderit dolore expedita ullam sint hic exercitationem adipisci magnam, itaque eum animi odit sit dolorum illo quam dignissimos! <span class ="moreText">Lorem ipsum,
                dolor sit amet consectetur adipisicing elit.</span>
            </p><button class="btn btn-outline-warning read-more-btn">Read More</button>
        </div>
    </div>
</div>
    <!-- End of Fun Run -->

    <!-- 12 weeks -->
    <div class="position-relative overflow-hidden p-3 p-md-3 text-center bg-12weeks">
        <div class="col-md-7 p-lg-4 mx-auto my-5">
                <h1 class="about-h1 display-4 font-weight-normal">12 WEEKS</h1>
            </div>
            <div class="col">
            <p class="lead font-weight-normal text" id="p-12weeks">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam cumque suscipit dolorem reprehenderit dolore expedita ullam sint hic exercitationem adipisci magnam, itaque eum animi odit sit dolorum illo quam dignissimos! Lorem ipsum,
                dolor sit amet consectetur adipisicing elit.
        </div>
        <div class="col-xl-3">
                <input type="date" class="form-control" name="birthday" id="date-12weeks">
        </div>
        <div class="swiper-container h-56 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events mySwiperrr"
            id="swiper-container-week">
            <div class="swiper-wrapper" id="swiper-wrapper-week">
                <div class="swiper-slide swiper-slide-active" id="swiper-slide-week">
                    <img src="../Freeletics/assets/images/week1.png" class="img-fluid">
                </div>
                <div class="swiper-slide" id="swiper-slide-week">
                    <img src="../Freeletics/assets/images/week2.png" class="img-fluid">
                </div>
                <div class="swiper-slide" id="swiper-slide-week">
                    <img src="../Freeletics/assets/images/week3.png" class="img-fluid">
                </div>
                <div class="swiper-slide" id="swiper-slide-week">
                    <img src="../Freeletics/assets/images/week1.png" class="img-fluid">
                </div>
                <div class="swiper-slide" id="swiper-slide-week">
                    <img src="../Freeletics/assets/images/week2.png" class="img-fluid">
                </div>
                <div class="swiper-slide" id="swiper-slide-week">
                    <img src="../Freeletics/assets/images/week3.png" class="img-fluid">
                </div>
                </div>
                <div class="swiper-button-next" id="btn-week"></div>
                <div class="swiper-button-prev" id="btn-week"></div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
    </div>
    <!-- 12 weeks -->

    <!-- event -->
    <section class="event">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <h1 class="about-h1" id="about-event">
                        EVENT
                    </h1>
                </div>
                <div class="col-lg-3">
                    <div class="event-img text-center">
                        <img src="../Freeletics/assets/images/event.png" class="img-fluid">
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
                        <img src="../Freeletics/assets/images/event.png" class="img-fluid">
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
                        <img src="../Freeletics/assets/images/event.png" class="img-fluid">
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
                        <img src="../Freeletics/assets/images/event.png" class="img-fluid">
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
                <h1 class="about-h1" id="about-blog">BLOG</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-img text-center">
                        <p>Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</p>
                        <div class="d-flex justify-content-end">
                            <a href="">Read more ></a>
                        </div>
                        <img src="../Freeletics/assets/images/blog.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-img text-center">
                        <p>Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</p>
                        <div class="d-flex justify-content-end">
                            <a href="">Read more ></a>
                        </div>
                        <img src="../Freeletics/assets/images/blog.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-img text-center">
                        <p>Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</p>
                        <div class="d-flex justify-content-end">
                            <a href="">Read more ></a>
                        </div>
                        <img src="../Freeletics/assets/images/blog.png" class="img-fluid">
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
                        <img src="../Freeletics/assets/images/blog.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-img text-center">
                        <p>Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</p>
                        <div class="d-flex justify-content-end">
                            <a href="">Read more ></a>
                        </div>
                        <img src="../Freeletics/assets/images/blog.png" class="img-fluid" id="blog-img">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-img text-center">
                        <p>Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="">Read more ></a>
                        <div class="d-flex justify-content-end">
                        </div>
                        <img src="../Freeletics/assets/images/blog.png" class="img-fluid">
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
                        <img src="../Freeletics/assets/images/jungkook.jpg">
                        <h2>Alex Jr</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime molestias earum repellat
                            cumque ullam, nulla ab magni fuga unde harum inventore iusto deserunt voluptatibus maiores
                            incidunt distinctio, doloremque delectus sint.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testi-img text-center">
                        <img src="../Freeletics/assets/images/jungkook.jpg">
                        <h2>Alex Jr</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime molestias earum repellat
                            cumque ullam, nulla ab magni fuga unde harum inventore iusto deserunt voluptatibus maiores
                            incidunt distinctio, doloremque delectus sint.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testi-img text-center">
                        <img src="../Freeletics/assets/images/jungkook.jpg">
                        <h2>Alex Jr</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime molestias earum repellat
                            cumque ullam, nulla ab magni fuga unde harum inventore iusto deserunt voluptatibus maiores
                            incidunt distinctio, doloremque delectus sint.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="testi-img text-center">
                        <img src="../Freeletics/assets/images/jungkook.jpg">
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
                            <img src="../Freeletics/assets/images/s1.png">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-sponsor">
                            <img src="../Freeletics/assets/images/s3.png">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-sponsor">
                            <img src="../Freeletics/assets/images/s3.png">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-sponsor">
                            <img src="../Freeletics/assets/images/s1.png">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-sponsor">
                            <img src="../Freeletics/assets/images/s3.png">
                        </div>
                        <div class="swiper-slide" id="swiper-slide-sponsor">
                            <img src="../Freeletics/assets/images/s3.png">
                        </div>
                    </div>
                    <div class="swiper-button-next" id="btn-sponsor"></div>
                    <div class="swiper-button-prev" id="btn-sponsor"></div>
                    <!-- <div class="swiper-pagination" id="pagination-sponspor"></div> 
                </div>
            </div>
        </div>
    </section>
    <!-- sponsor 
-->





    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- Initialize Swiper -->
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../Freeletics/assets/js/funrun.js"></script>
    <script src="../Freeletics/assets/js/sponsor.js"></script>
    <script src="../Freeletics/assets/js/mask.js"></script>
    <script src="../Freeletics/assets/js/12weeks.js"></script>

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

</html