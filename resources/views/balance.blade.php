@extends('layouts.app', [
"title" => "Balance",
"jumboTitle" => "Balance Financiero",
"jumboDesc" => "Acá podes controlar los movimientos de tu cuenta."
])

@section('content')

    <table id="tablePreview" class="table table-striped">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Descripción</th>
          <th>Importe</th>
          <th>Saldo</th>
        </tr>
      </thead>
      <tbody>




        <tr>
        @foreach ($balance as $item)
                <tr>
                    <th scope="row">{{ date('d-m-Y', strtotime($item->fecha))  }}</th>
                    <td>{{ $item->descrip }}</td>
                    <td>{{ $item->importe }}</td>
                    <td>{{$item->saldo}}</td>
                </tr>
        @endforeach
        </tr>
        
      </tbody>
      <!--Table body-->
    </table>
    <!--Table-->
  </body>
</html>
@endsection