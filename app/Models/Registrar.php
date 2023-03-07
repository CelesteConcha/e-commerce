<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;


class Registrar extends Model 
{
    Protected $table  = 'personas';
    protected $primarykey='id';
    protected $returnType='array';
    protected $allowedFields=['nombre', 'dirección', 'correo'];


    public function guardar_persona($param){
        $query=$this->db->query("INSERT INTO personas(nombre,direccion,correo)
        values('",$param['nombre']."','".$param['direccion']."','".$param['correo'],"'");
        return $query->getResult();
    }
    }
