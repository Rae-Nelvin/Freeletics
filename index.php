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
    <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/maskworkout.css">
    <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/testimonal.css">
    <link rel="stylesheet" type="text/css" href="../Freeletics/assets/css/sponsor.css">
    <title>Freeletics</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../Freeletics/assets/images/logo.png"></a>
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
    <section class="about">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h1 class="title-1">ABOUT US</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam cumque suscipit dolorem
                    reprehenderit dolore expedita ullam sint hic exercitationem adipisci magnam, itaque eum animi odit
                    sit dolorum illo quam dignissimos! Lorem ipsum,
                    dolor sit amet consectetur adipisicing elit. Quod rem laudantium veniam repudiandae quibusdam
                    aperiam laboriosam animi nulla nobis, eum est mollitia perspiciatis sint unde odio iusto fugiat
                    itaque earum. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Eos, voluptas! Voluptatibus nesciunt animi aut impedit harum vel
                    possimus, qui consequatur, ad maxime placeat voluptatum nisi quibusdam tenetur fugiat. Nihil,
                    reiciendis.
                </p>
                <h1 class="title-2">MEET THE AUTHOR</h1>
            </div>

        </div>
        <div class="bg-about">
            <img src="../Freeletics/assets/images/about.png" class="rounded mx-auto d-block">
        </div>
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-4">
                        <div class="author text-center">
                            <img src="../Freeletics/assets/images/author1.jpg">
                            <h5>Wahyu Hidayat</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="author text-center">
                            <img src="../Freeletics/assets/images/author2.jpg">
                            <h5>Wahyu Hidayat</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="author text-center">
                            <img src="../Freeletics/assets/images/author3.png">
                            <h5>Wahyu Hidayat</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->

    <!-- mask workout -->
    <section class="mask">
        <div class="bg-mask">
            <img src="../Freeletics/assets/images/maskworkout.png" class="img-fluid" alt="img-responsive">
        </div>
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <h1 class="judul">MASK WORKOUT</h1>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="caption">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus perspiciatis excepturi
                            iste, ipsa quas deleniti eius error harum modi repellendus, fugiat mollitia ut consequuntur
                            necessitatibus sunt itaque quis. Ad, dolorum.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur voluptatibus nihil
                            impedit, laudantium officiis deleniti porro animi at ipsum, quo, odio ex omnis numquam?
                            Facere asperiores eligendi harum saepe dicta! Lorem,
                            ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vero, sed amet distinctio ipsa
                            fuga consectetur. Similique assumenda consectetur, sint, harum sequi modi necessitatibus
                            cumque reiciendis ipsa repudiandae pariatur
                            aspernatur!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <input type="date" class="form-control" name="birthday" id="date-mask">
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
        <div class="d-flex justify-content-start">
        </div>
    </section>
    <!-- mask workout -->

    <!-- fun run -->
    <?php include('fun-run.php')?>
    <!-- fun run -->

    <!-- 12 weeks -->
    <?php include('12-weeks.php')?>
    <!-- 12 weeks -->

    <!-- event -->
    <?php include('event.php')?>
    <!-- event -->

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
    <section class="sponsor">
        <div class="container">
            <div class="row">
                <h1>SPONSORSHIP</h1>
                <div class="swiper-container mySwipper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                    </div>
                    <div class="swiper-button-next" id="btn-fun"></div>
                    <div class="swiper-button-prev" id="btn-fun"></div>
                    <div class="swiper-pagination"></div>
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
    <script src="../Freeletics/assets/js/funrun.js"></script>
    <script src="../Freeletics/assets/js/sponsor.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        effect: "flip",
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
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