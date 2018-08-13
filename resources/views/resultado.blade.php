<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>INCIDENCIAS</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body>
	
	<h1>RESULTADOS</h1>



<form action="/inicio2" method="post">

{{ @csrf_field() }}

    <div>
        <label for="name">Nombre de la incidencia:</label>
        <input type="text" id="name" class="estiloinput" />
    </div>
    <div>
        <label for="mail">Tipo de incidencia:</label>
        <input type="email" id="mail" />
    </div>
    <div>
        <label for="msg">Detalle de la incidencia:</label>
        <textarea id="msg" class="estilotextarea"></textarea>
    </div>

    <div class="button">
        <button type="submit">Enviar incidencia</button>
    </div>

</form>


	</body>
	</html>