<?php


class arqueoCaja{

private $id_arqueo_caja;
private $idKermesse;
private $fecha_arqueo;
private $granTotal;
private $usuario_creacion;
private $fecha_creacion;
private $usuario_modificacion;
private $fecha_modificacion;
private $usuario_eliminacion;
private $fecha_eliminacion;
private $estado;


public function __GET($k){return $this ->$k;}
public function __SET($k,$v){return $this->$k=$v;}
}