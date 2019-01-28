<div id="emparejamiento" class="divsfull border_blanco" >

	<h2 class="textoPortada">Emparejamiento</h2>
	<div id="equipo_verde" class="divsmedio">
	<h3 class="verde">Equipo Verde</h3>
		
	<?
    for ($i=0; $i<$numJugadores; $i++)
    {
        print '<div class="div_team">';
        print '<img class="img_team" src="'.WIMAGES.'/'.$AristosTotales[$listaEquipo1[$i]]->getImagen() .'">';
        if ($petiso == "on") {
            $i++;
            print '<img class="img_team2" src="'.WIMAGES.'/'.$AristosTotales[$listaEquipo1[$i]]->getImagen().'">';
        }
        print '</div>';
    }
	?>
	</div>

    <div id="equipo_naranja" class="divsmedio">
	<h3 class="naranja">Equipo Naranja</h3>
    <?
    for ($i=0; $i<$numJugadores; $i++)
    {
        print '<div class="div_team">';
        print '<img class="img_team" src="'.WIMAGES.'/'.$AristosTotales[$listaEquipo2[$i]]->getImagen().'">';
        if ($petiso == "on") {
            $i++;
            print '<img class="img_team2" src="'.WIMAGES.'/'.$AristosTotales[$listaEquipo2[$i]]->getImagen().'">';
        }
        print '</div>';
    }
    ?>
    </div>
    <?
	    if (strlen($error) > 1) 
	    { 
	        print '<div id="error" class="divsfull" >'.$error.'</div>';
	    }
	 ?>
</div> <!-- emparejamiento -->
