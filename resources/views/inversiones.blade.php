@extends('layouts.app', [
"title" => "Inversiones",
"jumboTitle" => "Inversiones",
"jumboDesc" => "Duplicá tus ahorros en el mercado financiero."
])

@section('content')
  <body>
    <h2>Tus Acciones</h2>
    <table id="tablePreview" class="table table-striped">
      <thead>
        <tr scope="row">
          <th>Fecha</th>
          <th>Empresa</th>
          <th>Acciones</th>
          <th>Valor de Acción</th>
          <th>Venta de Acción</th>
        </tr>
      </thead>
      <tbody>

      @foreach ($inversion as $item)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($item->fecha))  }}</td>
                    <td>{{ $item->empresa }}</td>
                    <td>{{ $item->acciones }}</td>
                    <td>{{ $item->valor_de_accion }}</td>
                    <td><button type="button" class="btn btn-info">Vender</button></td>

                </tr>
      @endforeach

      </tbody>
      
    </table>

    <h2>Acciones Disponibles</h2>
    <table id="tablePreview" class="table table-striped">
      <thead>
        <tr scope="row">
          <th>Empresa</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Comprar Acciones</th>
          <tbody>

      @foreach ($accion as $item)
                <tr>
                    <td id="nombreAccionCompra">{{ $item->empresa }}</td>
                    <td id="valorAccionesCompra">{{ $item->precioAccion }}</td>
                    <td><input type="number" min="1" id="cantidadAccionesCompra"></td>
                    <td><button type="button" class="btn btn-success" id="comprarAcciones">Comprar</button></td>
                </tr>
      @endforeach

      </tbody>
          
        </tr>
      </thead>



      <script>
        $(document).ready(function(){
            $("#comprarAcciones").click( function(){
                if ($("#cantidadAcciones").val() !=""){
                var data = {
                    accion: $("#nombreAccion").val(),
                    cantidadAcciones: $("#cantidadAcciones").val(),
                    valor: $("#valorAcciones").val(),
                }

                $.post('services/pay', data, function(response){
                    if (response.success){
                      $("#principal").html(response.view)
                    }
                });
                } else {
                  alert("Por favor elegir cantidad")
                }
            });
        }); 
    </script>
   



  </body>
</html>
@endsection