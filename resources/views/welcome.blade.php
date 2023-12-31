<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>KTVARIETYINMAKEUP - Tienda virtual de maquillaje</title>
        <link rel="icon" type="image/x-icon" href="assets/ico.ico" />
        <style>
            /* Estilos opcionales para el ícono de Instagram */
            #instagram-icon {
              width: 45px; /* Ajusta el tamaño según tus necesidades */
              float: auto;
              cursor: pointer; /* Cambia el cursor al pasar sobre la imagen */
            }
          </style>
           <body>

            <!-- Enlace a tu perfil de Instagram -->
            <a href="https://instagram.com/kt.varietyinmakeup?igshid=MzMyNGUyNmU2YQ==" target="_blank" rel="noopener noreferrer">
              <!-- Imagen del ícono de Instagram -->
              <img id="instagram-icon" src="assets/instagram.png" alt="Instagram">
            </a>
          </body>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('assets/css/styles_kate.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/my_styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">"Rodéate de maquillaje</span>
                <span class="site-heading-lower">NO de negatividad"</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">KT VARIETY IN MAKE UP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('home')}}">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('about') }}">Sombras</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('products')}}">Skincare</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('store')}}">Iluminadores</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/portada.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">SOMOS</span>
                            <span class="section-heading-lower">KT.VARIETYINMAKEUP</span>
                        </h2>
                        <p class="mb-3">Bienvenid@s somos una tienda virtual de maquillaje, donde encontrarás producctos originales a precios especiales.</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Empecemos!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Nuestra empresa</span>
                                <span class="section-heading-lower">Promete</span>
                            </h2>
                            <p class="mb-0"> Cuando ingresas a nuestra tienda para comenzar el día, estamos dedicados a brindarle un servicio amable, un ambiente acogedor y sobre todo, excelentes productos de la más alta calidad. Si no está satisfecho, háganoslo saber y haremos todo lo posible para mejorar!.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('assets/js/scripts.js')}}"></script>
    </body>
</html>
