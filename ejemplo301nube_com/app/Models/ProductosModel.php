<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ProductosModel extends Model
{
protected $table="productos";
protected $primarykey="id";
protected $allowedFields = ["id"
, "nombre"
, "precioventa"
, "sucursal"
, "fechacaducidad"];

    // public function LaConsulta()
    // {
       // $data = $this->db->query("SELECT name, email FROM USERS");
       // return $data;
    // }

    // public function LaConsulta2()
    // {
      // $data = $this->db->query("SELECT name, email FROM USERS ORDER BY name ASC");
      // return $data;
    // }

    // public function LaConsulta3()
    // {
      // $data = $this->db->query("SELECT name, email FROM USERS ORDER BY name DESC");
      // return $data;
    // }
}

?>