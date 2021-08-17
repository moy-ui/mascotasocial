<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/styles.css') }} ">
    <title>Home</title>
</head>
<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Find My Pet</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#opciones">Opciones</a></li>
                        <li class="nav-item"><a class="nav-link" href="#mascotas">Mascotas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contactanos</a></li>
                        <li class="nav-item"><a class="nav-link" href="login">Social</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenido a Find My Pet</div>
                <div class="masthead-heading text-uppercase">Date la oportunidad de adoptar!!</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#opciones">Saber más</a>
            </div>
        </header>
    </div>
    



    <!-- Services-->
    <section class="page-section" id="opciones">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Opciones</h2>
                    <h3 class="section-subheading text-muted">Por que no solo puedes adoptar sino también:</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <img src="{{asset('/img/heart.svg')}}" alt="logo-corazón">
                        </span>
                        <h4 class="my-3 pt-3">Adopción</h4>
                        <p class="text-muted">La adopción de animales es el proceso de tomar la responsabilidad de un animal que un dueño previamente ha abandonado o dejado en un refugio de animales.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <img src="{{asset('/img/ventas.svg')}}" alt="Logo-venta">
                        </span>
                        <h4 class="my-3 pt-3">Venta de articulos</h4>
                        <p class="text-muted">Los articulos para mascotas son de suma importancia ya que con estos pudes divertirte con tu mascota ademas de darle muchas horas de diversión, con la garantía de que seran de muy buena calidad.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <img src="{{asset('/img/caridad.svg')}}" alt="Logo-venta">
                        </span>
                        <h4 class="my-3 pt-3">Donaciones</h4>
                        <p class="text-muted">La donacion de animales es una de las mejores opciones que puedes tomar, si ya no te sientes responsable de hacerte cargo de tu mascota contactanos para que le puedas dar una oportunidad de que alguien lo adopte.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="mascotas">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Mascotas</h2>
                    <h3 class="section-subheading text-muted">Conoce algunas de nuestas macotas</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                {{-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> --}}
                                <img class="img-fluid" src="{{asset('/img/pets/mascota1.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center text-uppercase">Hachiko</div>
                                <div class="portfolio-caption-subheading text-muted">Perrito muy lindo, duerme mucho, le gusta que lo saquen a pasear por las tardes.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                {{-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> --}}
                                <img class="img-fluid" src="{{asset('/img/pets/mascota2.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center text-uppercase">Pongo</div>
                                <div class="portfolio-caption-subheading text-muted">Descripción</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                {{-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> --}}
                                <img class="img-fluid" src="{{asset('/img/pets/mascota3.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center text-uppercase">Laika</div>
                                <div class="portfolio-caption-subheading text-muted">Descripción</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                {{-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> --}}
                                <img class="img-fluid" src="{{asset('/img/pets/mascota4.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center text-uppercase">Lines</div>
                                <div class="portfolio-caption-subheading text-muted">Descripción</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                {{-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> --}}
                                <img class="img-fluid" src="{{asset('/img/pets/mascota5.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center text-uppercase">Akita</div>
                                <div class="portfolio-caption-subheading text-muted">Descripción</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                {{-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> --}}
                                <img class="img-fluid" src="{{asset('/img/pets/mascota6.jpg')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-center text-uppercase">Bruno</div>
                                <div class="portfolio-caption-subheading text-muted">Descripción</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





           <!-- Team-->
           <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nuestro equipo de trabajo</h2>
                    <h3 class="section-subheading text-muted">Somos un equipo de trabajo comprometidos con lo que hacemos.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('/img/team/joel.jpg')}}" alt="..." />
                            <h4>Joel Garcia</h4>
                            <p class="text-muted">Diseñador principal</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('/img/team/moy.jpg')}}" alt="..." />
                            <h4>Juan Carlos</h4>
                            <p class="text-muted">Desarrollador principal</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('/img/team/julian.jpg')}}" alt="..." />
                            <h4>De Julian</h4>
                            <p class="text-muted">Product Owner</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Somos los principales colaboradores del proyecto nombrado Find My Pet con el cual estamos comprometidos para que mas animalitos encuentren un hogar.</p></div>
                </div>
            </div>
        </section>



        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contactanos </h2>
                    <h3 class="section-subheading text-muted">Date la oportunidad de adoptar, mandanos un mensaje</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Nombre" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="@correo" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Teléfono" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Ejemplo: Quiero adoptar pero no se como" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>

     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>