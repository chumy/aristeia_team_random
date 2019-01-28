<?php

class Aristo {

   var $id;
   var $nombre;
   var $iniciativa;
   var $imagen;
   

   function CreateAristo($id,$nombre, $iniciativa=5, $imagen=null)
   {
       $this->id = $id;
       $this->nombre = $nombre;
       $this->iniciativa = $iniciativa;
       $this->imagen = $imagen;
   }
   
   function CreateArray($row = array())
   {
       $this->id = $row['id'];
       $this->nombre = $row['nombre'];
       $this->iniciativa = $row['iniciativa'];
       $this->imagen = $row['imagen'];
   }


   function setNombre($nombre)
   {
       $this->nombre = $nombre;
   }
   
   function getNombre()
   {
       return $this->nombre;
   }

   function getImagen()
   {
       return $this->imagen;
   }

} // fin de la clase Aristo

?>
