
<form method="POST" action="random.php" id="random">
	<div id="expansiones" class="divsmedio border_blanco">
		<h2 class="textoPortada">Expansiones</h2>    
		<label class="container">Core
			<input type="checkbox" name="core" <?=($_POST['core'] == "on") ? 'checked' : '';?> >
			<span class="checkmark"></span>
		</label>
		<label class="container">Soldiers Of Fortune
			<input type="checkbox" name="soldiers" <?=($_POST['soldiers'] == "on") ? 'checked' : '';?> >
			<span class="checkmark"></span>
		</label>
		<label class="container">Smoke &amp; Mirrors
			<input type="checkbox" name="smoke" <?=($_POST['smoke'] == "on") ? 'checked' : '';?> >
			<span class="checkmark"></span>
		</label>
		<label class="container">Human Fate
			<input type="checkbox" name="human" <?=($_POST['human'] == "on") ? 'checked' : '';?> >
			<span class="checkmark"></span>
		</label>
		<label class="container">Legendary Bahadurs
			<input type="checkbox" name="legendary" <?=($_POST['legendary'] == "on") ? 'checked' : '';?> >
			<span class="checkmark"></span>
		</label>
		<label class="container">Chemical Brothers
			<input type="checkbox" name="chemical" <?=($_POST['chemical'] == "on") ? 'checked' : '';?> >
			<span class="checkmark"></span>
		</label>
		
	</div>
	<div id="mods" class="divsmedio border_blanco" >	
		<h2 class="textoPortada">Mods</h2>    
    <input type="hidden" name="equipo" value="1">
    <label class="container">Numero de aristos aleatorios por jugador<select name="jugadores">
		  <option value="4" selected="">Todos</option>
		  <option value="3">3</option>
		  <option value="2">2</option>
		  <option value="1">1</option>
		</select></label><br>
		<label class="container">Habilitar Zlavin
			<input type="checkbox" name="zlavin"  <?=($_POST['zlavin'] == "on") ? 'checked' : '';?> >
			<span class="checkmark"></span>
		</label>
		<label class="container">Habilitar Petiso
			<input type="checkbox" name="petiso" <?=($_POST['petiso'] == "on") ? 'checked' : '';?> >
			<span class="checkmark"></span>
		</label>
	</div>
	<div id="submitdiv" class="divsfull" >
		<div  style="margin:auto">
				<button class="w3-button w3-white w3-border w3-border-white w3-round-large">Enviar</button>
		</div>
	</div>
</form>

