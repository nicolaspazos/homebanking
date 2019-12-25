@extends('layouts.app', [
"title" => "Home Banking",
"jumboTitle" => "Bienvenido a MBanking, que querés hacer hoy?",
"jumboDesc" => "En este sitio podes operar con tu cuenta mirando el balance, haciendo transferencias, pagando servicios y armando Inversiones"
])

@section('content')
  <body>
    

    <div class="container iconos">
      <div class="row">
        <div class="col-lg-4 col-sm-12 cartas">
          <div class="card text-center" style="width: 18rem;">
          <a href="balance"> 
            <img
              src="{{ asset('img/balance.jpg') }}"
              class="card-img-top"
              
              alt="..."
            />
            </a>
            
            <div class="card-body">
              <h5 class="card-title ">Balance</h5>
              <p class="card-text">
                mira como vienen tus cuentas: ingresos y egresos.
              </p>
              <a href="balance" class="btn btn-primary">Ver situación económica</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-12 cartas">
          <div class="card text-center" style="width: 18rem;">
          <a href="servicios"> 
            <img
              src="{{ asset('img/servicios.png') }}"
              class="card-img-top"
              alt="..."
            />
            </a>
            <div class="card-body">
              <h5 class="card-title">Pago de Servicios</h5>
              <p class="card-text">
                Paga todo lo que necesites desde la comodidad de tu casa.
              </p>
              <a href="servicios" class="btn btn-primary">Pagar Servicios</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-12 cartas">
          <div class="card  text-center" style="width: 18rem;">
          <a href="inversiones"> 
            <img
              src="{{asset('img/inversiones.jpg')}}"
              class="card-img-top"
              alt="..."
            />
            </a> 
            <div class="card-body">
              <h5 class="card-title">Inversiones</h5>
              <p class="card-text">
                Duplica tus ahorros en el mercado financiero.
              </p>
              <a href="inversiones" class="btn btn-primary">Invertir en cosas</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

@endsection