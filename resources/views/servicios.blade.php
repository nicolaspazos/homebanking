@extends('layouts.app', [
"title" => "Servicios",
"jumboTitle" => "Pago de Servicios",
"jumboDesc" => "Pagá todo lo que necesites desde la comodidad de tu casa."
])

@section('content')
  <body>
    
      <div class="container" id="principal">
    <div class="row servicios">
        <div class="">
            <form method="post">
                <div class="form-group">
                    <label for="nameService">Nombre del Servicio</label>
                    <select id="nameService" class="form-control">
                        <option selected>Elige un servicio</option>
                        @foreach ($service as $item)                 
                        <option>{{ $item->servicio }}</option>
                        @endforeach
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="numberService">Numero de Referencia</label>
                    <input type="number" class="form-control" id="numberService">
                </div>

                <div class="form-group">
                    <label for="moneyService">Importe</label>
                    <input type="number" min="1" class="form-control" id="moneyService">
                </div>

                <div class="form-group text-right">
                    <button type="button"  class="btn btn-primary" id="payService">Pagar Servicio</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $("#payService").click( function(){
                if ($("#moneyService").val() !="" && $("#moneyService").val() > 0 ){
                var data = {
                    service: $("#nameService").val(),
                    number: $("#numberService").val(),
                    money: $("#moneyService").val(),
                }

                $.post('services/pay', data, function(response){
                    if (response.success){
                      $("#principal").html(response.view)
                    }
                });
                } else {
                  alert("Por favor rellenar con datos validos.")
                }
            });
        }); 
    </script>
  </body>
</html>
@endsection
