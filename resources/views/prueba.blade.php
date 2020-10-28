<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Prueba de css</title>
  </head>

  <body>
    <div id="header">
      <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col col-12 col-md-9 ">
              <h1>My INE eshop</h1>
              <input class="form-control" type="text" placeholder="Buscar">
              <button type="button" class="btn btn-secondary">Buscar</button>
            </div>
            <div class="offset-md-1 col col-md-2 text-right shop">
                <a href="#"><p>Autenticacion</p></a>
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="padding-top:30px; padding-bottom:30px;">
      <div class="row">
        <div class="col col-12 col-md-10">
          <div class="row products">
            <div class="col col-12">
              <h3>Ofertas del día</h3>
            </div>
            <div class="col col-12 col-sm-6 col-md-3 card">
              <div class="div-img">
                <img alt="producto1" src="img/producto1.jpg" class="img-fluid">
              </div>
              <div class="card-body">
                <p class="card-text"><b>79.00 €</b></p>
                <span><strike>89.00 €</strike> - 10% de descuento</span>
              </div>
            </div>
            <div class="col col-12 col-sm-6 col-md-3 card">
              <div class="div-img">
                <img alt="producto2" src="img/producto2.jpg" class="img-fluid">
              </div>
              <div class="card-body">
                <p><b>64.00 €</b></p>
                <span><strike>69.00 €</strike> - 5% de descuento</span>
              </div>
            </div>
            <div class="col col-12 col-sm-6 col-md-3 card">
              <div class="div-img">
                <img alt="producto3" src="img/producto3.jpg" class="img-fluid">
              </div>
              <div class="card-body">
                <p><b>240.00 €</b></p>
              </div>
            </div>
            <div class="col col-12 col-sm-6 col-md-3 card">
              <div class="div-img">
                <img alt="producto4" src="img/producto4.jpg" class="img-fluid">
              </div>
              <div class="card-body">
                <p><b>120.00 €</b></p>
                <span><strike>150.00 €</strike> - 20% de descuento</span>
              </div>
            </div>
          </div>
          <div class="row products2">
            <div class="col col-12">
              <h3>Nuevos productos</h3>
            </div>
            <div class="col col-12 col-sm-6 col-md-4 card">
              <div class="div-img">
                <img alt="producto5" src="img/producto5.jpg" class="img-fluid">
              </div>
              <div class="card-body">
                <p><b>15.00 €</b></p>
              </div>
            </div>
            <div class="col col-12 col-sm-6 col-md-4 card">
              <div class="div-img">
                <img alt="producto6" src="img/producto6.jpg" class="img-fluid">
              </div>
              <div class="card-body">
                <p><b>30.00 €</b></p>
              </div>
            </div>
            <div class="col col-12 col-sm-6 col-md-4 card">
              <div class="div-img">
                <img alt="producto7" src="img/producto7.jpg" class="img-fluid">
              </div>
              <div class="card-body">
                <p><b>20.00 €</b></p>
              </div>
            </div>
          </div>
        </div>

        <div class="col col-12 col-md-2" id="best-sellers">
          <h6>Lo más vendido en tablets</h6>
          <ol>
            <li><img alt="tablet1" class="img-fluid" src="img/tablet1.png"></li>
            <li><img alt="tablet2" class="img-fluid" src="img/tablet2.png"></li>
            <li><img alt="tablet3" class="img-fluid" src="img/tablet3.png"></li>
            <li><img alt="tablet4" class="img-fluid" src="img/tablet4.png"></li>
            <li><img alt="tablet5" class="img-fluid" src="img/tablet5.png"></li>
          </ol>
          <button type="button" class="btn btn-primary">Ver más tablets</button>
        </div>

      </div>
    </div>

    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col col-12 col-sm-6 col-md-3">
            <ul class="list-group">
              <li class="list-group-item"><h6>Acerca de</h6></li>
              <li class="list-group-item"><a href="#"><p>Quiénes somos</p></a></li>
              <li class="list-group-item"><a href="#"><p>Trabaja con nosotros</p></a></li>
              <li class="list-group-item"><a href="#"><p>Aviso legal</p></a></li>
            </ul>
          </div>
          <div class="col col-12 col-sm-6 col-md-3">
            <ul class="list-group">
              <li class="list-group-item"><h6>Navegación</h6></li>
              <li class="list-group-item"><a href="#"><p>Idioma / languages</p></a></li>
              <li class="list-group-item"><a href="#"><p>Mapa del sitio</p></a></li>
            </ul>
          </div>
          <div class="col col-12 col-sm-6 col-md-3">
            <ul class="list-group">
              <li class="list-group-item"><h6>Ayuda</h6></li>
              <li class="list-group-item"><a href="#"><p>Gestionar compras</p></a></li>
              <li class="list-group-item"><a href="#"><p>Tarifas y políticas de envío</p></a></li>
              <li class="list-group-item"><a href="#"><p>Devolver o reemplazar productos</p></a></li>
              <li class="list-group-item"><a href="#"><p>Contacto para ayuda</p></a></li>
              <li class="list-group-item"><a href="#"><p>IVA sobre los bienes</p></a></li>
              <li class="list-group-item"><a href="#"><p>Métodos de pago</p></a></li>
            </ul>
          </div>
          <div class="col col-12 col-sm-6 col-md-3">
            <ul class="list-group">
              <li class="list-group-item"><h6>Contacto</h6></li>
              <li class="list-group-item"><a href="#"><p>Atención al cliente</p></a></li>
              <li class="list-group-item"><a href="#"><p><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</p></a></li>
              <li class="list-group-item"><a href="#"><p><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</p></a></li>
              <li class="list-group-item"><a href="#"><p><i class="fa fa-youtube" aria-hidden="true"></i> Youtube</p></a></li>
              <li class="list-group-item"><a href="#"><p><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</p></a></li>
            </ul>
          </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>