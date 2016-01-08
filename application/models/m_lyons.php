<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Lyons extends CI_Model{
  function __construct(){
    parent::__construct();
  }
//Validar usuario
  /*public function validarUsuario($user,$pass){
        $this->db->where('email',$user);    //    La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
        $this->db->where('password',$pass);
        $query=$this->db->get('colono');
        return $query->result_array();
  }*/
  public function validarUsuario($cuenta,$clave){
    $this->db->where('email',$cuenta);
    $this->db->where('password',$clave);
    $query=$this->db->get('colono');
    return $query->result_array();
   }
  /*public function validarUsuarioAdmon($user,$pass){
        $this->db->where('email',$user);    //    La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
        $this->db->where('password',$pass);
        $query=$this->db->get('admon');
        return $query->result_array();
  }*/

//obtención de datos de la base de datos
  public function getUProducto()
   {
    $this->db->order_by('clave','desc');
    $this->db->limit(1);
    $query=$this->db->get('articulos');
    return $query->result_array();
   }
/*$this->db->select('*');
$this->db->from('blogs');
$this->db->join('comentarios', 'comentarios.id = blogs.id');

$query = $this->db->get();*/
  public function get_productos(){
     return $this->db->select('articulos.clave as arclave, articulos.descripcion as ardescripcion,
      tbmedidas.descripcion as medescripcion,articulos.costo as arcosto,articulos.maximo as armaximo,
      articulos.minimo as arminimo,articulos.clavecor as arclavecor,articulos.tentrega as artentrega')
                ->from('articulos')
                ->join('tbmedidas','articulos.idmedida=tbmedidas.clave','left')
                ->where('articulos.estatus',1)
                ->get()
                ->result_array();
  }
  /*
  public function getUProveedor()
   {
    $this->db->order_by('clave','desc');
    $this->db->limit(1);
    $query=$this->db->get('articulos');
    return $query->result_array();
   }
    public function get_proveedores(){
      return $this->db->from('proveedores')
                  ->get()
                  ->result_array();
    }*/
  public function getUAlmacen()
   {
    $this->db->order_by('clave','desc');
    $this->db->limit(1);
    $query=$this->db->get('tbalmacen');
    return $query->result_array();
   }

  public function get_almacen(){
    return $this->db->from('tbalmacen')
                ->where('estatus',1)
                ->get()
                ->result_array();
  }

  public function getUTalla()
   {
    $this->db->order_by('clave','desc');
    $this->db->limit(1);
    $query=$this->db->get('tallas');
    return $query->result_array();
   }

  public function get_tallas(){
    return $this->db->from('tallas')
                ->where('estatus',1)
                ->get()
                ->result_array();
  }
  public function getUumedidas()
   {
    $this->db->order_by('clave','desc');
    $this->db->limit(1);
    $query=$this->db->get('tbmedidas');
    return $query->result_array();
   }

  public function get_umedidas(){
    return $this->db->from('tbmedidas')
                ->where('estatus',1)
                ->get()
                ->result_array();
  }

//Altas
  public function altaProducto($clave,$descripcion,$ucosto,$umedidas,$fecha,
    $tallas,$minimo,$maximo,$tentrega,$sku1,$sku2){
      $this->db->set('clave',$clave)
            ->set('descripcion',$descripcion)
            ->set('costo',$ucosto)
            ->set('idmedida',$umedidas)
            ->set('clavecor',$tallas)
            ->set('fecha',$fecha)
            ->set('unicode',prueba)//unicode pendiente
            ->set('minimo',$minimo)
            ->set('maximo',$maximo)
            ->set('sku1',$sku1)
            ->set('sku2',$sku2)
            ->set('usuario',prueba)//pendiente
            ->set('tentrega',$tentrega)
            ->set('estatus',1)
            ->insert('articulos');
  }

  public function altaProveedor(){

  }

  public function altaAlmacen($clave,$descripcion,$fecha){
    $this->db->set('clave',$clave)
            ->set('descripcion',$descripcion)
            ->set('fecha',$fecha)
            ->set('estatus',1)
            ->insert('tbalmacen');
  }

  public function altaTalla($clave,$corrida,$letra,$t1,$t2,$t3,$t4,$t5,$t6,
      $t7,$t8,$t9,$t10,$t11,$t12,$t13,$t14,$t15,$descripcion){
    $this->db->set('clave',$clave)
            ->set('corrida',$corrida)
            ->set('letra',$letra)
            ->set('cor1',$t1)
            ->set('cor2',$t2)
            ->set('cor3',$t3)
            ->set('cor4',$t4)
            ->set('cor5',$t5)
            ->set('cor6',$t6)
            ->set('cor7',$t7)
            ->set('cor8',$t8)
            ->set('cor9',$t9)
            ->set('cor10',$t10)
            ->set('cor11',$t11)
            ->set('cor12',$t12)
            ->set('cor13',$t13)
            ->set('cor14',$t14)
            ->set('cor15',$t15)
            ->set('descripcion',$descripcion)
            ->set('estatus',1)
            ->insert('tallas');

  }

  public function altaUmedida($clave,$descripcion,$factor){
    $this->db->set('clave',$clave)
            ->set('descripcion',$descripcion)
            ->set('factor_tbmedida',$factor)
            ->set('estatus',1)
            ->insert('tbmedidas');
  }


//Desactivar campos
  public function desactivaProducto($id){
    $this->db->set('estatus',0)
             ->where('clave',$id)
             ->update('articulos');
  }

  public function desactivaProveedor(){

  }

  public function desactivaAlmacen($id){
    $this->db->set('estatus',0)
             ->where('clave',$id)
             ->update('tbalmacen');

  }

  public function desactivaTallas($id){
    $this->db->set('estatus',0)
             ->where('clave',$id)
             ->update('tallas');

  }

  public function desactivaUmedida($id){
    $this->db->set('estatus',0)
             ->where('clave',$id)
             ->update('tbmedidas');

  }


}
