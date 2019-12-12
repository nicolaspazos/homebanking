@extends('layouts.app', [
"title" => "Inversiones",
"jumboTitle" => "Inversiones",
"jumboDesc" => "Duplicá tus ahorros en el mercado financiero."
])

@section('content')
  <body>
    <table id="tablePreview" class="table table-striped">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Empresa</th>
          <th>Acciones</th>
          <th>Valor de Acción</th>
          <th>Compraventa de Acción</th>
        </tr>
      </thead>
      <tbody>

      @foreach ($inversion as $item)
                <tr>
                    <th scope="row">{{ date('d-m-Y', strtotime($item->fecha))  }}</th>
                    <td>{{ $item->empresa }}</td>
                    <td>{{ $item->acciones }}</td>
                    <td>{{ $item->valor_de_accion }}</td>
                </tr>
      @endforeach

      </tbody>
    </table>

   



  </body>
</html>
@endsection