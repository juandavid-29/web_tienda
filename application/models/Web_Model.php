<?php
class Web_Model extends CI_Model
{
    public function addweb_tienda($web_tienda)
    {
        $this->db->insert("registro",$web_tienda);
    
    }

}

    //$web_tienda = array( 
        //'nombre' => 'juan',
        //'apellido' => 'montes',
        ///'fecha_de_nacimiento' => '26 julio 1991',
        ///'direccion' => 'calle 49 # 14a-87',
        //'email' => 'juanda.tk12@hotmail.com',
        //'ciudad' => 'medellin',
        //'departamento' => 'Antioquia',
        //'nombre_usuario' => 'juan',
        //'contraseña' => 'juanda.tk12',);

        //$this->db->insert("registro", $web_tienda);
        //$sql = "INSERT INTO resgistro(nombre,apellido;fecha_de_nacimiento,direccion,email,ciudad,departamento,nombre_usuario,contraseña)VALUES ('{$web_tienda['nombre']}','{$web_tienda['apellido']}')";
        //$this->db->query($sql);


    //public function updateweb_tienda()
    //{ $Web_Model = array(
       //     'nombre' => 'david',
         //   'apellido' => 'tobon',
           // 'fecha_de_nacimiento' => '26 julio 1991',
            //'direccion' => 'calle 49 # 14a-87',
            //'email' => 'juanda.tk12@hotmail.com',
            //'ciudad' => 'cali',
            //'departamento' => 'valle del cauca',
            //'nombre_usuario' => 'juanda',
            //'contraseña' => 'juanda.tk12',
        //);
        //$this->db->where("id", 19);
        //$this->db->update("registro", $Web_Model);
    //}

    //public function listweb_tiendas()
   // {
        //$web_tiendas = $this->db->query("SELECT * FROM registro")->result();
        //return $web_tiendas;
        //this->db->select('*');
        //this->db->from('registro');
        //$web_tiendas = $this->db->get();
        //if($web_tiendas->num_rows()>0){
        // return $web_tiendas->result();
        //}
        //else{return null;}
    //}
    //public function deleteweb_tienda()
    //{
        //$this->db->where('id',19);
        //$this->db->delete('registro');
      //  $sql = "DELETE FROM registro WHERE id=17";
       // $this->db->query($sql);
    //}

