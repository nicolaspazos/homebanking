@extends('layouts.app', [
"title" => "Inversiones",
"jumboTitle" => "Inversiones",
"jumboDesc" => "Duplicá tus ahorros en el mercado financiero."
])

@section('content')
  <body>
    <!--Table-->
    <table id="tablePreview" class="table table-striped">
      <!--Table head-->
      <thead>
        <tr>
          <th>Empresa</th>
          <th>Acciones</th>
          <th>Valor de Acción</th>
          <th>Compraventa de Acción</th>
        </tr>
      </thead>
      <!--Table head-->
      <!--Table body-->
      <tbody>
        <tr>
          <th scope="row">Arcos Dorados</th>
          <td>1000</td>
          <td>100</td>
          <td>-</td>
        </tr>
      </tbody>

      <!--Table body-->
    </table>
    <!--Table-->


  </body>
</html>
@endsection