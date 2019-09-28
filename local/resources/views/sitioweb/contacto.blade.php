<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SHOKOLAD</title>
    <link href="./assets/palemo.png" rel="shortcut icon" >

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset('local/public/sitioweb/css/slick.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4823be0250.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('local/public/sitioweb/css/slick-theme.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('local/public/sitioweb/css/scrolling-nav.css')}}" rel="stylesheet">

</head>

<body>
    @include('templates.sitioweb.MenuSitioWeb')
    <section id="fondo">
        <div id="content" class="container">
            <section class="inner-content">
                <div class="container-fluid">
                    <div class="heading"><span>informacion contacto </span></div>
                    <div class="row">
                        <div class=" col-xs-6 col-md-6 form-line">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book. </p>
                            <div id="conta" class="left-contacts clearfix">
                                <div class="form-contact">
                                    <form action=" {{action('AdministradorController@EnviarCorreoElectronico')}} " method="post">
                                         {{ csrf_field() }}
                                        <div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername">Nombre(s)</label>
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Nombre" name="nombre">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputUsername">Apellidos</label>
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Apellidos" name="apellidos">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail"
                                                    placeholder="ejemplo@example.com" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="telephone">Número telefónico</label>
                                                <input type="tel" class="form-control" id="telephone"
                                                    placeholder="Número Telefonico" name="telefono">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group">
                                                <label for="description">Mensaje</label>
                                                <textarea class="form-control" id="description"
                                                    placeholder="Ingrese su mensaje" name="mensaje"></textarea>
                                            </div>
                                            <div>
                                                <button type="submit button" class="btn btn-default submit"><i
                                                        class="fa fa-paper-plane" aria-hidden="true"></i>
                                                    enviar mensaje
                                                </button>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class=" col-xs-6 col-md-6 ">
                            <div id="conta" class="left-contacts clearfix">
                                <div class="information" style="padding-bottom: 3%;">
                                    <div class="information oblast" id="bx_3218110189_6607">
                                        <div class="line">
                                            <span class="name">Nombre:</span> <span class="info-text">Javier Leon Chi</span>
                                        </div>

                                        <div class="line">
                                            <span class="name">Cargo:</span> <span class="info-text">Sales Manager</span>
                                        </div>
                                        <div class="line">
                                            <span class="name">Email:</span> <span class="info-text"><a
                                                    href="#">asistencia.shokolat@shokolat.com.mx</a></span>
                                        </div>
                                        <div class="line">
                                            <span class="name">Telefono:</span> <span class="info-text">+52 1 999 363 3321</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <iframe class="map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.404317250682!2d-89.63688118575632!3d20.936272296306708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDU2JzEwLjYiTiA4OcKwMzgnMDQuOSJX!5e0!3m2!1ses!2smx!4v1565827947179!5m2!1ses!2smx"
                                    width="500" height="400" frameborder="0" style="border:0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </section>




    <footer id="footer">
        <div id="footer-inner" class="width width-offset">
            <nav id="footer-menu">
                <ul class="left-menu">
                    <li><a href="/about/" title="">Nosotros</a></li>
                    <li><a href="/assortment/" title="">Productos</a></li>
                    <li><a href="/about/contacts/" title="">Contactanos</a></li>
                </ul>
            </nav>
            <div id="footer-copyrights">
                © 2019 — 2020 <strong style="text-transform: uppercase;"> comercializadora palemo </strong>
                <p><a href="/about/map/" class="sitemap"></a></p>
            </div>
        </div>

    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!-- Plugin JavaScript -->

    <script src="{{asset('local/public/sitioweb/js/slick.min.js')}}"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="{{asset('local/public/sitioweb/js/scrolling-nav.js')}}"></script>
</body>

</html>