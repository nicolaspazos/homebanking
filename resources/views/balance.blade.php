@extends('layouts.app', [
"title" => "Balance",
"jumboTitle" => "Balance Financiero",
"jumboDesc" => "Acá podes controlar los movimientos de tu cuenta."
])

@section('content')

    <!--Table-->
    <table id="tablePreview" class="table table-striped">
      <!--Table head-->
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Descripción</th>
          <th>Importe</th>
          <th>Saldo</th>
        </tr>
      </thead>
      <!--Table head-->
      <!--Table body-->
      <tbody>




<tr>
          <th> <?php echo $transaccion1->getFecha(); ?> </th>
          <td><?php echo $transaccion1->getDescripcion(); ?></td>
          <td><?php echo $transaccion1->getImporte(); ?></td>
          <td><?php echo $transaccion1->getSaldo(); ?></td>
        </tr>

        <tr>
          <th> <?php echo $transaccion2->getFecha(); ?> </th>
          <td><?php echo $transaccion2->getDescripcion(); ?></td>
          <td><?php echo $transaccion2->getImporte(); ?></td>
          <td><?php echo $transaccion2->getSaldo(); ?></td>
        </tr>

        <tr>
          <th> <?php echo $transaccion3->getFecha(); ?> </th>
          <td><?php echo $transaccion3->getDescripcion(); ?></td>
          <td><?php echo $transaccion3->getImporte(); ?></td>
          <td><?php echo $transaccion3->getSaldo(); ?></td>
        </tr>

        <tr>
          <th> <?php echo $transaccion4->getFecha(); ?> </th>
          <td><?php echo $transaccion4->getDescripcion(); ?></td>
          <td><?php echo $transaccion4->getImporte(); ?></td>
          <td><?php echo $transaccion4->getSaldo(); ?></td>
        </tr>
        
      </tbody>
      <!--Table body-->
    </table>
    <!--Table-->
  </body>
</html>
@endsection