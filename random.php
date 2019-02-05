<?php

require_once( 'include/main.inc.php' );

require_once( 'include/funciones.inc.php' );
require_once( 'include/clases.inc.php' );

$seccio = 'portada';

$centro = RAN_MODULES.'/'.$seccio.'.php';
include RAN_MODULES.'/header.php';
include $centro;

if (isset($_POST['equipo']) && $_POST['equipo'] == "1")
{
    $database = new Db(DB_HOST, DB_NAME, DB_USER, DB_PASS);
    
    $core= ($_POST['core'] == "on") ? '1' : '' ;
    $soldiers=($_POST['soldiers'] == "on") ? '2' : '' ;
    $smoke=($_POST['smoke'] == "on") ? '3' : '' ;
    $human=($_POST['human'] == "on") ? '4' : '' ;
    $legendary=($_POST['legendary'] == "on") ? '5' : '' ;
    
    
    $where = (strlen($core) > 0) ? $core.',' : '';
    $where .= (strlen($soldiers) > 0) ? $soldiers.',' : '';
    $where .= (strlen($smoke) > 0) ? $smoke.',' : '';
    $where .= (strlen($human) > 0) ? $human.',' : '';
    $where .= (strlen($legendary) > 0) ? $legendary.',' : '';
    
    // Evitar el envio vacio
    $where = (strlen($where) < 1) ? '1' : $where;
    
    $where = 'where expansion in ('.rtrim($where,',').') ';
    
    $query = "SELECT id,nombre, iniciativa,imagen FROM ARISTOS ".$where;
    $results = $database->query( $query );
    foreach( $results as $row )
    {
        $aristo = new Aristo();
        $aristo->CreateArray($row);
        $AristosTotales[]=$aristo;
    
    }
    
    $numAristos = count($AristosTotales);
    $zlavin=$_POST['zlavin'];
    $numJugadores=$_POST['jugadores'];
    $petiso=$_POST['petiso'];
    $error='';
    
    if ($zlavin == "on" && $petiso == "on" && $numAristos < $numJugadores*4  )
    {
        $error= "No se puede aplicar el Mod Zlavin junto con el Mod Petiso. Insuficiente numero de aristos";
        $petiso ="off";
        if ($zlavin == "on" && $numAristos <= $numJugadores*2)
        {
            $zlavin = "off";
        }
    }
    elseif ($zlavin == "on" && $numAristos <= $numJugadores*2)
    {
        $error= "No se puede aplicar el Mod Zlavin. Insuficiente número de aristos";
        $zlavin = "off";
    }
    elseif ($petiso == "on" && $numAristos <= $numJugadores*2){
        $error= "No se puede aplicar el Mod Petiso. Insuficiente número de aristos";
        $petiso = "off";
    }
    
    if ($petiso == "on") 
    { 
        $numJugadores= $numJugadores*2; 
    }
        
    $rand = range(0,$numAristos-1); 
    
    if ($zlavin == "on")
    {
        
        shuffle($rand);
        //petiso
        /*if ( $petiso == "on" && $numAristos < $numJugadores )
        {
            $listaEquipo1 = array_slice(array_random($rand,$numJugadores),0,$numJugadores);
            shuffle($rand);
            $listaEquipo2 = array_slice(array_random($rand,$numJugadores),0,$numJugadores); 
        }
        else
        {*/
            //zlavin
            
            $listaEquipo1= array_slice($rand, 0, $numJugadores);
            $listaEquipo2= array_slice($rand, $numJugadores, $numJugadores);
        //}
    }else{
        shuffle($rand);
        $listaEquipo1 = array_slice(array_random($rand,$numJugadores),0,$numJugadores);
        shuffle($rand);
        $listaEquipo2 = array_slice(array_random($rand,$numJugadores),0,$numJugadores);
    }
    
    //$error= "z ".$zlavin." - p ".$petiso." - Ar ".$numAristos." - NJ ".$numJugadores;
    include RAN_MODULES.'/equipo.php';
    
    $database->CloseConnection;

}




include RAN_MODULES.'/footer.php';
?>