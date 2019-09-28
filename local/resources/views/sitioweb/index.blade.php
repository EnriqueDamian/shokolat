<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SHOKOLAD</title>
  <link href="./assets/palemo.png" rel="shortcut icon">

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

  <!-- Navigation -->

  @include('templates.sitioweb.MenuSitioWeb')


  <section id="banner" class="banner-slider">
    <div class="your-class">
      @foreach($productos as $producto)
      <div class="slide-div">
        <div class="banner-content">
          <div class="container">
            <div class="row">
              <div class="row-md-height">
                <div class="col-md-6 col-md-pull-6 col-md-height">
                  <h1>{{$producto->nombre_producto}}</h1>
                  <p>{{$producto->descripcion_producto}}</p>
                </div>
                <div class="col-md-6 col-md-push-6 col-md-height">
                  <img src="local/public/img/images_productos/{{$producto->imagen_producto}}" alt="Banner Image" class="img-responsive" />
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="slide-div">
        <div class="banner-content">
          <div class="container">
            <div class="row">
              <div class="row-md-height">
                <div class="col-md-6 col-md-pull-6 col-md-height">
                  <h1>Welcome to Chocolate.</h1>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-md-6 col-md-push-6 col-md-height">
                  <img src="local/public/sitioweb/assets/slide-3.png" alt="Banner Image" class="img-responsive" />
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <section id="fondo">
    <div id="content" class="container">
      <div class="heading"><span>NUESTROS PRODUCTOS</span></div>
      @foreach($marcas as $marca)

        <div class="list-brand">
          <section>
            <div class="container head-brand">
              <div class="discount-banner" style="background: url(local/public/img/images_marcas/{{$marca->marca_img_banner}}) no-repeat center center ;">
              </div>
            </div>
          </section>
          <section class="list-page">
            <div class="divisor">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="product-list">
                    <div class="row">
                      @foreach($productos as $producto)
                       
                        
                          @if($marca->id_marca == $producto->id_marca)
                            <div class="col-md-3 col-sm-6">
                              <div class="product-box grow">
                                <div class="img">
                                  <img src="local/public/img/images_productos/{{$producto->imagen_producto}}" alt="">
                                </div>
                            <div class="product-detail">
                              <div class="name">
                                <strong>{{$producto->nombre_producto}}
                                </strong>
                                </br>
                                <strong>Presentaciones:
                                </strong>{{$producto->cantidad_producto}}
                                <strong>Descripcion: 
                                </strong>{{$producto->descripcion_producto}}
                              </div>
                            </div>
                          </div>
                           </div>
                          @endif
                        
                          
                       
                      @endforeach                   
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="divisor">
            </div>
          </section>
        </div>
    @endforeach
      
    </div>

    <!--brands-->
    <div id="content" class="container">
      <div class="heading" style="padding-bottom: 6%"><span>Confectionery Republic </span></div>
      <div id="autoplay">
        <div class="wrap">
          <img src="local/public/sitioweb/assets/brandartpassiontrue.jpg" />
        </div>
        <div class="wrap">
          <img src="local/public/sitioweb/assets/brandalionka.png" />
        </div>
        <div class="wrap">
          <img src="local/public/sitioweb/assets/brandbonroll.png" />
        </div>
        <div class="wrap">
          <img src="local/public/sitioweb/assets/neobotanica-grande.png" />
        </div>
        <div class="wrap">
          <img src="local/public/sitioweb/assets/brandfelicita.png" />
        </div>
        <div class="wrap">
          <img src="local/public/sitioweb/assets/brandkorovka.jpg" />
        </div>


      </div>
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
      <div id="footer-phone-layer">
        <!--<div class="text">Hotline telephone</div>
 
<div class="number">8-800-200-55-99</div>-->
      </div>
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