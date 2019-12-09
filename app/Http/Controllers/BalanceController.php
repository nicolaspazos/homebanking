<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function __invoke()
    {   $transaccion1 = new Transferencia("05/10/2019", "Salario", "3824");
        $transaccion2 = new Transferencia("21/09/2019", "Deudas", "524");
        $transaccion3 = new Transferencia("12/03/2019", "Servicios", "2874");
        $transaccion4 = new Transferencia("02/02/2019", "Auto", "2930");
        return view("balance", compact("transaccion1","transaccion2","transaccion3","transaccion4"));
    }
}

class Transferencia {
    private $fecha;
    private $descripcion;
    private $importe;
    private $saldo;
    private static $mi_saldo = 5000;

    public function __construct($fecha, $descripcion, $importe)
    {
        $this->fecha = $fecha;
        $this->descripcion = $descripcion;
        $this->importe = $importe;
        $this->saldo = $this->calculateSaldo($importe);
    }
    public function calculateSaldo($importe)
    {
      self::$mi_saldo = self::$mi_saldo + $importe;
      return self::$mi_saldo;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getImporte()
    {
        return $this->importe;
    }

    public function getSaldo()
    {
      return $this->saldo;
  }
}



