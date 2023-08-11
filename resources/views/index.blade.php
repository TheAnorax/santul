<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Santul </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="public/assets/img/favicon.png" rel="icon">
    <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/img/santul/santul.png') }}" type="image/x-icon">

</head>
<body>
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">
            <h1 class="logo me-auto me-lg-0"><a href="#hero"><img src="assets/img/santul/logo.png" class="d-block w-100" alt="..."></a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li class="dropdown nav-link scrollto"><a href="#about"><span>Historia</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#testimonials">Información Sobre la Empresa</a></li>
                            <li><a href="#marcas">Marcas</a></li>
                            <li><a href="#presencia">Presencia Nacional e Internacional</a></li>
                            <li><a href="#informacion">Información Sobre Fabrica</a></li>
                            <li><a href="#cedis">Cedis</a></li>
                            <li><a href="#laboratorio">Laboratorio</a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-link scrollto"><a href="#catalogo"><span>Catalogo</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Fichas Técnicas</a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-link scrollto"><a href="#catalogo"><span>Más</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#colabora">Colabora con Santul </a></li>
                            <li><a href="#promociones">Promociones Mensuales</a></li>
                            <li><a href="#distribuidor">Quiero ser Distribuidor</a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-link scrollto"><a href="#soporte"><span>Soporte</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#manuales">Manuales e Instructivos</a></li>
                            <li><a href="#garantias">Garantias</a></li>
                            <li><a href="#videos">Videos</a></li>
                            <li><a href="#preguntas">Preguntas Frecuentes</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#suscribete">Suscribete</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contáctanos</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>

    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div id="carouselPromociones" class="carousel slide w-100 d-block"  data-bs-interval="2000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselPromociones" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/santul/anuncio1.jpg"" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/santul/anuncio2.jpg"" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/santul/anuncio3.jpg"" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/santul/anuncio4.jpg"" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/santul/anuncio5.jpg"" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/santul/ubisantul.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                        <div class="section-title">
                            <p>Nuestra Historia</p>
                        </div>
                        <p class="fst-italic">
                            Con décadas de experiencia en el mercado ferretero, se ha logrado posicionar
                            como una marca líder y de gran prestigio a nivel nacional e internacional.
                        </p>
                        <p>
                            Años de experiencia y crecimiento, han logrado que Santul herramientas presente una extensa
                            línea de productos
                            fabricados y ensamblados en múltiples plantas alrededor de toda la república.
                            Todo esto se logra, gracias al constante crecimiento, dedicación e incansable
                            búsqueda por entregar productos innovadores que fijen el rumbo para el resto del mercado
                            mexicano.
                        </p>
                    </div>
                </div>
                <section id="testimonials" class="testimonials">
                    <div class="container" data-aos="fade-up">
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                            <div class="section-title">
                            <p>Información Sobre la Empresa</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-4 col-md-6">
                                <div class="box" data-aos="fade-up" data-aos-delay="100">
                                    <h3>Misión </h3>
                                    <p>Info del dato</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                                <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                                    <h3>Visión</h3>
                                    <p>Info del dato</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                                <div class="box" data-aos="fade-up" data-aos-delay="300">
                                    <h3>Valores</h3>
                                    <p>Info del dato</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <h3>Saul Goodman</h3>
                                            <h4>Ceo &amp; Founder</h4>
                                            <p>
                                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <h3>Sara Wilsson</h3>
                                            <h4>Designer</h4>
                                            <p>
                                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <h3>Jena Karlis</h3>
                                            <h4>Store Owner</h4>
                                            <p>
                                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <h3>Matt Brandon</h3>
                                            <h4>Freelancer</h4>
                                            <p>
                                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                            <p>
                                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat esse veniam culpa fore nisi cillum quid.
                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>

                <section id="marcas" class="marcas">
                    <div class="container" data-aos="fade-up">
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                            <div class="section-title marcatext">
                                <p>Marcas</p>
                            </div>
                        </div>
                        <div class="row my-3 d-flex justify-content-center ">
                            <div class="col-lg-6 order-1 order-lg-2 centrar-div" data-aos="fade-left" data-aos-delay="100">
                                <img src="assets/img/santul/uno.png" class="img-fluid imagen-con-margen"" alt="">
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 centrar-div" data-aos="fade-left" data-aos-delay="100">
                            <img src="assets/img/santul/dos.png" class="img-fluid imagen-con-margen"" alt="">
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 centrar-div" data-aos="fade-left" data-aos-delay="100">
                                <img src="assets/img/santul/tres.png" class="img-fluid imagen-con-margen"" alt="">
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 centrar-div" data-aos="fade-left" data-aos-delay="100">
                                <img src="assets/img/santul/cuatro.png" class="img-fluid imagen-con-margen"" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                 <section id="presencia" class="presencia">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-6 order-1 order-lg-2 zoom-container" data-aos="fade-left" data-aos-delay="100">
                                <img src="assets/img/santul/mapint.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                                <div class="section-title">
                                    <p>Presencia Nacional e Internacional</p>
                                </div>
                                <p class="fst-italic">
                                    Hemos Formado una basta red de asesores de venta presentes en los estados de la República Mexicana,
                                    además De liderar a 12 países de Centroamérica y Sudamérica.
                                </p>
                                <p>
                                    Actualmente contamos con sufiicuentes Distribuidores y Puntos de venta para satisfacer las necesidades de nustros clientes
                                </p>
                            </div>
                        </div>
                </section>
                <section id="informacion" class="informacion">
                    <div class="container" data-aos="fade-up">
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                            <div class="section-title">
                                <p>Información Sobre Fabrica</p>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start zoom-container" data-aos="fade-right" data-aos-delay="100"></div>
                                <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
                                    <div class="content d-flex flex-column justify-content-center">
                                    <h3>Planta de Manufactura Santul</h3>
                                    <p class="justifi-text">
                                        <strong class="text-color-red">Santul Herramientas</strong> se ha convertido en una de las dos principales marcas dentro del mercado
                                        ferretero y eléctrico a nivel nacional, gracias a nuestra nueva planta de extrusión e inyección,
                                        actualmente producimos artículos como: <strong class="text-color-red">carretillas, palas, mangueras, cajas para herramientas,
                                        tubería de PVC, extensiones eléctricas, cable,</strong> entre otros.
                                    </p>
                                    <br>
                                    <p  class="justifi-text">
                                       Dado a nuestros procesos de producción más eficientes, logramos que todos los productos fabricados
                                        en nuestra planta tengan una <strong class="text-color-red">óptima calidad y a precios bastante competitivos.</strong>
                                    </p>

                                </div><!-- End .content-->
                            </div>
                        </div>
                    </div>
                </section>
                <section id="cedis" class="cedis">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="section-title">
                                <p>Cedis</p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 zoom-container" data-aos="fade-left" data-aos-delay="100">
                                <img src="assets/img/santul/almacen.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                                <div class="section-title">
                                    <h3>Nuestro personal altamente calificado</h3>
                                </div>
                                <p class="fst-italic">
                                  Se encara de clasificar  los productos, organizándolos de una manera adecuada
                                  para una localización pronta y efectiva de los mismos.
                                </p>
                            </div>
                        </div>
                        <p></p>
                        <div class="row no-gutters zoom-container">
                            <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
                                <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
                                    <div class="content d-flex flex-column justify-content-center">
                                    <h3>Espacio de Mayor Calidad</h3>
                                    <p  class="justifi-text">
                                       Contamos con almacenes de mayor capacidad para mercancía, más de 10,000 m² para mayor abastecimiento y una ágil entrega a todos nuestro cliente.
                                    </p>

                                </div><!-- End .content-->
                            </div>
                        </div>
                        <p></p><br><br>
                        <div class="row">
                            <div class="col-lg-6 order-1 order-lg-2 zoom-container" data-aos="fade-left" data-aos-delay="100">
                                <img src="assets/img/santul/clasificacion.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                                <div class="section-title">
                                    <h3>Clasificaión con Estructura</h3>
                                </div>
                                <p>
                                   Con un estricto y bien dirigido sentido del trabajo, generamos un mayor orden que nos ayuda a trabajar de manera óptima.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="laboratorio" class="laboratorio">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="section-title">
                                <p>Laboratorio</p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 zoom-container" data-aos="fade-left" data-aos-delay="100">
                                <img src="assets/img/santul/calidad.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                                <div class="section-title">
                                    <h3>ENFOCADOS EN LA CALIDAD Y NECESIDAD</h3>
                                </div>
                                <p>
                                  La estrategia de la empresa ha sido enfocarse en garantizar la calidad de cada uno de los productos bajo nuestras marcas, buscando satisfacer las necesidades del consumidor final. Cuidar de la calidad e imagen de los proiductos que fabricamos y comercializamos, es prioridad para nosotros, pero lo más importante es la seguridad del usuario.
                                </p>
                            </div>
                        </div>
                        <br><br>
                        <div class="row no-gutters zoom-container">
                            <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
                                <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
                                    <div class="content d-flex flex-column justify-content-center">
                                    <h3>LA MÁS ALTA CALIDAD Y TECNOLOGÍA</h3>
                                    <p  class="justifi-text">
                                      Contamos con uno de los laboratorios más modernos en su categoría, con personal altamente calificado y especializado en las ramas Metal-Mecánica y Eléctrica-Electrónica, con la capacidad para poder evaluar productos de cerrajería, material eléctrico, plomería y seguridad, esto conforme a las Normas Oficiales Mexicanas e Internacionales, que requieren cada categoría de producto.
                                    </p>

                                </div><!-- End .content-->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section><!-- End About Section -->
        <section id="catalogo" class="catalogo">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <div class="section-title">
                        <p>Catalogo</p>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-lg-12">
                        <embed src="assets/catalogo/catalogo2022.pdf")" type="application/pdf" width="100%" height="600px">
                    </div>
                </div>
            </div>
        </section>
        <section id="colabora" class="colabora">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <div class="section-title">
                        <p>Colabora con Santul</p>
                    </div>
                </div>
                <div class="row my-3">
                </div>
            </div>
        </section>

        <section id="promociones" class="promociones">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <div class="section-title">
                        <p>Promociones Mensuales</p>
                    </div>
                </div>
               <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"  data-bs-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/promociones/anuncio1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/promociones/anuncio2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/promociones/anuncio3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/promociones/anuncio4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/promociones/anuncio5.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/promociones/anuncio6.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/promociones/anuncio7.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/promociones/anuncio8.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
            </div>
        </section>
        <section id="distribuidor" class="distribuidor">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <div class="section-title">
                        <p>Quiero ser Distribuidor</p>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="form-container">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="validationCustom01" value="" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="telefonofijo" class="form-label">Teléfono Fijo</label>
                                <input type="text" class="form-control" id="telefonofijo" value="" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="celular" class="form-label">Celular</label>
                                <input type="text" class="form-control" id="celular" value="" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="calle" class="form-label">Calle</label>
                                <input type="text" class="form-control" id="calle" required>
                                <div class="invalid-feedback">
                                Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="calle" class="form-label">Numero Exterior</label>
                                <input type="text" class="form-control" id="calle" required>
                                <div class="invalid-feedback">
                                Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="calle" class="form-label">Numero Interior</label>
                                <input type="text" class="form-control" id="calle" required>
                                <div class="invalid-feedback">
                                Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Colonia o Barrio</label>
                                <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Ciudad o localidad</label>
                                <input type="text" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Estado</label>
                                <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Pais</label>
                                <input type="text" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Acepto términos y condiciones
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
         <section id="soporte" class="soporte">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <div class="section-title">
                        <p>Soporte</p>
                    </div>
                </div>
                <div class="row my-3">
                </div>
            </div>
        </section>
        <section id="manuales" class="manuales">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <div class="section-title">
                        <p>Manuales e Instructivos</p>
                    </div>
                </div>
                <div class="row my-3">
                </div>
            </div>
        </section>
        <section id="garantias" class="garantias">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <div class="section-title">
                        <p>Garantias</p>
                    </div>
                </div>
                <div class="row my-3">
                </div>
            </div>
        </section>
        <section id="videos" class="videos">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <div class="section-title">
                        <p>Videos</p>
                    </div>
                </div>
                    <div class="col-lg-6 video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ANOTHER_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
        </section>
        <section id="preguntas" class="preguntas">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <div class="section-title">
                        <p>Preguntas Fecuentes</p>
                    </div>
                </div>
                <ul class="preguntas-list accordion" data-aos="fade-up">
                    <li>
                        <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#preguntas1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="preguntas1" class="collapse" data-bs-parent=".preguntas-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#preguntas2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="preguntas2" class="collapse" data-bs-parent=".preguntas-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#preguntas3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="preguntas3" class="collapse" data-bs-parent=".preguntas-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#preguntas4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="preguntas4" class="collapse" data-bs-parent=".preguntas-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#preguntas5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="preguntas5" class="collapse" data-bs-parent=".preguntas-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-bs-toggle="collapse" data-bs-target="#preguntas6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="preguntas6" class="collapse" data-bs-parent=".preguntas-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section id="suscribete" class="suscribete">
            <div class="container" data-aos="fade-up">
                 <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <div class="section-title">
                        <p>Suscribete</p>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="form-container">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="validationCustom01" value="" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                             <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="validationCustom01" value="" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="celular" class="form-label">Celular</label>
                                <input type="text" class="form-control" id="celular" value="" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustomUsername" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Acepto términos y condiciones
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>CONTACTO</h2>
                    <p>CONTÁCTENOS</p>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Ubicación:</h4>
                                <p>Vista Hermosa 4, San Mateo Ixtacalco, 54713 Cuautitlán Izcalli, Méx.</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>ventas@santul.com.mx</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Teléfono:</h4>
                                <p>55 5872-7290</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Tu Nombre" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Tu Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Asunto" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Santul<span>.</span></h3>
                            <a href="https://www.google.com/maps/place/SANTUL/@19.6981577,-99.1915067,17z/data=!4m14!1m7!3m6!1s0x85d21fe548727f9f:0xf8f6576c34348ec4!2sSANTUL!8m2!3d19.6981577!4d-99.1889318!16s%2Fg%2F11clvfl57y!3m5!1s0x85d21fe548727f9f:0xf8f6576c34348ec4!8m2!3d19.6981577!4d-99.1889318!16s%2Fg%2F11clvfl57y?entry=ttu">
                                <p>
                                    Vista Hermosa 4, San Mateo Ixtacalco, <br>
                                    54713 Cuautitlán Izcalli, Méx.<br><br>
                                    <strong>Teléfono:</strong> 55 5872-7290<br>
                                    <strong>Email:</strong> ventas@santul.com.mx<br>
                                </p>
                            </a>
                            <div class="social-links mt-3">
                                <a href="https://twitter.com/Santul_Mx?s=08" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="https://www.facebook.com/SantulHerramientas?mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://instagram.com/santul_herramientas?igshid=MzRlODBiNWFlZA==" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre nosotros</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Términos de servicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Política de privacidad</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Soporte</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#manuales">Manuales e Instructivos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#garantias">Garantias</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#videos">Videos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#preguntas">Preguntas Frecuentes</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Santul</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Santul</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/libreria/turn.min.js') }}"></script>

    <script>
       var swiper = new Swiper('.testimonials-slider', {
            slidesPerView: 3,
            spaceBetween: 5,
            loop: true,
            pagination: {
                el: '.swiper-pagination', // Cambia esto por el identificador único del elemento
            },
        });

</body>

</html>
